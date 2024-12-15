<?php 
include('../conexion.php');

if(isset($_POST['submit'])){
    $producto   = $_POST['producto'];
    $decripcion = $_POST['descripcion'];
    $cantidad   = $_POST['cantidad'];
    $precio_uni = $_POST['precio_unitario'];
    $categoria  = $_POST['categoria'];
    $proveedor  = $_POST['proveedor'];
    $estado     = $_POST['estado'];

    $query = "INSERT INTO inventario (producto, descripcion, cantidad, precio_unitario, id_categoria, id_proveedor, estado)
                             VALUES ('$producto', '$decripcion','$cantidad','$precio_uni','$categoria','$proveedor','$estado')";
    if($conn->query($query)==TRUE){
        header('Location: ../nuevo_producto.php');
    }else{
        echo "Error de procedimiento de ingreso de datos";
    }

}

?>