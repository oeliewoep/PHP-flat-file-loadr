<!DOCTYPE html>
<? //<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> ?>
<html itemscope itemtype="http://schema.org/Article"> 
<head>
<?php $this->load('head.php'); ?>
<style type="text/css"></style>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
function stickIt() {
  var orgElementPos = $('.original').offset();
  orgElementTop = orgElementPos.top;               

  if ($(window).scrollTop() > (orgElementTop)) {
    // scrolled past the original position; now only show the cloned, sticky element.

    // Cloned element should always have same left position and width as original element.     
    orgElement = $('.original');
    coordsOrgElement = orgElement.offset();
    leftOrgElement = coordsOrgElement.left;  
    widthOrgElement = orgElement.css('width');
    $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
    // $('.original').css('visibility','hidden');
  } else {
    // not scrolled past the menu; only show the original menu.
    $('.cloned').fadeOut();
    // $('.original').css('visibility','visible');
  }
}
$( document ).ready(function() {
    // Create a clone of the menu, right next to original.
    $('nav').addClass('original').clone().insertAfter('nav').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','1').css('background-color','#AEFF64').removeClass('original').hide();
    $( window ).scroll(function(){stickIt(); });
    // scrollIntervalID = setInterval(stickIt, 10);
    console.log( "ready!" );
    
    var offset = $(':target').offset();
    var scrollto = offset.top - 50; // fixed_top_bar_height = 50px
    $('html, body').animate({scrollTop:scrollto}, 0);
});


</script>
</head>
<body id="<?=$main->get_controller();?>">
<div id="main">
<section>
    <nav>
        <div class="navbar">
            <div class="hmargin menu">
                <?php echo $pmenu->load(); ?>
                <div class="spacer"></div>
            </div>
        </div>
        <?php $hmenu = $pmenu->load(null,$main->get_controller());if(!empty($hmenu)){ ?>
        <div class="pagemenu">
            <div class="hmargin menu" style="/*border-bottom: 1px solid #0a0084*/">
                <?php echo '<ul><li>'.implode('</li><li>',$hmenu).'</li></ul>'; ?>
                <div class="spacer"></div>
            </div>
        </div><?php } ?>
    </nav>
    <?php // if($main->is_file('header.php'))$main->load('header.php');else $this->load('header.php');  $main->load('banner.php'); ?>      

    <div id="content">
        <?php $main->load(); ?>
        <div class="spacer"></div>
    </div>

    <footer>
    <?php $this->load('footer.php'); ?>
    </footer>
</section>
</div>

    
<h1 id="myHeader" style="text-align: right;">Please enable Javscript</h1>
<div id="mouseDown" style="border: 3px solid #fff;background: #059;opacity: 0.3;display: none;"></div>
<?php if($this->is_pointer('overlay')) $this->load('overlay.php'); ?>
</body>
</html>