<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    

    // Consulta para verificar usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$usuario' AND password = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: home.php");
        exit();

    } else {
        header("Location: index.php?error=1");
        exit();
    }
}
?>