<?php

    require('fpdf/fpdf.php');
    include('conexion.php');

    $query = "SELECT * FROM proveedores";
    $result = $conn->query($query);

    // Instancia para fpdf

    $pdf = new FPDF();
    /* Colocar un L si la impresion sera en horizontal */
    $pdf ->AddPage('');
    $pdf ->SetFont('Arial','B',14);

// Titulo

    $pdf->Cell(0, 10, 'Reporte de Proveedores', 1, 1, 'C');
    $pdf->Ln(5);

// Encabezado

  $pdf->SetFont('Arial', 'B', 10);
  $pdf->Cell(25, 10, 'Codigo', 1);
  $pdf->Cell(40, 10, 'Nombre Proveedor', 1);
  $pdf->Cell(50, 10, 'Telefono', 1);
  $pdf->Cell(50, 10, 'Direccion', 1);
  $pdf->Ln();


// tbody

  $pdf->SetFont('Arial','',8);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $pdf->Cell(25, 10, $row['id_proveedor'], 1);
        $pdf->Cell(40, 10, $row['nombre_proveedor'], 1);
        $pdf->Cell(50, 10, $row['telefono_proveedor'], 1);
        $pdf->Cell(50, 10, $row['direccion_proveedor'], 1);
        $pdf->Ln();
      }
    } else{
      $pdf->Cell(0,10,'No se encontraron registros', 1, 1, 'C');
    }


// Salida archivo PDF

  $pdf->Output('D', 'reporte.pdf')

  //Colocar el D para descargar 


?>