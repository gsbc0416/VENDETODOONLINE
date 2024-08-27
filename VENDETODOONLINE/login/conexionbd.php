<?php
// Datos de la base de datos
$servername = "localhost";
$username = "root";
$password = "0826";
$dbname = "login";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar y vincular la consulta
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, usuario, clave) VALUES (?, ?, ?, ?)");

// Verificar si la preparación fue exitosa
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

// Vincular parámetros (tipos: 's' para string)
$stmt->bind_param('ssss', $nombre, $apellido, $usuario, $clave);

// Establecer parámetros y ejecutar
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$clave = password_hash($_POST['clave'], PASSWORD_BCRYPT); // Encriptar la contraseña

if ($stmt->execute()) {
    echo "Registro guardado exitosamentehjjjjjjj";
} else {
    echo "Error al guardar el registro: " . $stmt->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>

