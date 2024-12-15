<?php
session_start();
include('../conexion.php');

$id = $_GET['id'];
$query = "SELECT * FROM categorias WHERE id_categoria=$id";
$result = $conn->query($query);
$categoria = $result ->fetch_assoc();

if (isset($_POST['submit'])) {
    $name = $_POST['nombre'];
    $descrip = $_POST['descripcion'];

    $query = "UPDATE categorias SET nombre_categoria='$name', descripcion_categoria='$descrip'
        WHERE id_categoria=$id";

        if ($conn->query($query)==TRUE) {
            $_SESSION['message'] = 'Usuario con el id: '.$id.' Actualizado con Exito';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../control_categoria_invent.php');
        }else{
            echo "Erro al actualizar";
        }
}

?>