<!DOCTYPE html>
<html lang="en">

    <head>
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Electro - </title>

			<link rel="stylesheet" href="css/styleindx.css">
            <link rel="stylesheet" href="css/stylecontact.css">
			<!-- Font Awesome Icon -->
           
         <script src="https://kit.fontawesome.com/6a83f49eac.js" crossorigin="anonymous"></script>


		
    </head>


	<body>




		                                                  <!-- HEADER -->
		<header>
			                                            <!-- TOP HEADER -->
			<div id="top-header">
			<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +212 6 49 52 30 22</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> aymanrafsi10@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Casablanca</a></li>
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
			


								                         

							

								                          <!-- Menu Toogle -->
			                         <!-- /Menu Toogle -->
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

		
		</div>
			                                                  <!-- /container -->
		</div>
		                                                       <!-- /SECTION -->

                                                               <html>
   <head>
                      
   </head>
   <!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4"> Help.</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>     </br></br></br>

<div class="row">

    

        
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0" style="margin-right: -950px"  >
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Casablanca, MORROCO</p>
            </li></br>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+ 212 5 00 00 00 00</p>
            </li></br>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>electro.darsi@gmail.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
<!--Section: Contact v.2-->
</html>
										
									
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
                                                 <script src="js/contact.js"></script>

	</body>
	
</html>
