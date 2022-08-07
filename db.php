
                   

<?php

                                  /*  connection to database    */

$user='root';
$host='localhost';
$pass='';
$db='electro';
$connect= mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){

echo '  erreur connect to database  ';
}




?>