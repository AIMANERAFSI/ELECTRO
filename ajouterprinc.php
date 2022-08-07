<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ajouter</title>

    <style>

      .td{

        width:30%;
        margin-left:35%;
      }
      
    </style>
</head>
<body>





<form  method="POST" class="td">



<div class="mb-3" >
  <label for="formFile" class="form-label">img </label>
  <input class="form-control"  id="formFile" name="img" required>
</div>

<div class="mb-3" >
  <label for="formFile" class="form-label">genre </label>
  <input class="form-control"  id="formFile" name="genre" >
</div>


<div class="mb-3" >
  <label for="formFile" class="form-label">colection</label>
  <input class="form-control"  id="formFile" name="colection" >
</div>

<div class="mb-3" >
  <label for="formFile" class="form-label">shop-now</label>
  <input class="form-control"  id="formFile" name="shopnow" >
</div>





  <button type="submit" class="btn btn-primary" name="add">ajouter</button>
  
</form>

<br/>
<form method="POST" class="td">
<button type="submit" class="btn btn-primary" name="back" >   back</button>

</form>





<?php

   

   require 'db.php';
   $aff=mysqli_query($connect,"SELECT * FROM principcart ");

/*  variable */
   $id='id';
   $genre='genre';
   $img='img';
   $colection='colection';
   $shopnow='shop-now';
  

   

   if(isset($_POST['img'])){
       $img=$_POST['img'];
   }

   if(isset($_POST['genre'])){
    $genre=$_POST['genre'];
}
   if(isset($_POST['colection'])){
    $colection=$_POST['colection'];
}
if(isset($_POST['shopnow'])){
  $shopnow=$_POST['shopnow'];

  }


$add='';


/*     add users     */


if(isset($_POST['add'])){

    $add= " INSERT INTO principcart VALUE ('$id','$img','$genre','$colection','$shopnow') ";
        mysqli_query($connect,$add);
        header("location=admin bord.php");
        echo '  <div class="alert alert-info" role="alert" >
                                  ADD SUCCES!
              </div>';

}
   




if(isset($_POST['back'])){
  header("location:admin bord.php");
}






?>




    
</body>
</html>