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
  <link href="css/style00.css" rel="stylesheet">


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
        <a href="index.php" class="scrollto"><img src="img/favicon.jpg" alt="" title=""></a><br><br></div>
            <div  class="pull-right">
            <div class="social-links">
              <a href="https://" ><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://www.facebook.com/pages/Evenements-BDE-ESTC/476905922362661?fref=ts" class="facebook"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://www.youtube.com/channel/UCUosort7BSQpmzuo8eSjqNA" class="youtube"><i class="fa fa-youtube"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div><br><br>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="pres.php">Présentation</a>
            <ul class="nav-menu">
              <li><a href="pres.php">Présentation</a></li>
              <li><a href="mot.php">Mot du Directeur</a></li>
              <li><a href="est.php">ESTC en chiffres</a></li>
            </ul>
          </li>
          <li><a href="formation.php">Formation</a>
            <ul class="nav-menu">
              <li>
                <a href="http://www.est-uh2c.ac.ma/organisation/Modalites2013-2014.pdf">Admission</a>
              </li>     
              <li>
                <a href="initial.php">Formation Initiale</a>
                <ul class="nav-menu">
              <li>
                <a href="initial.php">Diplôme universitaire de technologie (DUT) </a>
              </li>        
              <li>
                <a href="lp.php">Licence Professionnelle (LP)</a>
              </li>
                </ul>
              </li>        
              <li>
                <a href="cont.php">Formation Continue</a>
              </li>
            </ul>
          </li>
          <li><a href="depar.php">Départements</a>
            <ul class="nav-menu">
              <li>
                <a href="ge.php">Génie Eléctrique</a>
              </li>
              <li>
                <a href="gi.php">Génie Informatique</a>
              </li>
              <li>
                <a href="gp.php">Génie Des Procédés</a>
              </li>
              <li>
                <a href="gm.php">Génie Mécanique</a>
              </li>
              <li>
                <a href="tm.php">Technique De Management</a>
              </li>
            </ul>
          </li>
          <li><a href="recherche.php">Recherche</a></li>
          <li><a href="#">Coopération</a>
            <ul class="nav-menu">
              <li>
                <a href="natio.php">National</a>
            </li>
              <li>
                <a href="inter.php">International</a>
            </li>
            </ul>
          </li>
          <li><a  href="carriere.php">Carriere</a>
              <ul class="nav-menu">
              <li>
                <a href="stage.php">Stage</a>
            </li>
              <li>
                <a href="emp.php">Emploi</a>
            </li>
            </ul>
            </li>
            <li><a href="#">Calendrier</a>
            <ul class="nav-menu">
              <li>
                <a href="emploi.php">Emploi</a>
            </li>
              <li>
                <a href="calendrier.php">Calendrier Pédagogique</a>
            </li>
              <li>
                <a href="evenement.php">Evénements ESTC</a>
            </li>
            </ul>
          </li>
          <li><a href="activite.php">Activités</a></li>
          <li class="buy-tickets"><a href="#">ENT&nbsp;&nbsp;</a>
            <ul>
              <li>
                <a href="espace-etu.php">espace-etudiant</a>
              </li>
              <li>
                <a href="logout.php?logout">Se Deconnecter</a>
              </li>
            </ul>
          </li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
   
  </header><br><br><br><br>


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
        <a href="index.php" class="scrollto"><img src="img/favicon.jpg" alt="" title=""></a><br><br></div>
            <div  class="pull-right">
            <div class="social-links">
              <a href="https://" ><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;&nbsp;
              <a href="https://www.facebook.com/pages/Evenements-BDE-ESTC/476905922362661?fref=ts" class="facebook"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;
              <a href="https://www.youtube.com/channel/UCUosort7BSQpmzuo8eSjqNA" class="youtube"><i class="fa fa-youtube"></i></a>&nbsp;&nbsp;&nbsp;
            </div><br><br>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="pres.php">Présentation</a>
            <ul class="nav-menu">
              <li><a href="pres.php">Présentation</a></li>
              <li><a href="mot.php">Mot du Directeur</a></li>
              <li><a href="est.php">ESTC en chiffres</a></li>
            </ul>
          </li>
          <li><a href="formation.php">Formation</a>
            <ul class="nav-menu">
              <li>
                <a href="http://www.est-uh2c.ac.ma/organisation/Modalites2013-2014.pdf">Admission</a>
              </li>     
              <li>
                <a href="initial.php">Formation Initiale</a>
                <ul class="nav-menu">
              <li>
                <a href="initial.php">Diplôme universitaire de technologie (DUT) </a>
              </li>        
              <li>
                <a href="lp.php">Licence Professionnelle (LP)</a>
              </li>
                </ul>
              </li>        
              <li>
                <a href="cont.php">Formation Continue</a>
              </li>
            </ul>
          </li>
          <li><a href="depar.php">Départements</a>
            <ul class="nav-menu">
              <li>
                <a href="ge.php">Génie Eléctrique</a>
              </li>
              <li>
                <a href="gi.php">Génie Informatique</a>
              </li>
              <li>
                <a href="gp.php">Génie Des Procédés</a>
              </li>
              <li>
                <a href="gm.php">Génie Mécanique</a>
              </li>
              <li>
                <a href="tm.php">Technique De Management</a>
              </li>
            </ul>
          </li>
          <li><a href="#">Recherche</a>
            <ul class="nav-menu">
              <li>
                <a href="recherche.php">Structures de recherche</a>
            </li>
              <li>
                <a href="http://www.ensem.ac.ma/formation/recherche-et-doctorat/">Centre des études Doctorales</a>
            </li>
            </ul></li>

          
          <li><a href="#">Coopération</a>
            <ul class="nav-menu">
              <li>
                <a href="natio.php">National</a>
            </li>
              <li>
                <a href="inter.php">International</a>
            </li>
            </ul>
          </li>
          <li><a  href="carriere.php">Carriere</a>
              <ul class="nav-menu">
              <li>
                <a href="stage.php">Stage</a>
            </li>
              <li>
                <a href="emp.php">Emploi</a>
            </li>
            </ul>
            </li>
            <li><a href="#">Calendrier</a>
            <ul class="nav-menu">
              <li>
                <a href="emploi.php">Emploi</a>
            </li>
              <li>
                <a href="calendrier.php">Calendrier Pédagogique</a>
            </li>
              <li>
                <a href="evenement.php">Evénements ESTC</a>
            </li>
            </ul>
          </li>
          <li><a href="activite.php">Activités</a></li>
          <li class="buy-tickets"><a href="connect.php">ENT</a>
            <ul>
              <li>
                <a href="connect.php">espace-etudiant</a>
              </li>
              <li>
                <a href="connect.php">Espace_Professeur</a>
              </li>
            </ul>
          </li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
   
  </header><br><br><br>
  <?php
    }

?>