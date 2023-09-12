<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evento_registro";

// Crear una conexión a la base de datos
$db = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>