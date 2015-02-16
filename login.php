<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<?php

include 'openrps_core/eng/helpers/Layout.php';

$layout = new Layout();

$title = 'Log In to OpenRPS';

$layout->showHeaderLogin($title);

?>


<br>
<br>
<br>
	
<div class="three columns">
	
<form id='customtheme' action='process_login.php' method='post'>

<fieldset>
  <legend>Log In to OpenRPS</legend>
  <ul>
    <li class="field">
      <label class="inline" for="text1">Username</label>
      <input class="wide text input" id="username" type="text" placeholder="Enter a Username" name='username' />
    </li>
    <li class="field">
      <label class="inline" for="password">Password</label>
      <input class="wide password input" id="password" type="password" placeholder="Enter a Password" name='password' />
    </li>
  </ul>
</fieldset>

<input type="button" name="submit" value="Login" id="submitbutton" onClick="alert('Submitted.');"/>




</form>

</div>




<div>


<?php

$layout = new Layout();

$layout->showFooter();

?>
