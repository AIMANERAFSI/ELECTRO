<?php                       require 'authadmin.php';                          ?>

<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    
    <link rel="stylesheet" href="css/styleeeec.css">
    <link rel="stylesheet" href="css/stylecontact.css">
    <!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">
         <link rel="stylesheet" href="css/fon-awesomecostum1.css">

        

    <style> 
             .btn {border: white;font-size: 15px; display: inline-block;padding: 6px 12px;margin-bottom: 0;
              font-size: 14px;font-weight: 400; line-height: 1.42857143;text-align: center;white-space: nowrap;
              vertical-align: middle;-ms-touch-action: manipulation;touch-action: manipulation;cursor: pointer;
              -webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;
              background-image: none;border: 1px solid transparent;border-radius: 4px;} 

              .btn-link, .btn-link.active, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
              background-color: white;-webkit-box-shadow: none;box-shadow: none;}

             
              
        
        </style>
         

</head>

<body>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <h2>ELECTRO.</h2>
            </div>


            <form action="log.php" method="POST">        
            <div id="top-header">
            
            <ul class="header-links pull-right">
						
						<a ><i class="fa fa-user-o"></i>  <?php  echo $_SESSION['usernamee']; ?> </a>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<button type="submit" class="btn btn-link" name="log"> <i class="fa fa-sign-out"></i>Log out</button>

					</ul>
            </div>

            </div>  </form>



        <div class="sidebar">
            <ul>
                <li>
                    <a href="admin bord.php">
                    <i class="fa fa-home" aria-hidden="true"></i>

                        <div>Dashboard</div>
                    </a>
                </li>

                </div>
                </div>  

                </br> </br> </br> </br>
                

               
  
  
             <form  method="POST" >

      <table class="form-style">
         
         <tr>
            <td>
               <label>
                   adresse e-mail <span class="required">*</span>
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
               Subject <span class="required">*</span>
               </label>
            </td>
            <td>
               <input type="text" name="subject" class="long" required/>
               <span class="error" id="errormsg"></span>
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



      <?php


require 'db.php';

if(isset($_POST['Envoyer'])){


    $email=$_POST['email'];
    $Message=$_POST['message']; 
    $subject=$_POST['subject'];        


    $to=$email;
    $subject= " $subject ";
    $message= " $Message ";
    $headers = "From: electro.darsi@gmail.com \r\n";  
    $headers = "MIME-Version: 1.0" .  ".\r\n";
    $headers =  "Content-type:text/html;charset=UTF-8" . "\r\n";
   
   
    mail($to,$subject,$message,$headers);

   
    
 
    echo'<div class="alert success">
     <span class="closebtn">&times;</span>  
     <strong>Succes<i class="fa fa-envelope" aria-hidden="true"></i>
 
    </strong>
   </div>';




}else   echo' error!';




?>



    
</body>
</html>

