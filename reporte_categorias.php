<?php

    require('fpdf/fpdf.php');
    include('conexion.php');

    $query = "SELECT id_categoria, nombre_categoria, descripcion_categoria FROM categorias";
                $result = $conn->query($query);

    // Instancia para fpdf

    $pdf = new FPDF();
    /* Colocar un L si la impresion sera en horizontal */
    $pdf ->AddPage('');
    $pdf ->SetFont('Arial','B',14);

// Titulo

    $pdf->Cell(0, 10, 'Reporte de Categorias', 1, 1, 'C');
    $pdf->Ln(5);

// Encabezado

  $pdf->SetFont('Arial', 'B', 10);
  $pdf->Cell(25, 10, 'Id_categoria', 1);
  $pdf->Cell(40, 10, 'Nombre Categoria', 1);
  $pdf->Cell(50, 10, 'Descripcion', 1);
  $pdf->Ln();


// tbody

  $pdf->SetFont('Arial','',8);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $pdf->Cell(25, 10, $row['id_categoria'], 1);
        $pdf->Cell(40, 10, $row['nombre_categoria'], 1);
        $pdf->Cell(50, 10, $row['descripcion_categoria'], 1);
        $pdf->Ln();
      }
    } else{
      $pdf->Cell(0,10,'No se encontraron registros', 1, 1, 'C');
    }


// Salida archivo PDF

  $pdf->Output('D', 'reporte.pdf')

  //Colocar el D para descargar 


?>