<?php
// auto load on special events eg 

$month = idate('m',time());
$day = idate('d',time());

if(isset($_GET['date']))
{
    list($month,$day) = array_map('intval', explode('-',$_GET['date']));
}

$xmas = ($month == 12 and ($day>=20 and $day<=27));
$newyear = (($month == 12 and $day>=28) or ($month == 1 and $day<=5));


if($xmas)
{
    $this->add('css','viewer.php');
    $this->set('banner_title','Merry Christmas!');
    $this->set('banner_img',$shared.'albums/Merry_christmas/geboorte-jezus-christus.jpg');
}

if($newyear)
{
    $this->add('css','viewer.php');
    $this->set('banner_title','Happy New year 2015!');
    $this->set('banner_img',$shared.'albums/Happy_new_year/new-year-2015-images.jpg');
}
