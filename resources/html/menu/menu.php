<?php
$menu['demo']['url'] = 'main=demo';
$menu['demo'][$lang] = '<img src="resources/img/house.png" alt="mijn-it" class="tover">';

$menu['faq']['url'] = 'main=faq';
$menu['faq'][$lang] = 'faq';

$menu['react']['url'] = 'main=react';
$menu['react'][$lang] = 'Reageer';


$menu['services']['url'] = 'main=services';
$menu['services']['nl'] = 'help-IT';
$menu['services']['fr'] = 'aide-IT';

$menu['shop']['url'] = 'main=shop';
$menu['shop']['nl'] = 'shop';
$menu['shop']['fr'] = 'boutique';

// unset pointer 'plus',result to default in controller
$menu['plus']['url'] = 'main=plus&plus=';
$menu['plus']['nl'] = '+';
$menu['plus']['fr'] = '+';

$menu['lang']['url'] = 'overlay=lang';
$menu['lang'][$lang] = '<img alt="lang" src="resources/img/lang_flat/'.$lang.'.png" class="tover">';
$menu['lang']['class'] = 'right';

$menu['apps']['url'] = 'overlay=apps';
$menu['apps'][$lang] = '<img alt="apps" src="resources/img/apps_box_1_icon_by_thedookie-d5izdd4.png" class="tover">';
$menu['apps'][$lang] = '<img alt="apps" src="resources/img/MB__Apps.png" class="tover">';
$menu['apps']['class'] = 'right';


if($_SESSION['rights'])
$menu['account']['url'] = 'main=account';
else
$menu['account']['url'] = 'overlay=account';

$menu['account'][$lang] = '<img src="resources/img/gear.png" alt="Account"  class="tover">';
$menu['account']['class'] = 'right';

$menu['logout']['url'] = 'overlay=account&action=logout';
$menu['logout']['url'] = 'hidden=account&action=logout';
$menu['logout']['nl'] = 'afmelden';
$menu['logout']['fr'] = 'deconnecter';
$menu['logout']['condition'] = $_SESSION['rights'];
$menu['logout']['class'] = 'right';