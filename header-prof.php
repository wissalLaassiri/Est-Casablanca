<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Ecole Superieur de Technologie</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="viewport" content="width=device-width"/>

  <!-- Favicons -->
  <link href="img/oo.png" rel="icon">
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
  <link href="css/style01.css" rel="stylesheet">


<!-- Start WOWSlider.com HEAD section -->
<!-- End WOWSlider.com HEAD section -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<body>
  <!--==========================
    Header
  ============================-->
    <?php
    session_start();

      if(isset($_SESSION['User']))
      {

     ?>
<header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/favicon.jpg" alt="" title=""></a><br><br></div>
            <div  class="pull-right">
            <div class="social-links">
              <a href="https://" ><i class="fa fa-google-plus"></i></a>
              <a href="https://www.facebook.com/pages/Evenements-BDE-ESTC/476905922362661?fref=ts" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.youtube.com/channel/UCUosort7BSQpmzuo8eSjqNA" class="youtube"><i class="fa fa-youtube"></i></a>
            </div><br><br>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="index.php">Présentation</a>
            <ul class="nav-menu">
              <li>
                <a href="espace-etu.php">Présentation</a>
              </li>
            </ul>
          </li>
          <li><a href="formation.php">Formation</a>
            <ul class="nav-menu">
              <li>
                <a href="http://www.est-uh2c.ac.ma/organisation/Modalites2013-2014.pdf">Admission</a>
              </li>     
              <li>
                <a href="initial.php">DUT</a>
              </li>        
              <li>
                <a href="initial.php">LP</a>
              </li>
            </ul>
          </li>
          <li><a href="recherche.php">Recherche</a></li>
          
          <li><a href="activite.php">Activités</a></li>
          <li><a href="espace-etu.php">Département</a></li>
          <li><a href="carriere.php">Carriere</a></li>
          <li><a href="index.php#contact">Calendrier</a></li>
          <li class="buy-tickets"><a href="#">Ent &nbsp;&nbsp;</a>
            <ul>
              <li>
                <a href="prof/espaceprof.php">Espace_Professeur</a>
              </li>
              <li>
                <a href="logout.php?logout">Se Deconnecter</a>
              </li>
            </ul>
          </li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
   
  </header><br><br><br><br><br><br><br>


  <?php
    }

    else
    {
    ?> 
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/favicon.jpg" alt="" title=""></a><br><br>
      </div>
      <br><br>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="index.php">Présentation</a>
            <ul class="nav-menu">
              <li>
                <a href="espace-etu.php">Présentation</a>
              </li>
            </ul>
          </li>
          <li><a href="formation.php">Formation</a>
            <ul class="nav-menu">
              <li>
                <a href="http://www.est-uh2c.ac.ma/organisation/Modalites2013-2014.pdf">Admission</a>
              </li>     
              <li>
                <a href="initial.php">DUT</a>
              </li>        
              <li>
                <a href="initial.php">LP</a>
              </li>
            </ul>
          </li>
          <li><a href="recherche.php">Recherche</a></li>
          
          <li><a href="activite.php">Activités</a></li>
          <li><a href="espace-etu.php">Département</a></li>
          <li><a href="carriere.php">Carriere</a></li>
          <li><a href="index.php#contact">Calendrier</a></li>
          <li class="buy-tickets"><a href="connect.php">Ent</a>
            <ul>
              <li>
                <a href="connect.php">Espace_Professeur</a>
              </li>
            </ul>
          </li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
   
  </header><br><br><br><br><br><br><br>
  <?php
    }

?>