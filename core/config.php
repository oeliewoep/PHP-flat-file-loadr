<?php
// shortcut add variables you like to access easy within controller
$res = $this->set('res','resources');
// legacy 
$shared = "$res/";
// Resource-folders
$this->set('controller',"$res/controller/");
$this->set('model',"$res/model/");
$this->set('view',"$res/view/");
// layout files, menu, header, banner..
$this->set('html',"$res/html/");
// static content, but can retrieve from DB too
$this->set('htmlloc',"$res/htmlloc/");
// More PATHs
$this->set('img',"$res/img/");
$this->set('albumroot',"$res/albums/");

/* hacked these paths into the loader
$this->set('css',"$res/css");
$this->set('js',"$res/js");
*/
// configuration of services
// SMTP authentification
$this->set('smtpuser','user');
$this->set('smtppassword','pwd');

// MySQL authentification
$this->set('dbuser','user');
$this->set('dbpassword','pwd');

$this->set('dbuser','root');
$this->set('dbpassword','');

/* // evaluating hidden controllers
$this->new_pointer('action',null,true);
$this->new_pointer('hidden',null,true);
$this->new_pointer('preload',null,true);
$this->new_pointer('process',null,true);
$this->new_pointer('post',null,true);
$this->new_pointer('ajax',null,true);
*/

// core file for url_preparing & other HTML snippets
require_once('core/html.php');

// initate apps-controller
include_once("$res/controller/apps.php");
/*
// External packages
// PWD HASH-generator
include_once("$res/pkg/pwdhash/pwdhash.php");
// DB 

*/
// DOM HELPER
include_once("$res/pkg/simplehtmldom_1_5/simple_html_dom.php");



//  initiate session
$this->new_pointer('session','session');

// set template, request tpl: tpl=ajax
$tpl = $this->get('tpl','html');
//  bootstrap template
$this->new_pointer('tpl','tpldefault')->set_file($tpl.'.php');










