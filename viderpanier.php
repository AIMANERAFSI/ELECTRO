<?php                          require 'db.php';

   
 $aff=mysqli_query($connect,"SELECT * FROM panel ");

                                   /*  variable */

                                   $id='id';
                                   $client='client';

  
 

if(isset($_POST['client'])){
    $client=$_POST['client'];
}   
  



                    /*  delet product   */

                    $Delet='';

if(isset($_POST['vider'])){

  $Delet= "DELETE  FROM panel WHERE  client ='$client' ";
       mysqli_query( $connect,$Delet);
       header("location:checkpanel.php");


       echo  '  <div class="alert alert-info" role="alert" >
       DELETE SUCCES!
</div>';
    }
