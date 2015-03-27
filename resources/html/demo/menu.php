<?php

$htmlfile = dirname(__FILE__).'/html.php';
if(!is_file($htmlfile))
$htmlfile = dirname(__FILE__).'/../../htmlloc/'.$lang.'/demo/html.php';

if(is_file($htmlfile))
{
    $htmlcontent = file_get_html($htmlfile);
    // print_r($htmlcontent);
    $i = 0;
    foreach($htmlcontent->find('h3') as $element){
        $menu[$i]['url'] = '?main='.$folder.'#'.$i;
        $menu[$i][$lang] = $element->plaintext;
        $i++;
    }
}
