<div class="hmargin">
    
<div class="wf form">

<form method="post" action="?<?=$html->uri('main=react'); ?>">
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
  <label for="message">Uw bericht:</label>
  <div>
    <textarea name="message" id="message" tabindex="4" rows="6" cols="50" ></textarea>
  </div>
</div>

<div>
    <div>
    <input type="submit" name="submit" value="Bericht versturen">
    </div>
</div>
</form>

</div>

</div>
