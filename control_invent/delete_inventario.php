<?php 
include('../conexion.php');

$id = $_GET['id'];

/* Consulta de la base de datos */
$query ="DELETE FROM inventario WHERE id_producto=$id";
if($conn->query($query)==TRUE){
    header('Location: ../eliminar_producto.php');
}else {
    echo "Error de consulta";
}


?>