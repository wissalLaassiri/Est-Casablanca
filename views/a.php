


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
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-headerr">
          <h2>FORUM</h2>
          <p>Contenu Du Sujet </p>

        </div><br>
        <div class="row">
             
           <table class="table table-striped">
             <thead>
         <tr>
            <th scope="col">Sujet: <?= $topic['sujet'] ?></th>
         </tr>
         <?php if($pageCourante == 1) { ?>
         <tr>
            <td><?= $topic['contenu'] ?><br>
            </td>
         </tr>
         <?php } ?>
          <?php if($reponses->rowCount() > 0 ){   ?> 
         <tr><td> <div class="section-header">
          <h2><u>  Les reponses</u></h2>
        </div>
       </td></tr>

         <?php while($r = $reponses->fetch()) { ?>
         <tr>
            <td><?= $r['contenu'] ?>              
            </td>
         </tr>
         <?php } ?>
         <?php } ?>
      </table>


    <br />
       <form method="POST">
          <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Réponse</span>
      </div>
      <input type="text" class="form-control" placeholder="Votre réponse" name="topic_reponse" >
            <?php if(isset($reponse)) { echo $reponse; } ?>
    </div>
    <table><tr><td>
      <input type="submit" class="btn btn-primary btn-lg active" name="topic_reponse_submit" value="Poster ma réponse">
    </td>
    <td>
                <a href="FORUM.php" class="btn btn-primary btn-lg active" >Lister les Sujets</a>
    </td></tr></table><br><br><br><br>

  <?php
      for($i=1;$i<=$pagesTotales;$i++) {
         if($i == $pageCourante) {
          echo '<h3>Page ||';
            echo  $i.'  <br/>';
         } else {
            echo '<a href="topic.php?titre='.$get_titre.'&id='.$get_id.'&page='.$i.'">'.$i.'</a> ';
         }
      }
  ?>
        </form>
        <br/>      
    
       <?php if(isset($reponse_msg)) {
             echo $reponse_msg; } ?>

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

