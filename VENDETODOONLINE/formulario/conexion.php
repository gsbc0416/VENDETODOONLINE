<?php
$host = 'localhost'; // Cambia esto según tu configuración
$usuario = 'root'; // Cambia esto según tu configuración
$contraseña = '0826'; // Cambia esto según tu configuración
$basedatos = 'vendetodoonline'; // Cambia esto según tu configuración

$conex = mysqli_connect($host, $usuario, $contraseña, $basedatos);

if (mysqli_connect_errno()) {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    exit();
}
?>