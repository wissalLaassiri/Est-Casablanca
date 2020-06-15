<?php

    require('header.php');

?>

  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Evénements ESTC</h2>

        </div>
        <div class="row">
        
          <table ><tr><td>
            
              <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
 
              <p>YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY<br>YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY</p> 

              <p>Et dolore blanditiis officiis non quod id possimus. Optio non commodi alias sint culpa sapiente nihil ipsa magnam. Qui eum alias provident omnis incidunt aut. Eius et officia corrupti omnis error vel quia omnis velit. In qui debitis autem aperiam voluptates unde sunt et facilis.</p>
            </td><td>
               <div class="col-md-6">
              <div class="details">
              
            
              <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
 
              <p>YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY<br>YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY</p> 

              <p>Et dolore blanditiis officiis non quod id possimus. Optio non commodi alias sint culpa sapiente nihil ipsa magnam. Qui eum alias provident omnis incidunt aut. Eius et officia corrupti omnis error vel quia omnis velit. In qui debitis autem aperiam voluptates unde sunt et facilis.</p>
                </div>
              </div>
            </td></tr>
          </table>
        </div>
      </div>

    </section>

  </main>


<?php

// SAUVGARDE LA VARIABLE hits DANS LE FICHIER DE SESSION
$hits =0;

// TRAITEMENT SUR LE FICHIER TEXTE
if(empty($hits)){
$fp=fopen("compteur.txt","a+"); //OUVRE LE FICHIER compteur.txt
$num=fgets($fp,4096); // RECUPERE LE CONTENUE DU COMPTEUR
fclose($fp); // FERME LE FICHIER
$hits=$num - -1; // TRAITEMENT
$fp=fopen("compteur.txt","w"); // OUVRE DE NOUVEAU LE FICHIER
fputs($fp,$hits); // MET LA NOUVELLE VALEUR
fclose($fp); // FERME LE FICHIER
}
else echo "no";

?>
<br><br>
<div class="progress">
  <div class="progress-bar" role="progressbar" hieght="40%" style="width: 25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
          <?php
              // AFICHAGE DU COMPTEUR

        echo"<b>NB :$hits </b>";

      ?>
  </div>
</div>


 
     <?php
      require ("footer.php");
    ?>