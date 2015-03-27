<?php
$menu['main']['url'] = '?main=account&account=account';
$menu['main'][$lang] = 'Profiel';
$menu['main']['condition'] = $_SESSION['rights'];

$menu['users']['url'] = '?main=account&account=users';
$menu['users'][$lang] = 'Gebruikers';
$menu['users']['condition'] = $_SESSION['rights'];
