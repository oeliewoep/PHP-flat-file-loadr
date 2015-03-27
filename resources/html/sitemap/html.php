<div class="hmargin">

<div class="wf">
    <h3>Het vakantiehuis</h3><hr>
    <?php echo $pmenu->load(); ?>
    <div class="spacer"></div>
</div>

<div class="wf">
    <h3>menuBuilder</h3><hr>
    <div class="left">
        <?php
        // debug code
        $marray = $this->get('marray');
        array_walk_recursive($marray, function(&$v) { $v = htmlspecialchars($v); });
        echo $html->table($marray,false);
        ?>
    </div>
    <div class="imghover icon right">
        <a href="?<?=$html->uri('overlay=viewer&album=voerstreek');?>"><img src="<?=$shared?>img/Mes_images.png"  alt="Mes_images.png"><br>Foto's</a>
    </div>
    <div class="spacer"></div>
</div>



</div>