<?php
session_start();
include('../conexion.php');

$id = $_GET['id'];
$query = "SELECT * FROM proveedores WHERE id_proveedor=$id";
$result = $conn->query($query);
$proveedor = $result ->fetch_assoc();

if (isset($_POST['submit'])) {
    $name =  $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $query = "UPDATE proveedores SET nombre_proveedor='$name', telefono_proveedor='$telefono', direccion_proveedor='$direccion'
        WHERE id_proveedor=$id";

        if ($conn->query($query)==TRUE) {
            $_SESSION['message'] = 'El proveedor con el id: '.$id.' Actualizado con Exito';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../control_proveedores.php');
        }else{
            echo "Erro al actualizar";
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Proveedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Proveedor</h1>

        <!-- Agregar un formulario -->

        <form action="update_proveedor.php?id=<?php echo $id; ?>" method="POST">
            <div class="mb-3">
                <label for="name">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo $proveedor['nombre_proveedor']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" value="<?php echo $proveedor['telefono_proveedor']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" value="<?php echo $proveedor['direccion_proveedor']; ?>" require>
            </div>

            <button type="submit" name="submit" class="btn btn-success">Actualizar Proveedor</button>

         </form>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>