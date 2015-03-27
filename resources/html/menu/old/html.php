<?php
// Challenge: make a fast recursive iterarion instead of slow method call-back
// don't change filenames, unless you change code !!!! 

if(!isset($params)){
    // RECURSIVE MENU = SLOOOW (+0.50microsecond!)

    //Set default parameter
    $params = 'menu';

    // recursive_marray
    $params = $this->load('recursive_marray.php',$params);
    
    // recursive_mstring & set return value
    $params = $this->load('recursive_mstring.php',$params);
}
else{
    // NON RECURSIVE MENU = MUCH FASTER
    
    // initiate $marraytemp
    $lang = $this->get('lang');
    $marray = array();
    
    // search file menu.php
    $file = "resources/html/$params/menu.php";
    if(!is_file($file)){
        $file = "resources/htmlloc/$lang/$params/menu.php";
    }
    if(is_file($file)){
        // initiate $menu
        $menu = array();
        // read menu-file
        include($file);
        // parse $menu
        // micro-optimizing
        // while(list($mkey,$menu_item) = each($menu)){
         foreach($menu as $mkey=>$menu_item){
            // initiate $url_html
            $url_html = null;
//          include('menu_parser.php');
//          Code included bellow for performance reasons (+0.03microseconds)
// -------------------------------------------------/
// menu parameters
$condition = true;
if(isset($menu_item['condition']))
    $condition = $menu_item['condition'];

if(isset($menu_item[$lang])&&$condition)
{
    // extract first paramater from url
    $url = explode('=',$menu_item['url']);
    $key = $url[0];$value = $url[1];$url = $key."=".$value;
            
    // add class to anchor
    $class = 'left';
    if(isset($menu_item['class'])) $class = $menu_item['class'];
    if($html->pg[$key]==$value) $class .= " active";
    $class = 'class="'.$class.'"';
   
    // put local anchor or merge URL-parameters
    if($menu_item['url'][0]=='#')
        $url = $menu_item['url'];
    else
        $url = "?". $html->uri($menu_item['url']);        

    $text = $menu_item[$lang];
    $url_html = "<a $class href=\"".$url."\">$text</a>";
}
// -------------------------------------------------/
            if(!empty($url_html)){
                $marray[$mkey] = $url_html;
            }
        }
    }
    $params = '';
    if(!empty($marray))
    $params = "<ul><li>".implode('</li><li>',$marray)."</li></ul>";
    
}