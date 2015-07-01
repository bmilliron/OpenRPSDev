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
        <section class="row">

            <div class="columns large-4 showcase-card">
                <img src="img/resource_tracking.svg"/>
                <h4>Resource Tracking</h4>
                <p>
                    Tracks the resources real time in any environment.
                </p>
            </div>
            <div class="columns large-4 showcase-card">
                <img src="img/networked_solution.svg"/>
                <h4>Networked solution</h4>
                <p>
                    Networks every vital part of resource production together to provide for all.
                </p>
            </div>
            <div class="columns large-4 showcase-card">
                <img src="img/designed_to_give.svg"/>
                <h4>Designed to give</h4>
                <p>
                    From the ground up OpenRPS is designed to suit peoples basic needs of living.
                </p>
            </div>


        </section>
        <section class="contribute-section">
            <h3 class="title">Contribute</h3>
            <div>
                If you want to contribute <a href="http://openrps.org">Go to the forums</a> or visit us on our <a href="https://github.com/bmilliron/OpenRPSDev">Github page</a>
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
