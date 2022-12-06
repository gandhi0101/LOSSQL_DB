<?php
    session_start();
?><!DOCTYPE html>
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
   
   
   if(isset($_POST['send'])) {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = md5(mysqli_real_escape_string($db,$_POST['password']));

      $result = $db->prepare(logIn());
      $result->bind_param("ss",$myemail,$mypassword);
      $result->execute(); 
      $result -> store_result();
      echo $myemail;
      echo $mypassword;
      // If result matched $myemail and $mypassword, table row must be 1 row
   echo '<h1>'.$result->num_rows.'</h1>';
      if($result->num_rows >= "0") {
         //session_register("myusername");
         $_SESSION['email'] = $myemail;
         
         ?><script>
             window.location.replace("../");
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