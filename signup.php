<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<?php

include 'openrps_core/inc/Layout.php';

$layout = new Layout();

$title = 'Sign up for OpenRPS';

$layout->showHeader($title);

?>


<br>
<br>
<br>
	
<div class="three columns">
	
<form id='register' action='process_signup.php' method='post'>

<fieldset>
  <legend>Sign Up for OpenRPS</legend>
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

<div class="medium default btn"><input type="submit" value="Submit" /></div>


</form>






<div>


<?php

$layout = new Layout();

$layout->showFooter();

?>
