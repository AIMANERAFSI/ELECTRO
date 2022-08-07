<!DOCTYPE html>

<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sign in</title>

      <!-- Custom stlylesheet -->
      <link rel="stylesheet" href="css/stylee.css">
       
      <!-- Font Awesome Icon -->
      <link rel="stylesheet" href="css/font-awesome.min.css">

</head>


<body>


<div class="form-container sign-in-container">
		                <form  method="POST">
<div class="tb">
			              <h1>Sign in</h1>
			
			              <span> use your account</span>
		          	    <input type="text" placeholder="USERNAME" name="username" required/>
			              <input type="password" placeholder="Password" name="password" required/></br></br>
                    <div>  <a href="resetpass.php">Reset Password</a>&nbsp;&nbsp;<i class="fa fa-key" aria-hidden="true"></i></div></br>
   

                  
                   

                   


<div class="dv">
			              <a href="signup.php">Sign up</a>
		               	<button name="login">Sign In</button>
                    
                    <a href="admin sign in.php"  >  admin </a> &nbsp;
                    <a href="storeno.php"  ><i class="fa fa-home" aria-hidden="true"></i> </a>
                    
</div>
           
</div>
</form>
</div>
	

<?php                      require 'db.php';
               
        
                           session_start();

                    if(isset($_POST['login'])){
                      $username= $connect->real_escape_string(  $_POST['username']);  
                      $password= $connect->real_escape_string(  $_POST['password']);
                      $md5pass=md5($password);   
                    
                     

                     $verif=  " SELECT * FROM user where username='$username' && password='$md5pass' && verified=1 " ;

                    if(mysqli_num_rows(mysqli_query($connect,$verif))  > 0){


                        $_SESSION['username']= $username;

                        header("Location:store.php");
                     }
                    else{
                         echo'<div class="alert erreur">
                         <span class="closebtn">&times;</span>  
                         <strong>  mot de passe ou username not found !
                       </div>';
                     }
                

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


    
</body>
</html>