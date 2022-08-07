<?php
session_start();

if(!isset($_SESSION['usernamee'])) {


header("location:sign in.php");
exit();

}


?>