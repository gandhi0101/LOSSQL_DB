<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagar</title>
    <style>
        .pago {
            margin: 15% 0 0 80vh;
        }
    </style>
</head>

<body>
    <?php include("../layout/header.php"); ?>

    <!--formulario para pagar ;) -->
    <div class="pago">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <p>numero de tarjeta</p>
            <input type="text" inputmode="numeric" name="numeroT"maxlength="16">
            <p>cvv</p>
            <input type="password" inputmode="numeric" name="cvv" maxlength="3" required>
            <p>fecha de expiracion</p>
            <input type="text" size="2" name="mm"maxlength="2" placeholder="mes">
            <input type="text" size="2" name="yy"maxlength="2" placeholder="año">

            <input type="submit" name="enviar" value="Enviar">

        </form>
    </div>
    <?php
    if (isset($_POST['enviar'])) {

        if (strlen($_POST["numeroT"]) && strlen($_POST["cvv"]) && strlen($_POST["mm"])&& strlen($_POST["yy"])) {

    ?>
            <script>
                //esperar un unos segundo para decir que si se registro?
                setTimeout(function() {
                    console.log("I am the third log after 5 seconds");
                }, 5000);
                window.location.replace("examen.php");
            </script>
    <?php
        } else {
            $error = "campos vacios";
            echo '<p class="bad">' . $error . '</p>';
        }
    }

    ?>

</body>

</html>