<?php

// Challenge: Improve this 'thing' ;) up to you



$lang = $this->get('lang');



// read menu-data-file

$menu = array();

if(isset($params))

{

    $file = "resources/html/$params/menu.php";

    if(!is_file($file))

        $file = "resources/htmlloc/$lang/$params/menu.php";

    if(is_file($file))

        include($file);    

}

else

    include('menu.php');



// parser

$html_a = array();

foreach($menu as $menu_item)

{

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

        if($loader->pg[$key]==$value) $class .= " active";

        $class = 'class="'.$class.'"';

       

        // put local anchor or merge URL-parameters

        if($menu_item['url'][0]=='#')

            $url = $menu_item['url'];

        else

            $url = "?". $html->uri($menu_item['url']);        



        $text = $menu_item[$lang];

        $html_a[] = "<a $class href=\"".$url."\">$text</a>";

    }

// echo $key.$value;  

}

// var_dump($loader->pg);

// echo implode("",$html_a);

$params = implode("",$html_a);

// return $params