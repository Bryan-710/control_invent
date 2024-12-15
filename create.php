<?php 
include('conexion.php');

if(isset($_POST['submit'])){
    $name =  $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO usuarios(usuario, contraseña, telefono) VALUES ('$name', '$password','$phone')";
    if($conn->query($query)==TRUE){
        header('Location: index.php');
    }else{
        echo "Error de procedimiento de ingreso de datos";
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
        <h1>Agregar usuarios nuevos</h1>

        <!-- agregar un formulario -->
         <form action="create.php" method="POST">
            <div class="mb-3">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" require>
            </div>

            <div class="mb-3">
                <label for="password">Contraseña</label>
                <input type="text" name="password" class="form-control" require>
            </div>

            <div class="mb-3">
                <label for="phone">Teléfono</label>
                <input type="number" name="phone" class="form-control" require>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Agregar</button>


         </form>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>