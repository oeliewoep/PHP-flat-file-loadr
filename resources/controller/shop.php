<?php
// stylesheet
$this->add('css','product.php');
$this->set('theme','bleu');

if("$pointer/$controller"=='main/shop')
{
    include('shop_data.php');
    $product = $this->new_pointer('product','_virtual_')->set_view('product',$table);
    $_GET['product_id'] = $this->get('product');
}

if("$pointer/$controller"=='overlay/shop')
{
    // validate input, universal
    $page = 'details';
    if(in_array($_GET['shop'],array('basket')))
    $page = $_GET['shop'];
    
    // fix wrong url
    if($_GET['shop']=='checkout') $page = 'basket';
    $_GET['shop'] = $page;
    
    // access pointers from controller is a little difficult
    $overlay = &$this->p['overlay'];
    $overlay->set_file($page.'.php');
}

