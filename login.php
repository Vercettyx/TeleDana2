<?php
// Incluir el archivo de conexión
include('conexion.php');

// Comprobando si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar usuario
    $query = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
    $resultado = $conexion->query($query);

    if ($resultado->num_rows > 0) {
        // Usuario válido
        echo "Login exitoso";
    } else {
        // Usuario no encontrado
        echo "Email o contraseña incorrectos";
    }
}
?>
