<?php
include('../conexion.php');

// Consultar 
$sql = "SELECT
	cat.nombre_categoria,
    SUM(inv.cantidad*inv.precio_unitario) AS total_productos
    FROM inventario AS inv
    LEFT JOIN categorias AS cat ON(inv.id_categoria=cat.id_categoria)
    GROUP BY cat.id_categoria;";
$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    $data[] = ['Categoria', 'Total Q'];
    while($row = $result->fetch_assoc()) {
        $data[] = [$row['nombre_categoria'], (int)$row['total_productos']];
    }
}

echo json_encode($data);

?>