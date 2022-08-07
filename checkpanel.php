
<?php                                   require 'auth.php';                    ?>
<!DOCTYPE html>
<html lang="en">

	
	
	<body>
	


   <?php   require 'panelheader.php';  ?>
		

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Shopping Cart</h3>
						<ul class="breadcrumb-tree">
							<li><a href="store.php">Home</a></li>
							<li class="active">Shopping Cart</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		
			<!-- SECTION -->

         
		<?php          require 'db.php';  



$x=$_SESSION['username'];
$aff=mysqli_query($connect,"SELECT * FROM panel WHERE client = '$x' ");

while($row=mysqli_fetch_array($aff)){   echo '

	<section class="h-100" >
	<div class="container h-100 py-5">
	  <div class="row d-flex justify-content-center align-items-center h-100">
		<div class="col-10">
  
		 
  
		  <div class="card rounded-3 mb-4">
			<div class="card-body p-4">
			  <div class="row d-flex justify-content-between align-items-center">
				<div class="col-md-2 col-lg-2 col-xl-2">
				  <H4>   '.$row['marque_produit'].'   </H4>
				 
				  
				</div>
				<div class="col-md-3 col-lg-3 col-xl-3">
				  <p class="lead fw-normal mb-2">'.$row['nom_produit'].'</p>
				 
				</div>
				<div class="col-md-3 col-lg-3 col-xl-2 d-flex">
				  
  
  
				 
				</div>
				<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
				  <h5 class="mb-0">'.$row['prix'].'DH</h5>
				</div>

				<form  method="POST" action="suppanel.php">
				<div class="col-md-1 col-lg-1 col-xl-1 text-end">
				  <button type="submit" name="sup" class="text-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
				  </button>
				  <input type="hidden" value="'.$_SESSION['username'].'" name="client">
				  <input type="hidden" value="'.$row['id'].'" name="id">

				</div>
				</form>




				<form  method="POST">
				<div class="col-md-1 col-lg-1 col-xl-1 text-end">

				<a href="check.php?ref='.$row['reference'].'"> <strong>  Checkout  </strong>  </a>
				

				</div> </form>


			  </div>
			</div>
		  </div>
	
		  </div>
		</div>
	  </div>
	</div>

	'  ;}


?> </br></br> </br> </br> </br>	</br> </br> </br> </br>


<section class="h-100" >
	
<div class="card">

<div class="card-body">	

	<form  method="POST" action="viderpanier.php">

	
	<button  class="btn btn-warning btn-block btn-lg">

    <a href="checkall.php?ref='.$_SESSION['username'].'">  checkout Cart  </a>

	</button>



	<button name="vider" class="btn btn-warning btn-block btn-lg">

			  <?php          require 'db.php';  
                     $x=$_SESSION['username'];
                     $aff=mysqli_query($connect,"SELECT * FROM panel WHERE client = '$x' ");

                     while($row=mysqli_fetch_array($aff)){   echo '	

			  <input type="hidden" value="'.$_SESSION['username'].'" name="client">

			  '  ;} 
		  ?>
				
	Clear Cart</button>

	</div>
	</div>   
    </form>












</section>
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
