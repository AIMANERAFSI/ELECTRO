<!DOCTYPE html>
<html lang="en">

    <head>
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Electro - </title>

			<link rel="stylesheet" href="css/styleindx.css">
            <link rel="stylesheet" href="css/stylecontact.css">

			<style>

            .alert {padding: 5px; background-color: #f44336; color: white; opacity: 1; transition: opacity 0.6s; margin-bottom: 15px;
			margin-top: -10px; margin-left: 900px;   margin-right: 100px; }

			.alert.success {background-color: #04AA6D;}

			.closebtn {margin-left: 15px;color: white;font-weight: bold;float: right;font-size: 22px;line-height: 20px;cursor: pointer;transition: 0.3s;  }

			.closebtn:hover {color: black;}

			</style>
			


		
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
   <body>
   
      <h1>Formulaire de contact</h1>
     
     
                <form  method="GET" >

         <table class="form-style">
            <tr>
               <td>
                  <label>
                     Votre user name <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="text" name="nom" class="long" required/>
                  <span class="error" id="errorname"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                     Votre adresse e-mail <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="email" name="email" class="long" required/>
                  <span class="error" id="erroremail"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                     Message <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <textarea name="message" class="long field-textarea" required></textarea>
                  <span class="error" id="errormsg"></span>
               </td>
            </tr>
            <tr>
               <td></td>
               <td>
                  <input type="submit" name="Envoyer" value="Envoyer">      
                  <input type="reset" value="Réinitialiser"> 
               </td>
            </tr>
         </table>

         </form>
                         <!------    CODE PPOUR EV LES INFO  --------->




						 <?php               require 'db.php';

$aff=mysqli_query($connect,"SELECT * FROM contact");

						/*  variable */


$id='id';
$nom='nom';
$email='email';
$message='message';




   if(isset($_GET['id'])){
   $id=$_GET['id'];
				 }

   if(isset($_GET['nom'])){
   $nom=$_GET['nom'];
				 }

   if(isset($_GET['email'])){
   $email=$_GET['email'];
				 }

   if(isset($_GET['message'])){
   $message=$_GET['message'];
				 }

   



				/*     add users     */

   $env='';



   if(isset($_GET['Envoyer'])){

   $env= " INSERT INTO contact  VALUE('$id','$nom','$email','$message') ";
   mysqli_query($connect,$env);
   
   echo'<div class="alert success">
   <span class="closebtn">&times;</span>  
   <strong>Success!</strong> Indicates a successful or positive action.
 </div>';
  

}


 


?>


<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
close[i].onclick = function(){
var div = this.parentElement;
div.style.opacity = "0";
setTimeout(function(){ div.style.display = "none"; }, 600);
}
}
</script>






                  <!------    /CODE PPOUR EV LES INFO  --------->



         

    
   </body>
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
								
							<button class="newsletter-btn"><a href="signup.php"> <i class="fa fa-user-plus" aria-hidden="true">&nbsp;</i>Sign Up</a></button>
									
								
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
