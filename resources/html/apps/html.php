<!--
<h2><img src="<?=$shared;?>img/utils.gif" alt="Utilities" height="30"> Utilities</h2>
//-->

<div class="imghover icon left">
<?php
$hmenu = $pmenu->load(null,'apps');
echo implode('</a></div>'."\r\n\r\n".'<div class="imghover icon left">',$hmenu);
?>
</a></div>


<div class="spacer"></div>
<br>
<?php
$apps->load();
