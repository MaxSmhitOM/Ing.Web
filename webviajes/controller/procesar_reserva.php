<?php
// Verificar si se recibieron los datos del formulario
if (isset($_POST['nombre'], $_POST['email'], $_POST['fecha'], $_POST['destino'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $destino = $_POST['destino'];

    // Aquí puedes agregar tu lógica para procesar la reserva, como almacenar los datos en una base de datos o enviar un correo de confirmación

    // Ejemplo de mensaje de confirmación
    $mensaje = "¡Gracias por tu reserva!\n\nDetalles de la reserva:\nNombre: $nombre\nEmail: $email\nFecha: $fecha\nDestino: $destino";

    // Ejemplo de envío de correo de confirmación
    mail($email, "Confirmación de reserva", $mensaje);

    // Redirigir a una página de confirmación
    header("Location: confirmacion_reserva.php");
    exit;
} else {
    // Si no se recibieron los datos, redirigir a una página de error
    header("Location: error_reserva.php");
    exit;
}
?>
