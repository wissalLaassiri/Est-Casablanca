
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
 
    <?php
    session_start();

      if(isset($_SESSION['User']))
      {
   
    echo  '<header  id="header" class="header-fixed">
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
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="index2.php">Accueil</a></li>
          <li><a href="presentation.php">Présentation</a><li>
          <li><a href="#speakers">Formations</a></li>
          <li><a href="#venue">Recherche</a></li>
          <li><a href="#hotels">Activités</a></li>
          <li><a href="espace-etu.php">Espace Etudient</a></li>
          <li class="menu-active"><a href="carriere.html">Carriere</a></li>
          <li><a href="#contact">Calendrier</a></li>
          <li><a href="Forum.php">Forum</a></li>  
          <li class="buy-tickets"><a href="logout.php?logout">Se deconnecter </a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><br><br><br><br><br><br><br><br';


    }

    else
    { echo'
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
          <li  ><a href="index2.php">Accueil</a></li>
          <li><a href="presentation.php">Présentation</a><li>
          <li><a href="#speakers">Formations</a></li>
          <li><a href="#venue">Recherche</a></li>
          <li><a href="#hotels">Activités</a></li>
          <li><a href="espace-etu.php">Espace Etudient</a></li>
          <li  class="menu-active"><a href="carriere.html">Carriere</a></li>
          <li><a href="#contact">Calendrier</a></li>
          <li><a href="Forum.php">Forum</a></li>  
          <li class="buy-tickets"><a href="connect.php">Se connecter</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><br><br><br><br><br><br><br><br';
    }

?>
   <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
  
        
            
<!--==========================
      Venue Section
    ============================-->
    <section id="escpace" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>ici pous pouvez voir tous les tds et les exames</h2>
        </div>
          <table class="table">
            <thead  class="thead-light">

              <tr>
                <th scope="col">les departements</th>
                <th scope="col"> semestre1</th>
               <th scope="col"> semestre2</th>
              <th scope="col"> semestre3</th>
                   <th scope="col"> semestre4</th>
                  <th scope="col"> semestre5</th>
                  <th scope="col"> semestre6</th>
                <th scope="col">autres</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">genie informatique</th>
                <td><A HREF="#gi1">gi1</td>
                <td><A HREF="gi11.htm">gi1</td>
                <td><A HREF="gi2.htm">gi2</td>
                <td><A HREF="gi22.htm">gi2</td>
                <td><A HREF="lpgi.htm">gil/glassri</td>
                <td><A HREF="lpgi1.htm">gil/glassri</td>
              </tr>

              <tr>
                <th scope="row">genie mecanique</th>
              <td><A HREF="gm1.htm">gm1</td>
                <td><A HREF="gm11.htm">gm1</td>
                <td><A HREF="gm2.htm">gm2</td>
                <td><A HREF="gm22.htm">gm2</td>
                <td><A HREF="lpgm.htm">x/x</td>
                <td><A HREF="lpgm1.htm">y/y</td>
              </tr>

              <tr>
                <th scope="row">genie procedes</th>
                       <td><A HREF="gp1.htm">gp1</td>
                <td><A HREF="gp11.htm">gp1</td>
                <td><A HREF="gp2.htm">gp2</td>
                <td><A HREF="gp22.htm">gp2</td>
                <td><A HREF="lpgp.htm">fhdfh</td>
                <td><A HREF="lpgp1.htm">licence</td>
              </tr> 

              <tr>
               <th scope="row">genie electrique</th>
                           <td><A HREF="ge1.htm">ge1</td>
                <td><A HREF="ge11.htm">ge1</td>
                <td><A HREF="ge2.htm">ge2</td>
                <td><A HREF="ge22.htm">ge2</td>
                <td><A HREF="lpge.htm">x/x</td>
                <td><A HREF="lpge1.htm">y/y</A></td>
              </tr>

               <tr>
                <th scope="row">TM</th>
                 <td><A HREF="tm1.htm">tm1</A></td>
                <td><A HREF="tm11.htm">tm1</A></td>
                <td><A HREF="tm2.htm">tm2</A></td>
                <td><A HREF="tm22.htm">tm2</A></td>
                <td><A HREF="lptm.htm">x/x</A></td>
                <td><A HREF="lptm1.htm">y/y</A></td>
              </tr>
<tr>
                <th scope="row">FC</th>
                       <td><A HREF="fc1.htm">S1</A></td>
                <td><A HREF="fc11.htm">S2</A></td>
                <td><A HREF="fc2.htm">S3</A></td>
                <td><A HREF="fc22.htm">S4</A></td>
                <td><A HREF="lpfc.htm">S5</A></td>
                <td><A HREF="lpfc1.htm">S6</A></td>
              </tr>
            </tbody>
          </table>
      </div>
 </section>
 <br><br><br><br>
 <section id="gi1" class="section-with-bg">
      <div class="row">
        <div class="container-fluid">

        <div class="section-header">
          <h2>Gi1</h2>
        </div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Module</th>
              <th scope="col">Cours</th>
              <th scope="col">Td/Tp</th>
              <th scope="col">Exams</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Analyse</th>
              <td><a href="upcours.php">Ajouter un cour</a></td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
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
