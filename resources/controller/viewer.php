<?php
// $this->add('js',$path.'viewer.js');

// schizofreen modus 
if("$pointer/$controller" == 'overlay/viewer'){    
    $this->add('css','vieweroverlay.php');
    $overlay = &$this->p['overlay'];
    $overlay->set_file('overlay.php');
    
    if(!isset($_GET['album']))
        $_GET['album'] = 'designs';
    $this->set('album',$_GET['album']);
}
if("$pointer/$controller" == 'plus/viewer'){
        $this->add('css','viewer.php');
}