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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Categoria</h1>

        <!-- Agregar un formulario -->

        <form action="update_categoria.php?id=<?php echo $id; ?>" method="POST">
            <div class="mb-3">
                <label for="name">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo $categoria['nombre_categoria']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="descrip">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" value="<?php echo $categoria['descripcion_categoria']; ?>" require>
            </div>

            <button type="submit" name="submit" class="btn btn-success">Actualizar Categoria</button>

         </form>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>