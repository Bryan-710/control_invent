<?php
session_start();
include('../conexion.php');

$id = $_GET['id'];
$query = "SELECT * FROM inventario WHERE id_producto=$id";
$result = $conn->query($query);
$inventario = $result ->fetch_assoc();

if (isset($_POST['submit'])) {
    $producto   = $_POST['producto'];
    $descripcion = $_POST['descripcion'];
    $cantidad   = $_POST['cantidad'];
    $precio_uni = $_POST['precio_unitario'];
    $categoria  = $_POST['categoria'];
    $proveedor  = $_POST['proveedor'];
    $estado     = $_POST['estado'];

    $query = "UPDATE inventario SET 
        producto='$producto', descripcion='$descripcion', cantidad='$cantidad',
        precio_unitario='$precio_uni', id_categoria='$categoria', id_proveedor='$proveedor',
        estado='$estado'
        
        WHERE id_producto=$id";

        if ($conn->query($query)==TRUE) {
            $_SESSION['message'] = 'Usuario con el id: '.$id.' Actualizado con Exito';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../editar_producto.php');
        }else{
            echo "Erro al actualizar";
            echo $query;
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Producto</h1>

        <!-- Agregar un formulario -->

        <form action="update_inventario.php?id=<?php echo $id; ?>" method="POST">

            <div class="mb-3">
                <label for="producto">Producto</label>
                <input type="text" name="producto" class="form-control" value="<?php echo $inventario['producto']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" value="<?php echo $inventario['descripcion']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" value="<?php echo $inventario['cantidad']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="precio_unitario">Precio Unitario</label>
                <input type="text" name="precio_unitario" step="0.01" class="form-control" value="<?php echo $inventario['precio_unitario']; ?>" require>
            </div>

            <div class="mb-3">
                <!--  INICIO DEL CATALOGO --> 
            <?php
                $query = "SELECT id_categoria, nombre_categoria FROM categorias";
                $result = $conn->query($query);

                    if($result->num_rows > 0){
                        echo '<label for="categoria">Categorias</label>';
                        echo '<select name="categoria" class = "form-select">';
                            while($row = $result->fetch_assoc()){
                                echo '<option value="'.$row['id_categoria'].'">'.$row['nombre_categoria'].'</option>';
                            }
                                echo '</select>';
                            }else{
                                echo 'No hay categorias';
                            }
            ?>
                <!--  FIN DEL CATALOGO-->
                </div>

            <div class="mb-3">
                <!--  INICIO DEL CATALOGO --> 
                <?php
                                            $query = "SELECT id_proveedor, nombre_proveedor FROM proveedores";
                                            $result = $conn->query($query);

                                            if($result->num_rows > 0){
                                                echo '<label for="proveedor">Proveedores</label>';
                                                echo '<select name="proveedor" class = "form-select">';
                                                while($row = $result->fetch_assoc()){
                                                    echo '<option value="'.$row['id_proveedor'].'">'.$row['nombre_proveedor'].'</option>';
                                                }
                                                echo '</select>';
                                            }else{
                                                echo 'No hay proveedores';
                                            }
                                        ?>
                                        <!--  FIN DEL CATALOGO-->
                                    </div>      
            <div class="mb-3">
                <label for="estado">Estado</label>
                <input type="text" name="estado" class="form-control" value="<?php echo $inventario['estado']; ?>" require>
            </div>

            <button type="submit" name="submit" class="btn btn-success">Actualizar Producto</button>

         </form>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>