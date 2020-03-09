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
    <title>Manage Projects | Manogrove</title>

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

        .img-widget{ height: 150px; margin-bottom: 10px; }

        .img-widget>img{ height: 100%; width: 100%; }

        .text-lowercase{ text-transform: lowercase !important; }
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
                        <li>
                            <a href="control_panel.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="details.php">Posts</a>
                        </li>
                        <li class="active">
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
                                <span class="card-title">Project Details</span>
                            </div>
                            <div class="col s12 m6 center">
                                <img src="img/person1.jpg" class="responsive-img circle"
                                     style="width: 40px;margin-left: 10px" alt="Image"/>
                                <p><i class="fa fa-user"></i> Admin</p>
                                <time class="grey-text"><i class="fa fa-calendar"></i>
                                    <?php echo dateToString(time()); ?>
                                </time>
                            </div>
                        </div>
                        <form method="post" id="add-project-form" enctype="multipart/form-data">
                            <div class="input-field">
                                <i class="prefix fa fa-wrench blue-text text-darken-3"></i>
                                <input type="text"
                                       required
                                       name="project_name"
                                       class="text-lowercase"
                                       id="project-name">
                                <label for="project-name">Project name</label>
                            </div>
                            <div class="input-field">
                                <i class="prefix fa fa-pencil blue-text text-darken-3"></i>
                                <textarea id="project-desc"
                                          required
                                          name="project_desc"
                                          class="materialize-textarea text-lowercase"></textarea>
                                <label for="project-desc">Project description</label>
                            </div>
                            <div class="file-field input-field">
                                <div class="btn blue darken-3 waves-effect waves-ripple">
                                    <span><i class="fa fa-image"></i> Add Images</span>
                                    <input type="file"
                                           required
                                           id="my-file-selector"
                                           accept="image/png, image/jpeg, image/jpg, image/gif"
                                           name="project_images[]" multiple />
                                </div>
                                <div class="file-path-wrapper">
                                    <input type="text" class="file-path"/>
                                </div>
                            </div>
                            
                            <div class="row display_images" style="display: none;"></div>
                            
                            <div class="input-field">
                                <button type="submit" disabled id="submit-btn" class="btn-extend btn blue darken-3
                                 waves-effect waves-ripple save-btn">
                                    <i class="fa fa-send-o"></i> Add Images
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

            //Preview Images
            function previewImages(){
                var display_in = $(".display_images");
                display_in.fadeIn("slow");
                display_in.empty();

                if(this.files) $.each(this.files, readAndPreview);

                function readAndPreview(i , file){
                    if(!/\.(jpe?g|png|gif)$/i.test(file.name)){

                        return display_in.html("<h5 style='font-weight:bold;color:#101010;'><span style='color:indianred;'>ERROR: </span>INVALID FILE TYPE. ONLY <span style='color:indianred;'>JPEG, JPG, GIF & PNG</span> ARE ALLOWED</h5>");
                    }
                    else{
                        var reader = new FileReader();
                        $(reader).on("load", function(){

                            const final_widget = "<div class='col s12 m3 img-widget'>" +
                                "<img class='z-depth-1 responsive-img'" +
                                " src=' " + this.result + " ' alt=' " + this.result + " '/></div>";
                            display_in.append(final_widget);
                        });
                        $("#submit-btn").removeAttr("disabled");

                        reader.readAsDataURL(file);
                    }
                }

                var btn = $("#submit-btn");

                (this.files.length > 1)?
                    btn.html("<span><i class=\"fa fa-plus\"></i></span> ADD "+ this.files.length+" PHOTOS") :
                    btn.html("<span><i class=\"fa fa-plus\"></i></span> ADD PHOTO");
            }

            $("#my-file-selector").on("change", previewImages);

            //project add-form
            $("#add-project-form").on("submit", function(e){
                e.preventDefault();

                $.ajax({
                   url: "ajax_codes/add_project_ajax_source.php",
                   data: new FormData(this),
                   processData: false,
                   contentType: false,
                   type: "POST",
                   cache: false,
                   success: function(data){
                       const display_images = $(".display_images"),
                           submit_btn = $("#submit-btn");

                       if(/Project added/ig.test(data)){
                           $("#add-project-form").trigger("reset");
                           display_images.empty();
                           display_images.fadeOut();
                           submit_btn.addClass("disabled");
                           submit_btn.html("<span><i class='fa fa-send-o'></i></span> ADD IMAGES");
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