<?php
// Iniciar la sesión si aún no se ha iniciado
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión u otra página deseada
header("Location: index.php");
exit();
?>