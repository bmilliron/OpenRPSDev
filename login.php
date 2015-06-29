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

<div class="three columns">
	<form id='sign_up' action='process_login.php' method='post'>

		<div class="login-holder">
			<h2>Login</h2>
			<div>
				<input type="text" name="username" class="text-field" placeholder="USERNAME"/>
			</div>
			<div>
				<input type="password" name="password" class="text-field" placeholder="PASSWORD"/>
			</div>
			<div>
				<input type="submit" class="button" value="login"/> 
				<a href="signup.php">Need an account?</a>
			</div>

		</div>

	</form>
</div>
<?php $layout->getLayout("footer"); ?>

<script src="openrps_core/js/vendor/jquery-1.11.2.min.js"></script>
<script src="openrps_core/js/login.js"></script>

</body>
</html>
