
<?php
 
    $con=mysqli_connect('localhost','root','','estc');
 
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>