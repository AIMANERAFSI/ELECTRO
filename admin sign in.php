<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>

</head>


<body>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylee.css">
    
    <title>Sign in admin</title>

          

</head>
<body>



	<div class="form-container sign-in-container">
		<form action="" method="POST">
        <div class="tb">
			<h1>Sign in admin</h1>
			
			<input type="text" placeholder="username" name="usernamee" required/>
			<input type="password" placeholder="Password" name="password" required/>
            <div class="dv">
			
			<button name="login">Sign In</button>
      
            <a href=" sign in.php"  > Return</a>
            </div>
           
</div>
		</form>

	</div>
	

<?php
               
               require 'db.php';

               session_start();

               if(isset($_POST['login'])){
     
                     $username=$connect->real_escape_string($_POST['usernamee']);
                     $password=$connect->real_escape_string($_POST['password']);
                    

                     $log= " SELECT * FROM admin where usernamee='$username'  && password='$password'";

                     if(mysqli_num_rows(mysqli_query($connect,$log))  > 0){


                        $_SESSION['usernamee']= $username;

                        header("Location:admin bord.php");
                     }
                     else{
                         echo'<div class="alert erreur">
                         <span class="closebtn">&times;</span>  
                         <strong>  mot de passe ou email not found !
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












</body>
</html>