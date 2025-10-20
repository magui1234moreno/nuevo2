<?php
$servidor = "localhost";
$usuario = "root";
$pass= "";
$base_datos = "portafolio2025_db";

$conn = new mysqli($servidor, $usuario, $pass, $base_datos);

 echo("conexion exitosa");//mostrar mensaje 

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
