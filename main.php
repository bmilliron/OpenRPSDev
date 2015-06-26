<?php
session_start();

include 'openrps_core/eng/Information.php';
include 'openrps_core/eng/Layout.php';
include 'openrps_core/eng/Validation.php';

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
$validation = new Validation();
$db = new Db();

//Render layout

$layout->getLayout("header_loggedin");

echo '<h2>Hi '.$username.'! Welcome to OpenRPS!</h2>';


$layout->getLayout("footer");

?>

<html>
    <head>
        <title><?php print($title); ?></title>

        <!-- CSS -->

    </head>
    <body>
        <?php $layout->getLayout("header"); ?>

        <?php $layout->getLayout("footer"); ?>
    </body>
</html>
