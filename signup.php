<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css//stylee.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
	

	
    <title>Sign up</title>
</head>
<body>

<div class="form-container sign-in-container">
		<form  method="POST">
            <div class="tb">
			<h1>Sign up</h1>
			
			<span> use your email for registration</span>


			<input type="text" placeholder="USER NAME" name="user" required/>
			<input type="email" placeholder="EMAIL" name="email" required/>
      <input type="password" placeholder="PASSWORD" name="password" required/>
      <input type="password" placeholder="CONFIRM PASSWORD" name="passwordd" required/>
            <div class="dv">
			<a href="sign in.php">Sign in</a>

			<button name="inscri">Sign UP</button> &nbsp;

      <a href="index.php"  ><i class="fa fa-home" aria-hidden="true"></i> </a>

      
            </div>
</div>
		</form>
	</div>
    <?php


require 'db.php';

if(isset($_POST['inscri'])){


$user= $connect->real_escape_string(  $_POST['user']);  
$email= $connect->real_escape_string(  $_POST['email']);  
$password= $connect->real_escape_string(  $_POST['password']);  
$passwordd= $connect->real_escape_string(  $_POST['passwordd']);  




$keey = md5(time(). $user);











$sql_u = "SELECT * FROM user WHERE username='$user' ";
$sql_e = "SELECT * FROM user WHERE email='$email'";
$res_u = mysqli_query($connect, $sql_u);
$res_e = mysqli_query($connect, $sql_e);


         if(strlen($user) < 4){

          echo   ' <div class="alert succes">
          <span class="closebtn">&times;</span>  
          <strong> Sorry... Your username must be at least 4 characters</strong>. </div> ';


         }elseif($password != $passwordd){


         
          echo   ' <div class="alert succes">
          <span class="closebtn">&times;</span>  
          <strong> Sorry... Your password do not match </strong>. </div> ';


         }elseif(mysqli_num_rows($res_u) > 0) {

          echo   ' <div class="alert succes">
          <span class="closebtn">&times;</span>  
          <strong> Sorry... username already taken </strong>.
          </div> '; 	  }else if(mysqli_num_rows($res_e) > 0){
           echo ' <div class="alert succes">
           <span class="closebtn">&times;</span>  
           <strong> Sorry... email already taken </strong>.
           </div> '; 
          
          
           }else{




$md5pass=md5($password);


$add= " INSERT INTO user  (username,email,password,keey) value ('$user','$email','$md5pass','$keey') ";

if(mysqli_query($connect,$add)){

   $to=$email;
   $subject= "EMAIL VERIFICATION";
   $message= '<h1> Thank you for your registration to the website</h1>'."  <div> Link to verify account</div> ".
   " <a href='http://localhost/dasri/electro/verif.php?keey=$keey'> Register Account </a>  ";
   $headers = "From: electro.darsi@gmail.com \r\n";  
   $headers = "MIME-Version: 1.0" .  ".\r\n";
   $headers =  "Content-type:text/html;charset=UTF-8" . "\r\n";
  

   mail($to,$subject,$message,$headers);

   

   echo'<div class="alert success">
	<span class="closebtn">&times;</span>  
	<strong>Success!Thank you for registering. Check your email &nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>

   </strong>
  </div>';
   
  
  
    

}else{
  echo
   $mysqli->error;
}


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