<?php 
include('../conexion.php');

if(isset($_POST['submit'])){
    $producto        = $_POST['producto'];
    $tipo_movimiento = $_POST['tipo_movimiento'];
    $cantidad        = $_POST['cantidad'];
    $observacion     = $_POST['observacion'];

     $query = "INSERT INTO movimientos (id_producto, tipo_movimiento, cantidad, observacion)
                             VALUES ('$producto', '$tipo_movimiento','$cantidad','$observacion')";
    if($conn->query($query)==TRUE){
        header('Location: ../nuevo_movimiento.php');
    }else{
        echo "Error de procedimiento de ingreso de datos";
    }
         
}

?>