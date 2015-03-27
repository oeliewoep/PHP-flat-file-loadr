<?php
// theme switcher
switch(true)
{
    case ($this->get('theme')=='bleu'):
        $this->add('css','theme_bleu.php');
    break;
    default:
        $this->add('css','theme_green.php');
}


// let's gather all menu files to one table
$lang = $this->get('lang');
$stack = array();
$folder = 'menu';
$marray = array();
do {
    // search file menu.php
    //$file = "resources/html/$folder/menu.php";
    //if(!is_file($file)){$file = "resources/htmlloc/$lang/$folder/menu.php";}
    // absolute path = faster
    $file = dirname(__FILE__)."/../html/$folder/menu.php";
    if(!is_file($file)){$file = dirname(__FILE__)."/../htmlloc/$lang/$folder/menu.php";}
    
    // added check for double entries
    if(is_file($file)&&!isset($marray[$folder])){
        // initiate $menu
        $menu = array();
        include($file);        
        foreach($menu as $mkey=>$mvalue){
            // parse menu parameters
            if(!isset($mvalue['condition'])){
                $mvalue['condition'] = true;
            }
            if(isset($mvalue[$lang])&&$mvalue['condition'])
            {
				$class = '';
                if(isset($mvalue['class'])){
                    $class = $mvalue['class'];
                }
				$icon = '';
                if(isset($mvalue['icon'])){
                    $icon = $mvalue['icon'];
                }
				$dropdown = true;
                if(isset($mvalue['dropdown'])){
                    $dropdown = $mvalue['dropdown'];
                }
                // id, parent_id, title, link, position => item, parrent_id, text, url, class
                $marray[$folder][] = array('parrent_id'=>$folder,
                                  'id'=>$mkey,
                                  'link'=>$mvalue['url'],
                                  'title'=>$mvalue[$lang],
                                  'position'=>$class);
				if($dropdown)
                $stack[] = $mkey;
            }
        }
    }
} while(list($key,$folder) = each($stack));
/*
// legacy: reform array
$items = array();
foreach($marray as  $item){
    $items[$item['parrent_id']][] = $item;
}    
*/

$this->set('marray',$marray);