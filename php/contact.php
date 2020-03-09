<?php
    require_once("../private/PHP_classes/initialize.php");
    global $db;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Feel Free to Contact us | Manogrove Construction</title>

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
            background: url("../images/site-images/fractal-1120769_1920.jpg") !important;
            background-size: cover !important;
            background-position: center !important;
            min-height: 400px;
            max-height: 600px;
            color: #fff;
            position: relative;
        }

        .btn-extend{ width: 100% !important; }

        @media (max-width: 600px) {
            .main-header-2
            {
                min-height: 200px;
                max-height: 400px;
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
                    <li>
                        <a href="./projects.php">Projects</a>
                    </li>
                    <li class="active-li">
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
            <h4 class="text-capitalize">GOOGLE MAP</h4>
        </div>
    </div>
</section>

<!--Section: intro-details-->
<section class="hide-section container section-intro">
    <div class="row">
        <div class="col s12 m6 left">
            <ul class="collection with-header my-collection rounded-10px">
                <li class="collapsible-header">
                    <h5>Our Contact Info</h5>
                </li>
                <li class="collection-item avatar">
                    <div>
                        <i class="fa fa-map-marker circle red darken-3 z-depth-3"></i>
                        <span class="title text-uppercase blue-text text-darken-1">Main office</span><br>
                        <span class="grey-text text-darken-1 text-capitalize">
                            Mile 88, office road, Jalingo Taraba state, Nigeria
                        </span><br>
                    </div>
                </li>
                <li class="collection-item avatar">
                    <div>
                        <i class="fa fa-facebook circle blue darken-3 z-depth-3"></i>
                        <span class="title text-uppercase blue-text text-darken-1">Facebook</span><br>
                        <span class="grey-text text-darken-1 text-capitalize">
                            Find us on facebook
                        </span><br>
                        <a href="" class="secondary-content btn btn-floating
                                            red darken-3 waves-effect waves-ripple tooltipped"
                           data-position="top"
                           data-tooltip="View page">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </li>
                <li class="collection-item avatar">
                    <div>
                        <i class="fa fa-twitter circle red darken-3 z-depth-3"></i>
                        <span class="title text-uppercase blue-text text-darken-1">Twitter</span><br>
                        <span class="grey-text text-darken-1 text-capitalize">
                            Find us on twitter
                        </span><br>
                        <a href="" class="secondary-content btn btn-floating
                                            red darken-3 waves-effect waves-ripple tooltipped"
                           data-position="top"
                           data-tooltip="View page">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col s12 m6 right">
            <div class="card rounded-10px">
                <div class="card-content">
                    <span class="card-title center">CONTACT US DIRECTLY</span>
                    <form action="" method="post" id="contact-form">
                        <div class="input-field blue-text text-darken-3">
                            <i class="prefix fa fa-user-circle-o blue-text text-darken-3"></i>
                            <input type="text"
                                   required
                                   name="contact_name"
                                   id="name" />
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field blue-text text-darken-3">
                            <i class="prefix fa fa-envelope-o blue-text text-darken-3"></i>
                            <input type="email"
                                   required
                                   name="contact_email"
                                   class="validate"
                                   id="email" />
                            <label for="email"
                                   data-error="Invalid Email"
                                   data-success="Valid Email">Email</label>
                        </div>

                        <div class="input-field blue-text text-darken-3">
                            <i class="prefix fa fa-phone blue-text text-darken-3"></i>
                            <input type="tel"
                                   pattern="\+?\d+"
                                   class="validate"
                                   name="contact_phone"
                                   id="tel_no" />
                            <label for="tel_no"
                                   data-error="Invalid Phone number"
                                   data-success="Valid Phone number">Phone</label>
                        </div>

                        <div class="input-field blue-text text-darken-3">
                            <i class="prefix fa fa-question-circle-o blue-text text-darken-3"></i>
                            <textarea name="contact_inquiry"
                                      required
                                      class="materialize-textarea"
                                      id="inquiry"
                                      cols="30" rows="10"></textarea>
                            <label for="inquiry">Inquiry</label>
                        </div>

                        <div class="input-field">
                            <button type="submit" class="btn btn-extend blue darken-3 waves-effect waves-ripple">
                                <i class="fa fa-send-o"></i> &nbsp;SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
    $("header, .hide-section, footer, .fixed-action-btn").hide();

    setTimeout(function () {
        $(document).ready(function(){
            //display all initial-content after 2secs
            $("header, .hide-section, footer, .fixed-action-btn").fadeIn();
            $(".loader-section").fadeOut();

            //init sideNav
            $(".button-collapse").sideNav({
                menuWidth: 300,
                edge: "left",
                draggable: true,
                closeOnClick: false
            });

            $("#contact-form").on("submit", function(e){
                e.preventDefault();

                $.ajax({
                    url: "../private/ajax_codes/contact_us_source.php",
                    method: "POST",
                    cache: false,
                    processData: false,
                    contentType: false,
                    data: new FormData(this),
                    success: function(data){
                        if(/will send you a reply soon/ig.test(data)){
                            $("#contact-form").trigger("reset");
                        }
                        Materialize.toast(data, 10000, "rounded");
                    }
                });
            });

        });
    }, 2000);

</script>
</body>
</html>
