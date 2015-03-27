<?php
// new pointer 'account'
if($_SESSION['rights'])
    $this->new_pointer('account','account','file'); //default file=folder=account
else
    $this->new_pointer('account','account')->set_file('login.php');
