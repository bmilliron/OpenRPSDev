<?php
include 'openrps_core/eng/Layout.php';
$layout = new Layout();
?>

<html>
    <head>
        <!-- CSS Libraries -->
        <link rel="stylesheet" href="openrps_core/css/vendor/normalize.css"/>
        <link rel="stylesheet" href="openrps_core/css/vendor/foundation.min.css"/>

        <!-- CSS code -->
        <link rel="stylesheet" href="openrps_core/css/main.css"/>
        <link rel="stylesheet" href="openrps_core/css/promotional.css"/>

    </head>
    <body>
        <?php $layout->getLayout("header_notloggedin"); ?>
        <section class="hero">
            <div class="hero-text">
                <h1><span class="dark-transparent-bg">Welcome to OpenRPS</span></h1>
                <h3><span class="dark-transparent-bg">The RBE system</span></h3>
            </div>
        </section>
        <!--
        <div class="center">
            <img src="img/logo.svg" class="logo-small"/>
            <h4>This is a placeholder for the homepage. This is going to be the "promotional page"</h4>
            <p>
                To login <a href="login.php">Click Here</a>
            </p>
        </div>
        -->
    </body>
</html>
