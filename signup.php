<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<?php

include 'openrps_core/eng/helpers/Layout.php';

$layout = new Layout();

$title = 'Sign up for OpenRPS';

$layout->showHeaderSignUp($title);

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
      <label class="inline" for="text1">Email Address</label>
      <input class="wide text input" id="email" type="text" placeholder="Enter your email address" name='email' />
    </li>
    <li class="field">
      <label class="inline" for="password">Password</label>
      <input class="wide password input" id="password" type="password" placeholder="Enter a Password" name='password' />
    </li>
	<li class="field">
      <label class="inline" for="password_confirm">Confirm Password</label>
      <input class="wide password input" id="password_confirm" type="password" placeholder="Confirm your password" name='password_confirm' />
    </li>
  </ul>
</fieldset>

<div class="medium default btn"><input type="submit" value="Sign Up" /></div>


</form>


 



<div>


<?php

$layout = new Layout();

$layout->showFooter();

?>
