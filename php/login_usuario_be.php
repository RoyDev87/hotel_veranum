<?php

    session_start();

    include 'conexion_be.php';

    $correo = $_POST ['correo'];
    $contrasena = $_POST ['contrasena'];

    // Validar que los campos no estén vacíos
    if (empty($correo) || empty($contrasena)) {
        echo '
            <script>
                alert("Por favor, ingresa tu correo y contraseña");
                window.location = "../login.php";
            </script>';
        exit();
    }

    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM cliente WHERE correo = '$correo' and contrasena = '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['cliente'] = $correo;

        $datos_cliente = mysqli_fetch_assoc($validar_login);
        $nombres = $datos_cliente['nombres'] . " " . $datos_cliente['ap_paterno'] . " " . $datos_cliente['ap_materno'];
    
        $_SESSION['nombres'] = $nombres;

        header("location: ../index.php");
        exit();
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos ingresados");
                window.location = "../login.php"
            </script>';
        exit();
    }

?>