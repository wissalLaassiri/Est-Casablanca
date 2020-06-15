<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:connect.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from etudient where nom='".$_POST['UName']."' and cin='".$_POST['Password']."'";
            $query2="select * from professeur where nom='".$_POST['UName']."' and pwd='".$_POST['Password']."'";
            $query3="select * from admin where nom='".$_POST['UName']."' and pwd='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);
            $result2=mysqli_query($con,$query2);
            $result3=mysqli_query($con,$query3);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:index.php");
            }

            elseif (mysqli_fetch_assoc($result2)) {
                $_SESSION['User']=$_POST['UName'];
                header("location:prof/espaceprof.php");
            }

            elseif (mysqli_fetch_assoc($result3)) {
                $_SESSION['User']=$_POST['UName'];
                header("location:mot.html");            }

            else
            {
                header("location:connect.php?Invalid= Please Enter Correct User Name and Password ");
            }
       




       }

    }
    else
    {
        echo 'Cette page ne marche pas maintenant !!';
    }
 
?>