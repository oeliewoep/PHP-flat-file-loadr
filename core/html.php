<?php
// html helper
class HTML
{
    public $http_get = array();
    public $pg = array();
    public function __construct($http_get){
        $this->http_get = $http_get;
        $this->pg = $http_get;
    }
    // not in use, register controllers on the fly 
    public function new_pointer($pointer,$controller,$register){
        if($register) $this->http_get[$pointer] = $controller;
    }
    // parse string
    public function query2array($query){
        if($query[0]=='?')
        $query = substr($query, 1); ;
        
        //current param
        $params = $this->http_get;
        foreach (explode('&', $query) as $chunk)
        {
            $param = explode("=", $chunk);
            $params[urldecode($param[0])] = urldecode($param[1]);
        }
        return $params;
    }
    // serialize array
    public function query2string($params){
        $chunk = array();
        foreach($params as $key=>$value)
        {
            if($value != '')
            $chunk[] = urlencode($key).'='.urlencode($value);
        }
        return urldecode(implode('&amp;',$chunk));
    }
    // build query
    public function uri($query){
        $params = $this->query2array($query);
        $query = $this->query2string($params);
        return $query;
    }
    // create html anchor
    public function a($query,$text,$atribute=''){
        if($query[0]!="#")
        $query = '?'.$this->uri($query);
        return "<a $atribute href=\"".$query."\">$text</a>";
    }
    
    

    

    // create html list $lp = listParameters eg: 'ol type="1"' or 'class="left"'
    function li($list,$lp='ul',$parameter=''){
        // simple list
        // $html = "<li>".implode("</li>\r\n<li>",$list)."</li>\r\n";
        
        //listType
        $lt = substr($lp,0,2);
        
        // listType not recognized
        if(!in_array($lt,array('ul','ol','dl')))
        $lt = 'ul';
    
    
        $html = array();
        foreach($list as $key=>$value)
        {
            if($lt != 'dl')
            $key = 'li';
            $html[] = "<$key>$value</$key>\r\n";
        }
    
        return "<$lp $parameter>\r\n".implode("\r\n",$html)."</$lt>\r\n";
    }
    // create table
    function table($array,$header=1,$parameter=''){
        $html = array();
        foreach($array as $row)
        {
            $td = "td";
            if($header == 1) $td = "th";
            $html[] = "<$td>".implode("</$td><$td>",$row)."</$td>";
            $header = 0;
        }
        return "<table $parameter><tr>".implode('</tr><tr>',$html).'</tr></table>';
    }

    
    
    
    // legacy - disabled
/*
    function debug($localvars)
    {
        list($pointer,$controller,$path,$shared,$folder,$file,$lang) = $localvars;
        $list = array();

        $sublist = array();
        $sublist[] = ("pointer <i>name</i> = $pointer");
        $sublist[] = ("controller <i>name</i> = $controller");
        $list[] =  '<b>Controller parameter</b>' .$this->li($sublist);

        $sublist = array();
        $sublist[] = htmlspecialchars("path = $path");
        $sublist[] = htmlspecialchars("shared = $shared");
        $list[] =  '<b>Content folders</b>' .$this->li($sublist);

        $sublist = array();
        $sublist[] = htmlspecialchars("lang = $lang");
        $sublist[] = htmlspecialchars("folder = $folder");
        $sublist[] = htmlspecialchars("file = $file");
        $list[] =  '<b>Current file</b>' .$this->li($sublist);

        return $this->li($list);
    }

    // create menu (multiple html anchors)
    function menu($key,$menu,$active="active",$class_default="left")
    {
        $html = array();
        foreach($menu as $menu_item)
        {
            $value = $menu_item[0];
            $text = $menu_item[1];
            
            $class = $class_default;
            if(isset($menu_item[2]))
            $class = $menu_item[2];
            
            if(isset($this->http_get[$key]))
            {
                if($this->http_get[$key]==$value) $class .= " $active";
            }
            if($key=="#")
            $query = "$key$value";
            else
            $query = "$key=$value";
            $html[] = $this->a($query,$text,"class=\"$class\"")."\r\n";
        }
        return $html;
    }

    */
}