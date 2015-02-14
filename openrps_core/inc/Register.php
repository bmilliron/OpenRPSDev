<?php

include 'db/Db.php';


class Register{
    
    function valCheckEmpty($username,$password,$email){
        
         
        if(empty($username)){
            
            $status = "false";
            $status_msg = 'You forgot to enter your username try again.';
            return $status_msg;
        }
        
        if(empty($password)){
            
            $status = "false";
            $status_msg = 'You forgot to enter your password try again.';
            return $status_msg;
        }
         
       // if(empty($email)){
            
        //    $status = "false";
         //   $status_msg = 'You forgot to enter your email address try again.';
        //    return $status_msg;
       // }
     
        if($status <> 'false'){
            
         $status = 'true';
         
          return $status;
         
        }
       
    }
    
    public function cleanRegData($username,$password,$email){
        
        $clean_username = trim($username);
        //$clean_username = stripslashes($clean_username);
        //$clean_username = htmlspecialchars($clean_username);
        
        $clean_password = trim($password);
        $clean_password = stripslashes($clean_password);
        $clean_password = htmlspecialchars($clean_password);
        
        $clean_email = trim($email);
        $clean_email = stripslashes($clean_email);
        $clean_email = htmlspecialchars($clean_email);
        
        
        $cleaned_user_info = array('username' => $clean_username, 'password' => $clean_password, 'email' => $clean_email);
        
        return $cleaned_user_info;
        
        
        
        
        
    }
    
    public function regUser($username,$email,$password){
        
        $db = new Db();
        $insert = $db->insUser($username,$email,$password);
        
        if ($insert == 'fail'){
            
            $status = 'fail';
            
            return $status;
            
        }
        
        if ($insert == 'success'){
            
            $status = 'success';
            
            return $status; 
            
        }
        
        
        
    }
    
}

?>