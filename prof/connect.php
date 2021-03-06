<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Ecole Superieur de Technologie</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style03.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  
   <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/favicon.jpg" alt="" title=""></a><br><br>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menuu">
            <div class="social-links">
              <a href="https://twitter.com/ESTCasablanca" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/pages/Evenements-BDE-ESTC/476905922362661?fref=ts" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.youtube.com/channel/UCUosort7BSQpmzuo8eSjqNA" class="youtube"><i class="fa fa-youtube"></i></a>
            </div>

        </ul>
      </nav>

      <br><br>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="index.php#speakers">Formations</a></li>
          <li><a href="index.php#venue">Recherche</a></li>
          <li><a href="index.php#hotels">Activités</a></li>
          <li><a href="espace-etu.php">Espace Etudient</a></li>
          <li><a href="carriere.html">Carriere</a></li>
          <li><a href="index.php#contact">Calendrier</a></li>
          <li><a href="Forum.php">Forum</a></li>  
          <li class="buy-tickets"><a href="connect.php">Se connecter</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><br><br><br>

  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
     

 
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3">Se Connecter</h3>
                    </div>
 
                    <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
 
 
                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
 
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder=" User Name" class="form-control mb-3">
                            <input type="password" name="Password" placeholder=" Password" class="form-control mb-3">
                            <button class="btn btn-success mt-3" name="Login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

    </section>

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/favicon.jpg" alt="ESTC">
            <p>
                Ecole Supérieure de Technologie de Casa blanca </p>
                 
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>

              <li><i class="fa fa-angle-right"></i> <a href="index.php">Accueil</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="presentation.html">Présentation</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#speakers">Formations</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#venue">Recherche</a></li></li>
              <li><i class="fa fa-angle-right"></i> <a href="#hotels">Activités</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="espaceprof.php">Espace Professeur</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#hotels">Carriere</a></li> 
              <li><i class="fa fa-angle-right"></i> <a href="#contact">Calendrier</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="Forum.php">Forum</a></li>
            </ul>
          </div>

        

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Route d'Eljadida, <br>
              KM 7, CASABLANCA, Maroc<br></p>
              <strong>Phone:</strong>+212 522 231 560/565<br>
              <strong>Fixe:</strong> +212 522 252 245<br>
              <strong>Email:</strong> estcasa@est-uh2c.ac.ma<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/ESTCasablanca" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/pages/Evenements-BDE-ESTC/476905922362661?fref=ts" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.youtube.com/channel/UCUosort7BSQpmzuo8eSjqNA" class="youtube"><i class="fa fa-youtube"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <strong>ESTC</strong>
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="http://www.est-uh2c.ac.ma/index.php">WJF</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>



</body>

</html>
