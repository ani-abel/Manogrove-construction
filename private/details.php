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
    <title>Add blog post | Manogrove</title>

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
        .btn-extend{ width: 100% !important; }
    </style>

</head>
<body class="grey lighten-4">
<!--Link j-Query-->
<script src="../js/jquery.min.js"></script>
<!--Link materialize.js-->
<script src="../js/materialize.min.js"></script>
<!--Link ck-editor-->
<script src="../js/ckeditor/ckeditor.js"></script>

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
                        <li>
                            <a href="control_panel.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li class="active">
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

<!--Section: Posts-->
<section class="section section-posts grey lighten-4">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12 m6">
                                <span class="card-title">Post Details</span>
                            </div>
                            <div class="col s12 m6 center">
                                <img src="img/person1.jpg" class="responsive-img circle"
                                     style="width: 40px;margin-left: 10px" alt="Image"/>
                                <p><i class="fa fa-user"></i> Admin</p>
                                <time class="grey-text"><i class="fa fa-calendar"></i>
                                    <?php echo dateToString(time()); ?></time>
                            </div>
                        </div>
                        <form action="" id="add-blog-post">
                            <div class="input-field">
                                <i class="blue-text text-darken-3 fa fa-pencil prefix"></i>
                                <input type="text" name="post_title" required class="text-lowercase"/>
                                <label for="title">Title</label>
                            </div>

                            <div class="input-field">
                                <textarea name="body" required class="materialize-textarea"></textarea>
                            </div>
                            <div class="input-field">
                                <button type="submit" class="btn-extend btn blue darken-3
                                 waves-effect waves-ripple save-btn">
                                    <i class="fa fa-floppy-o"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
<footer class="section blue darken-2 white-text center">
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
    $(".section, header, footer").hide();

    setTimeout(function(){
        $(document).ready(function(){
            //SHOW SECTIONS
            $(".section, header, footer").fadeIn();

            //HIDE PRE-LOADER
            $(".loader").fadeOut();

            //INIT SIDE-NAV
            $(".button-collapse").sideNav({
                draggable: true
            });

            //INIT CK-EDITOR
            CKEDITOR.replace("body");

            $("#add-blog-post").on("submit", function(e){
                e.preventDefault();

                $.ajax({
                    url: "ajax_codes/add_blog_post_source.php",
                    method: "POST",
                    cache: false,
                    processData: false,
                    contentType: false,
                    data: new FormData(this),
                    success: function(data){
                        if(/Post added/ig.test(data)){
                            $("#add-blog-post").trigger("reset");
                        }
                        Materialize.toast(data, 10000, "rounded");
                    }
                });
            });

        });
    }, 1000);

</script>

</body>
</html>