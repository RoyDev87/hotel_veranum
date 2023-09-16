<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Veranum</title>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
        <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style_login.css">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
    <link rel="manifest" href="./img/site.webmanifest">
    <title>Veranum</title>
</head>

<body>



    <main>
        <div class="logo">
            <a href="index.php"><img src="./imagen/Logo.png" alt="logo" /></a>
        </div>
        <!-- CONTENIDO CAJA -->
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--FORMULARIO-->
            <div class="contenedor__login-register">
                <!--LOGUEO-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name = "correo" >
                    <input type="password" placeholder="Contraseña" name="contrasena" >
                    <button>Entrar</button>
                </form>

                <!--REGISTRO-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombres" name="nombres" >
                    <input type="text" placeholder="Apellido Paterno" name="ap_paterno" class="form-control placeholder-color">
                    <input type="text" placeholder="Apellido Materno" name="ap_materno" >
                    <input type="text" placeholder="Correo Electronico" name = "correo" >
                    <input type="text" placeholder="Usuario" name="usuario" >
                    <input type="password" placeholder="Contraseña" name="contrasena" ><br>
                    <small class="form-text text-danger font-italic ms-2">Entre 8-12 caracteres, mayúscula, número y símbolo.</small><br>
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="boton_regresar">
            <a href="./index.php">Volver</a>
        </div>

    </main>

    <!-- JAVASCRIPTS -->
    <script src="./js/script.js"></script>
</body>

</html>