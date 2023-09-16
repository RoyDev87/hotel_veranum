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
    <link rel="stylesheet" href="./css/style.css">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="/imagen/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./imagen/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./imagen/favicon-16x16.png">
    <link rel="manifest" href="./imagen/site.webmanifest">
    <title>Habitaciones</title>
</head>

<body>

    <!-- ENCABEZADO -->
    <header>
        <div class="header" style="background-color: #353e4e;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="./imagen/Logo.png" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
                                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav gap-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="./index.php">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <!-- <a class="nav-link" href="./index.php #Alojamiento">Reservación</a> -->
                                        <a class="nav-link" href="./habitaciones.php">Reservación</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./index.php #contact">Contactanos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./index.php #about">Acerca de</a>
                                    </li>
                                </ul>
                                <div class="sign_btn"><a href="./login.php">Ingresar</a></div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- FIN ENCABEZADO -->



    <!-- TARJETAS DE RESERVA -->
    <div class="container my-5" style="padding-top: 120px;">
        <div class="row row-cols-1 row-cols-md-2 g-5 ">
            <div class="col d-flex justify-content-center ">
                <div class="card w-75">
                    <div id="carouselExample1" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./imagen/silver1.webp" class="d-block w-100" alt="silver1">
                            </div>
                            <div class="carousel-item">
                                <img src="./imagen/silver2.webp" class="d-block w-100" alt="silver2">
                            </div>
                            <div class="carousel-item">
                                <img src="./imagen/silver3.webp" class="d-block w-100" alt="silver3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <h5 class="card-title fs-3 text-center mt-4">Suite Silver </h5>
                    <div class="d-flex justify-content-center">
                        <div class="precio fs-2 mb-3" style="background-color: #353e4e; font-family: Poppins; font-weight: 600; width: 200px; border-radius: 10px;">
                            <span class="text-white" style="margin-left: 28px;">$</span>
                            <input class="text-white" style="background-color: transparent; border: none; outline: none; width: 120px; font-family: Poppins; font-weight: 600;" id="precio" type="text" value="55.000" name="precio">
                        </div>
                    </div>
                    <p class="card-title fs-6 text-center mx-3">"Experimentaaaaa la máxima elegancia y el confort en nuestra exclusiva suite Silver. Disfruta de amplios espacios, una decoración sofisticada y una vista impresionante. Relájate en tu propia y acogedora sala de estar privada y descansa plácidamente en una lujosa cama king-size. ¡Una experiencia inolvidable y única te esperamos!"</p>
                    <a href="./reservacion.php" class="btn mt-3 text-white " style="background-color: #353e4e;">Reservar</a>
                </div>
            </div>



            <div class="col d-flex justify-content-center ">
                <div class="card w-75">
                    <div id="carouselExample2" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./imagen/golden1.webp" class="d-block w-100" alt="golden1">
                            </div>
                            <div class="carousel-item">
                                <img src="./imagen/golden2.webp" class="d-block w-100" alt="golden2">
                            </div>
                            <div class="carousel-item">
                                <img src="./imagen/golden6.webp" class="d-block w-100" alt="golden6">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <h5 class="card-title fs-3 text-center mt-4">Suite Golden</h5>
                    <div class="d-flex justify-content-center">
                        <div class="precio fs-2 mb-3" style="background-color: #353e4e; font-family: Poppins; font-weight: 600; width: 200px; border-radius: 10px;">
                            <span class="text-white" style="margin-left: 28px;">$</span>
                            <input class="text-white" style="background-color: transparent; border: none; outline: none; width: 120px; font-family: Poppins; font-weight: 600;" id="precio" type="text" value="75.000" name="precio">
                        </div>
                    </div>
                    <p class="card-title fs-6 text-center mx-3">Sumérgete en el lujo de nuestra suite Golden. Con un estilo opulento y detalles cuidadosamente
                        seleccionados, esta
                        suite te envolverá en un ambiente exclusivo. Disfruta de un espacioso dormitorio, un salón privado y un baño de mármol. ¡Déjate
                        consentir como un verdadero VIP!.</p>
                    <a href="./reservacion.php" class="btn mt-3 text-white" style="background-color: #353e4e;">Reservar</a>
                </div>
            </div>



            <div class="col d-flex justify-content-center ">
                <div class="card w-75">
                    <div id="carouselExample3" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./imagen/deluxe1.webp" class="d-block w-100" alt="deluxe1">
                            </div>
                            <div class="carousel-item">
                                <img src="./imagen/deluxe2.webp" class="d-block w-100" alt="deluxe2">
                            </div>
                            <div class="carousel-item">
                                <img src="./imagen/deluxe3.webp" class="d-block w-100" alt="deluxe3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <h5 class="card-title fs-3 text-center mt-4">Suite Golden Deluxe</h5>
                    <div class="d-flex justify-content-center">
                        <div class="precio fs-2 mb-3" style="background-color: #353e4e; font-family: Poppins; font-weight: 600; width: 200px; border-radius: 10px;">
                            <span class="text-white" style="margin-left: 25px;">$</span>
                            <input class="text-white" style="background-color: transparent; border: none; outline: none; width: 130px; font-family: Poppins; font-weight: 600;" id="precio" type="text" value="125.000" name="precio">
                        </div>
                    </div>
                    <p class="card-title fs-6 text-center mx-3">"Descubre un nivel supremo de lujo en nuestra exclusiva suite Golden Deluxe. Esta amplia y luminosa habitación ofrece un diseño moderno y una atención al detalle excepcional. Relájate en el jacuzzi privado, disfruta de las impresionantes vistas panorámicas y descansa plácidamente en la comodidad de una espaciosa cama extragrande. ¡Sumérgete en un paraíso!"</p>
                    <a href="./reservacion.php" class="btn mt-3 text-white" style="background-color: #353e4e;">Reservar</a>
                </div>
            </div>



            <div class="col d-flex justify-content-center ">
                <div class="card w-75">
                    <div id="carouselExample4" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./imagen/diamond1.webp" class="d-block w-100" alt="diamond1">
                            </div>
                            <div class="carousel-item">
                                <img src="./imagen/diamond2.webp" class="d-block w-100" alt="diamond2">
                            </div>
                            <div class="carousel-item">
                                <img src="./imagen/diamond3.webp" class="d-block w-100" alt="diamond3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <h5 class="card-title fs-3 text-center mt-4">Suite Diamond Premiere</h5>
                    <div class="d-flex justify-content-center">
                        <div class="precio fs-2 mb-3" style="background-color: #353e4e; font-family: Poppins; font-weight: 600; width: 200px; border-radius: 10px;">
                            <span class="text-white" style="margin-left: 25px;">$</span>
                            <input class="text-white" style="background-color: transparent; border: none; outline: none; width: 130px; font-family: Poppins; font-weight: 600;" id="precio" type="text" value="215.000" name="precio">
                        </div>
                    </div>
                    <p class="card-title fs-6 text-center mx-3">Adéntrate en la realeza en nuestra suite Diamond Premier. Esta es la cúspide del lujo y el
                        refinamiento. Disfruta
                        de una suite de múltiples niveles con una decoración elegante y exclusiva. Relájate en la terraza privada, déjate mimar en el spa
                        privado y disfruta de un servicio personalizado las 24 horas. ¡Un mundo de lujo sin límites!</p>
                    <a href="./reservacion.php" class="btn mt-3 text-white" style="background-color: #353e4e;">Reservar</a>
                </div>
            </div>

        </div>
    </div>



    <!-- FIN TARJETAS DE RESERVA -->

    <!-- CDN SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>


</html>