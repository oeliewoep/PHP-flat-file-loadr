<!--
This form breaks at 600px and goes from a left-label form to a top-label form. At above 1200px, the labels align right.
//-->
<form method="post" action="?<?=$html->uri('overlay=mail&action=send'); ?>">
<p>Dringend info nodig?<br> Bel: 0472 83 26 67</p>
<div class="spacer"></div>

<div><input type="hidden" name="pagina" value="<?php echo $path; ?>"></div>
<div>
  <label for="fullname">Uw naam:</label>
  <div>
    <input tabindex="1" type="text" name="fullname" value=""  id="fullname" autofocus>
  </div>
</div>

<div>
  <label for="email">Uw email-adres:</label>
  <div>
    <input tabindex="2" type="email" name="email" value="" id="email"> 
 </div>
</div>

<div>
  <label for="telnr">Uw telefoonnr:</label>
  <div>
    <input tabindex="3" type="tel" name="telnr" value="" id="telnr"> 
 </div>
</div>

<div>
  <label for="message">Uw vraag:</label>
  <div>
    <textarea name="message" id="message" tabindex="4" rows="6" cols="50" ></textarea>
  </div>
</div>

<div>
    <div>
    <br>
    <input type="submit" name="submit" value="Bericht versturen">
    <br>
    </div>
</div>

<div class="spacer"></div>
</form>