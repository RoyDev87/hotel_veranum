<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/stylev.css">
    <!-- CDN FONT AWESOME -->
    <script src="https://kit.fontawesome.com/bbfa70ff5f.js" crossorigin="anonymous"></script>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="/imagen/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./imagen/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./imagen/favicon-16x16.png">
    <link rel="manifest" href="./imagen/site.webmanifest">
    <title>Veranum</title>
</head>

<body>

    <!-- ENCABEZADO -->
    <header>
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="./imagen/Logo.png" alt="logo" /></a>
                                    <p class="fs-3 text-white ps-3  mt-1 ">Viña del Mar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav gap-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="./index.php">Santiago</a>
                                    </li>
                                    <li class="nav-item">
                                        <!-- <a class="nav-link" href="#Alojamiento">Reservación</a> -->
                                        <a class="nav-link" href="./habitaciones.php">Reservación</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contactanos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">Acerca de</a>
                                    </li>
                                </ul>
                                <div class="sign_btn"><a href="./login.php">Ingresar</a></div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- NOMBRE SESION DE USUARIO -->
            <div class="container-fluid">
                <div class="user_login d-flex justify-content-end align-items-center ">
                    <h3 class="text-white px-4" style="background-color: none; border: 2px solid #fff; border-radius: 30px; padding: 10px; font-weight: bold;">
                        <?php
                            session_start();
                            if (isset($_SESSION['nombres'])) {
                                $nombres = $_SESSION['nombres'];
                                $nombres = ucwords($nombres);
                                echo '<i class="fa-solid fa-user-tie fa-xl"  style="color: #00bdb0; margin-right: 10px;"></i>'. $nombres;
                            } else {
                                echo '<i class="fa-solid fa-user-minus fa-xl" style="color: #fd5821; margin-right: 10px;"></i> Invitado';
                            }
                        ?>
                    </h3>
                    <?php if (isset($_SESSION['nombres'])) { ?>
                        <a href="cerrar_sesion.php" class="btn ms-3 text-white px-4" 
                        style="background-color: none; border: 2px solid #fff; border-radius: 30px; font-weight: bold;">Cerrar sesión</a>
                    <?php } ?>
                </div>
            </div>
            <!-- FIN NOMBRE SESION DE USUARIO -->
        </div>
    </header>
    <!-- FIN ENCABEZADO -->

    <!-- BANNER -->
    <section class="banner_main">
        <div class="container mt-4 pt-5">
            <div class="row mt-5 pt-5">
                <div class="col-md-12">
                    <div class="text-bg">
                        <div class="padding_lert mt-5 pt-4">
                            <h1>BIENVENIDO A HOTEL VERANUM VIÑA</h1>
                            <span>Hotels & Resorts</span>
                            <p>La elegancia se fusiona con la excelencia para crear una experiencia inolvidable que trasciende las expectativas. Cada
                                momento se convierte en un recuerdo imborrable, cada huésped es atendido con devoción y cada detalle es cuidado con
                                pasión. Bienvenido a un mundo de extraordinaria hospitalidad.</p>
                            <a class="read_more" href="#Alojamiento">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN BANNER -->



    <!-- SECCION ALOJAMIENTO PERFECTO -->
    <div class="choose">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="choose_box">
                        <div class="titlepage">
                            <h2><span class="text_norlam" id="Alojamiento">Elija el alojamiento</span> <br>Perfecto</h2>
                        </div>
                        <p>Nuestras habitaciones de hotel son perfectas, un remanso de paz y confort. Con una elegante decoración, cama king-size
                            con
                            sábanas suaves, ventanas panorámicas, iluminación ambiental y baño privado con ducha de efecto lluvia. Además, cuenta
                            con
                            televisor de pantalla plana, minibar y acceso a Internet de alta velocidad. Un espacio ideal para relajarse y
                            disfrutar.
                        </p>
                        <a class="read_more" href="./habitacionesv.php">Ver más</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="img_box">
                                <figure><img src="./imagen/servicio1.jpg" alt="servicio1" /></figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img_box">
                                <figure><img src="./imagen/servicio2.jpg" alt="servicio2" /></figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img_box">
                                <figure><img src="./imagen/servicio3.jpg" alt="servicio3" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN SECCION ALOJAMIENTO PERFECTO -->

    <!-- SECCION MENU -->
    <div class="our">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-6">
                    <div class="img_box">
                        <!-- CARRUSEL DE IMAGENES -->
                        <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active carrusel-img" data-bs-interval="3000">
                                    <img src="./imagen/comida1.jpg" class="d-block" alt="comida1">
                                </div>
                                <div class="carousel-item carrusel-img" data-bs-interval="3000">
                                    <img src="./imagen/comida2.jpg" class="d-block" alt="comida2">
                                </div>
                                <div class="carousel-item carrusel-img" data-bs-interval="3000">
                                    <img src="./imagen/comida3.jpg" class="d-block" alt="comida3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="our_box">
                        <div class="titlepage">
                            <h2><span class="text_norlam">Nuestro Mejor </span> <br>Menú</h2>
                        </div>
                        <p>
                            Nuestro exquisito menú de ensueño es una obra maestra culinaria que deleitará todos sus sentidos. Desde los sabores
                            vibrantes y frescos de los mariscos de la costa hasta los cortes de carne tiernos y jugosos, cada plato es cuidadosamente
                            elaborado para ofrecer una experiencia gastronómica inolvidable. Déjese llevar por un viaje culinario sin igual en nuestro
                            exclusivo paraíso gastronómico. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN SECCION MENU -->

    <!-- ACERCA DE -->
    <div id="about" class="about">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-md-6">
                    <div class="about_text">
                        <div class="titlepage">
                            <h2>Nuestros Hoteles</h2>
                            <p>En nuestros establecimientos, disfruta de una experiencia maravillosa y placentera. Nuestros hoteles están diseñados
                                para brindarte un ambiente cómodo y satisfactorio en cada detalle. Desde las elegantes habitaciones hasta las amplias
                                zonas comunes, cada espacio ha sido creado meticulosamente para ofrecerte una estancia inolvidable. Reflejamos nuestra
                                dedicación a la calidad en todos los aspectos de nuestros servicios, y nuestro amable personal está siempre dispuesto
                                a brindarte un servicio excepcional. Descubre la combinación perfecta de lujo, comodidad y calidad en nuestros hoteles
                                y permítenos convertir tu estancia en una experiencia única e inigualable.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 video-edit">
                    <video width="550" controls muted autoplay>
                        <source src="./video/video.mp4" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN ACERCA DE -->

    <!-- FOOTER -->
    <footer id="contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="titlepage">
                            <h2>Contactanos</h2>
                        </div>
                        <div class="cont">
                            <h3>¡Queremos saber de ti!</h3>
                            <p>"Valoramos tu interés y queremos asegurarnos de que tengas una
                                experiencia excepcional con nosotros. Si tienes alguna pregunta, solicitud o simplemente deseas comunicarte con
                                nuestro equipo, no dudes en contactarnos. Puedes utilizar el formulario de contacto.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form id="request" class="main_form">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Nombre Completo" type="type" name="Full Name">
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Email" type="type" name="Email">
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Número Teléfono" type="type" name="Phone Number">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Mensaje" type="type" Message="Name">Mensaje</textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button class="send_btn">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Copyright 2023 Todos Los Derechos Reservados by <a href="https://github.com/RoyDev87/hotel.git">RoyDev87 & VeloSoft</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FIN FOOTER -->

    <!-- CDN SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>