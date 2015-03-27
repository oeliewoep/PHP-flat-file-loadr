<div class="wf product">
    <div class="left img">
        <a href="?<?=$html->uri('overlay=shop&details=1'.$ph['id']);?>"><img alt="product" src="<?=$shared;?>albums/shop/<?=$ph['image']?>"></a>
    </div>
    

    <div class="left resume">
        <h3><?=$ph['title']?></h3>
        <p><?=$ph['description']?></p>
        <ul>
<!--            <li><?=$html->a('overlay=shop&details=1','info');?> </li> -->
            <li><a  href="?<?=$html->uri('overlay=shop&basket=1'); ?>">Koop</a></li>
        </ul>
    </div>
    

    <div class="right price">
        <br><br><span><?=$ph['price']?></span><br><br>
        
    </div>
            

    
    <div class="spacer"></div>
</div>