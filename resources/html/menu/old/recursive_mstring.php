<?php

$mstring = '';
foreach($params as $param){
    $mstring .= "<li>".$param[0];
    if(is_array($param[1])){
        $mstring .= $this->load('recursive_mstring.php',$param[1]);
    }
    // var_dump($param[1]);
    $mstring .= "</li>"."\r\n";
    
}
$params = "\r\n"."<ul>\r\n$mstring\r\n</ul>";