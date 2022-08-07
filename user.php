<?php                       require 'authadmin.php';                          ?>

<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    
    <link rel="stylesheet" href="css/styleeee.css">
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

              table { font-family: arial, sans-serif;border-collapse: collapse;width: 1000px;
              margin-left:auto;margin-right:100px;}

              td, th {border: 1px solid #dddddd;text-align: center;padding: 0px;}

              tr:nth-child(even){background-color: #dddddd;}
        
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
                

                <table>
  <tr>
    <th>ID.USER</th>
    <th>USERNAME</th> 
    <th>Email</th>
    <th>verified</th>
    
   
  </tr>
                               <!-- POUR AFFICHER LES COMMANDES NON DONE SUCCEES! -->
  <?php   
   
   require "db.php";
    
   $aff=mysqli_query($connect,"SELECT * FROM  `user`   ");
  

   while($row=mysqli_fetch_array($aff)){  echo '    

                      <tr>
                      <td>'.$row['id'].'</td>
                      <td>'.$row['username'].'</td> 
                      <td>'.$row['email'].'</td>
                      <td>'.$row['verified'].'</td>

                     </tr> ';

}   
     
?>





</table> </br></br>






    
</body>

</html>

