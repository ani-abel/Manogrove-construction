<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Manogrove</title>

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
        .btn-extended{ display: block; width: 80% !important; margin: auto !important; margin-top: 20px; }

        .login{ margin: 70px 10px; }
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
                    <a href="control_panel.php" class="brand-logo">Mangrove</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<section class="section section-login">
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card-panel login blue darken-2 center white-text">
                    <h3>Login</h3>
                    <form method="post" id="login-form">
                        <div class="input-field">
                            <i class="fa fa-user-circle prefix white-text"></i>
                            <input type="text"
                                   pattern="(justin_bieber|jim_reynolds)"
                                   name="username"
                                   id="username"
                                   required
                                   class="validate"
                                   style="border-bottom-color: #fff !important;"/>
                            <label for="username"
                                   class="white-text"
                                   data-error="Invalid Username"
                                   data-success="Valid Username">USERNAME</label>
                        </div>
                        <div class="input-field">
                            <i class="fa fa-lock prefix white-text"></i>
                            <input type="password"
                                   id="password"
                                   name="password"
                                   required
                                   style="border-bottom-color: #fff !important;"/>
                            <label for="password" class="white-text">PASSWORD</label>
                        </div>
                        <button type="submit"
                                class="btn-large white btn-extended black-text waves-effect waves-ripple">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
<footer class="section blue darken-2 white-text center">
    <p>Madmin Control Panel &copy; 2018</p>
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

            $("#login-form").on("submit", function(e){
                e.preventDefault();

                $.ajax({
                    url: "ajax_codes/login_source.php",
                    method: "POST",
                    cache: false,
                    processData: false,
                    contentType: false,
                    data: new FormData(this),
                    success: function(data){
                        if( data !== "Log user in" )
                            Materialize.toast(data, 10000, "rounded");
                        else
                            location.href = "control_panel.php";
                    }
                });

            });

        });
    }, 1000);

</script>

</body>
</html>