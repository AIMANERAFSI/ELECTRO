
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<style>

		    div#responsive-nav {margin-left: 450PX;} 

			#bottom-footer.section{background-color: #15161d;}

			#bottom-footer {background: #15161d00;}

			#bottom-footer.section{ background-color: #15161d; }

			.btn-link, .btn-link:active, .btn-link:focus, .btn-link:hover {border-color: #1e1f29;}

			.btn-link:focus, .btn-link:hover {color: #23527c;text-decoration: none;background-color: #1e1f29;}
			
            .btn-link {font-weight: 400;color: #fdfdfd; border-radius: 0;  }

			.alert {padding: 5px; background-color: #f44336; color: white; opacity: 1; transition: opacity 0.6s; margin-bottom: 15px;
			margin-top: 60px; margin-left: 500px; }

			.alert.success {background-color: #04AA6D;}

			.closebtn {margin-left: 15px;color: white;font-weight: bold;float: right;font-size: 22px;line-height: 20px;cursor: pointer;transition: 0.3s;  }

			.closebtn:hover {color: black;}


		</style>
		 

		<title>Electro - Dashborde</title>

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

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		 <link rel="stylesheet" href="css/stylecontact.css">
		 

		

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
						<li><a href=""><i class="fa fa-envelope-o"></i> electro.darsi@gmail.com</a></li>
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

						     <!-- SEARCH BAR -->
<div class="col-md-6">
<div class="header-search">

<form action="storesearch.php" method="get" >

						<select class="input-select">
										
			                   <option value="0">All Categories</option>
										
						</select>

									<input class="input" placeholder="Search here" name="text">
									<input type="submit" class="search-btn" name="submit" value="Search"> 
</form>
</div>
</div>
						            <!-- /SEARCH BAR -->

						              <!-- ACCOUNT -->
							 <div class="col-md-3 clearfix">
							 <div class="header-ctn">

							


								<!-- Cart -->

	
								<div class="dropdown">
								
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>

										<?php    require 'db.php';

                                         $x=$_SESSION['username'];
                                         $dash_items_query = "SELECT * FROM panel WHERE client = '$x' ";
										 $dash_items_query_run = mysqli_query($connect,$dash_items_query);
										 if($items_total = mysqli_num_rows($dash_items_query_run)) ;{
								  
											echo '

										<div class="qty">  '.$items_total.'  </div>  ' ;  } 

										 ?>


										<a href="checkpanel.php"><span>Your Cart</span></a>
			
								</div>


								<!-- /Cart -->
								
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
