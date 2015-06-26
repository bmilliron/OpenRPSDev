<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<?php

include 'openrps_core/eng/Layout.php';

$layout = new Layout();

$title = 'Log In to OpenRPS';

$layout->getLayout("header_login");

?>

<div class="three columns">

<form id='sign_up' action='process_login.php' method='post'>

	<div class="login-holder">
		<h2>Login</h2>
		<div>
			<input type="text" class="text-field" placeholder="USERNAME"/>
		</div>
		<div>
			<input type="password" class="text-field" placeholder="PASSWORD"/>
		</div>
		<div>
			<input type="submit" class="button" value="login"/>
			<a href="signup.php">Need an account?</a>
		</div>

	</div>

</form>

</div>




<div>


<?php

$layout = new Layout();

$layout->getLayout("footer");

?>
