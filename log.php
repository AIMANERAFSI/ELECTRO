<?php 

if(isset($_POST['log'])){
   
    unset($_SESSION['email']);
    header("location:index.php");
    exit();

}
?>