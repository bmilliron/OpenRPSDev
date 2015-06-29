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
	<div class="three columns">

	<form id='register' action='process_signup.php' method='post'>

		<div class="login-holder">

			 <h1> SIGN UP </h1>

		      <label class="inline" for="text1">Username</label>
		      <input class="text-field" id="username" type="text" placeholder="Enter a Username" name='username' />


		      <label class="inline" for="text1">Email Address</label>
		      <input class="text-field" id="email" type="text" placeholder="Enter your email address" name='email' />


		      <label class="inline" for="password">Password</label>
		      <input class="text-field" id="password" type="password" placeholder="Enter a Password" name='password' />


		      <label class="inline" for="password_confirm">Confirm Password</label>
		      <input class="text-field" id="password_confirm" type="password" placeholder="Confirm your password" name='password_confirm' />

			 <div>
				<input type="submit" class="button" value="Sign Up" />
				<a href="login.php">Already an account?</a>
			</div>



		</div>
	</form>
	<div>

	<?php $layout->getLayout("footer"); ?>

	<!-- JS Libs -->
	<script src="js/vendor/jquery-1.11.2.min.js"></script>
</body>
</html>
