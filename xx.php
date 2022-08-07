<?php

   

require 'db.php';


   $aff=mysqli_query($connect,"SELECT * FROM  panel "  );
   
    /*  variable */
   $id='id';
   $client='client';
   $reference='reference';
   $marque='marque';
   $name='name';
   $price='price';


   if(isset($_POST['id'])){
    $id=$_POST['id'];
}

if(isset($_POST['client'])){
    $client=$_POST['client'];
}

if(isset($_POST['reference'])){
    $reference=$_POST['reference'];
}


if(isset($_POST['name'])){
    $name=$_POST['name'];
}


if(isset($_POST['marque'])){
    $marque=$_POST['marque'];
}


if(isset($_POST['price'])){
    $price=$_POST['price'];
}


$add='';

/*     add order     */


if(isset($_POST['add'])){

    $add= " INSERT INTO panel VALUE('$id','$client','$reference','$name','$marque','$price') ";
        mysqli_query($connect,$add);
         
        header("Location:checkpanel.php");

        
      


 
}


?>
   