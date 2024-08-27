<?php
// Datos de la base de datos
$servername = "localhost";
$username = "root";
$password = "0826";
$dbname = "sesion";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar y vincular la consulta
$stmt = $conn->prepare("INSERT INTO user (id_prod, nom_prod, descr_prod, id_prov) VALUES (?, ?, ?, ?)");

// Verificar si la preparación fue exitosa
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

// Vincular parámetros (tipos: 's' para string)
$stmt->bind_param('ssss', $id_prod, $nom_prod, $descr_prod, $id_prov);

// Establecer parámetros y ejecutar
$id_prod = $_POST['id_prod'];
$nom_prod = $_POST['nom_prod'];
$descr_prod = $_POST['descr_prod'];
$id_prov = $_POST['id_prov']; 

if ($stmt->execute()) {
    echo "Registro guardado exitosamentejjjjj";
} else {
    echo "Error al guardar el registro: " . $stmt->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>

