<?php
    session_start();
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_in</title>
</head>
<style>
p {
    margin: 3px;
}

.bad {
    background-color: #f00;
    max-width: 30vh;
}

.ok {
    background-color: #0f0;
    max-width: 30vh;

}
</style>

<body>
<?php include("../layout/header.php"); ?>

    <!--formulario de registro-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>correo</p>
        <input type="email" name="email">
        <p>contraseña</p>
        <input type="password" name="password">
        <p>repita la contraseña</p>
        <input type="password" name="password2">
        <p>nombre</p>
        <input type="text" name="name">


        <input type="submit" name="enviar" value="Enviar">

    </form>

    <?php 
    if (isset($_POST['enviar'])) {
        
        if(strlen($_POST["email"]) && strlen($_POST["password"]) && strlen($_POST["name"])){
                        
            if($_POST["password"] === $_POST["password2"]) {
                include("../../DataBase/Mysql/conections.php");

                $myemail = mysqli_real_escape_string($db,$_POST['email']);
                $mypassword = md5(mysqli_real_escape_string($db,$_POST['password'])); 
                $myname = mysqli_real_escape_string($db,$_POST['name']);

                $result = $db->prepare(signIn());
                $result->bind_param("sss",$myemail,$mypassword,$myname);
                $result->execute();      
                if ($result) {
                    ?>
                    <h3 class="ok">registro exitoso</h3>
                    <?php
                }
                $_SESSION['emali'] = md5($myemail);
                    ?>
                    <script>
                    //esperar un unos segundo para decir que si se registro?
                    setTimeout(function() {
                        console.log("I am the third log after 5 seconds");
                    }, 5000);
                    window.location.replace("../");
                    
                    </script>
                    <?php
                   header("Loaction: ../");
            }else{
                $error = "las contraseñas no coinciden";
                echo '<p class="bad">'.$error.'</p>';
            } 
        }else {
            $error = "campos vacios";
            echo '<p class="bad">'.$error.'</p>';
        }
        
    }

    ?>
</body>

</html>