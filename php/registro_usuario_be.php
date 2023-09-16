<?php

    include 'conexion_be.php';

    $nombres = $_POST['nombres'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // VALIDA QUE LOS CAMPOS SEAN COMPLETADOS
    if (empty($nombres) || empty($ap_paterno) || empty($ap_materno) || empty($correo) || empty($usuario) || empty($contrasena)) {
        echo '
            <script>
                alert("Por favor, completa todos los campos del formulario");
                window.location = "../login.php";
            </script>';
        exit();
    }

    //VALIDA QUE CORREO CORRESPONDA A FORMATO DE EMAIL
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo '
            <script>
                alert("El formato del correo electrónico no es válido");
                window.location = "../login.php";
            </script>';
        exit();
    }

    // DEFINICIÓN DE LA EXPRESIÓN REGULAR
    $regex = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\W).{8,12}$/';

    //VALIDA SI LA CONTRASEÑA CUMPLE CON LA EXPRESIÓN RGULAR DEFINIDA
    if (!preg_match($regex, $contrasena)) {
        echo '
            <script>
                alert("La contraseña debe tener entre 8 y 12 caracteres, al menos una letra mayúscula, un número y un símbolo.");
                window.location = "../login.php";
            </script>';
        exit();
    }

    $contrasena = hash('sha512', $contrasena); //AQUI SE ENCRIPTA LA CONTRASEÑA

    
    $query = "INSERT INTO cliente(nombres,ap_paterno,ap_materno, correo, usuario, contrasena)
                 VALUES('$nombres','$ap_paterno','$ap_materno', '$correo', '$usuario', '$contrasena')";

    //VERIFICAR QUE EL CORREO NO SE REPITA EN LA BASE DE DATOS
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM cliente WHERE correo = '$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
            <script>
                alert("Éste correo ya se encuentra registrado, por favor intenta con uno diferente");
                window.location = "../login.php"
            </script>';
        exit();
    }

    //VERIFICAR QUE EL NOMBRE DE USUARIO NO SE REPITA EN LA BASE DE DATOS
    $verificar_cliente = mysqli_query($conexion, "SELECT * FROM cliente WHERE usuario = '$usuario'");
    if(mysqli_num_rows($verificar_cliente) > 0){
        echo'
            <script>
                alert("Éste usuario ya se encuentra registrado, por favor intenta con uno diferente");
                window.location = "../login.php"
            </script>';
        exit();
    }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado con éxito");
                window.location = "../login.php"
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Hubo un error al registrarse, intentelo de nuevo");
                window.location = "../login.php"
            </script>
        ';
    }

    mysqli_close($conexion);

?>