
<?php

   

require 'db.php';


   $aff=mysqli_query($connect,"SELECT * FROM  `order-info` "  );
   
    /*  variable */
   $id='id';
   $firstname='first-name';
   $lastname='last-name';
   $email='email';
   $address='address';
   $city='city';
   $country='country';
   $zipcode='zip-code';
   $tel='tel';
   $payement='Payement a livraison';
   $statut='Wait';
   $refp='refp';
   $username='username';
   

   
  


   if(isset($_POST['id'])){
    $id=$_POST['id'];
}


   if(isset($_POST['first-name'])){
    $firstname=$_POST['first-name'];
}

   if(isset($_POST['last-name'])){
       $lastname=$_POST['last-name'];
   }
   if(isset($_POST['email'])){
    $email=$_POST['email'];
}
if(isset($_POST['address'])){
  $address=$_POST['address'];
}
if(isset($_POST['city'])){
  $city=$_POST['city'];
}

   if(isset($_POST['country'])){
    $country=$_POST['country'];
}

if(isset($_POST['zip-code'])){
    $zipcode=$_POST['zip-code'];
}

if(isset($_POST['tel'])){
    $tel=$_POST['tel'];
}



if(isset($_POST['Payement a livraison'])){
    $payement=$_POST['Payement a livraison'];
}

if(isset($_POST['wait'])){
    $statut=$_POST['wait'];
}
if(isset($_POST['refp'])){
    $refp=$_POST['refp'];
}

if(isset($_POST['username'])){
    $username=$_POST['username'];
}



$add='';


/*     add order     */


if(isset($_POST['order'])){

    $add= " INSERT INTO `order-info` VALUE('$id','$username','$firstname','$lastname','$email','$address','$city','$country','$zipcode','$tel','$payement','$statut', '$refp' ) ";
        mysqli_query($connect,$add);
        header("location:alertfinich.php"); 

}

  
?>

