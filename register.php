<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar si el email ya está registrado
    $checkEmail = "SELECT * FROM usuarios WHERE email='$email'";
    $resultado = $conexion->query($checkEmail);

    if ($resultado->num_rows > 0) {
        echo "El correo electrónico ya está registrado.";
    } else {
        // Insertar usuario en la base de datos
        $query = "INSERT INTO usuarios (nombre, email, password, rol_id) VALUES ('$nombre', '$email', '$password', 1)";
        if ($conexion->query($query) === TRUE) {
            echo "Registro exitoso";
        } else {
            echo "Error: " . $conexion->error;
        }
    }
}
?>
