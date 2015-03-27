<div class="hmargin">
    
<header>
<div id="header">    
    <div>    
        <h1>mooi<br>Voeren</h1> 
        <img src="<?=$shared;?>img/DSCF5595.jpg" alt="Voeren">
        <div class="spacer"></div>
    </div>
    <h2>Comfortable de voerstreek ontdekken</h2>
</div>    
</header>

<div class="spacer"></div>

<main style="float: left;width:70%;">
    <article><div class="wf">    
        <h3>Het vakantiehuis</h3><hr>
        <div class="left">
            <ul>
                <li>Nieuw ingericht</li>  
                <li>Wandelafstand van het centrum</li>
                <li>Zeer rustige omgeving</li>
                <li>Zeer mooi uitzicht over Voeren</li>
            </ul>
        </div>
        <div class="spacer"></div>
    </div></article>
    
    <article><div class="wf">   
        <h3>Prijzen</h3><hr>
        <div class="left">
            <?php
            $prijzen = array();
            
            $prijzen[0][] = 'Per dag: ';
            $prijzen[0][] = 'Week';
            $prijzen[0][] = 'Weekend';
            
            $prijzen[1][] = 'Kind';
            $prijzen[1][] = '25';
            $prijzen[1][] = '50';
            
            $prijzen[2][] = 'Volwassen';
            $prijzen[2][] = '50';
            $prijzen[2][] = '75';
            
            
            echo $html->table($prijzen,false);
            ?>
        </div>
        <div class="spacer"></div>
    </div></article>
            
    <article><div class="wf">  
        <h3>Locatie</h3><hr>
        <div class="left">
            <?php
            $adres = array();
            
            $adres[] = 'Kerkhofstraat';
            $adres[] = '3790 Voeren';
            
            echo $html->li($adres);
            ?>
        </div>
        <div class="spacer"></div>
    </div></article>
    
    
    <article><div class="wf">  
        <h3>Voeren en omgeving</h3><hr>
        <div class="left">
            <?php
            $adres = array();
            
            $adres[] = 'Voeren: Mostar, Slavisch restaurant';
            $adres[] = 'Teuven: Greenvalley, boerengolf';
            
            $adres[] = 'Valkenburg, Spa-centrum';
            $adres[] = 'Gulpen, Tropisch zwembad';
            $adres[] = 'Ijsden, stadzwembad';
            $adres[] = 'Noorbeek, fiets';
    
            echo $html->li($adres);
            ?>
        </div>
        <div class="spacer"></div>
    </div></article>
</main>


<aside style="float: right;width:20%;">
<div class="responsive">
    <div class="grid"><div class="block">
        <div class="imghover icon">
            <a href="?<?=$html->uri('overlay=viewer&album=voerstreek');?>">
            <span><img src="<?=$shared?>img/Mes_images.png"  alt="Mes_images.png"></span>Foto's woning</a>
        </div>
    </div></div>
    
    <div class="grid"><div class="block">
        <div class="imghover icon">
            <a href="?<?=$html->uri('overlay=viewer&album=voerstreek');?>">
            <span><img src="<?=$shared?>img/Mes_images.png"  alt="Mes_images.png"></span>Foto's omgeving</a>
        </div>
    </div></div>
    
    <div class="grid"><div class="block">
        <div class="imghover icon">
            <a href="?<?=$html->uri('overlay=apps&apps=map');?>">
            <span><img src="<?=$shared?>img/04_maps.png"  alt="kaatje"></span>Kaartje</a>
        </div>
    </div></div>
    
    <div class="grid"><div class="block">
            <div class="imghover icon">
                <a href="?<?=$html->uri('overlay=apps&apps=calendar'); ?>">
                <span><img src="<?=$shared;?>img/02_calendar.png" alt="checkout"></span>Boeking</a>
            </div>
    </div></div>
    
    <div class="spacer"></div>
</div>


<div class="banner">
    <div class="imghover"><?php
        $title = '<img src="'.$shared.'img/contacteer_mij_button.png" alt="contacteer mij" class="default">';
        $title .= '<img src="'.$shared.'img/contacteer_mij_button_hover.png" alt="contacteer mij" class="hover">';
        echo $html->a('overlay=mail',$title);
    ?></div>
    <div class="spacer"></div>
</div>

</aside>

<div class="spacer"></div>
