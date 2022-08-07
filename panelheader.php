
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<style>

 .card-body .btn-block {
   
    
	margin-left:100%; margin-right:100%;  
    width: 20%;
    margin-left:40%;
    margin-right:25%;
}

.card-body .btn-warning {
    color: #15161d;
    background-color:#d90429;
    border-color: #d90429;
}

.lead {
    font-size: 15px;
}
		</style>

		

		<title>Electro - Panel</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		
        <link rel="stylesheet" type="text/css" href="css/custom.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">
		 <link rel="stylesheet" href="css/fon-awesomecostum.css">
		 <script src="https://kit.fontawesome.com/6a83f49eac.js" crossorigin="anonymous"></script>

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		

    </head>

	<body>

	
		                       <!-- HEADER -->
<header>
			              <!-- TOP HEADER -->
<form action="log.php" method="POST"> 
<div id="top-header">
<div class="container">
                    <ul class="header-links pull-left">
						<li><a href=""><i class="fa fa-phone"></i> +212-6-49-52-30-22</a></li>
						<li><a href=""><i class="fa fa-envelope-o"></i> aymanrafsi10@gmail.com</a></li>
						<li><a href=""><i class="fa fa-map-marker"></i> Casablanca</a></li>
						<li><a href=""><i class="fa fa-money" ></i>DH</a></li>
					</ul>

					<ul class="header-links pull-right">
						
						<li><a ><i class="fa fa-user-o"></i>  <?php  echo $_SESSION['username']; ?> </a></li>

						<button type="submit" class="btn btn-link" name="log">
							 <i class="fa fa-sign-out"></i>Log out
							</button>

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


						              <!-- ACCOUNT -->
							 <div class="col-md-3 clearfix">
							 <div class="header-ctn">

							


								
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

							   

		
</body>

</html>
