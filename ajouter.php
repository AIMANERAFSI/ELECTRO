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

          .td{  width:30%; margin-left:35%; }

       
     </style>

</head>

<body>


                   <form  method="POST" class="td">

<div class="mb-3" >
  <label for="formFile" class="form-label"> reference</label>
  <input  class="form-control"  id="formFile" name="reference" required>
  
</div>

<div class="mb-3" >
  <label for="formFile" class="form-label">img Principale</label>
  <input class="form-control"  id="formFile" name="img" required>
</div>

<div class="mb-3" >
  <label for="formFile" class="form-label">img1</label>
  <input class="form-control"  id="formFile" name="img1" >
</div>

<div class="mb-3" >
  <label for="formFile" class="form-label">img2</label>
  <input class="form-control"  id="formFile" name="img2" >
</div>

<div class="mb-3" >
  <label for="formFile" class="form-label">img3</label>
  <input class="form-control"  id="formFile" name="img3" >
</div>

 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >marque</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="marque" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="price" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">new</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="new">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">sale</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="sale">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">category</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="category" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="description" required>
  </div>


                <button type="submit" class="btn btn-primary" name="add">ajouter</button>
  
                                       </form>

<br/>

                      <form method="POST" class="td">

          <button type="submit" class="btn btn-primary" name="back" >   back</button>

                                </form>


<?php               require 'db.php';

               $aff=mysqli_query($connect,"SELECT * FROM product");

                                       /*  variable */


              $reference='reference';
              $img='img';
              $img='img1';
              $img='img2';
              $img='img3';
              $name='name';
              $marque='marque';
              $price='price';
              $new='new';
              $sale='sale';
              $category='category';
              $description='description';

  

                  if(isset($_POST['reference'])){
                  $reference=$_POST['reference'];
                                }

                  if(isset($_POST['img'])){
                  $img=$_POST['img'];
                                }

                  if(isset($_POST['img1'])){
                  $img1=$_POST['img1'];
                                }

                  if(isset($_POST['img2'])){
                  $img2=$_POST['img2'];
                                }

                  if(isset($_POST['img3'])){
                   $img3=$_POST['img3'];
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

                  if(isset($_POST['new'])){
                  $new=$_POST['new'];
                                 }

                  if(isset($_POST['category'])){
                  $category=$_POST['category'];
                                 }

                  if(isset($_POST['description'])){
                  $description=$_POST['description'];
                                 }



                               /*     add users     */

                  $add='';



                  if(isset($_POST['add'])){

                  $add= " INSERT INTO product  VALUE('$reference','$img','$img1','$img2','$img3','$name','$marque','$price','$new','$category','$description') ";
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