<?php
    require_once("private/PHP_classes/initialize.php");
    global $db;
?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <title>Manogrove Construction</title>

      <meta charset="UTF-8">
      <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

      <!--Import Google icon font-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icons?family=Material+icons"/>

      <!--Link materialize.css file here-->
      <link rel="stylesheet" href="css/materialize.min.css" media="screen, projection" />
      <link rel="stylesheet" href="css/styles.css" />

      <!--Link the font-awesome Library-->
      <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"/>

      <!--Let the browser know the website is optimised for the web-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <style>
          .small-project-img{ height: 200px; }

          .section-call-to-action
          {
              position: relative;
              background: url("images/site-images/fractal-1120769_1920.jpg") no-repeat;
              background-size: cover;
              background-position: center;
              border-top: #333 solid 2px;
              min-height: 300px;
          }
      </style>

  </head>
  <body class="white">
  <!--Link j-Query-->
  <script src="js/jquery.min.js"></script>

  <!--Link materialize.js-->
  <script src="js/materialize.min.js"></script>

  <!--Section: navbar-->
  <header class="navbar-fixed">
      <!--Nav for lg, md-->
      <section class="nav-lg hide-on-small-and-down z-depth-1 blue darken-4">
          <div class="nav-lg-inner">
              <div class="nav-lg-left inline-block no-escape">
                  <div class="logo-hold no-padding">
                      <img src="images/logo_small_trans.png" alt="">
                  </div>
              </div>
              <div class="nav-lg-right inline-block no-escape right">
                  <ul class="right">
                      <li class="active-li">
                          <a href="index.php"><i class="fa fa-home"></i> Home</a>
                      </li>
                      <li>
                          <a href="php/about.php">About</a>
                      </li>
                      <li>
                          <a href="php/blog.php">Blog</a>
                      </li>
                      <li>
                          <a href="php/projects.php">Projects</a>
                      </li>
                      <li>
                          <a href="php/contact.php">Contact</a>
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
                      <img src="images/s_only.png" style="width:80px;height: 65px;" alt="">
                  </a>
                  <a href="" class="button-collapse right" data-activates="mobile-nav"><i class="fa fa-bars"></i></a>
              </div>
          </div>
      </nav>
  </header>
  <ul class="side-nav" id="mobile-nav">
      <li>
          <a href="index.php"><i class="fa fa-home"></i> HOME</a>
      </li>
      <li>
          <a href="php/about.php">
              <i class="fa fa-question-circle-o"></i> ABOUT
          </a>
      </li>
      <li>
          <a href="php/blog.php"><i class="fa fa-newspaper-o"></i> BLOG</a>
      </li>
      <li>
          <a href="php/projects.php"><i class="fa fa-wrench"></i> PROJECTS</a>
      </li>
      <li>
          <a href="php/contact.php"><i class="fa fa-phone"></i> CONTACT</a>
      </li>
  </ul>


  <!--Section: intro-slider-->

  <!--Section-intro: for larger devices-->
  <section class="row-1 slider hide-section section-slider z-depth-5 hide-on-small-and-down">
      <ul class="slides">
          <li>
              <img src="images/site-images/mining-excavator-1736293_1920.jpg" alt="">
              <div class="caption">
                  <h3>Caption Title</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium et fugit magni quo vero. Quis!</p>
                  <a href="" class="btn-large red darken-4 waves-effect waves-ripple hide-on-small-and-down">
                      Learn More
                  </a>
                  <a href="" class="btn red darken-4 waves-effect waves-ripple hide-on-med-and-up">
                      Learn More
                  </a>
              </div>
          </li>
          <li>
              <img src="images/site-images/abstract-1851115_1920.jpg" alt="">
              <div class="caption black-text">
                  <h3>Caption Title</h3>
                  <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium et fugit magni quo vero. Quis!</p>
                  <a href="" class="btn-large red darken-4 waves-effect waves-ripple hide-on-small-and-down">
                      Learn More
                  </a>
                  <a href="" class="btn red darken-4 waves-effect waves-ripple hide-on-med-and-up">
                      Learn More
                  </a>
              </div>
          </li>
      </ul>
  </section>

  <!--Section-intro: for smaller devices-->
  <section class="row-1 hide-on-med-and-up hide-section main-header showcase z-depth-5">
      <div class="row">
          <div class="col s12 m10 main-text center" style="padding: 20px 8px;">
              <h4 class="text-capitalize">Main Message Goes Here</h4>
              <p class="flow-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, placeat.
              </p>
              <br><br>
              <a href=""
                 class="btn red lighten-1 waves-effect waves-green">Learn more</a>&nbsp;&nbsp;
          </div>
      </div>
  </section>

  <!--Section: intro-details-->
  <section class="row-2 hide-section container section-intro">
      <div class="row">
          <h4 class="center blue-text text-darken-3">Who are we?</h4>
          <div class="col s12 m6 left center">
              <p class="flow-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dignissimos eos error et eum explicabo iure maiores nostrum pariatur totam.
              </p>
              <a href="php/about.php" class="btn red darken-3 waves-effect waves-ripple">Learn More</a>
          </div>
          <div class="col s12 m6 hide-on-small-and-down right">
              <img src="images/325b53a4d5a98b3.jpeg" class="z-depth-3 materialboxed responsive-img" alt="">
          </div>
      </div>
  </section>

    <!--Section: our-values-->
  <section class="row-3 hide-section section-values grey lighten-4">
      <div class="container">
          <div class="row center">
              <h4 class="center blue-text text-darken-3">Our Values</h4>
              <p class="enlarge-p">Our values make us the best partners for your next project</p>
              <div class="col s12 left center">
                  <div class="row">
                      <div class="col s12 m4">
                          <div class="center card-panel white value-widget rounded-10px">
                              <img src="images/325b53a3c34ed00.jpeg" class="responsive-img circle" alt="value icon"/>
                              <h5 class="grey-text">Respect</h5>
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda culpa eos, ex explicabo facere neque nihil praesentium quia!
                              </p>
                          </div>
                      </div>
                      <div class="col s12 m4">
                          <div class="center card-panel white value-widget rounded-10px">
                              <img src="images/325b558f09a85d7.jpeg" class="responsive-img circle" alt="value icon"/>
                              <h5 class="grey-text">Complete Attention</h5>
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda culpa eos, ex explicabo facere neque nihil praesentium quia!
                              </p>
                          </div>
                      </div>
                      <div class="col s12 m4">
                          <div class="center card-panel white value-widget rounded-10px">
                              <img src="images/325b53a4d5a98b3.jpeg" class="responsive-img circle" alt="value icon"/>
                              <h5 class="grey-text">Customer Satisfaction</h5>
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda culpa eos, ex explicabo facere neque nihil praesentium quia!
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

<!--  Section: testimonials-->
  <section class="row-4 section container center hide-section section-testimonials">
      <h4 class="center blue-text text-darken-3">What our customers say</h4>
      <div class="row">
          <div class="col s12 testimonial-widget">
              <div class="row">
                  <div class="col s12 m3 left">
                      <img src="images/325b558fb8474b5.jpeg"
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
                      <img src="images/325b558d219fe27.jpeg"
                           class="responsive-img rounded-10px z-depth-1" alt="">
                  </div>
                  <div class="col s12 m9 right">
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dicta magni officia optio perferendis quae sunt ut! Blanditiis distinctio dolorem eos ipsam labore, modi non odit tenetur veniam voluptate. Assumenda? - <span class="enlarge-name blue-text text-darken-3">Jimmy Butler</span>
                      </p>
                  </div>
              </div>
          </div>

          <div class="col s12 testimonial-widget" style="border-bottom: none;">
              <div class="row">
                  <div class="col s12 m3 left">
                      <img src="images/325b53a4d5a98b3.jpeg"
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

  <!--Section: our-projects-->
  <section class="row-5 section center hide-section section-projects grey lighten-4">
      <div class="container">
          <h4 class="center blue-text text-darken-3">Our Projects</h4>
          <p class="enlarge-p">Check out some of our past projects for yourself</p>
          <div class="row">
              <?php
              $six_projects = Project::getSixProjects();
                if( $six_projects != null ){
                    foreach( $six_projects as $key => $value ){
              ?>
              <div class="col s12 m4 <?php if($key > 2) echo "hide-on-small-and-down"; ?>">
                  <div class="card white rounded-10px">
                      <div class="card-image">
                          <img src="<?php echo constructCopyImagePath($value["project_images"][0]); ?>"
                               alt="<?php echo $value["project_name"]; ?>"
                               class="small-project-img" />
                          <a href="php/project_more.php?p_id=<?php echo base64_encode($value["project_id"]); ?>"
                             class="btn-floating btn-large halfway-fab waves-effect waves-ripple blue">
                              <i class="fa fa-plus"></i>
                          </a>
                      </div>
                      <div class="card-content">
                          <span class="card-title text-capitalize"><?php echo $value["project_name"]; ?></span>
                          <?php
                          $count = count($value["project_images"]);
                          if($count > 0){
                              ?>
                              <p class="grey-text text-darken-3"><i class="fa fa-image"></i>
                                  <?php
                                  echo ($count > 1 ? "{$count} images" : "{$count} image");
                                  ?>
                              </p>
                          <?php } ?>
                      </div>
                  </div>
              </div>
              <?php } } ?>

              <div class="col s12 center">
                  <a href="php/projects.php" class="btn red darken-3 waves-effect waves-ripple">Learn More</a>
              </div>
          </div>
      </div>
  </section>


  <!--Section: section-call-to-action-->
  <section class="row-6 section section-call-to-action hide-section">
      <div class="primary-overlay valign-wrapper">
          <div class="container">
              <div class="row">
                  <div class="col s12 left">
                      <p class="flow-text white-text">
                          Thinking of starting a new project...?
                          <span class="blue-text text-darken-3">think manogrove </span>
                          <br>
                          <br>
                          <a href="php/contact.php" class="btn-large red darken-3 waves-effect waves-green">
                              contact us
                          </a>
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </section>

<?php include_once("includes/footer.php"); ?>

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


              //init slider
              $(".slider").slider({
                  indicators: false,
                  height: 500,
                  transition: 1000,
                  interval: 10000
              });

              //Init SCROLL FIRE
              const options = [
                  {
                      selector: ".row-1",
                      offset: 50,
                      callback: function(el){
                          Materialize.fadeInImage($(el));
                      }
                  },
                  {
                      selector: ".row-2",
                      offset: 300,
                      callback: function(el){
                          Materialize.fadeInImage($(el));
                      }
                  },
                  {
                      selector: ".row-3",
                      offset: 400,
                      callback: function(el){
                          Materialize.fadeInImage($(el));
                      }
                  }
              ];

              Materialize.scrollFire(options);
          });
      }, 2000);
  </script>
  </body>
</html>
