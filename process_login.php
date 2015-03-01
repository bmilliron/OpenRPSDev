<?php

include_once 'openrps_core/eng/helpers/Layout.php';
include_once 'openrps_core/eng/helpers/Register.php';
include_once 'openrps_core/eng/dbc/Db.php';

//Set post variables

$username = $_POST['username'];
$password = $_POST['password'];


//Validate form

$db = new Db();

$login_status = $db->loginUser($username,$password);

if($login_status != 'ok'){
    
    header("location:login.php");
    
}

if($login_status == 'ok'){
    
    session_start();
    $_SESSION['login'] = "1";
    $_SESSION['username'] = $username;
    header("location:main.php");
   

    }
    

?>