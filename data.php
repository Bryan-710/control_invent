<?php
include ('conexion.php');

//Consulta de Base de la Bse de Datos
$sql = "SELECT c.nombre_categoria , SUM(i.cantidad) AS totaldeproductos
        from inventario AS i left join categorias as c on(i.id_categoria=c.id_categoria)
        group by c.nombre_categoria";
$result = $conn->query($sql);

$data = [];

if($result->num_rows > 0){
    $data[]=['Categoria','Cantidad'];
    while ($row = $result->fetch_assoc()){
    $data[] = [$row['nombre_categoria'], (int)$row['totaldeproductos']];
    }    
}

echo json_encode($data);

?>