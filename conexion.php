<?php
// Datos de conexión
$host = 'localhost';
$usuario = 'root';
$password = '';
$base_de_datos = 'tele_dana';

// Crear conexión
$conexion = new mysqli($host, $usuario, $password, $base_de_datos);

// Comprobar la conexión
if ($conexion->connect_error) {
    die('Error de Conexión (' . $conexion->connect_errno . ') ' . $conexion->connect_error);
} else {
    // echo 'Conexión exitosa a la base de datos';
}
?>
