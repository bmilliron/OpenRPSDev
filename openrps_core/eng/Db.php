<?php

class Db{
    
    public function connectTest(){
          
    $db_conn_test = pg_connect("host=localhost port=5432 dbname=user= password=");
    
    return $db_conn_test;
    
        
    }
    
    public function connectProd(){
          
    $db_conn_test = pg_connect("host=localhost port=5432 dbname= user= password=");
    
    return $db_conn_test;
    
        
    }
    
    public function testUniqueCheck($username,$email){
        
        //Get info from the array
        $final_username = $username;
        $final_email = $email;
        
        //Connect to the db
        
        $db = $this->connectProd();
        $db2 = $this->connectProd();
        
        //Check for username and email address
        
        $query_user_check = "SELECT username FROM tb_users WHERE username = '" . $final_username ."'";
        $query_email_check = "SELECT email FROM tb_users WHERE email = '" . $final_email . "'";
        
        pg_send_query($db, $query_user_check)or die('Query failed: ' . pg_last_error());
        
        $username_check_result = pg_get_result($db);
        $username_check_result_rows = pg_num_rows($username_check_result);
        
        pg_send_query($db2, $query_email_check)or die('Query failed: ' . pg_last_error());
        
        $email_check_result = pg_get_result($db2);
        $email_check_result_rows = pg_num_rows($email_check_result);
        
        pg_close($db);
        pg_close($db2);
        
        if($username_check_result_rows == 0){
            
            //Set flag if no user found
            $user_check = 'pass';
            
        }else{
            
            $user_check = 'fail';
            
            
        }
        
        if ($email_check_result_rows == 0){
            
            //Set flag if no email is found
            $email_check = 'pass';
            
        }else{
            
            $email_check = 'fail';
            
            
        }
        
        
        if ($email_check == 'pass' && $user_check == 'pass'){
            
            $check_result = 'pass';
            
            return $check_result;
            
        }else{
            
            $check_result = 'fail';
            
            return $check_result;
            
            
        }
        
    }
        
    public function insUser($username,$email,$password){
        
        $encrypted_password = md5($password);
        
        $conn = $this->connectProd();
        
        $result = pg_query($conn, "INSERT into tb_users (userid,username,password,email,reg_date) VALUES (nextval('seq_userid'),'". $username . "','". $encrypted_password ."','". $email . "',NOW())");
                           
        if (!$result){
            
            $status = 'fail';
            
            pg_close($conn);
            
            return $status;
        
        }else{
            
            $status = 'success';
            
            pg_close($conn);
            
            return $status;
            
        }
        
        
            
            
        }
        
      
    public function loginUser ($username,$password){
        
        $conn = $this->connectProd();
        
        $encrypted_password = md5($password);
        
        //prepare sql
        
        $result = pg_prepare($conn, "my_query", 'select * from tb_users where username = $1 and password = $2');
        $result = pg_execute($conn, "my_query", array($username, $encrypted_password)) or die("Error during query.");
        $rows = pg_numrows($result);
        
        
        if (!$rows){
            
            pg_close($conn);
            
            return;
        
        }else{
            
            $status = 'ok';
            pg_close($conn);
            
            return $status;
            
        }
        
    } 
        
}
       
?>