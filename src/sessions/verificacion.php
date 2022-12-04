<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in</title>
</head>
<body>
<?php
   include("../../DataBase/Mysql/conections.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $result = $db->prepare(logIn());
      $result->bind_param("ss",$myusername,md5($mypassword));
      $result->execute();      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($result->num_rows >= "1") {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: ../sessions");
      }else {
         //$error = "Your Login Name or Password is invalid";
         ?>

        <!-- hacer un menu para corregir las credenciales y preguntar si tiene cuenta se registre -->
        

        <a href="sign_in.php">ya tienes cuenta</a>

        <?php
      }
   }
?>
    
</body>
</html>