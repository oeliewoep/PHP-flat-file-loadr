<?php

$albums = array_diff(scandir($this->get('albumroot')), array('..', '.'));
foreach($albums as $album)
{
    if(is_dir($this->get('albumroot').$album)){
        $menu[$album]['url'] = 'overlay=viewer&album='.$album;
        $menu[$album][$lang] = '<span><img src="resources/img/Mes_images.png" alt="'.$album.'"></span>'.$album;

    }
}