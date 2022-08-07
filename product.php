

	<?php                                   require 'auth.php';                    ?>  
  
<!DOCTYPE html>

<html lang="en">

<head>
		   <meta charset="utf-8">
		   <meta http-equiv="X-UA-Compatible" content="IE=edge">
		   <meta name="viewport" content="width=device-width, initial-scale=1">
		   <title>Electro Product</title>
		

		
	<style>

           div#responsive-nav {margin-left: 450PX;} 

		   #bottom-footer.section{background-color: #15161d;}

		   #bottom-footer {background: #15161d00;}

		   #bottom-footer.section{  background-color: #15161d; }

     
	</style>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		 <link rel="stylesheet" type="text/css" href="css/custom.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">
		 <link rel="stylesheet" href="css/fon-awesomecostum.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

	

</head>

<body>
		                          
<?php  require 'stheader.php'; ?>

							   


	
		                                 <!-- SECTION -->
<div class="section">
			                         <!-- container -->
<div class="container">
				                           <!-- row -->
				
<div class="row">
					              <!-- Product main img -->


<?php          require 'db.php';  


                 $x = $_GET["ref"];

                 $aff=mysqli_query($connect,"SELECT * FROM product WHERE reference = '$x' ");

                 while($row=mysqli_fetch_array($aff)){  echo '
					
					<form  method="POST" action="xx.php">

<div class="col-md-5 col-md-push-2">
<div id="product-main-img">
<div class="product-preview" >

								<img  src="'.$row['img'].'" alt="">
								

</div>
<div class="product-preview">

								<img src="'.$row['img1'].'" alt="">

</div>
<div class="product-preview">

								<img src="'.$row['img2'].'" alt="">

</div>
<div class="product-preview">

								<img src="'.$row['img3'].'" alt="">

</div>

							
</div>
</div>
					                  <!-- /Product main img -->
					
					
					                  <!-- Product thumb imgs -->
<div class="col-md-2  col-md-pull-5">
<div id="product-imgs">
<div class="product-preview">

						<img src=" '.$row['img'].' " alt="">
</div>
<div class="product-preview">

						<img src=" '.$row['img1'].' " alt="">
</div>
<div class="product-preview">
								<img src=" '.$row['img2'].' " alt="">

</div>

<div class="product-preview">
								<img src=" '.$row['img3'].' " alt="">

</div>
</div>
</div>
					            <!-- /Product thumb imgs -->

					            <!-- Product details -->
					
<div class="col-md-5">
<div class="product-details">

							<h2 class="product-name" >   '.$row['name'].'    </h2>
							

<div>
							<h3 class="product-price" > '.$row['price'].' DH <del class="product-old-price">               </del></h3>
							<span class="product-available">   </span>
							
							
							
</div>
							<p>   '.$row['description'].' . </p> 


							<input type="hidden" name="marque" value="'.$row['marque'].'">
							<input type="hidden" name="client" value="'.$_SESSION['username'].'">
							<input type="hidden" name="name" value="'.$row['name'].'">
							<input type="hidden" name="price" value="'.$row['price'].'">
							<input type="hidden" name="reference" value="'.$row['reference'].'">
							
							

						
						
<div class="add-to-cart">
							<button class="add-to-cart-btn" type="submit" name="add"  > 
							<i class="fa fa-shopping-cart" aria-hidden="true"></i> 
							
							Add to panel  </button>
							
</div> </form>  '  ;}


?>


						
							
							<ul class="product-links">

								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								
								<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
								
							</ul>

</div>
</div> 
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
		

<?php                              require 'footer11.php';                         ?>

		                             <!-- /FOOTER -->

		                         <!-- jQuery Plugins -->

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

</body>

</html>
