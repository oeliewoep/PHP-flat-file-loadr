<?php
$city="Voeren";
$country="BE"; //Two digit country code
$url="http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&units=metric&cnt=7&lang=en";
$json=file_get_contents($url);

$opts = array('http'=>array('header' => 'Connection: close'));
$context = stream_context_create($opts);
// $result = file_get_contents($url, false, $context);

$context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
// $result = file_get_contents($url,false,$context);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $result = curl_exec($ch);



// !function inside method!
// => only one time exec
function loadFile($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

$result = loadFile($url);


$data=json_decode($json,true);
//Get current Temperature in Celsius
echo 'Temperatuur:'.$data['main']['temp']."<br>";
//Get weather condition
echo 'Algemeen:'.$data['weather'][0]['main']."<br>";
//Get cloud percentage
echo 'Wolken:'.$data['clouds']['all']."<br>";
//Get wind speed
echo 'Wind:'.$data['wind']['speed']."<br>";
