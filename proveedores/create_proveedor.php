<?php 
include('../conexion.php');

if(isset($_POST['submit'])){
    $name =  $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $query = "INSERT INTO proveedores(nombre_proveedor, telefono_proveedor,direccion_proveedor) VALUES ('$name', '$telefono', '$direccion')";
    if($conn->query($query)==TRUE){
        header('Location: ../control_proveedores.php');
    }else{
        echo "Error de procedimiento de ingreso de datos";
    }

}

?>