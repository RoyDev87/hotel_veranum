function validarFormulario() {
    // Obtenemos los campos del formulario
    var sucursal = document.getElementById('sucursal');
    var checkin = document.getElementById('checkin');
    var checkout = document.getElementById('checkout');
    var nombres = document.getElementById('nombres');
    var ap_paterno = document.getElementById('ap_paterno');
    var ap_materno = document.getElementById('ap_materno');
    var rut = document.getElementById('rut');
    var dv = document.getElementById('dv');
    var tipoHabitacion = document.getElementById('tipoHabitacion');
    var numeroHuespedes = document.getElementById('numeroHuespedes');
    var celular = document.getElementById('celular');
    var mensaje = document.getElementById('mensaje');

    // Variable para almacenar los mensajes de error
    var mensajesError = "";

    // Validación de la sucursal
    if (sucursal.value === "") {
        mensajesError += "- Por favor, seleccione una sucursal.\n";
        sucursal.classList.add("error");
    } else {
        sucursal.classList.remove("error");
    }

    // Validación del check-in
    if (checkin.value === "") {
        mensajesError += "- Por favor, seleccione una fecha de check-in.\n";
        checkin.classList.add("error");
    } else {
        checkin.classList.remove("error");
    }

    // Validación del check-out
    if (checkout.value === "") {
        mensajesError += "- Por favor, seleccione una fecha de check-out.\n";
        checkout.classList.add("error");
    } else {
        checkout.classList.remove("error");
    }

    // Validación de los nombres
    if (nombres.value === "") {
        mensajesError += "- Por favor, ingrese su(s) nombre(s).\n";
        nombres.classList.add("error");
    } else {
        nombres.classList.remove("error");
    }

    // Validación del apellido paterno
    if (ap_paterno.value === "") {
        mensajesError += "- Por favor, ingrese su apellido paterno.\n";
        ap_paterno.classList.add("error");
    } else {
        ap_paterno.classList.remove("error");
    }

    // Validación del apellido materno
    if (ap_materno.value === "") {
        mensajesError += "- Por favor, ingrese su apellido materno.\n";
        ap_materno.classList.add("error");
    } else {
        ap_materno.classList.remove("error");
    }

    // Validación del RUT
    if (rut.value === "") {
        mensajesError += "- Por favor, ingrese su RUT.\n";
        rut.classList.add("error");
    } else {
        rut.classList.remove("error");
    }

    // Validación del dígito verificador del RUT
    if (dv.value === "") {
        mensajesError += "- Por favor, ingrese el dígito verificador de su RUT.\n";
        dv.classList.add("error");
    } else {
        dv.classList.remove("error");
    }

    // Validación del tipo de habitación
    if (tipoHabitacion.value === "") {
        mensajesError += "- Por favor, seleccione un tipo de habitación.\n";
        tipoHabitacion.classList.add("error");
    } else {
        tipoHabitacion.classList.remove("error");
    }

    // Validación del número de huéspedes
    if (numeroHuespedes.value === "") {
        mensajesError += "- Por favor, seleccione el número de huéspedes.\n";
        numeroHuespedes.classList.add("error");
    } else {
        numeroHuespedes.classList.remove("error");
    }

    // Validación del número de celular
    if (celular.value === "") {
        mensajesError += "- Por favor, ingrese su número de celular.\n";
        celular.classList.add("error");
    } else {
        celular.classList.remove("error");
    }

    // Validación del mensaje
    if (mensaje.value === "") {
        mensajesError += "- Por favor, ingrese su mensaje.\n";
        mensaje.classList.add("error");
    } else {
        mensaje.classList.remove("error");
    }

    // Mostrar los mensajes de error
    if (mensajesError !== "") {
        alert("Por favor corrija los siguientes errores:\n" + mensajesError);
        return false;
    }

    // Si no hay errores, el formulario se puede enviar
    return true;
}
