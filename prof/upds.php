


<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $a=explode('.',$_FILES['image']['name']);
      $b=end($a);
      $file_ext=strtolower($b);
      
      $extensions= array("jpeg","jpg","png","pdf","gif","mp4");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 4 MB';
      }
      
      if(empty($errors)==true){
      if($file_ext == "jpeg" or $file_ext =="jpg" or $file_ext =="png"){
         move_uploaded_file($file_tmp,"img/ds/".$file_name);
     }
     	if ($file_ext=="pdf") {
         move_uploaded_file($file_tmp,"img/ds/".$file_name);
        /* echo "<a href='img/topics/".$_FILES['image']['name']."'>Fichier PDF</a>";*/

      }
          header("location:espaceprof.php");
      }
      else{
         print_r($errors);
      }
   }
?>
<?php
require('header_prof.php');
?>

  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Ajouter des Exams:</h2>
          <p><h2>"DUT"</h2></p>
        </div>
      <form class="md-form" method="POST" enctype="multipart/form-data">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose file</span>
      <input type="file" name="image" >
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" placeholder="Upload your file"  type="submit"/>
    </div>
  </div>
</form>

 </div>

    </section>

  </main>
<?php
require('footer_prof.php');
?>