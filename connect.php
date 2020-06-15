
    <?php

    require('header.php');

    ?>

  <main id="main" class="main-page">

    <section id="speakers-details" class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="p-3 mb-2  text-white">
                        <h3 align="center">Espace De Connexion</h3>
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
                            <button class="button button2" name="Login">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

    </section>

  </main>
<?php
  require('footer.php');
?>