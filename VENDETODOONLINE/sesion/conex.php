<?php
// Datos de la base de datos
$servername = "localhost";
$username = "root";
$password = "0826";
$dbname = "sesion";

// Crear la conexión
$conex = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}

// Preparar y vincular la consulta
$stmt = $conex->prepare("INSERT INTO user (username, password) VALUES (?, ?, ?, ?)");

// Verificar si la preparación fue exitosa
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conex->error);
}

// Vincular parámetros (tipos: 's' para string)
$stmt->bind_param('ssss', $username, $password);

// Establecer parámetros y ejecutar


if ($stmt->execute()) {
    echo "Registro guardado exitosamente";
} else {
    echo "Error al guardar el registro: " . $stmt->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conex->close();
?>

