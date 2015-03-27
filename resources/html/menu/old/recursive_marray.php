<?php
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
    foreach($menu as $mkey=>$menu_item){
        // initiate $url_html
        $url_html = null;
        include('menu_parser.php');
        if(!empty($url_html)){
            $marray[$mkey][] = $url_html;
            $marray_temp = $this->load('recursive_marray.php',$mkey);
            if(!empty($marray_temp)){
                $marray[$mkey][] = $marray_temp;
            }
        }
    }
}

// set return value
$params = $marray;
