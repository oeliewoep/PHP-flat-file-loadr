<?php

array folder0{
'folder1'=>'string';
'folder2'=>'string';
}

array folder1{
'folder1a'=>'string';
'folder1b'=>'string';
}


array folder2{
'folder2a'=>'string';
'folder2b'=>'string';
}


// omzetten naar

array folder0{
'folder1'=> array{
0 => 'string';
1 => array{
'folder1a'=>'string';
'folder1b'=>'string';
}
}

'folder2'=> array{
0 => 'string';
1 => array{
'folder2a'=>'string';
'folder2b'=>'string';
}
}

}


$folder = 'root';

do{
// initiate
$menu = array();
// fill
include("/$folder/menu.php");
// parse $menu to $menu[%folder%] = %string%;
include("menu_parse.php");

// add to stack
$stack[$folder][] = $menu;

}
while( list($folder,$string) = each($stack))


$stack = array($folder=>'');

$stack[$folder][1];

$stack = 