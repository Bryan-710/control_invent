<?php 
include('../conexion.php');

$id = $_GET['id'];

/* Consulta de la base de datos */
$query ="DELETE FROM proveedores WHERE id_proveedor=$id";
if($conn->query($query)==TRUE){
    header('Location: ../control_proveedores.php');
}else {
    echo "Error de consulta";
}


?>