<?php

    require('fpdf/fpdf.php');
    include('conexion.php');

    $query = "SELECT  m.tipo_movimiento,
    m.id_movimiento,
    m.fecha_movimiento,
    m.id_producto,
    i.producto,
    m.cantidad,
    i.precio_unitario,
    i.precio_unitario*precio_unitario AS total,
    m.observacion
FROM movimientos AS m LEFT JOIN inventario AS i ON(m.id_producto=i.id_producto)";
$result = $conn->query($query);

    // Instancia para fpdf

    $pdf = new FPDF();
    /* Colocar un L si la impresion sera en horizontal */
    $pdf ->AddPage('L');
    $pdf ->SetFont('Arial','B',12);

// Titulo

    $pdf->Cell(0, 10, 'Reporte de Movimientos', 1, 1, 'C');
    $pdf->Ln(5);

// Encabezado

  $pdf->SetFont('Arial', 'B', 10);
  $pdf->Cell(10, 10, 'Tipo Mov.', 1);
  $pdf->Cell(10, 10, 'No.', 1);
  $pdf->Cell(10, 10, 'Fecha Mov', 1);
  $pdf->Cell(10, 10, 'Id_producto', 1);
  $pdf->Cell(10, 10, 'Producto', 1);
  $pdf->Cell(10, 10, 'Cantidad', 1);
  $pdf->Cell(10, 10, 'Precio Uni', 1);
  $pdf->Cell(10, 10, 'Monto Tot', 1);
  $pdf->Cell(10, 10, 'Observacion', 1);
  $pdf->Ln();


// tbody

  $pdf->SetFont('Arial','',8);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $pdf->Cell(10, 10, $row['m.tipo_movimiento'], 1);
        $pdf->Cell(10, 10, $row['m.id_movimient'], 1);
        $pdf->Cell(10, 10, $row['m.fecha_movimiento'], 1);
        $pdf->Cell(10, 10, $row['m.id_producto'], 1);
        $pdf->Cell(10, 10, $row['i.producto'], 1);
        $pdf->Cell(10, 10, $row['m.cantidad'], 1);
        $pdf->Cell(10, 10, $row['i.precio_unitario'], 1);
        $pdf->Cell(10, 10, $row['total'], 1);
        $pdf->Cell(10, 10, $row['direccion_proveedor'], 1);
        $pdf->Cell(10, 10, $row['m.observacion'], 1);
        $pdf->Ln();
      }
    } else{
      $pdf->Cell(0,10,'No se encontraron registros', 1, 1, 'C');
    }


// Salida archivo PDF

  $pdf->Output('D', 'reporte.pdf')

  //Colocar el D para descargar 
 

?>