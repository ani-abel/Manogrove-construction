<?php
    require_once("PHP_classes/initialize.php");

    global $session;
    if( !(isset($session->user_id) || $session->is_logged_in()) )
        redirect_to("login.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manogrove | Home</title>

    <!--Import Google icon font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icons?family=Material+icons"/>

    <!--Link materialize.css file here-->
    <link rel="stylesheet" href="../css/materialize.min.css" media="screen, projection" />
    <link rel="stylesheet" href="css/main3.css" />
    <!--Link the font-awesome Library-->
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <!--Let the browser know the website is optimised for the web-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
        .text-capitalize{ text-transform: capitalize !important; }

        .option-widget{ padding: 80px 10px !important; }
    </style>

</head>
<body class="grey lighten-4">
<!--Link j-Query-->
<script src="../js/jquery.min.js"></script>
<!--Link materialize.js-->
<script src="../js/materialize.min.js"></script>

<header>
    <div class="navbar-fixed">
        <nav class="blue darken-2">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="control_panel.php" class="brand-logo">Manogrove</a>
                    <a href="" class="button-collapse right show-on-large" data-activates="side-nav">
                        <i class="fa fa-bars"></i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li class="active">
                            <a href="control_panel.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="details.php">Posts</a>
                        </li>
                        <li>
                            <a href="projects.php">Projects</a>
                        </li>
                        <li>
                            <a href="PHP_classes/logout.php">
                                <i class="fa fa-power-off"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--Side-nav-->
    <ul class="side-nav" id="side-nav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="img/ocean.jpg" alt="Background Image"/>
                </div>
                <a href="#" >
                    <img src="img/person1.jpg" alt="Person Image" class="circle">
                </a>
                <a href="">
                    <span class="name white-text">Admin</span>
                </a>
                <a href=""><span class="email white-text">jd@yahoo.com</span></a>
            </div>
        </li>

        <li>
            <a href="control_panel.php"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
            <a href="details.php">Posts</a>
        </li>
        <li>
            <a href="projects.php">Projects</a>
        </li>

        <li><div class="divider"></div></li>

        <li><a href="" class="subheader">Account Controls</a></li>

        <li><a href="PHP_classes/logout.php" class="waves-effect"><i class="fa fa-power-off"></i> Logout</a></li>

    </ul>
</header>

<!--Section: intro-section-->
<section class="section section-options">
    <div class="container z-depth-2 blue darken-2">
        <div class="row">
            <div class="col s12 m6 center option-widget">
                <a href="details.php" class="white-text">
                    <i class="fa fa-newspaper-o fa-5x"></i>
                    <h4>Add a post</h4>
                </a>
            </div>

            <div class="col s12 m6 center option-widget">
                <a href="projects.php" class="white-text">
                    <i class="fa fa-wrench fa-5x"></i>
                    <h4>Add a project</h4>
                </a>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
<footer class="section blue darken-2 white-text center hide-on-med-and-up">
    <p>Manogrove Control Panel &copy; <?php echo strftime("%Y"); ?></p>
</footer>


<!--PRE-LOADER-->
<div class="preloader-wrapper big active loader">
    <div class="spinner-layer spinner-blue-only">
        <div class="circle-clipper left">
            <div class="circle"></div>
        </div>

        <div class="gap-patch">
            <div class="circle"></div>
        </div>

        <div class="circle-clipper right">
            <div class="circle"></div>
        </div>
    </div>
</div>

<script>
    //HIDE CONTENT INITIALLY, ONLY SHOWING THE PRE-LOADER
    $(".section, header").hide();

    setTimeout(function(){
        $(document).ready(function(){
            //SHOW SECTIONS
            $(".section, header").fadeIn();

            //HIDE PRE-LOADER
            $(".loader").fadeOut();

            //INIT SIDE-NAV
            $(".button-collapse").sideNav({
                draggable: true
            });

        });
    }, 1000);

</script>

</body>
</html>