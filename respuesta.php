<?php
//conexión a la base de datos
include 'conexion.php';
//$db = conexion::con();



$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$municipio = $_POST['ciudad'];

$sql = "INSERT INTO evento (nombre, email, telefono, municipio) VALUES ('$nombre', '$email', '$telefono', '$municipio')";

if ($db->query($sql) === TRUE) {
    // Mostrar una alerta de JavaScript para informar sobre el registro exitoso
    echo '<script>alert("Registro exitoso"); window.location.href = "Evento-registro.html";</script>';
} else {
    // Mostrar una alerta de JavaScript para informar sobre el error
    echo '<script>alert("Error al registrar: ' . $conn->error . '"); window.location.href = "Evento-registro.html";</script>';
}

$db->close();

?>