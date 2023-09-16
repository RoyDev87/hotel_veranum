<?php

    include 'conexion_be.php';

    function __construct($trut){
        $this->trut=$trut;
    }

    function validadorRut($trut) 
    {
        $dvt = substr($trut, strlen($trut) - 1, strlen($trut));
        $rutt = substr($trut, 0, strlen($trut) - 1);
        $rut = intval($rutt);
        $pa = $rut;
        $c = 2;
        $sum = 0;
        while ($rut > 0) {
            $a1 = $rut % 10;
            $rut = floor($rut / 10);
            $sum = $sum + ($a1 * $c);
            $c = $c + 1;
            if ($c == 8) {
                $c = 2;
            }
        }
        $di = $sum % 11;
        $digi = 11 - $di;
        $digi1 = ((string)($digi));
        if (($digi1 == '10')) {
            $digi1 = 'K';
        }
        if (($digi1 == '11')) {
            $digi1 = '0';
        }

        if (($dvt == $digi1)) {
            return true;
        } else {
            return false;
        }
    }

    $rut = $_POST['rut'];
    $dv = $_POST['dv'];

    $rutCompleto = $rut . $dv;



    if (!validadorRut($rutCompleto)) {
        echo'
        <script>
        alert("El RUT es inválido.");
        window.location = "../reservacion.php"
        </script>';
    }

    $sucursal = $_POST['sucursal'];

    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $tipo_habitacion = $_POST['tipo_habitacion'];
    $cant_huespedes = $_POST['cant_huespedes'];


    $fecha_reserva = date('Y-m-d');

    if ($sucursal === 'santiago') {
        if ($tipo_habitacion === 'silver') {
            $precio = 55000;
        } elseif ($tipo_habitacion === 'golden') {
            $precio = 75000;
        } elseif ($tipo_habitacion === 'deluxe') {
            $precio = 125000;
        } elseif ($tipo_habitacion === 'premiere') {
            $precio = 215000;    
        }
    } elseif ($sucursal === 'viña') {
        if ($tipo_habitacion === 'silver') {
            $precio = 65000;
        } elseif ($tipo_habitacion === 'golden') {
            $precio = 85000;
        } elseif ($tipo_habitacion === 'deluxe') {
            $precio = 135000;
        } elseif ($tipo_habitacion === 'premiere') {
            $precio = 225000;      
        }
    }


    // Convertir las fechas en timestamps
    $timestampInicio = strtotime($checkin);
    $timestampFin = strtotime($checkout);

    // Calcular la diferencia en segundos
    $diferenciaSegundos = $timestampFin - $timestampInicio;

    // Calcular la diferencia en días
    $totalDias = floor($diferenciaSegundos / 86400);

    $total_reserva = $precio * $totalDias;

    $query = "INSERT INTO reserva(sucursal,fecha_reserva,rut,dv,entrada,salida,habitacion,personas,total_dias,precio,total_reserva)
                 VALUES('$sucursal','$fecha_reserva','$rut','$dv','$checkin','$checkout','$tipo_habitacion','$cant_huespedes','$totalDias','$precio','$total_reserva')";



    //VERIFICAR QUE LA HABITACION ESTE DISPONIBLE PARA EL PERIODO 
    $verificar_habitacion = mysqli_query($conexion, "SELECT * FROM reserva WHERE habitacion = '$tipo_habitacion'
    and sucursal='$sucursal' and (entrada BETWEEN '$checkin' and '$checkout' or salida BETWEEN '$checkin' and '$checkout') ");
    if(mysqli_num_rows($verificar_habitacion) > 0){
        echo'
            <script>
                alert("La habitacion no se encuentra disponible, por favor intente con otra habitación u otro periodo");
                window.location = "../habitaciones.php"
            </script>';
        exit();
    }


    $formatted_checkin = date('d/m/Y', strtotime($checkin));
    $formatted_checkout = date('d/m/Y', strtotime($checkout));
    $formatted_total_reserva = number_format($total_reserva);

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("¡Felicitaciones! ya tienes tu nueva reserva desde el ' . $formatted_checkin  . ' hasta el ' . $formatted_checkout . '. El valor a pagar es $' . strval($formatted_total_reserva ) . '");
                window.location = "../index.php"
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Hubo un error al generar la reservación, intentelo de nuevo");
                window.location = "../index.php"
            </script>
        ';
    }

    mysqli_close($conexion);

?>