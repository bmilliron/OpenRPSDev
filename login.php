<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<?php

include 'openrps_core/eng/Layout.php';

$layout = new Layout();

$title = 'Log In to OpenRPS';

$layout->showHeaderLogin($title);

?>


<br>
<br>
<br>
	
<div class="three columns">
	
<form id='sign_up' action='process_login.php' method='post'>

<fieldset>
  <legend>Log In to OpenRPS</legend>
    <input type="text" placeholder="USERNAME"/><br />
    <input type="password" placeholder="PASSWORD"/><br />
    <input type="submit" class="btn" value="login"/><a href="signup.php">Need an account?</a>
</fieldset>

</form>

</div>




<div>


<?php

$layout = new Layout();

$layout->showFooter();

?>
