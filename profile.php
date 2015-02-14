<?php
session_start();

include 'openrps_core/inc/Layout.php';
include 'openrps_core/inc/Register.php';

//check session


if (!isset($_SESSION['login'])){
    
    header("location:login.php");
}

//format variables

$username = $_SESSION['username'];

//Set the title

$title = 'Your Profile on OpenRPS';

//Create objects

$layout = new Layout();
$register = new Register();
$db = new Db();

//Render layout

$layout->showHeaderLoggedIn($title);


echo '<br>';
echo '<br>';

//echo '<h2>Hi '.$username.'! Welcome to OpenRPS!</h2>';

//service listing

echo '<div class="two columns">';
echo '<p><h3>Your Profile</h3></p>';
echo '<p><a href="change_personal_info.php">Change Personal Info</a></p>';
echo '<p><a href="delete_account.php">Delete Your Account</a></p>';
echo '</div>';



$layout->showFooter();

?>