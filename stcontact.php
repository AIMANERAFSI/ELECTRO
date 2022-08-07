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
					                             
					                             <!-- STORE -->
<div id="store" class="col-md-9" style="margin-left: 160px"> 
		
					
 
						                        



   
                          <h1>Formulaire de contact</h1>
     
     
                          <form  method="GET" >

         <table class="form-style">
            <tr>
               <td>
                  <label>
                  Votre user name  <span class="required">*</span>
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



         

    
   




				  <!------   / CODE PPOUR EV LES INFO  --------->		       

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
