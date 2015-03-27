<div id="album">
<?php
$album = $this->get('albumroot').$this->get('album').'/';
$html_v = array();
if(is_dir($album))
{
    $images = array();
    $images = array_diff(scandir($album), array('..', '.'));  
    foreach($images as $image)
    {
        if(is_file($album.$image))
        $html_v[] = '<img src="'.$album.$image.'" alt="'.$image.'"><br>';
    }
}
// echo "<h2>".$this->get('album')."</h2>\r\n";
echo implode('',$html_v); ?>
</div>