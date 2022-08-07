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
			             <h1>Reset Password</h1></br>
			
			             
		          	     <input type="email" placeholder="EMAIL" name="email" required/></br></br>
                         
			             
                   

<div class="dv">
			            
		               	<button name="send">Send</button>
                        <a href="storeno.php"  ><i class="fa fa-home" aria-hidden="true"></i> </a>
                    
</div>
           
</div>
</form>
</div>





<?php                          require 'db.php';




if(isset($_POST['send'])){

    $email=$connect->real_escape_string($_POST['email']);
      
    $sql_email = "SELECT * FROM user WHERE email='$email'  ";
    $res_email = mysqli_query($connect, $sql_email);

    if(mysqli_num_rows($res_email) > 0) {


        $to=$email;
        $subject= "RESET PASSWORD";
        $message= '<h1> Electro Web site </h1>'."  <div> Link to verify account</div> ".
        " <a href='http://localhost/dasri/electro/verifpasss.php?email=$email'> Reset Paswword </a>  ";
        $headers = "From: electro.darsi@gmail.com \r\n";  
        $headers = "MIME-Version: 1.0" .  ".\r\n";
        $headers =  "Content-type:text/html;charset=UTF-8" . "\r\n";

        mail($to,$subject,$message,$headers);

   

          echo'<div class="alert success">
	     <span class="closebtn">&times;</span>  
	    <strong>Success! Check your email &nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>

       </strong>
        </div>';
 


    }else    echo ' <div class="alert succes">
    <span class="closebtn">&times;</span>  
    <strong> Sorry... email not Found </strong>.
    </div> ';    



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