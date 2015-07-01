<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Login to OpenRPS</title>

		<!-- Libs -->
		<link rel="stylesheet" href="openrps_core/css/vendor/normalize.css"/>
		<link rel="stylesheet" href="openrps_core/css/vendor/foundation.min.css"/>

		<link rel="stylesheet" href="openrps_core/css/main.css"/>
		<link rel="stylesheet" href="openrps_core/css/login.css"/>
	</head>
<body class="dark-bg">
<?php

include 'openrps_core/eng/Layout.php';

$layout = new Layout();

$title = 'Log In to OpenRPS';

$layout->getLayout("header_notloggedin");

?>


<form id='login_form' action='process_login.php' method='post'>

	<div class="login-holder">
		<h2>Login</h2>

		<label class="inline" for="username">Username</label>
		<input type="text" id="username" name="username" class="text-field" placeholder="Enter your username"/>

		<label class="inline" for="password">Password</label>
		<input type="password" id="password" name="password" class="text-field" placeholder="Enter your password"/>

		<div class="error"  id="field_error">
			One or more fields are not properly filled in!
		</div>

		<div>
			<input type="submit" id="login_submit" class="button" value="login"/>
			<a href="signup.php">Need an account?</a>
		</div>

	</div>

</form>

<?php $layout->getLayout("footer"); ?>

<script src="openrps_core/js/vendor/jquery-1.11.2.min.js"></script>
<script src="openrps_core/js/login.js"></script>

</body>
</html>
