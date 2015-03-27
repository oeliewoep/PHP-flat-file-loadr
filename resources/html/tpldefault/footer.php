<div id="footer">
<div class="hmargin">
<div class="vmargin">
    <div class="left">
        <a href="http://www.solutions4media.be/" target="_blank">
            <img src="<?php echo $shared; ?>img/s4m.png" alt="Solutions 4 media BVBA" height="20"></a>
        <a href="?<?=$html->uri('overlay=info');?>"><?php 
        list($mtime1,$mtime2) = explode(' ',microtime());
        echo ($mtime1 + $mtime2 - $this->get('mstart'));?></a>
    </div>
    <div class="right">15/03/2015</div>
    <div id="spacer"></div>
</div>

</div>
</div>