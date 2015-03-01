<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<?php

include 'openrps_core/eng/helpers/Layout.php';
include 'openrps_core/eng/helpers/Register.php';
include 'openrps_core/eng/dbc/Db.php';

//Set the title

$title = 'Sign Up for OpenRPS';

//Create objects

$layout = new Layout();
$register = new Register();
$db = new Db();

//Render layout

$layout->showHeader($title);

//Set post variables

$username = $_POST['username'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$email = $_POST['email'];

//Validate form

//check passwords
if($password != $password_confirm){
	
	echo "<div class=\"danger alert\">Your passwords don't match!</div>";
	return;

	}
	

$reg_status = $register->valCheckEmpty($username,$password,$email);

if($reg_status <> 'true'){
    
    echo "<div class=\"danger alert\">$reg_status</div>";
    
}

if($reg_status == 'true'){
    
    //$cleaned_user_data = $register->cleanRegData($username,$email,$password);
    //$username = $cleaned_user_data[0];
    //$password = $cleaned_user_data[1];
    //$email = $cleaned_user_data[2];
    
    $user_data = array('username' => $username, 'password' => $password, 'email' => $email);
    
    $unique_check = $db->testUniqueCheck($username,$password);
    
    //$unique_check = 'pass';
    
    if ($unique_check == 'pass'){
        
        //Register the user. Throw message back.
        $register->regUser($username,$email,$password);
        
        echo "<div class=\"success alert\">Thanks," . $username . ".<br>Registration was successful, you can login now!</div>";  
        
    }
    
    if ($unique_check <> 'pass'){
        
        //Throw error if the user already esists.
        
        echo "<div class=\"danger alert\">Sorry, that username has been registered already please try again!</div>";  
        
    
    }
    
    
}


?>


<br>
<br>
<br>
	

<div>


<?php

$layout = new Layout();

$layout->showFooter();

?>