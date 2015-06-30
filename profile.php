<?php
session_start();

include 'openrps_core/eng/Layout.php';
include 'openrps_core/eng/Validation.php';

//check session

/*
if (!isset($_SESSION['login'])){

    header("location:login.php");
}
*/

//format variables

$username = $_SESSION['username'];

//Create objects

$layout = new Layout();
$register = new Validation();
$db = new Db();

?>

<html>
    <head>
        <title>Welcome to OpenRPS</title>

        <link rel="stylesheet" href="openrps_core/css/main.css"/>
        <link rel="stylesheet" href="openrps_core/css/dashboard.css"/>
    </head>
    <body>
        <?php $layout->getLayout("header_loggedin"); ?>
        <!-- Service listing -->

        <div class="two columns">
        <p><h3>Your Profile</h3></p>
        <p><a href="change_personal_info.php">Change Personal Info</a></p>
        <p><a href="delete_account.php">Delete Your Account</a></p>
        </div>

        <h2>Hi <?php print($username); ?>, Welcome to OpenRPS!</h2>

        <?php $layout->getLayout("footer"); ?>
    </body>
</html>
