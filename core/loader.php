<?php
/* v0 : simple loader
 * v1 : localizing support
 * v2 : more structured, seperated config file
 * v3 : implementation of MVC
 * v4 : Try to work arround limitation of implementation
 * v5 : Split up class to Loader and Pointer
 * v6 : Get everything working again, get things easier to do (while this becomes more complex)
 * v6+: improved getters and setters
 * v7 : 
 */
class Loader{
    public $vars = array();
    public $p = array(); // array of pointers[object]
    public $pg = array(); // parse to get
    public $html; // helper-object
    ###############  constructor = bootstrapper
    public function __construct($config='config.php'){
        // benchmark
        list($mtime1,$mtime2) = explode(' ',microtime());
        $this->set('mstart',$mtime1+$mtime2);
        // configure config file
        $this->set('config',$config);
        // load config & controllers
        $this->load();
	// plugin-hack
        $this->html = new HTML($this->pg);
        // load output (buffur because you want to push headers)
        ob_start();
        $this->p['tpl']->load();
        ob_end_flush();
    }
    ###############  improved setters, getters, adders, validate..
    public function add($key,$value,$id=null){
        //small tweak for css and js files
        if($key=='css' or $key=='js')
        $value = "resources/$key/$value";
        //??bug $value = $this->get('res')."/$key/$value";

        if($id==null)
        $this->vars[$key][] = $value;
        else
        $this->vars[$key][$id] = $value;
        return $value;
    }
	// if isset(key) store value into globals 
    public function set($key,$value){
        $this->vars[$key] = $value;
        switch(true)
        {
            case isset($_SESSION[$key]):
                $_SESSION[$key] = $value;
            case isset($_GET[$key]):
                $_GET[$key] = $value;
        }
        return $value;
    }
    // get+set
    public function get($key,$default=null){
        switch(true)
        {
            case isset($_GET[$key]):
                $default = $_GET[$key];
                break;            
            case isset($_SESSION[$key]):
                $default = $_SESSION[$key];
                break;
            case isset($this->vars[$key]):
                $default = $this->vars[$key];
                break;            
        }
        return $this->set($key,$default);
    }
    // strict validator function
    public function validate($needle,$stack,$default){
        if(!in_array($needle,$stack)){
            $needle = $default;
        }
        return $needle;
    }
    ############### CREATE NEW POINTER
    public function new_pointer($pointer,$default=null,$pg=null)
    {
        // parse get (primitve routing)
        if(isset($pg))
        {
            // pointer can be changed by url (get-query)
            $controller = $this->get($pointer,$default);
             // value will be returned to url, except if $pg is false
            if($pg!=false){
                $this->pg[$pointer] = $controller;
            }
        }
        else{
            // Pointer cannot be changed by url
            $controller = $default;           
        }
        // create pointer
        if($controller!=null)
        {
            // search file inside current controller-folder
            if($pg==='file')
            {
                // do not add a controller file (already loaded)
                $this->p[$pointer] = new Pointer(null,$this);
                // don't change folder
                $this->p[$pointer]->set_folder($default);
                // but change file inside folder
                $this->p[$pointer]->set_file($controller.'.php');
            }
            // create new controller
            else
            {
                // ad new controller
                $this->p[$pointer] = new Pointer($controller,$this);
                // point to folder[default] done in constructor
                //$this->p[$pointer]->set_folder($controller);
                // set default file[default] done in constructor
                //$this->p[$pointer]->set_file('html.php');
            }
            // improved return = new pointer object (instead of what the name sugest)
            $controller = &$this->p[$pointer];
        }
        return $controller;
    }
    ######### EVALUATE POINTER
    public function is_pointer($pointer){
        return isset($this->p[$pointer]);
    }
    ######### LOAD CONTROLLERS FORALL POINTERS
    private function load(){
        // core configuration, contains: $this->new_pointer('bootstrapper','template2');
        reset($this->p);
        require($this->get('config'));
        while(list($pointer,$object) = each($this->p))
        {
            $controller = $object->get_controller();
            $path = $this->get('controller').$controller.'.php';
            if(is_file($path))include($path);
        }
    }
}

// *child* class
class Pointer{
    // 'parrent' object loader
    private $loader;
    // string controller
    private $controller;
    // string folder
    private $folder;
    // string file
    private $file;
    // string file-type
    private $view = false;
    // array placeholders
    private $ph;

    public function __construct($controller,&$loader){
        // fix reference to loader
        $this->loader = &$loader;
        // fix controller file
        $this->controller = $controller;
        // flex default folder
        $this->set_folder($controller);
        // flex default file
        $this->set_file('html.php');
        return $this;
    }
    // LOADER
    public function load($file=null,$params=null){
	$loader = &$this->loader;
        $pointers = &$this->loader->p;
	// initiate objects in local scoop
        foreach($pointers as $name=>&$pointer){
            $$name = &$pointer;
        }

        $html = &$loader->html;

        // initiate variables
        $shared = $loader->get('res').'/';
        $lang = $this->get('lang');
        
        
        if($file==null)
            $file = $this->file;
        
        if(!$this->view)
        {
            $folder = $this->folder;
            // universal frames
            $path = "resources/html/$folder/$file";
            // localized frames
            if(!is_file($path))
                $path = "resources/htmlloc/$lang/$folder/$file";
            if(is_file($path))
                include($path);
            elseif(!isset($file))  echo 'file not found: '.$path."<br>\r\n";
        }
        else
        {
            // loop placeholder
            foreach($this->ph as $ph){
                include($this->get('view') . $file);
            }
        }
        return $params;
    }
    // NO-MVC methods
    public function set_folder($folder){
        $this->folder = $folder;
        return $this;
    }
    public function set_file($file){
        $this->file = $file;
        return $this;
    }
    public function is_file($file){
        $params = false;
        $lang = $this->get('lang');
        $folder = $this->folder;
        $path = "resources/html/$folder/$file";
        if(!is_file($path))
            $path = "resources/htmlloc/$lang/$folder/$file";
        if(is_file($path))
            $params = true;
        return $params;
    }
    // MVC-methods
    public function set_view($file,$ph){
        // file and placeholder
        $this->view = true;
        $this->file = $file.'.php'; 
        $this->ph = $ph; 
        return $this;
    }
    public function set_model($model){
        $this->model = $model;
        return $this;
    }
    public function get_controller($controller=null){
        if(isset($controller))
            $this->controller = $controller;
        return $this->controller;
    }    
    public function is_pointer($pointer){
        return $this->loader->is_pointer($pointer);
    }
    public function get($key){
        return $this->loader->get($key);
    }
}