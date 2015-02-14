<?php

class Layout{
    
    
    public function showHeader($title){
        
       
        echo'<head>';
        echo    "<title>$title</title>";
        echo    '<meta name="description" content="This site is a portal of useful things for the people of Altoona, Pa and surrounding communities." />';
        echo   '<link rel="stylesheet" type="text/css" href="sapadian/css/frameworks/gumby/css/gumby.css">';
        echo   '<link rel="stylesheet" type="text/css" href="sapadian/css/frameworks/gumby/css/style.css">';
        echo  '<script language="javascript" type="text/javascript" src="sapadian/js/javascript_form/gen_validatorv4.js"></script>';
        
        echo'</head>';

        echo'<body>';

        echo '<a href="http://www.altoona.co"><img src="http://www.altoona.co/img/altoonaco_logo.png"></a>';
        echo'<br>';
        echo'<br>';

        echo '<div class="medium primary btn"><a href="login.php">Login</a></div><div class="medium primary btn"><a href="signup.php">Sign Up</a></div>';        
        
    }
    
    public function showHeaderLoggedIn($title){
        
        
        echo'<head>';
        echo    "<title>$title</title>";
        echo    '<meta name="description" content="This site is a portal of useful things for the people of Altoona, Pa and surrounding communities." />';
        echo   '<link rel="stylesheet" type="text/css" href="sapadian/css/frameworks/gumby/css/gumby.css">';
        echo   '<link rel="stylesheet" type="text/css" href="sapadian/css/frameworks/gumby/css/style.css">';
        echo  '<script language="javascript" type="text/javascript" src="sapadian/js/javascript_form/gen_validatorv4.js"></script>';
        
        echo'</head>';

        echo'<body>';

        echo '<a href="http://www.altoona.co"><img src="http://www.altoona.co/img/altoonaco_logo.png"></a>';
        echo'<br>';
        echo'<br>';
        

        echo '<div class="medium primary btn"><a href="main.php">Home</a></div><div class="medium primary btn"><a href="profile.php">My Profile</a></div></div></div><div class="medium primary btn"><a href="logout.php">Log Out</a></div>';        
        
    }
    
    public function showFooter(){
        
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'Copyright © 2015 Altoona.co';
        echo '</body>';
        echo '</html>';
        
    }

}

?>