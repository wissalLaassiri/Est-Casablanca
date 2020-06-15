<?php
  require('header_prof.php');
?>
<?php
 session_start();

try
{
  // On se connecte à MySQL
  $db = new PDO('mysql:host=localhost;dbname=estc;charset=utf8', 'root', '');
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

    if(isset($_SESSION['User']))
    {
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $db->query('SELECT * FROM Professeur WHERE nom=\'' . $_SESSION['User'] . '\'');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
<?php
  require('header_prof.php');
?>



                    <!------ Include the above in your HEAD tag ---------->


    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <?php   echo "<img src='".$donnees['img']." ' alt=' '/>";?><br><br><br><br>
                            <div class="file btn btn-lg btn-primary">
                                    <?php echo 'Mr/Mme  '.$_SESSION['User'] ; ?>                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h2><?php echo 'Mr/Mme  '.$_SESSION['User'] ; ?></h2>
                                    <h4><font color="#00008B">
                                            Professeur en departement : <?php echo $donnees['departement']; ?></font>
                                    </h4>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $donnees['id']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $donnees['nom'].' '.$donnees['prenom']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $donnees['Email']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $donnees['num_phone']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $donnees['profession']; ?></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div> <br><br>';
<?php
}
}
$reponse->closeCursor(); // Termine le traitement de la requête

?>

<?php
  require('footer_prof.php');
?>