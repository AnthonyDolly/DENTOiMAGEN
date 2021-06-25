<?php
require('libraries/fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('vista/image/logo-clinica.png', 2, 8, 30);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30, 10, 'DentoImagen', 0, 0, 'C');
        $this->Cell(85, 10, 'R.U.C: 20708295412', 0, 0, 'R');
        // Salto de línea
        $this->Ln(20);
    }
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    // Una tabla más completa
    function ImprovedTable($header, $response)
    {
        $this->SetFillColor(0,123,255);
        $this->SetTextColor(255,255,255);
        // Anchuras de las columnas
        $w = array(40, 35, 45, 40,30);
        // Cabeceras
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $this->Ln();
        $this->SetTextColor(0);
        // Datos
        $fill = false;
        // foreach($response as $row)
        // {
            // $this->Cell(10);
            $this->Cell($w[0],10, $response['Fecha'] ,'LR', 0, 'C' , $fill,);
            $this->Cell($w[1],10, $response['Asistencia'] ,'LR',0, 'C',  $fill);
            $this->Cell($w[2],10, utf8_decode($response['Medico']) ,'LR',0, 'C', $fill);
            $this->Cell($w[3],10, utf8_decode($response['Descripcion']) ,'LR',0, 'C', $fill);
            $this->Cell($w[4],10, $response['Importe'],'LR',0, 'C', $fill);
            $this->Ln();
            $fill = !$fill;
        // }
        // Línea de cierre
        $this->Cell(array_sum($w),0,'','T');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
// $pdf->Cell(40,10,utf8_decode('Hola Mundo!'));

$controlesPDF = new informacionControlesControlador();
$controlesPDF->vistaPDFInformacionControlesControlador();
$response = $controlesPDF->vistaPDFInformacionControlesControlador();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30, 10, "Paciente: ", 0, 0, 'L', 0);
$pdf->Cell(30, 10, $response['Cliente'], 0, 1, 'L', 0);
$pdf->Cell(30, 10, "DNI: ", 0, 0, 'L', 0);
$pdf->Cell(30, 10, $response['DNICliente'], 0, 1, 'L', 0);
$pdf->Cell(30, 10, "Sede: ", 0, 0, 'L', 0);
$pdf->Cell(30, 10, $response['Sede'], 0, 1, 'L', 0);
$pdf->Ln();
$pdf->Ln();

$header = array('Fecha', 'Asistencia', utf8_decode('Médico'), utf8_decode('Descripción'),'Importe',);
$pdf->ImprovedTable($header,$response);


// //TABLE
// $pdf->Cell(30, 10, "Fecha: ", 1, 0, 'C', 0);
// $pdf->Cell(30, 10, "Asistencia: ", 1, 0, 'C', 0);
// $pdf->Cell(30, 10, "Médico: ", 1, 0, 'C', 0);
// $pdf->Cell(40, 10, "Descripción: ", 1, 0, 'C', 0);
// $pdf->Cell(20, 10, "Precio: ", 1, 1, 'C', 0);
// $pdf->Cell(60, 10, $response['Fecha'], 1, 0, 'C', 0);
// $pdf->Cell(60, 10, $response['Asistencia'], 1, 0, 'C', 0);
// $pdf->Cell(60, 10, $response['Medico'], 1, 0, 'C', 0);
// $pdf->Cell(60, 10, $response['Descripcion'], 1, 0, 'C', 0);
// $pdf->Cell(60, 10, $response['Importe'], 1, 1, 'C', 0);
// $pdf->Cell(60, 10, $response['Descripcion'], 1, 0, 'C', 0);


$pdf->Output();
