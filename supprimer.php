<!DOCTYPE html>

<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>supprimer</title>


                        <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

      <style>
               .td{  width:30%;margin-left:35%;  }

      </style>

</head>



<body>

                     <form  method="POST" class="td">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">reference</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="reference" required>
  </div>


              <button type="submit" class="btn btn-primary"  name="delet">Suppri</button>

                                    </form>

<br/>



                          <form method="POST" class="td">

         <button type="submit" class="btn btn-primary" name="back" >   back</button>

                                     </form>




<?php                          require 'db.php';

   
 $aff=mysqli_query($connect,"SELECT * FROM product");

                                   /*  variable */

 $reference='reference';

  
if(isset($_POST['reference'])){
    $reference=$_POST['reference'];
}


                    /*  delet product   */

                    $Delet='';

if(isset($_POST['delet'])){

  $Delet= "DELETE  FROM product WHERE reference='$reference' ";
       mysqli_query( $connect,$Delet);
       header("location=admin bord.php");
       
       echo  '  <div class="alert alert-info" role="alert" >
                                  DELETE SUCCES!
            </div>';
            
}

if(isset($_POST['back'])){
  header("location:admin bord.php");
}


?>


</body>

</html>