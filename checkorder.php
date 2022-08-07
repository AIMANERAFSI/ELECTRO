<?php      require 'db.php';

   
         $aff=mysqli_query($connect,"SELECT * FROM `order-info`");
   

                         /*  variable */

         $id='id';
         $donee='donee';


         if(isset($_POST['id'])){
         $id=$_POST['id'];
                  }

         if(isset($_POST['donee'])){
         $donee=$_POST['donee'];
                  }


                  /*  UPDATE STATUT ORDER   */

         $up='';


         if(isset($_POST['done'])){

         $up=  " UPDATE`order-info` set statut='$donee' WHERE id='$id' ";
         mysqli_query( $connect,$up);
         header("location:ordermanagement.php");
    
         echo  '  <div class="alert alert-info" role="alert" >
                                  UPDATE SUCCES!
         </div>';
}


?>