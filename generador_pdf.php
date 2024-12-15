<?php

    require('fpdf/fpdf.php');
    include('conexion.php');

    $query = "SELECT 
                  inv.id_producto,
                  inv.producto,
                  inv.descripcion,
                  inv.cantidad,
                  inv.precio_unitario,
                  inv.fecha_ingreso,
                  inv.estado,
                  cat.nombre_categoria AS categoria,
                  prov.nombre_proveedor AS proveedor
                  FROM 
                    inventario AS inv
                  LEFT JOIN 
                    categorias AS cat ON(inv.id_categoria=cat.id_categoria)
                  LEFT JOIN
                    proveedores AS prov ON (inv.id_proveedor=prov.id_proveedor)";
                $result = $conn->query($query);

    // Instancia para fpdf

    $pdf = new FPDF();
    $pdf ->AddPage('L');
    $pdf ->SetFont('Arial','B',14);

// Titulo

    $pdf->Cell(0, 10, 'Inventario Disponible', 1, 1, 'C');
    $pdf->Ln(5);

// Encabezado

  $pdf->SetFont('Arial', 'B', 10);
  $pdf->Cell(25, 10, 'Id_producto', 1);
  $pdf->Cell(25, 10, 'producto', 1);
  $pdf->Cell(40, 10, 'descripcion', 1);
  $pdf->Cell(20, 10, 'cantidad', 1);
  $pdf->Cell(28, 10, 'precio unitario', 1);
  $pdf->Cell(33, 10, 'categoria', 1);
  $pdf->Cell(33, 10, 'proveedor', 1);
  $pdf->Cell(33, 10, 'fecha de ingreso', 1);
  $pdf->Cell(33, 10, 'estado', 1);
  $pdf->Ln();


// tbody

  $pdf->SetFont('Arial','',8);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $pdf->Cell(25, 10, $row['id_producto'], 1);
        $pdf->Cell(25, 10, $row['producto'], 1);
        $pdf->Cell(40, 10, $row['descripcion'], 1);
        $pdf->Cell(20, 10, $row['cantidad'], 1);
        $pdf->Cell(28, 10, $row['precio_unitario'], 1);
        $pdf->Cell(33, 10, $row['categoria'], 1);
        $pdf->Cell(33, 10, $row['proveedor'], 1);
        $pdf->Cell(33, 10, $row['fecha_ingreso'], 1);
        $pdf->Cell(33, 10, $row['estado'], 1);
        $pdf->Ln();
      }
    } else{
      $pdf->Cell(0,10,'No se encontraron registros', 1, 1, 'C');
    }


// Salida archivo PDF

  $pdf->Output('D', 'reporte.pdf')

  //Colocar el D para descargar


?>