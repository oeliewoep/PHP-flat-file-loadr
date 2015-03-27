<div class="hmargin">

<div class="wf form">
<img src="<?=$shared?>img/keys.gif"
alt="Welcome"
class="right"
style="height: 3em;">
<h2>Aanmelden</h2>
<div class="spacer"><br></div>
<form class="responsive" action="?main=account&amp;action=login" method="post" >
<div>
    <input type="hidden" name="pagina" value="<?php echo $path; ?>">
    <label for="username">Username</label>
    <div>
    <input type="text" name="username" value="" tabindex="1" id="username" autofocus>
    </div>
</div>

<div>
    <label for="password">Password</label>
    <div>
    <input type="text" name="password" value="" tabindex="2" id="password"> 
    </div>
</div>

<div>
    <div>
    <input type="submit" name="submit" value="Submit" tabindex="3" id="submit">
    </div>
</div>

</form>
</div>

</div>