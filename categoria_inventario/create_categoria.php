<?php 
include('../conexion.php');

if(isset($_POST['submit'])){
    $name =  $_POST['nombre'];
    $descrip = $_POST['descripcion'];

    $query = "INSERT INTO categorias(nombre_categoria, descripcion_categoria) VALUES ('$name', '$descrip')";
    if($conn->query($query)==TRUE){
        header('Location: ../control_categoria_invent.php');
    }else{
        echo "Error de procedimiento de ingreso de datos";
    }

}

?>