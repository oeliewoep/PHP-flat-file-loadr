<?php
// General warning: attention for name conflicts
// intentionally  one scoop for all controllers (and menu system)


// new pointer for main,eg main=shop, persistence_parameter=true
$main = $this->new_pointer('main','demo',true);

// new pointer(overlay)->default(null) if(lang==uknown) default(lang) persistence_Get=true
if($this->get('lang')==null)
$overlay = $this->new_pointer('overlay','lang',true);
else
$overlay = $this->new_pointer('overlay',null,true);

// Theme switcher and menu-controller; warning! $menu used inside 'menu.php'-files
$this->new_pointer('pmenu','menu');

// title [can be altered by other controllers]
$this->set('pagetitle','Demo Website NoMVC Framework - Hariot Gaetan');

// {Special keys} scripts and stylesheets
$this->add('js','base.js');

$this->add('css','base.php');

// $this->add('css','menu.php');
$this->add('css','header-menu-banner.php');
// $this->add('css','content.php');
$this->add('css','content-footer.php');

if(isset($overlay))
$this->add('css','overlay.php');


$this->add('css','form.php');
$this->add('css','imagefx.php');
$this->add('css','media.php');


