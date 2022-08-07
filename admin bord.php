
<?php                require 'authadmin.php';             ?>

<!DOCTYPE html>

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin panel</title>

                   <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="css/styleeee.css">

                    <!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fon-awesomecostum1.css">

        

         <style> 

                   .btn {border: white;font-size: 15px;display: inline-block;padding: 6px 12px;margin-bottom: 0;
                    font-weight: 400;line-height: 1.42857143;text-align: center;white-space: nowrap;vertical-align: middle;
                    -ms-touch-action: manipulation;touch-action: manipulation; cursor: pointer; -webkit-user-select: none;
                    -moz-user-select: none; -ms-user-select: none;user-select: none;background-image: none;
                    border: 1px solid transparent;border-radius: 4px; }  

                    .btn-link, .btn-link.active, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
                    background-color: white; -webkit-box-shadow: none;box-shadow: none;  }

    
        </style>
         

</head>

<body>

<div class="container">
<div class="topbar">
<div class="logo">
                                     <!-- TOP HEADER -->
                      <h2>ELECTRO.</h2>

</div>

<form action="log.php" method="POST">   

<div id="top-header">
            
                    <ul class="header-links pull-right">
						
					<a ><i class="fa fa-user-o"></i>  
<?php

                        echo $_SESSION['usernamee']; ?> </a>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<button type="submit" class="btn btn-link" name="log"> <i class="fa fa-sign-out"></i>Log out</button>

					</ul>
</div>
</form>
</div>
                                   <!-- /TOP HEADER -->

                                   <!--  SIDEBAR -->

                                   
<div class="sidebar">

                    <ul>

                          <li>
                          <a href="admin bord.php">
                          <i class="fa fa-home" aria-hidden="true"></i>
                          <div>Dashboard</div>
                          </a>
                          </li>
  


                          <li>
                          <a href="ajouter.php">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                          <div>Add item</div>
                          </a>
                          </li>



                          <li>
                          <a href="supprimer.php">
                          <i class="fa fa-trash-o" aria-hidden="true"></i>
                          <div>Delete item</div>
                          </a>
                          </li>


                          <li>
                          <a href="update.php">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                          <div>Update item</div>
                          </a>
                          </li>


                          <li>
                          <a href="user.php">
                          <i class="fa fa-users" aria-hidden="true"></i>
                          <div>User</div>
                          </a>
                          </li>



                          <li>
                          <a href="deleteuser.php">
                          <i class="fa fa-users" aria-hidden="true"></i>
                          <div>Delete User</div>
                          </a>
                          </li>

                         


                          <li>
                          <a href="ajouterprinc.php">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                          <div>Add card</div>
                          </a>
                          </li>

                          <li>
                          <a href="supprimerprinc.php">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                          <div>Delet card </div>
                          </a>
                          </li>

                          <li>
                          <a href="viewcontact.php">
                          <i class="fa fa-question" aria-hidden="true"></i>

                          <div> Contact</div>
                          </a>
                          </li>


                          <li>
                          <a href="sendmail.php">
                          <i class="fa fa-question" aria-hidden="true"></i>

                          <div> Send email</div>
                          </a>
                          </li>
               
                    </ul>

</div>

                             <!--  SIDEBAR -->

                             <!-- BODY -->

 <?php                     require 'db.php';


        $dash_Smartphone_query = "SELECT * FROM product where category= 'Smartphones'";

        $dash_Smartphone_query_run = mysqli_query($connect,$dash_Smartphone_query);

                if($Smartphone_total = mysqli_num_rows($dash_Smartphone_query_run)) ;{


                            echo '

<div class="main">
<div class="cards">
<div class="card">
<div class="card-content"> <div class="number">  '.$Smartphone_total.'</div>
<div class="card-name">Smartphone</div>
</div>
<div class="icon-box">

                    <i class="fa fa-mobile" aria-hidden="true"></i>

</div>
</div>   ';}

?>    




            
<?php                     require 'db.php';
           
    
            $dash_Laptop_query = "SELECT * FROM product where category= 'laptop'";

            $dash_Laptop_query_run = mysqli_query($connect,$dash_Laptop_query);
            
                if($Laptop_total = mysqli_num_rows($dash_Laptop_query_run)) ;{
            
            
            
                           echo '
                

<div class="card">
<div class="card-content">
<div class="number"> '.$Laptop_total.'     </div>
<div class="card-name">Laptops</div>
</div>
<div class="icon-box">

                <i class="fa fa-laptop" aria-hidden="true"></i>
 </div>
</div>  ';  }
?>      



           
        
<?php                      require 'db.php';


            $dash_accessories_query = "SELECT * FROM product where category= 'accessories'";

            $dash_accessories_query_run = mysqli_query($connect,$dash_accessories_query);
            
                if($accessories_total = mysqli_num_rows($dash_accessories_query_run)) ;{
            
            
            
                                      echo '
                

<div class="card">
<div class="card-content">
<div class="number"> '.$accessories_total.'     </div>
<div class="card-name">Accessories</div>
</div>
<div class="icon-box">
<i class="fa fa-amazon" aria-hidden="true"></i>
</div>
</div> ';   }
                
?>



<?php                            require 'db.php';

         $dash_user_query = "SELECT * FROM user";

         $dash_user_query_run = mysqli_query($connect,$dash_user_query);

              if($user_total = mysqli_num_rows($dash_user_query_run)) ;{

                echo '

<div class="card">
<div class="card-content">
<div class="number">  '.$user_total.'    </div> 
<div class="card-name">User</div>
</div>
<div class="icon-box">

                    <i class="fa fa-users" aria-hidden="true"></i>
</div>
</div>  ';   }
?>             
           

           




<?php                       require 'db.php';

          $dash_order_query = "SELECT * FROM `order-info` WHERE statut='Wait' ";

          $dash_order_query_run = mysqli_query($connect,$dash_order_query);

                 if($order_total = mysqli_num_rows($dash_order_query_run)) ;{


                                    echo '
      
<div class="card">
<div class="card-content">
<div class="number">  '.$order_total.'    </div> 
<div class="card-name" ><a href="ordermanagement.php">Order Pending</div>
</div></a>
<div class="icon-box">

                    <i class="fa fa-product-hunt" aria-hidden="true"></i>
</div> 
</div>  ';  }
?>        
              

             



 
<?php                 require 'db.php';

          $dash_order_query = "SELECT * FROM `order-info` WHERE statut='Done' ";

          $dash_order_query_run = mysqli_query($connect,$dash_order_query);

                  if($order_total = mysqli_num_rows($dash_order_query_run)) ;{
              
                               echo '
      
<div class="card">
<div class="card-content">
<div class="number">  '.$order_total.'    </div> 
<div class="card-name"><a href="ordermanagement1.php">Order Done</div>
</div></a>
<div class="icon-box">

                    <i class="fa fa-check" aria-hidden="true"></i>
</div> 
</div>  ';  }
?>          
           

           
               
</div>
</div>
</div>
                                         <!-- BODY -->
    
</body>

</html>
