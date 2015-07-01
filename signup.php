<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<?php

include 'openrps_core/eng/Layout.php';

$layout = new Layout();

?>
<head>
	<title>Signup for OpenRPS</title>

	<!-- Libs -->
	<link rel="stylesheet" href="openrps_core/css/vendor/normalize.css"/>
	<link rel="stylesheet" href="openrps_core/css/vendor/foundation.min.css"/>

	<link rel="stylesheet" href="openrps_core/css/main.css"/>
	<link rel="stylesheet" href="openrps_core/css/login.css"/>
</head>
<body class="dark-bg">
	<?php $layout->getLayout("header_notloggedin"); ?>

	<form id='signup_form' action='process_signup.php' method='post'>

		<div class="login-holder">

			<h2>Sign up</h2>

		    <label class="inline" for="username">Username</label>
		    <input class="text-field" id="username" type="text" placeholder="Enter a Username" name="username" />


		    <label class="inline" for="email">Email Address</label>
		    <input class="text-field" id="email" type="text" placeholder="Enter your email address" name="email" />


		    <label class="inline" for="password">Password</label>
		    <input class="text-field" id="password" type="password" placeholder="Enter a Password" name="password" />


		    <label class="inline" for="password_confirm">Confirm Password</label>
		    <input class="text-field" id="password_confirm" type="password" placeholder="Confirm your password" name="password_confirm" />

			<div class="error" id="field_error">
				One or more fields are not properly filled in!
			</div>

			<div class="error" id="password_confirmation_error">
				Your password confirmation is no properly filled in!
			</div>


			<div>
				<input type="submit" id="signup_submit" class="button" value="Sign Up" />
				<a href="login.php">Already an account?</a>
			</div>



		</div>
	</form>
	


	<?php $layout->getLayout("footer"); ?>

	<!-- JS Libs -->
	<script src="openrps_core/js/vendor/jquery-1.11.2.min.js"></script>
	<script src="openrps_core/js/signup.js"></script>
</body>
</html>
