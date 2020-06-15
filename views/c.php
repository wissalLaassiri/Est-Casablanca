
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
  <link href="css/style00.css" rel="stylesheet">


  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <?php
  require("header.php");
  ?>

  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn" >
      <div class="container">
        <div class="section-headerr">
          <h2>FORUM</h2>
          <p>Creation d'Un Nouveau Sujet</p>

        </div><br>
        <div class="row">
             
<form class="fntopic" method="POST">
     <table class="table table-striped">
       <thead>
        <tr >
         <th class="main">Nouveau Topic</th>
         <th></th>
      </tr></thead>
      <tr>
         <td>Sujet</td>
         <td><input type="text" name="tsujet" size="70" maxlength="70" /></td>
      </tr>
<tr>
         <td>Catégorie</td>
         <td>
         <?= $categorie ?>
         </td>
      </tr>
      <tr>
         <td>Sous-Catégorie</td>
         <td>
            <select name="souscategorie">
               <?php while($sc = $souscategories->fetch()) { ?>
               <option value="<?= $sc['id'] ?>"><?= $sc['nom'] ?></option>
               <?php } ?>
            </select>
         </td>
      </tr>
      <tr>
         <td>Contenu</td>
         <td>
            <input class="form-control form-control-lg" type="text" name="tcontenu" >
        </td>
      </tr>
     <!-- <tr>
         <td>Me notifier des réponses par mail</td>
         <td><input type="checkbox" name="tmail" /></td>
      </tr> -->
      <tr>
         <td colspan="2"><input type="submit"class="btn btn-primary btn-lg active"  name="tsubmit" value="Poster le Sujet" /></td>
         <td colspan="2"><a href="FORUM.php" class="btn btn-primary btn-lg active" >Lister les Sujets</a></td>
      </tr>
      <?php if(isset($terror)) { ?>
      <tr>
         <td colspan="2"><?= $terror ?></td>
      </tr>
      <?php } ?>
   </table>
</form>

        </div>
      </div>

    </section>

  </main>

  <!--==========================
    Footer
  ============================-->
   <?php
  require("Footer.php");
  ?>


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

