<?php

class Layout{

	public function showHeaderLogin($title){
        
       
        echo  '<head>';
        echo  "<title>$title</title>";
        echo  '<meta name="description" content="This site is a portal of useful things for the people of Altoona, Pa and surrounding communities." />';
		echo  '<link href="openrps_core/js/jquery-ui/jquery-ui.min.css" media="screen" rel="stylesheet" type="text/css">';
        echo  '<link rel="stylesheet" type="text/css" href="sapadian/css/frameworks/gumby/css/gumby.css">';
        echo  '<link rel="stylesheet" type="text/css" href="sapadian/css/frameworks/gumby/css/style.css">';
        echo  '<script language="javascript" type="text/javascript" src="sapadian/js/javascript_form/gen_validatorv4.js"></script>';
        echo  '<script language="javascript" type="text/javascript" src="openrps_core/js/jquery-ui-1.11.3/jquery-ui.min.js"></script>';
		echo  '<script language="javascript" type="text/javascript" src="openrps_core/js/jquery/jquery-1.11.2.min.js"></script>';
		echo  '<link rel="stylesheet" href="openrps_core/css/style.css" />';
		
		echo '<script type="text/javascript">';
		echo '$(function()';
		echo '{';
		echo '	$("form").form();';
		echo '});';
		echo '</script>';
		
        echo'</head>';

        echo'<body>';
		
		echo '<img src="img/OpenRPSLogo.png">';

        echo'<br>';
        echo'<br>';

        echo '<div class="medium primary btn"><a href="login.php">Login</a></div><div class="medium primary btn"><a href="signup.php">Sign Up</a></div>';        
        
    }
	
	public function showHeaderSignUp($title){
        
       
        echo  '<head>';
        echo  "<title>$title</title>";
        echo  '<meta name="description" content="This site is a portal of useful things for the people of Altoona, Pa and surrounding communities." />';
		echo  '<link href="openrps_core/js/jquery-ui/jquery-ui.min.css" media="screen" rel="stylesheet" type="text/css">';
        echo  '<link rel="stylesheet" type="text/css" href="sapadian/css/frameworks/gumby/css/gumby.css">';
        echo  '<link rel="stylesheet" type="text/css" href="sapadian/css/frameworks/gumby/css/style.css">';
        echo  '<script language="javascript" type="text/javascript" src="sapadian/js/javascript_form/gen_validatorv4.js"></script>';
        echo  '<script language="javascript" type="text/javascript" src="openrps_core/js/jquery-ui-1.11.3/jquery-ui.min.js"></script>';
		echo  '<script language="javascript" type="text/javascript" src="openrps_core/js/jquery/jquery-1.11.2.min.js"></script>';
		echo  '<link rel="stylesheet" href="openrps_core/css/style.css" />';
		
		echo '<script type="text/javascript">';
		echo '$(function()';
		echo '{';
		echo '	$("form").form();';
		echo '});';
		echo '</script>';
		
		echo '<script type="text/javascript">';
		
		echo '$("#register").validate({';
        echo '   rules: {';
        echo '       password: { ';
        echo '         required: true,';
        echo '            minlength: 6,';
        echo '            maxlength: 10,';

        echo '       } , ';

       echo '            password_confirm: { ';
       echo '             equalTo: "#password",';
       echo '              minlength: 6,';
       echo '              maxlength: 10';
       echo '        }';


      echo '     },';
      echo 'messages:{';
      echo '   password: { ';
      echo '           required:"the passwords don\'t match!"';

      echo '         }';
      echo '}';

      echo ' });';
	  
	  echo '</script>';
		
        echo'</head>';

        echo'<body>';
		
		echo '<img src="img/OpenRPSLogo.png">';

        echo'<br>';
        echo'<br>';

        echo '<div class="medium primary btn"><a href="login.php">Login</a></div><div class="medium primary btn"><a href="signup.php">Sign Up</a></div>';        
        
    }
    
    
    public function showHeader($title){
        
       
        echo'<head>';
        echo    "<title>$title</title>";
        echo    '<meta name="description" content="This site is a portal of useful things for the people of Altoona, Pa and surrounding communities." />';
        echo   '<link rel="stylesheet" type="text/css" href="sapadian/css/frameworks/gumby/css/gumby.css">';
        echo   '<link rel="stylesheet" type="text/css" href="sapadian/css/frameworks/gumby/css/style.css">';
        echo  '<script language="javascript" type="text/javascript" src="sapadian/js/javascript_form/gen_validatorv4.js"></script>';
        echo  '<script language="javascript" type="text/javascript" src="openrps_core/js/jquery-ui-1.11.3/jquery-ui.min.js"></script>';
		echo  '<script language="javascript" type="text/javascript" src="openrps_core/js/jquery/jquery-1.11.2.min.js"></script>';
        echo'</head>';

        echo'<body>';

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
        echo 'Copyright © OpenRPS.org';
        echo '</body>';
        echo '</html>';
        
    }

}

?>