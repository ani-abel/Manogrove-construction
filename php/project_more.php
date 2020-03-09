<?php
    require_once("../private/PHP_classes/initialize.php");
    global $db;

    if( !isset($_GET["p_id"]) || empty($_GET["p_id"]) ){
        redirect_to("projects.php");
    }
    $p_id = base64_decode($_GET["p_id"]);

    if( !preg_match("/\d+/", $p_id) ){
        redirect_to("projects.php");
    }
    $project_details = Project::getAProject($p_id);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Maternity Ward : Project</title>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!--Import Google icon font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icons?family=Material+icons"/>

    <!--Link materialize.css file here-->
    <link rel="stylesheet" href="../css/materialize.min.css" media="screen, projection" />
    <link rel="stylesheet" href="../css/styles.css" />

    <!--Link the font-awesome Library-->
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css"/>

    <!--Let the browser know the website is optimised for the web-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        .main-header-2
        {
            height: 25vh !important;
            background: url("../images/site-images/mining-excavator-1736293_1920.jpg") !important;
            background-size: cover !important;
            background-position: center !important;
            min-height: 200px;
            max-height: 400px;
            color: #fff;
            position: relative;
        }

        .project-widget{ height: 250px; margin-bottom: 15px; }

        .project-widget>img{ width: 100% !important; height: 100% !important; }

        @media (max-width: 600px) {
            .main-header-2
            {
                height: 15vh !important;
                min-height: 150px;
            }
        }

    </style>

</head>
<body class="white">
<!--Link j-Query-->
<script src="../js/jquery.min.js"></script>

<!--Link materialize.js-->
<script src="../js/materialize.min.js"></script>

<!--Section: navbar-->
<header class="navbar-fixed">
    <!--Nav for lg, md-->
    <section class="nav-lg hide-on-small-and-down z-depth-1 blue darken-4">
        <div class="nav-lg-inner">
            <div class="nav-lg-left inline-block no-escape">
                <div class="logo-hold no-padding">
                    <img src="../images/logo_small_trans.png" alt="">
                </div>
            </div>
            <div class="nav-lg-right inline-block no-escape right">
                <ul class="right">
                    <li>
                        <a href="../index.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="./about.php">About</a>
                    </li>
                    <li>
                        <a href="./blog.php">Blog</a>
                    </li>
                    <li class="active-li">
                        <a href="./projects.php">Projects</a>
                    </li>
                    <li>
                        <a href="./contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!--Nav for xs, sm-->
    <nav class="hide-on-med-and-up blue darken-4 z-depth-1">
        <div class="nav-wrapper">
            <div class="container">
                <a href="" class="brand-logo center">
                    <img src="../images/s_only.png" style="width:80px;height: 65px;" alt="">
                </a>
                <a href="" class="button-collapse right" data-activates="mobile-nav"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </nav>
</header>
<ul class="side-nav" id="mobile-nav">
    <li>
        <a href="../index.php"><i class="fa fa-home"></i> HOME</a>
    </li>
    <li>
        <a href="./about.php">
            <i class="fa fa-question-circle-o"></i> ABOUT
        </a>
    </li>
    <li>
        <a href="./blog.php"><i class="fa fa-newspaper-o"></i> BLOG</a>
    </li>
    <li>
        <a href="./projects.php"><i class="fa fa-wrench"></i> PROJECTS</a>
    </li>
    <li>
        <a href="./contact.php"><i class="fa fa-phone"></i> CONTACT</a>
    </li>
</ul>


<!--Section: intro-slider-->

<!--Section-intro: for smaller devices-->
<section class="hide-section main-header-2 showcase z-depth-5" style="height: 25vh;">
    <div class="row">
        <div class="col s12 m10 main-text" style="padding: 50px 20px 20px 30px;">
            <h4 class="text-uppercase"><?php echo $project_details["project_name"]; ?></h4>
        </div>
    </div>
</section>

<!--Section: intro-details-->
<section class="hide-section container section-intro">
    <div class="row">
        <?php
            if( $project_details != null ){
                foreach($project_details["project_images"] as $key => $value){
        ?>
        <div class="col s12 m6 project-widget">
            <img src="<?php echo constructMainImagePath($value); ?>"
                 style="height: 250px;width: 100%;"
                 class="z-depth-1 responsive-img materialboxed"
                 alt="<?php echo $project_details["project_name"]; ?>"/>
        </div>
        <?php } } else { ?>
        <div class="col s12 center red-text text-darken-3">
            <i class="fa-5x fa fa-image"></i>
            <p class="flow-text">No images found</p>
        </div>
        <?php } ?>
    </div>
</section>

<?php include_once("../includes/footer.php"); ?>

<!--Pre-Loader begins here-->
<div class="row loader-section">
    <div class="col m10 offset-m1 l6 offset-l3">
        <div class="progress grey lighten-2">
            <div class="indeterminate blue lighten-1"></div>
        </div>
    </div>
</div>

<script>
    //hide all initial content
    $("header, .hide-section, footer,.fixed-action-btn").hide();

    setTimeout(function () {
        $(document).ready(function(){
            //display all initial-content after 2secs
            $("header, .hide-section, footer,.fixed-action-btn").fadeIn();
            $(".loader-section").fadeOut();

            //init sideNav
            $(".button-collapse").sideNav({
                menuWidth: 300,
                edge: "left",
                draggable: true,
                closeOnClick: false
            });
        });
    }, 2000);

</script>
</body>
</html>
