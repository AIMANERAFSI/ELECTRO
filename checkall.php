<?php
require 'auth.php';
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro </title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	
		


    </head>
	<body>
		<!-- HEADER -->
		
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<form action="log.php" method="POST"> 
			<div id="top-header">
				<div class="container">
				<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +212-6-49-52-30-22</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> aymanrafsi10@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Casablanca</a></li>
						<li><a href="#"><i class="fa fa-money" ></i>DH</a></li>
					</ul>
					<ul class="header-links pull-right">
						
						<li><a ><i class="fa fa-user-o"></i>  <?php  echo $_SESSION['username']; ?> </a></li>

						<button type="submit" class="btn btn-link" name="log"> <i class="fa fa-sign-out"></i>Log out</button>

					</ul>
					
				</div>
				
				
			</div>
			
			</form>
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
								<a href="store.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->
			<!-- MAIN HEADER -->
		
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
            


								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
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

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="store.php">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
                    	<form  method="POST"  action="orderall.php"  >
						
				

		
		
	 <input class="input" type="hidden" name="refp"  value=    " <?php require 'db.php';
	  $x= $_SESSION['username']; 
	  $aff=mysqli_query($connect,"SELECT * FROM panel WHERE  client = '$x'");
	  while($row=mysqli_fetch_array($aff))
	 
	 
	 
	    echo ' '.$row['reference'].'  ' ;   ?>    "  > 





<?php

 require 'db.php';
	  $x= $_SESSION['username']; 
	  $aff=mysqli_query($connect,"SELECT * FROM panel WHERE  client = '$x'");
	  while($row=mysqli_fetch_array($aff)){  echo'

            <input class="input"  type="hidden"  name="username" value="  '.$_SESSION['username'].'   "   >    ';


	  }
	 

		?>
		

		
						

						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
								
							</div>


							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Last Name" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address"required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City"required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country"required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code"required>
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone"required>
							</div> 
						
							

							<div class="form-group">
								<div class="input-checkbox">
									
								</div>
							</div>
						</div> 

						</div>


					
						






					
						<!-- /Billing Details -->

						
					
						
					

					<!-- Order Details -->
					


					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							
						
								<?php  
								     
									 require 'db.php';
									 $x=$_SESSION['username'];
									 $aff=mysqli_query($connect,"SELECT * FROM panel WHERE client = '$x' ");
									 while($row=mysqli_fetch_array($aff)){  echo '	

										<div class="order-products">
										<div class="order-col">
									<div>1x '.$row['nom_produit'].'</div>
									<div>'.$row['prix'].'</div>

									</div>
								
									</div>

									'  ;}?>  </br>



							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							

								
							<div class="order-col">

								  <div><strong></strong></div>
								  <div><strong class="order-total">   </strong></div>

							</div>
						    </div>

						    <div class="payment-method">
							 	<div class="input-radio">
								<input type="radio" name="input" id="payment-2" required>
								<label for="payment-2">
									<span></span>
									 Payment a livraison
								</label>
								
							</div>  </br>



							


						<div class="input-checkbox">
							<input type="checkbox" id="terms" required>
							<label for="terms">
								<span></span>
								I ve read and accept the <a href="#">terms & conditions</a>
							</label >
						</div>
						
						<button type="submit" class="primary-btn order-submit" name="order"  > 
						Place order</button>
					</div>


			</form>


			
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>



		


		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p><strong> abonnez vous sur notre page </strong></p>
							
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
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
		
<?php  require 'footer11.php';  ?>

		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/radio.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
