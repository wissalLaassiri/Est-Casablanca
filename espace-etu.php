
   <!--==========================
    Header
  ============================-->
    <?php

    require('header-etu.php');

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
        <br><br><br>
        <div class="section-header">
          <h2>ici pous pouvez voir tous les cours tds/tps et les exames</h2>
        </div>
          <table class="table">
            <thead  class="thead-light">

              <tr>
                <th scope="col">les departements</th>
                <th scope="col"> semestre1</th>
               <th scope="col"> semestre2</th>
              <th scope="col"> semestre3</th>
                   <th scope="col"> semestre4</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">genie informatique</th>
                <td><A HREF="#gi">gi1</td>
                <td><A HREF="#gi">gi1</td>
                <td><A HREF="#gi">gi2</td>
                <td><A HREF="#gi">gi2</td>
              </tr>

              <tr>
                <th scope="row">genie mecanique</th>
              <td><A HREF="#gm">gm1</td>
                <td><A HREF="#gm">gm1</td>
                <td><A HREF="#gm">gm2</td>
                <td><A HREF="#gm">gm2</td>
              </tr>

              <tr>
                <th scope="row">genie procedes</th>
                <td><A HREF="#gp">gp1</td>
                <td><A HREF="#gp">gp1</td>
                <td><A HREF="#gp">gp2</td>
                <td><A HREF="#gp">gp2</td>
              </tr> 

              <tr>
               <th scope="row">genie electrique</th>
                           <td><A HREF="#ge">ge1</td>
                <td><A HREF="#ge">ge1</td>
                <td><A HREF="#ge">ge2</td>
                <td><A HREF="#ge">ge2</td>
              </tr>

               <tr>
                <th scope="row">TM</th>
                 <td><A HREF="#tm">tm1</A></td>
                <td><A HREF="#tm">tm1</A></td>
                <td><A HREF="#tm">tm2</A></td>
                <td><A HREF="#tm">tm2</A></td>
              </tr>
            </tbody>
          </table>
      </div>
 </section>
 <br><br><br><br>

 
<!----------------------GI------------------------------>      
 <section id="gi" class="wow fadeInUp">

      <div class="container-fluid">
          <br><br><br><br>
          <br><br><br><br>
        <div class="section-header">
          <h2>GI </h2>
        </div>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Cours</th>
              <th scope="col">Td/Tp</th>
              <th scope="col">Exams</th>
            </tr>
          </thead>
  <tbody>
    <tr>
      <td>    
       <?php 
              $dir = "prof/img/cour/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/cour/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?> </td>
 
      <td>  
       <?php 
              $dir = "prof/img/td/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/td/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?></td>
        <td>
                 <?php 
              $dir = "prof/img/ds/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/ds/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?>
        </td>
    </tr>
  </tbody>
</table>  
      </div>
 </section>

<!----------------------GP------------------------------>      
 <section id="gp" class="wow fadeInUp">

      <div class="container-fluid">
          <br><br><br><br>
          <br><br><br><br>
        <div class="section-header">
          <h2> GP </h2>
        </div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Cours</th>
              <th scope="col">Td/Tp</th>
              <th scope="col">Exams</th>
            </tr>
          </thead>
  <tbody>
    <tr>
<td>    
       <?php 
              $dir = "prof/img/cour2/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/cour2/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?> </td>
 
      <td>  
       <?php 
              $dir = "prof/img/td2/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/td2/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?></td>
        <td>
                 <?php 
              $dir = "prof/img/ds2/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/ds2/".$file."'>  $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?>
        </td>
    </tr>
  </tbody>
</table>  
      </div>
 </section>
<!----------------------Gm------------------------------>      
 <section id="gm" class="wow fadeInUp">

      <div class="container-fluid">
          <br><br><br><br>
          <br><br><br><br>
        <div class="section-header">
          <h2>GM</h2>
        </div>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Cours</th>
              <th scope="col">Td/Tp</th>
              <th scope="col">Exams</th>
            </tr>
          </thead>
  <tbody>
    <tr>
      <td>    
       <?php 
              $dir = "prof/img/courgm/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/courgm/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?> </td>
 
      <td>  
       <?php 
              $dir = "prof/img/tdgm/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/tdgm/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?></td>
        <td>
                 <?php 
              $dir = "prof/img/dsgm/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/dsgm/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?>
        </td>
    </tr>
  </tbody>
</table>  
      </div>
 </section>
<!----------------------Ge----------------------------->      
 <section id="ge" class="wow fadeInUp">
          <br><br><br><br>
          <br><br><br><br>
      <div class="container-fluid">

        <div class="section-header">
          <h2>GE </h2>
        </div>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Cours</th>
              <th scope="col">Td/Tp</th>
              <th scope="col">Exams</th>
            </tr>
          </thead>
  <tbody>
    <tr>
      <td>    
       <?php 
              $dir = "prof/img/courge/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/courge/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?> </td>
 
      <td>  
       <?php 
              $dir = "prof/img/tdge/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/tdge/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?></td>
        <td>
                 <?php 
              $dir = "prof/img/dsge/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/dsge/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?>
        </td>
    </tr>
  </tbody>
</table>  
      </div>
 </section>
<!----------------------tm------------------------------>      
 <section id="tm" class="wow fadeInUp">

      <div class="container-fluid">
          <br><br><br><br>
          <br><br><br><br>
        <div class="section-header">
          <h2>TM </h2>
        </div>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Cours</th>
              <th scope="col">Td/Tp</th>
              <th scope="col">Exams</th>
            </tr>
          </thead>
  <tbody>
    <tr>
      <td>    
       <?php 
              $dir = "prof/img/courtm/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/courtm/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?> </td>
 
      <td>  
       <?php 
              $dir = "prof/img/tdtm/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/tdtm/".$file."'> $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?></td>
        <td>
                 <?php 
              $dir = "prof/img/dstm/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<a href='prof/img/dstm/".$file."'>: $file <br/><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?>
        </td>
    </tr>
  </tbody>
</table>  
      </div>
 </section>
<!----------------------fc------------------------------>      
 
  </main>




  <!--==========================
    Footer
  ============================-->
  <?php
  require("Footer.php");
  ?>
