<?php
    session_start();
?><!DOCTYPE html>
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
<?php include("layout/header.php"); ?>



    <!-- Home  Section-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>!Aprende<br>con nosotros!</h1>
            <h2>Encuentra aquí<br>los mejores cursos<br>de Programación</h2>
            <a href="#" class="btn">Ver Cursos</a>
        </div>

        <div class="home-img">
            <img src="Img/main.jpg" alt="">

        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="Img/react.jpeg" alt="">
        </div>
        <div class="about-text">
            <span>Acerca de Nosotros</span>
            <h2> <br></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut quo iure rem ducimus tenetur deserunt
                commodi doloribus, quibusdam vel fuga?</p>
            <a href="#" class="btn">Ver más</a>
        </div>
    </section>

    <!-- Menu -->
    <section class="menu" id="menu">
        <div class="heading">
            <span>Cursos</span>
            <h2>Lista de Cursos</h2>
        </div>
        <div class="menu-container">
            <!-- hacer que los enlaces te dirijan al modal para iniciar session si no se ah logeado-->
            <!-- Box 1 -->
            <a  <?php if(!isset($_SESSION['email'])) echo 'class="login" href="#login"'; else echo 'href="sessions/pay.php?materia=python"'; ?>><div class="box">
                <div class="box-img">
                    <img src="Img/python.jpeg" alt="">
                </div>
                <h2>Python</h2>
                <h3></h3>
                <span>$350</span>
                <i class='bx bx-cart-alt'></i>
            </div></a>
            <!-- Box 2 -->
            <a  <?php if(!isset($_SESSION['email'])) echo 'class="login" href="#"'; else echo 'href="sessions/pay.php?materia=c"'; ?>><div class="box">
                <div class="box-img">
                    <img src="Img/c++.jpg" alt="">
                </div>
                <h2>C++</h2>
                <h3></h3>
                <span>$450.90</span>
                <i class='bx bx-cart-alt'></i>
            </div></a>
            <!-- Box 3 -->
            <a  <?php if(!isset($_SESSION['email'])) echo 'class="login" href="#"'; else echo 'href="sessions/pay.php?materia=php"'; ?>><div class="box">
                <div class="box-img">
                    <img src="Img/php.jpg" alt="">
                </div>
                <h2>PHP</h2>
                <h3></h3>
                <span>$510.05</span>
                <i class='bx bx-cart-alt'></i>
            </div></a>
            <!-- Box 4 -->
            <a  <?php if(!isset($_SESSION['email'])) echo 'class="login" href="#"'; else echo 'href="sessions/pay.php?materia=javascript"'; ?>><div class="box">
                <div class="box-img">
                    <img src="Img/javascript.jpg" alt="">
                </div>
                <h2>JavaScript</h2>
                <h3></h3>
                <span>$510.05</span>
                <i class='bx bx-cart-alt'></i>
            </div></a>
        </div>
        <div class="modal" id="#login">
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
    </section>

    <!-- Service -->
    <section class="services" id="services">
        <div class="heading">
            <span>Servicios</span>
            <h2>Brindamos <br> los mejores cursos.</h2>
        </div>

        <div class="servives-container">
            <!-- Box 1 -->
            <div class="s-box">
                <img src="" alt="">
                <h3>Selecciona tu curso</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum
                    temporibus.</p>
            </div>
            <!-- Box 2 -->
            <div class="s-box">
                <img src="" alt="">
                <h3>Clases 100% en linea</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum
                    temporibus.</p>
            </div>
            <!-- Box 3 -->
            <div class="s-box">
                <img src="" alt="">
                <h3>Certificaciones</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum
                    temporibus.</p>
            </div>
        </div>
    </section>

    <!-- Connect -->
    <section class="connect">
        <div class="connect-text">
            <span>Hablemos</span>
            <h2>Conectar ahora</h2>
        </div>
        <a href="" class="btn">Contactanos</a>
    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="contact-box">
            <h3>Data Developer</h3>
            <span>Conectate con nosotros</span>
            <div class="social">
                <a href="#" class="icon"><i class='bx bxl-facebook facebook'></i></a>
                <a href="#" class="icon"><i class='bx bxl-twitter twitter'></i></a>
                <a href="#" class="icon"><i class='bx bxl-instagram instagram'></i></a>
            </div>
        </div>
        <div class="contact-box">
            <h3>Links del menú</h3>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Acerca de nosotros</a></li>
            <li><a href="#menu">Cursos</a></li>
            <li><a href="#services">Servicio</a></li>
            <li><a href="#contact">Contacto</a></li>
        </div>
        <div class="contact-box">
            <h3>Quick Links</h3>
            <li><a href="#Contact">Contacto</a></li>
            <li><a href="#Privacy Policy">Politica y Privacidad</a></li>
            <li><a href="#Disclaimer">Disclaimer</a></li>
            <li><a href="#Terms Of Use">Terminos de uso</a></li>
        </div>
        <div class="contact-box address">
            <h3>Contacto</h3>
            <i class='bx bxs-map'><span>005, Lorem ipsum dolor, sit amet consectetur, India</span></i>
            <i class='bx bxs-phone'><span>+52 449 571 6261</span></i>
            <i class='bx bxs-envelope'><span>Example@gmail.com</span></i>
        </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
        <p>© Derechos Reservados.</p>
    </div>


    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
    <script src="js/script.js"></script>
</body>



</html>