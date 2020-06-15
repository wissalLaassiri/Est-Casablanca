
  <!--==========================
    Header
  ============================-->
    <?php

    require('header.php');

?>
 
<main id="main">
    <section id="intro">
      <br>  <table align="center">
    <tr>
       <td >  
        </td>
        <td  class="img-responsive" > 
              <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
              <!--Indicators-->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
              </ol>
              <!--/.Indicators-->
              <!--Slides-->

        <div class="carousel-inner" role="listbox">
           <div class="carousel-item active">
            <div class="view">
              <section id="slideshow">
                <figure>
                <table><tr><td width="600" height="300"><div class="wow fadeInUp"><p class="small-caps"><font color="#FFFFFF"><b>
                  <h2>Forum EST-ENTREPRISE</h2></br> littéralement la « toile (d’araignée) </br>à l'échelle mondiale », communément appelé le Web,</br> et parfois la Toile, est un système hypertexte</br> public fonctionnant sur Internet. Le Web permet</br> de consulter, avec un navigateur, <a href="img\actualite\forum2.jpg">lire la suite </a></b>
                </font></p></div></div></td>
  
<td>
 <?php 
              $dir = "img/menu/";
              //  si le dossier pointe existe
              if (is_dir($dir)) {

                 // si il contient quelque chose
                 if ($dh = opendir($dir)) {

                     // boucler tant que quelque chose est trouve
                     while (($file = readdir($dh)) !== false) {

                         // affiche le nom et le type si ce n'est pas un element du systeme
                         if( $file != '.' && $file != '..') {
                         echo "<div class='span3 wow flipInX center'><img src='img/menu/".$file."' width='400' height='270'></div><br/><br><br><br>";
                         }
                     }
                     // on ferme la connection
                     closedir($dh);
                 }
              }
              ?>

          </div>
                </td>
                   </tr></table> 
                </figure>     
              </section>

              <div class="mask rgba-black-light"></div>
                  </div>
            </div>
                <div class="carousel-item">
                  <!--Mask color-->
                  <div class="view">
                    <figure>

                     <table>
                      <tr>
                        <td width="600" height="300">
                          <div class="wow fadeInUp">
                            <p class="small-caps">
                            <font color="#FFFFFF"> <h2>Riche, plurielle, lieu d'enseignement</h2></br> <b>et de recherche,l'ESTC a longtemps assuré des formations</br> de très haut niveau : Formation initiale,formation </br>continue et doctorat.
                            Bienvenue à </br>l'École Supérieure de Technologie !
                                  <a href="img\actualite\a.jpg">lire la suite </a></b>

                            </font>
                          </p>
                          </div>
                        </div>


                      </td>
  
<td>
<div class="span3 wow flipInX center"><img src="img\actualite\a.jpg" width="400" height="270">
</div>

          </div>
                </td>
                   </tr></table>
                    </figure>  
                    <div class="mask rgba-black-strong"></div>
                  </div>
                </div>


      <div class="carousel-item">
                  <!--Mask color-->
                  <div class="view">
                    <figure>
                     <table><tr><td width="600" height="300"><div class="wow fadeInUp"><p class="small-caps"><font color="F0F8FF"><h2>Synonymes de World Wide Web</h2></br><b>
                      Le World Wide Web est désigné</br> par de nombreux noms et abréviations synonymes</br> : WorldWideWeb, World Wide Web, World-wide Web</br>, Web, WWW, W3, Toile d’araignée mondiale,</br> Toile mondiale, Toile. Certains ont disparu.
                      <a href="img\actualite\maker.jpg">lire la suite </a></b>
                      </font></p></div></div></td>
  
              <td>
              <div class="span3 wow flipInX center"><img src="img\actualite\maker.jpg" width="400" height="270"></div>

          </div>
                </td>
                   </tr></table>
                    </figure>  
                    <div class="mask rgba-black-slight"></div>
                  </div>
                                   
                </div>
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
            </div>
        <!--/.Carousel Wrapper-->
          </td>

        </tr>
        


</table>  </section>


    <!--==========================
      actualite Section
    ============================-->
    <section id="actualite" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>&nbsp;&nbsp;&nbsp;Actualités</h2>
        </div>

        <div class="tab-content row justify-content-center">
          <!-- Schdule Page 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="Page-1">

            <div class="row actualite-item"> 
              <div class="col-md-10">
                <h4>نتيجة مباراة توظيف متصرف واحد من الدرجة الثالثة تخصص الكيمياء</h4>
                <p>Résultat du concours de recrutement d’un Administrateur 3ème Grade ; Spécialite : Chimie appliquée ... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="xxxxxxx.pdf">Lire la suite &raquo;</a></p>
              </div>
            </div>

            <div class="row actualite-item"> 
              <div class="col-md-10">
                <h4>إعلان عن توظيف بالتعاقد خاص بطلبة سلك الدكتوراه</h4>
                <p>...ل إعلان عن توظيف بالتعاقد خاص بطلبة سلك الدكتوراه &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="xxxxxxx.pdf">Lire la suite &raquo;</a></p>
              </div>
            </div>

            <div class="row actualite-item"> 
              <div class="col-md-10">
                <h4>إعلان نتائج دراسة ملفات المترشحين لمبارة توظيف أستاذ التعليم العالي</h4>
                <p>علان نتائج دراسة ملفات المترشحين لمبارة توظيف أستاذ التعليم العالي مساعد دورة 30 أكتوبر 2018 تخصص الفرنسية.... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="xxxxxxx.pdf">Lire la suite &raquo;</a></p>
              </div>
            </div>

            <div class="row actualite-item"> 
              <div class="col-md-10">
                <h4>AVIS INTERNAT</h4>
                <p><span>En raison des places limitées, le logement à l’internat est réservé uniquement aux étudiants du Diplôme Universitaire de Technologie (DUT). 
        Les places seront données par priorité selon le lieu de résidence des parents et son éloignement de l’Ecole.... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="xxxxxxx.pdf">Lire la suite &raquo;</a></span></p>
              </div>
            </div>

            <div class="row actualite-item"> 
              <div class="col-md-10">
                <h4>إعلان نتائج دراسة ملفات المترشحين لمبارة توظيف أستاذ التعليم العالي</h4>
                <p>علان نتائج دراسة ملفات المترشحين لمبارة توظيف أستاذ التعليم العالي مساعد دورة 30 أكتوبر 2018 تخصص الفرنسية.... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="xxxxxxx.pdf">Lire la suite &raquo;</a></p>
              </div>
            </div>

            <div class="row actualite-item"> 
              <div class="col-md-10">
                <h4>إعلان نتائج دراسة ملفات المترشحين لمبارة توظيف أستاذ التعليم العالي</h4>
                <p>علان نتائج دراسة ملفات المترشحين لمبارة توظيف أستاذ التعليم العالي مساعد دورة 30 أكتوبر 2018 تخصص الفرنسية.... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="xxxxxxx.pdf">Lire la suite &raquo;</a></p>
              </div>
            </div>

            <div class="row actualite-item"> 
              <div class="col-md-10">
                <h4>International Conference on:</h4>
                <p>Renewable Energies, Power Systems and Green Inclusive Economy(REPS & GIE-2018):.... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="xxxxxxx.pdf">Lire la suite &raquo;</a></p>
              </div>
            </div>

          </div>
          <!-- End Schdule Page 1 -->


        </div>

      </div>

    </section>

  

  </main>

    <?php
      require ("footer.php");
    ?>

