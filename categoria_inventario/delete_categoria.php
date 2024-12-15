<?php 
include('../conexion.php');

$id = $_GET['id'];

/* Consulta de la base de datos */
$query ="DELETE FROM categorias WHERE id_categoria=$id";
if($conn->query($query)==TRUE){
    header('Location: ../control_categoria_invent.php');
}else {
    echo "Error de consulta";
}


?>