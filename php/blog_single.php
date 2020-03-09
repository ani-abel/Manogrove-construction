<?php
    require_once("../private/PHP_classes/initialize.php");
    global $db;
    if( !isset($_GET["post_id"]) || empty($_GET["post_id"]) ){
        redirect_to("blog.php");
    }
    $post_id = base64_decode($_GET["post_id"]);

    if( !preg_match("/\d+/", $post_id) ){
        redirect_to("blog.php");
    }

    $post_arr = BlogPosts::getABlogPost($post_id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo ucwords($post_arr["post_title"]); ?> : Blog | Manogrove Construction</title>

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
            color: #fff;
            position: relative;
        }

        .text-capitalize{ text-transform: capitalize !important; }

        .story>p:nth-child(1):first-letter{ font-size: 50px; }
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
                    <li class="active-li">
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
            <h4 style="text-transform: capitalize !important;">
                <?php echo $post_arr["post_title"]; ?>
            </h4>
            <p class="grey-text text-lighten-4"><i class="fa fa-calendar"></i>
                <?php echo dateToString($post_arr["date_of_entry"]); ?>
            </p>
        </div>
    </div>
</section>

<!--Section: intro-details-->
<section class="hide-section container section-intro">
    <div class="row">
        <div class="col s12 story card-panel grey-text rounded-10px">
            <p class="enlarge-p flow-text">
                <?php echo $post_arr["post_body"]; ?>
            </p>
        </div>

    </div>
</section>

<?php
    $all_posts = BlogPosts::getAllPosts();
    if( $all_posts != null ){
?>
<section class="section container hide-section section-pagination" style="padding-top: 0;">
    <div class="row">
        <h4 class="center blue-text text-darken-3">More Stories</h4>
        <?php
            for($i = 0; $i < 2; $i++){
                $post = $all_posts[$i];
        ?>
        <!--Projects-widget-->
        <div class="col s12 m6">
            <div class="card white rounded-10px">
                <div class="card-image">
                    <img src="<?php echo BlogPosts::createARandomTitleImage(); ?>"
                         alt="">
                    <a href="blog_single.php?post_id=<?php echo base64_encode($post["post_id"]); ?>"
                       class="btn-floating btn-large halfway-fab waves-effect waves-ripple blue">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                <div class="card-content center">
                    <span class="card-title text-capitalize"><?php echo $post["post_title"]; ?></span>
                    <p class="grey-text text-darken-3"><i class="fa fa-calendar"></i>
                    <?php echo $post["date_of_entry"]; ?>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>

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
