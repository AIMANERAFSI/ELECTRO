<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <title>Verification</title>

   
</head>
<body>







    
</body>
</html>







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
						<li><a href=""><i class="fa fa-envelope-o"></i> aymanrafsi10@gmail.com</a></li>
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



if(isset($_GET['keey'])){

    $ky=$_GET['keey'];

    $mysqli = NEW mysqli('localhost','root','','electro' );

    

    $resilta = $mysqli->query(" SELECT verified,keey FROM user WHERE verified = 0 AND keey = '$ky' LIMIT 1");
     
     if($resilta->num_rows == 1 ){

        $update= $mysqli->query("UPDATE user SET verified = 1 WHERE keey= '$ky' LIMIT 1  ");
        if($update){


           echo ' <div class="alert alert-success" role="alert">
            Your account has been verified <a href="sign in.php" class="alert-link">Login Now</a>
          </div>';


        }
        else{

            echo $mysqli->error;
        }
          

     }else{

        

         echo '  <div class="alert alert-danger" role="alert">
        This email Invalid or already verified 
         </div>';


     }

}
else{

    die("Somthing went wrong");
}

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

							<h1><strong>Electro</strong></h1>


					

                                  


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











