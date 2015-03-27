<?php
$pagetitle = $this->get('pagetitle');
$sitetitle = 'Hariot Gaetan - IT - Computer - Laptop - Netwerk - Kaartjes - Flyers - Websites';
$description = 'Bestel hier uw website, kaartjes, flyers. Ik herstel ook uw computer of internet, en geef ook gratis koopadvies.';
$image = 'http://www.oeliewoep.be/'.$shared.'img/Man-Shaking-Hands-01_full.png';
$tags = 'IT,Computer,Laptop,Netwerk,Websites,Kaartjes,Flyers';
?>
<!-- Browser parameters//-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="language" content="NL">
  <!-- Standaard //-->
  <title><?=$pagetitle;?></title>
  <meta name="description" content="<?=$description?>">
  <meta name="keywords" content="<?=$tags?>">
  <!-- Open Graph data -->
  <meta property="og:type" content="Website">
  <meta property="og:url" content="http://www.oeliewoep.be//">
  <meta property="og:title" content="<?=$sitetitle?>">
  <meta property="og:description" content="<?=$description?>">
  <meta property="og:image" content="<?=$image?>">
  <!-- twitter //-->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:url" content="@oeliewoep">
  <meta name="twitter:title" content="<?=$sitetitle?>">
  <meta name="twitter:description" content="<?=$description?>">
  <meta name="twitter:image" content="<?=$image?>">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="<?=$sitetitle?>">
  <meta itemprop="description" content="<?=$description?>">
  <meta itemprop="image" content="<?=$image?>">

  <meta name="google-site-verification" content="...">

  <link rel="stylesheet" type="text/css" href="<?=$shared?>css/normalize.css">
  <style type="text/css">
      <?php
      foreach($this->get('css') as $file){
          echo "\r\n\r\n\r\n/*\r\n########################################\r\n";
          echo "+++++   $file   +++++   \r\n*/\r\n";
          if(is_file($file)) include($file);
      }        
      echo "\r\n";
      echo "\r\n";
      ?>
  </style>
<?php
foreach($this->get('js') as $file){
if(is_file($file)) echo "<script type=\"text/javascript\" src=\"$file\"></script>\r\n";
}        
?>