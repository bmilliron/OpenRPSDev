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

$title = 'Welcome to OpenRPS';

//Create objects

$layout = new Layout();
$register = new Register();
$db = new Db();

//Render layout

$layout->showHeaderLoggedIn($title);

echo '<h2>Hi '.$username.'! Welcome to OpenRPS!</h2>';


$layout->showFooter();

?>