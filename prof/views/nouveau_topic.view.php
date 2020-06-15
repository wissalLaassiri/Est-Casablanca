
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
  <?php
    session_start();

      if(isset($_SESSION['User']))
      {
   require('views/c.php');

      }
      else
      { echo'
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/favicon.jpg" alt="" title=""></a>
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
          <li  ><a href="profil.php">Profil</a></li>
          <li><a href="espaceprof.php">Espace Professeur</a></li>
          <li class="menu-active"><a href="Forum.php">Forum</a></li>  
          <li class="buy-tickets"><a href="connect.phpt">Se connecter </a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><br><br><br><br><br><br><br>';
      }

  ?>
  <br><br><br><br>
  <p align="center">Veuillez se connecter d'abord !!</p>
<br><br><br><br><br>
<br><br><br><br>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/uu.png" alt="ESTC">
            <p>
                Ecole Supérieure de Technologie </p>
                 
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="index2.php">Acceuil</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="Forum.php">Forum</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#speakers">Formation</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#schedule">Actualités</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#venue">Recherche</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#hotels">Activités</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#contact">contact</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="connect.php">Se connecter </a></li>
              
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
        Designed by <a href="https://bootstrapmade.com/">WJF</a>
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

