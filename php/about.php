<?php
    require_once("../private/PHP_classes/initialize.php");
    global $db;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>About Us | Manogrove Construction</title>

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
            background: url("../images/site-images/backdrop-21534_1920.jpg") !important;
            background-size: cover !important;
            background-position: center !important;
            min-height: 200px;
            color: #fff;
            position: relative;
        }

        .section-call-to-action
        {
            position: relative;
            background: url("../images/site-images/aged-1846818_1920.jpg") no-repeat;
            background-size: cover;
            background-position: center;
            border-top: #333 solid 2px;
            min-height: 300px;
        }

        .what-we-do-span{ padding: 50px 60px; font-size: 40px; }

        .section-intro h4{ margin-bottom: 45px; }

        .what-we-do-widget{ border-bottom: 1px solid #d5d5d5; margin-bottom: 25px; }

        .what-we-do-widget:nth-child(3),
        .testimonial-widget:nth-child(3){ border-bottom: none; }

        .inner-left{ padding: 50px 10px !important; }

        @media (max-width: 600px) {
            .section-intro>.row>h4{ margin-bottom: 0 !important; }

            .what-we-do-span{ padding: 20px 30px; font-size: 40px; }

            .inner-left{ margin: 25px; padding: 0 !important; }

            .what-we-do-widget{ margin-bottom: 0 !important; }

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
                    <li class="active-li">
                        <a href="./about.php">About</a>
                    </li>
                    <li>
                        <a href="./blog.php">Blog</a>
                    </li>
                    <li>
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
            <h4 class="text-capitalize">ABOUT US</h4>
        </div>
    </div>
</section>

<!--Section: intro-details-->
<section class="hide-section container section-intro">
    <div class="row">
        <h4 class="center blue-text text-darken-3">What we do</h4>
        <div class="row">
            <div class="col s12 no-padding what-we-do-widget">
                <div class="col s12 m3 center-on-small-only inner-left">
                    <span class="what-we-do-span circle z-depth-2 white-text red darken-3">1</span>
                </div>
                <div class="col s12 m9">
                    <h5 style="margin: 0 0 10px 0;" class="text-uppercase center-on-small-only
                     red-text text-darken-2">REMODELING</h5>
                    <p class="flow-text center-on-small-only">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta distinctio facilis illum nihil soluta. Deleniti maxime nemo qui sapiente sit!
                    </p>
                </div>
            </div>

            <div class="col s12 no-padding what-we-do-widget">
                <div class="col s12 m3 center-on-small-only inner-left">
                    <span class="what-we-do-span circle z-depth-2 white-text blue darken-3">2</span>
                </div>
                <div class="col s12 m9">
                    <h5 style="margin: 0 0 10px 0;" class="text-uppercase center-on-small-only blue-text text-darken-2">
                        General purpose contractors
                    </h5>
                    <p class="flow-text center-on-small-only">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta distinctio facilis illum nihil soluta. Deleniti maxime nemo qui sapiente sit!
                    </p>
                </div>
            </div>

            <div class="col s12 no-padding what-we-do-widget">
                <div class="col s12 m3 center-on-small-only inner-left">
                    <span class="what-we-do-span circle z-depth-2 white-text orange darken-3">3</span>
                </div>
                <div class="col s12 m9">
                    <h5 style="margin: 0 0 10px 0;" class="text-uppercase center-on-small-only orange-text text-darken-2">
                        Government contractors
                    </h5>
                    <p class="flow-text center-on-small-only">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta distinctio facilis illum nihil soluta. Deleniti maxime nemo qui sapiente sit!
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Section-->

<section class="hide-section section-our-history grey lighten-3">
    <div class="container">
        <div class="row">
            <h4 class="center blue-text text-darken-3">Our History</h4>
            <div class="col s12">
                <div style="float: left; margin: 0 12px 5px 0; display:inline;
                vertical-align: top;">
                    <img src="../images/325b558fb8474b5.jpeg"
                         class="rounded-10px z-depth-2"
                         height="150" width="200" alt="">
                    <h6 style="margin-bottom: 0 !important;text-align: center;"
                        class="red-text text-darken-4">Jimmy Adeyamo</h6>
                </div>
                <p class="enlarge-p">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet aspernatur atque culpa deleniti doloribus eos eum fuga labore libero modi, mollitia perspiciatis qui repellat, sint vel velit voluptate voluptates!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex harum illo iste labore quas repellat rerum, similique ut voluptatibus? Et facilis fuga perferendis! Accusamus cumque ipsa maxime molestias sapiente.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab delectus illo nemo odit pariatur placeat qui recusandae sed voluptas voluptatem! Dolores ipsam numquam, pariatur quisquam sapiente soluta suscipit! Iste, reiciendis.</p>
                <div style="float: left; margin: 0 12px 5px 0; display:inline;
                vertical-align: top;">
                    <img src="../images/325b558fb8474b5.jpeg"
                         class="rounded-10px z-depth-2"
                         height="150" width="200" alt="">
                    <h6 style="margin-bottom: 0 !important;text-align: center;"
                        class="red-text text-darken-4">Jimmy Adeyamo</h6>
                </div>
                    <p class="enlarge-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ipsam iste libero molestiae nostrum? Animi asperiores dolor fuga, fugiat, illum ipsum laboriosam, maxime modi obcaecati optio quasi temporibus veritatis voluptate!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci beatae cupiditate, doloremque dolorum eveniet fugiat hic illo iure iusto magni nisi perspiciatis porro quod ratione saepe, sequi similique sit totam!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur culpa, deserunt dicta dignissimos exercitationem, inventore molestias nisi numquam perferendis perspiciatis praesentium quis recusandae repellendus temporibus unde vel veritatis vero voluptatum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt enim excepturi hic ipsum itaque maxime modi necessitatibus, nulla optio qui quisquam ratione saepe velit. Atque excepturi maiores natus non quaerat!
                </p>
            </div>
        </div>
    </div>
</section>

<!--  Section: testimonials-->
<section class="section container center hide-section section-testimonials">
    <h4 class="center blue-text text-darken-3">What our customers say</h4>
    <div class="row">
        <div class="col s12 testimonial-widget">
            <div class="row">
                <div class="col s12 m3 left">
                    <img src="../images/325b558fb8474b5.jpeg"
                         class="responsive-img rounded-10px z-depth-1" alt="">
                </div>
                <div class="col s12 m9 right">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dicta magni officia optio perferendis quae sunt ut! Blanditiis distinctio dolorem eos ipsam labore, modi non odit tenetur veniam voluptate. Assumenda? - <span class="enlarge-name blue-text text-darken-3">Jimmy Butler</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col s12 testimonial-widget">
            <div class="row">
                <div class="col s12 m3 left">
                    <img src="../images/325b558d219fe27.jpeg"
                         class="responsive-img rounded-10px z-depth-1" alt="">
                </div>
                <div class="col s12 m9 right">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dicta magni officia optio perferendis quae sunt ut! Blanditiis distinctio dolorem eos ipsam labore, modi non odit tenetur veniam voluptate. Assumenda? - <span class="enlarge-name blue-text text-darken-3">Jimmy Butler</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col s12 testimonial-widget">
            <div class="row">
                <div class="col s12 m3 left">
                    <img src="../images/325b53a4d5a98b3.jpeg"
                         class="responsive-img rounded-10px z-depth-1" alt="">
                </div>
                <div class="col s12 m9 right">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dicta magni officia optio perferendis quae sunt ut! Blanditiis distinctio dolorem eos ipsam labore, modi non odit tenetur veniam voluptate. Assumenda? - <span class="enlarge-name blue-text text-darken-3">Jimmy Butler</span>
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!--Section: section-call-to-action-->
<section class="section section-call-to-action hide-section">
    <div class="primary-overlay valign-wrapper">
        <div class="container">
            <div class="row">
                <div class="col s12 left">
                    <p class="flow-text white-text">
                        We always deliver on a project, no matter what it takes...just ask our clients
                        <br>
                    </p>
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
