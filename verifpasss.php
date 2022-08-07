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
            <h1>Reset Password</h1></br>
			
			


            <input type="password" placeholder="Password" name="password" required/></br></br>


            <div class="dv">


		
            <button name="send">Reset</button>

     
      
            </div>
</div>
		</form>
	</div>
   

    <?php                   
              if(isset($_GET['email'])) {
              
              $email=$_GET['email'];
         

              $mysqli = NEW mysqli('localhost','root','','electro' );

              

              $resilta = $mysqli->query(" SELECT email FROM user WHERE email='$email' LIMIT 1 ");
              if($resilta->num_rows == 1 ){

                  if(isset($_POST['send'])){

                  $password=md5($_POST['password']);
                  
                    $update= $mysqli->query("UPDATE user SET password = '$password'    WHERE email = '$email' LIMIT 1  ");
                      if($update){

                      
                     echo'<div class="alert success">
                  	<span class="closebtn">&times;</span>  
                    Your passowrd  changed <a href="sign in.php" class="alert-link"><strong>Login Now</strong></a>
                     </div>';

                  }else{

                    echo 'link expired';
                       }

              }


            }
        }else{

            die("Somthing went wrong"); }




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