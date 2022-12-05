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
   
   if(isset($_POST['send'])) {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = md5(mysqli_real_escape_string($db,$_POST['password']));

      $result = $db->prepare(logIn());
      $result->bind_param("ss",$myemail,$mypassword);
      $result->execute();      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($result->num_rows >= "1") {
         //session_register("myusername");
         $_SESSION['email'] = md5($myemail);
         
         ?><script>
            window.location.replace("/");
         </script>
         <?php
      }else {
         //$error = "Your Login Name or Password is invalid";
         ?>

        <!-- hacer un menu para corregir las credenciales y preguntar si tiene cuenta se registre -->
        

        <a href="sign_in.php">ya tienes cuenta?</a>

        <?php
      }
   }
?>
    
</body>
</html>