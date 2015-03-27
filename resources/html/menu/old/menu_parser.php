<?php

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