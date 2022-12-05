<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataDeveloper</title>
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Link To CSS -->
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="" class="logo">Data Developer</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Acerca de nosotros</a></li>
            <li><a href="#menu">Cursos</a></li>
            <li><a href="#services">Servicio</a></li>
            <li><a href="#contact">Contacto</a></li>
            <?php   if (!isset($_SESSION['email'])) {
            ?>

                <li><a href="#" class="login">Iniciar sesión</a></li>

            <?php 
            }  else {
                ?>
                    <li><a href="sessions" class="login">Cuenta</a></li>
                <?php
            } 
            ?>
            <!-- Dark Mode -->
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>

        <div class="modal">
            <div class="modal__container">
                <h2 class="modal__title">¡Inicia Sesión!</h2>
                <form class="form" action="sessions/verificacion.php" method="post">
                    <p><label for="email">E-mail</label> </p>
                    <p> <input type="text" name="email"> </p>
                    <p> <label for="password">password</label> </p>
                    <p>
                        <input type="password" name="password">
                    </p>
                    <p><label class="form-check-label" for="remember">Recordar</label></p>
                    <p> <input class="remember" type="checkbox" name="remember"></p>

                    <p><input class="send" name="send" type="submit" value="Ingresar"> </p>
                </form>
                <a href="#" class="modal__close">Cerrar</a>
            </div>
        </div>

        <script>
            const openModal = document.querySelector('.login');
            const modal = document.querySelector('.modal');
            const closeModal = document.querySelector('.modal__close');

            openModal.addEventListener('click', (e) => {
                e.preventDefault();
                modal.classList.add('modal--show');
            });

            closeModal.addEventListener('click', (e) => {
                e.preventDefault();
                modal.classList.remove('modal--show');
            });
        </script>
    </header>

