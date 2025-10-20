<?php
include '../../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre  = $_POST['nombre'];
    $email  = $_POST['email'];
    $asunto  = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

 
$telefono = "529531563588"; 


$texto = "Hola, soy $nombre.%0AAsunto: $asunto.%0AMensaje: $mensaje.%0ACorreo: $email";


header("Location: https://api.whatsapp.com/send?phone=$telefono&text=$texto");

exit;

    if (empty($nombre) || empty($email) || empty($asunto) || empty($mensaje)) {
        echo "<div class='alert alert-danger'>⚠ Por favor completa todos los campos.</div>";
        exit;]++
    }

    $sql = $conn->prepare("INSERT INTO contacto (nombre, email, asunto, mensaje) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $nombre, $email, $asunto, $mensaje);

    if ($sql->execute()) {
        header("Location:../../formulario.php?mensaje=ok");
        exit;
    } else {
        echo "<div class='alert alert-danger'>❌ Error al guardar los datos: " . $sql->error . "</div>";
    }

    $sql->close();
    $conn->close();

} else {
    echo "<div class='alert alert-warning'>⚠ Acceso no permitido.</div>";
}
?>
