


<?php                                   require 'auth.php';                    ?>


<!DOCTYPE html>

<html lang="en">



	<body>

	
<?php                        require 'stheader.php';                ?>
  
		                     <!-- NAVIGATION -->
<nav id="navigation">
		                      	<!-- container -->
<div class="container">
				           <!-- responsive-nav -->
<div id="responsive-nav">
					               <!-- NAV -->

					<ul class="main-nav nav navbar-nav">
						
						<li><a href="storelaptop.php">Laptops</a></li>
						<li><a href="storesmartphone.php">Smartphones</a></li>
						<li><a href="storeaccessories.php">Accessories</a></li>
						
					</ul>

					               <!-- /NAV -->
</div>
				                <!-- /responsive-nav -->
</div>
			                    <!-- /container -->
</nav>
	 	                        <!-- /NAVIGATION -->

		                            <!-- SECTION -->
<div class="section">
		                     	<!-- container -->
<div class="container">
				                     <!-- row -->
<div class="row">
					               <!-- ASIDE -->
<div id="aside" class="col-md-3">
						
					            <!-- aside Widget -->

<div class="aside">
							<h3 class="aside-title">Brand</h3>

<div class="checkbox-filter">
<div class="input-checkbox"  >

	                         <a href="stbrandesamsung.php">
							 <button type="submit" class="btn btn-primary" name="samsung">   SAMSUNG </button>
</div>                       </a>
								
<div class="input-checkbox">

	                        <a href="stbrandeiphone.php">
                            <button type="submit" class="btn btn-primary" name="iphone">   IPHONE </button>
</div>                      </a>


<div class="input-checkbox"><a href="stbrandelg.php">

						    <button type="submit" class="btn btn-primary" name="lg">   LG </button>
</div>                      </a>

<div class="input-checkbox"><a href="stbrandehp.php">

							<button type="submit" class="btn btn-primary" name="hp">   HP</button>
</div>                      </a>

</div>
</div>
 
						             <!-- /aside Widget -->

						
</div>
				                     	<!-- /ASIDE -->
					                    <!-- STORE -->
<div id="store" class="col-md-9"> 
		
					

						               <!-- store products -->
<div class="row">
							           <!-- product -->

							<form method="GET"  > 

							
<?php                      require 'db.php';

   
                      $aff=mysqli_query($connect,"SELECT * FROM  product WHERE category='laptop' ");
                      while($row=mysqli_fetch_array($aff)){  echo '
							

						<div class="col-md-4 col-xs-6">
						<div class="product">
						<div class="product-img">
																
											<img src="  '.$row['img'].'  " alt="">
						
						<div class="product-label">
																	
											<span class="new">    '.$row['new'].' </span>
						</div>
						</div>
						<div class="product-body">
						
											<p class="product-category"> '.$row['category'].'  </p>
											<h3 class="product-name">   '.$row['name'].'    </h3>
											<h4 class="product-price">   '.$row['price'].' DH </h4>
						
						<div class="product-rating">
						
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<p> Ref: '.$row['reference'].'</p>
						</div>
																
						</div>
														
						<div class="add-to-cart">
						
											<button class="add-to-cart-btn" name="info" > <a href="product.php?ref='.$row['reference'].'"> <i class="fa fa-info" aria-hidden="true"></i>
											Info </a>
						
																
						</div>
						</div>
						</div>';}
											 
						?>
						
						</div>
						
						</form>
						</form>
						
						
														 <!-- /product -->
						</div>
														<!-- /store products -->
						
													   <!-- store bottom filter -->
						<div class="store-filter clearfix">
												
													<ul class="store-pagination">
						
														<li class="active">1</li>
														
														<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
						
													</ul>
						</div>
													<!-- /store bottom filter -->
						</div>
													<!-- /STORE -->
						</div>
													   <!-- /row -->
						</div>
													   <!-- /container -->
						</div>
													 <!-- /SECTION -->
						
								
						
						<?php                    require 'footer11.php';                  ?>   
								
								
						
						
														<!-- jQuery Plugins -->
						
								<script src="js/jquery.min.js"></script>
								<script src="js/bootstrap.min.js"></script>
								<script src="js/slick.min.js"></script>
								<script src="js/nouislider.min.js"></script>
								<script src="js/jquery.zoom.min.js"></script>
								<script src="js/main.js"></script>
						
						</body>
						
						</html>
						