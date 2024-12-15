<?php 
include('../conexion.php');

$id = $_GET['id'];

/* Consulta de la base de datos */
$query ="DELETE FROM usuarios WHERE id=$id";
if($conn->query($query)==TRUE){
    header('Location: ../control_usuarios.php');
}else {
    echo "Error de consulta";
}


?>