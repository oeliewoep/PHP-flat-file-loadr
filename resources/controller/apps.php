<?php
// add css file
$this->add('css','apps.php');

// Function not supported, this is a workaround: create pointer, get url-value, don't return to URL, reset folder, set file to url-value
$apps = $this->new_pointer('apps','calendar',false);
$apps->set_folder('apps');
$apps->set_file($this->get('apps').'.php');
