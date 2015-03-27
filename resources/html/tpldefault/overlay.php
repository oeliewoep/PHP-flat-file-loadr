<section>
<div id="overlay">
<div id="overlaybg" class="translucent"></div>
<div id="overlaywrapper">
    
<div class="imghover" style="position: fixed;top:0;right: 0;height: 30px;z-index: 999;">
     <a href="?<?=$html->uri('overlay='); ?>" >
    <img src="<?=$shared;?>img/close.png" alt="close" class="tover">
    </a>
</div>

<div id="overlaychrome">
    <div id="overlaycontent">
        <?php $overlay->load(); ?>
    </div>
</div>

</div>
</div>
</section>