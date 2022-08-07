<!DOCTYPE html>
<html lang="en">

    <head>
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Electro - </title>

			<link rel="stylesheet" href="css/styleindx.css">
			


		
    </head>


	<body>




		                                                  <!-- HEADER -->
		<header>
			                                            <!-- TOP HEADER -->
			<div id="top-header">
			<div class="container">
					<ul class="header-links pull-left">
						<li><a href=""><i class="fa fa-phone"></i> +212 6 49 52 30 22</a></li>
						<li><a href=""><i class="fa fa-envelope-o"></i>electro.darsi@gmail.com</a></li>
						<li><a href=""><i class="fa fa-map-marker"></i> Casablanca</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href=""><i class="fa fa-money" aria-hidden="true"></i>DH</a></li>
					
					</ul>

			</div>
			</div>
			                                              <!-- /TOP HEADER -->

			                                              <!-- MAIN HEADER -->
			<div id="header">
				                                          <!-- container -->
			<div class="container">
					                                      <!-- row -->
			<div class="row">
						                                  <!-- LOGO -->
			<div class="col-md-3">
			<div class="header-logo">

								<a href="index.php" class="logo"><img src="./img/logo.png" alt=""></a>
									
								
			</div>
			</div>
						                                  <!-- /LOGO -->

						

						                                  <!-- ACCOUNT -->
			


								                           <!-- Wishlist -->
			
			<div class="col-md-3 clearfix" style="width: 75%">
			<div class="header-ctn">	

			<div class="topnav">
  
            <div class="login-container">

                             <form method="POST">

      <input type="text" placeholder="Username" name="username" required>
      <input type="password" placeholder="Password" name="password" required> &nbsp;
      
	  <button  type="submit" ><a href="signup.php"> Sign Up</a></button>
	  <button type="submit" name="login">Login</button>
	  
	  

                                       </form>

									   

           </div>
           </div>					


								<?php                      require 'db.php';
               
        
                           session_start();

                    if(isset($_POST['login'])){
     
						$username= $connect->real_escape_string(  $_POST['username']);  
					    $password= $connect->real_escape_string(  $_POST['password']);
						$md5pass=md5($password); 

					 $log= " SELECT * FROM user where username='$username'  && password='$md5pass' && verified=1";

                    if(mysqli_num_rows(mysqli_query($connect,$log))  > 0){


                        $_SESSION['username']= $username;

                        header("Location:store.php");
                     }
                    else{
                        echo "<script>alert(\"mot de passe ou username not found !\")</script>";
                     }
                

               }

            
 ?>


								
								                          <!-- /Wishlist -->

							

			</div>
			</div>
						                                 <!-- /ACCOUNT -->
			</div>
					                                     <!-- row -->
			</div>
				                                        <!-- container -->
			</div>
			                                            <!-- /MAIN HEADER -->
		</header>
		                                                <!-- /HEADER -->

		                                               


		                                                 <!-- SECTION -->
		<div class="section">
			                                            <!-- container -->
		<div class="container">
				                                         <!-- row -->

		<?php

				require 'db.php';

				$aff=mysqli_query($connect,"SELECT * FROM `principcart` ");

				while($row=mysqli_fetch_array($aff)){

                echo '
				

		<div class="row">
					                                      <!-- shop -->
		<div class="col-md-4 col-xs-6">
		<div class="shop">
		<div class="shop-img">
								   <img src="  '.$row['img'].'    " alt="">
		</div>
		<div class="shop-body">
								   <h3> '.$row['genre'].'  <br> '.$row['colection'].'  </h3>    
								   <a href="storeno.php " class="cta-btn">  '.$row['shopnow'].' 
								   <i class="fa fa-arrow-circle-right"></i></a>      
		</div>
		</div>
		</div> 
					                                     <!-- /shop --> '  ;}

						
				


?>



			
		</div>
				                                                <!-- /row -->
		</div>
			                                                  <!-- /container -->
		</div>
		                                                       <!-- /SECTION -->

		                                                    
										
									
		</div>
		</div>
		</div>

		</div>
				
		                                                    <!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			                                                <!-- container -->
		<div class="container">
			                                             	<!-- row -->
		<div class="row">
		<div class="col-md-12">
		<div class="newsletter">

							<p>Sign Up for the <strong>Electro</strong></p>

						<form>
								
							<button class="newsletter-btn"><a href="signup.php"> <i class="fa fa-user-plus" aria-hidden="true"> &nbsp;</i>Sign Up</a></button>
									
								
						</form>
							
							<ul class="newsletter-follow">
							   
								 <li>

		<?php    require 'db.php';

								  $dash_user_query = "SELECT * FROM user";

								  $dash_user_query_run = mysqli_query($connect,$dash_user_query);
								  
								  if($user_total = mysqli_num_rows($dash_user_query_run)) ;{
								  
								  echo '
									  
									   <a href=""><i class="fa fa-users" ><div >  '.$user_total.'    </div> </i>
									 
        </div></a>   ';  }
												 
											 
								  
	    ?> 

								</li>
								
							</ul>

					

                                  


		</div>
		</div>
		</div>
				                                             <!-- /row -->
		</div>
			                                                <!-- /container -->
		</div>
		                                                    <!-- /NEWSLETTER -->


		                                                      <!-- FOOTER -->

		<?php

		                                require 'footer.php';

		?>

                                                             <!-- /FOOTER -->

	</div>

		                                                   <!-- jQuery Plugins -->

		                                         <script src="js/jquery.min.js"></script>

		                                         <script src="js/bootstrap.min.js"></script>

		                                         <script src="js/slick.min.js"></script>

		                                         <script src="js/nouislider.min.js"></script>

		                                         <script src="js/jquery.zoom.min.js"></script>

		                                         <script src="js/main.js"></script>

	</body>
	
</html>
