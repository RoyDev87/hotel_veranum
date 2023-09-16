<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reservacion.css">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="/imagen/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./imagen/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./imagen/favicon-16x16.png">
    <link rel="manifest" href="./imagen/site.webmanifest">
    <title>Reservación</title>

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
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
                                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="./index.php">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./index.php #Alojamiento">Reservación</a>
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


    <!-- FORMULARIO RESERVA -->
    <div class="col-md-6 mx-auto" style="padding-top: 60px;">
        <form class="form" id="formulario" action="php/reserva_be.php" method="POST">
            <div class="contenedor_form">
                <h2 class="form_titulo">Ingrese datos de Reserva</h2>
                <label>
                    <b>Hotel</b>
                    <select id="sucursal" name="sucursal" class="form_input">
                        <option value="" disabled selected hidden>Selecciona una opción...</option>
                        <option value="santiago">Sucursal Santiago</option>
                        <option value="viña">Sucursal Viña del Mar</option>
                    </select>
                    <span></span>
                </label>
                <label>
                    <b for="checkin">Check-in:</b>
                    <input class="form_input" type="date" id="checkin" name="checkin">
                </label>
                <label>
                    <b for="checkout">Check-out:</b>
                    <input class="form_input" type="date" id="checkout" name="checkout">
                </label>
                <label>
                    <b>Nombres</b><br>
                    <input type="text" class="form_input" id="nombres" placeholder="Nombre 1 Nombre 2..." name="nombres">
                    <span></span>
                </label>
                <label>
                    <b>Apellido paterno</b>
                    <input type="text" class="form_input" id="ap_paterno" placeholder="Primer apellido..." name="ap_paterno">
                    <span></span>
                </label>
                <label>
                    <b>Apellido materno</b>
                    <input type="text" class="form_input" id="ap_materno" placeholder="Segundo apellido..." name="ap_materno">
                    <span></span>
                </label>
                <label>
                    <b>Rut (con digito verificador)</b>
                    <input type="text" class="form_input2" id="rut" placeholder="12345678..." name="rut">
                    <input type="text" class="form_input3" id="dv" placeholder="K..." name="dv">
                    <span></span>
                </label>
                <label>
                    <b>Seleccione su habitación</b>
                    <select id="tipoHabitacion" name="tipo_habitacion" class="form_input">
                        <option value="" disabled selected hidden>Selecciona una opción...</option>
                        <option value="silver">Suite Silver</option>
                        <option value="golden">Suite golden</option>
                        <option value="deluxe">Suite Golden Deluxe</option>
                        <option value="premiere">Suite Diamond Premiere</option>
                    </select>
                    <span></span>
                </label>
                <label>
                    <b>Número de huéspedes</b>
                    <select id="numeroHuespedes" name="cant_huespedes" class="form_input">
                        <option value="" disabled selected hidden>Selecciona una opción...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <span></span>
                </label>
                <label>
                    <b>Celular</b>
                    <input type="text" class="form_input" id="celular" placeholder="569 12345678 ..." name="celular">
                    <span></span>
                </label>
                <label>
                    <b>Comentarios</b>
                    <textarea class="form_input form_input--message" id="mensaje" placeholder="Ingrese sus comentarios, sugerencias o solicitudes ..."
                        name="message"></textarea>
                    <span></span>
                </label>
                <input type="submit" value="Reservar" class="form_cta">
                <p class="warnings" id="warnings"></p>
            </div>
        </form>
    </div>
    <!-- FIN FORMULARIO RESERVA -->


    <!-- CDN SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- <script src="./js/validaciones.js"></script> -->

</body>

</html>