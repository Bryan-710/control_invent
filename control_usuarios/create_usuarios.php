<?php 
include('../conexion.php');

if(isset($_POST['submit'])){
    $name =  $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO usuarios(email, password, telefono) VALUES ('$name', '$password','$phone')";
    if($conn->query($query)==TRUE){
        header('Location: ../control_usuarios.php');
    }else{
        echo "Error de procedimiento de ingreso de datos";
    }

}

?>