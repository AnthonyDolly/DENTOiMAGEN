<?php
require('libraries/fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('vista/image/logo-clinica.png', 8, 8, 30);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(110, 10, 'DentoImagen', 0, 0, 'C');
        $this->Cell(90, 10, 'R.U.C: 20708295412', 0, 0, 'R');
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


    function ImprovedTable($header, $response )
{
    // Anchuras de las columnas
        $this->SetFont('Arial','B',10);
        // $this->SetFillColor(0,123,255);
        // $this->SetTextColor(255,255,255);
        // Anchuras de las columnas
        $w = array(22, 25, 50, 30, 20, 135);
    // Cabeceras
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // $this->SetTextColor(0);
    // Datos
    $fill = false;
    foreach($response  as $row => $item)
    {
        $this->SetFont('Arial','B',10);
        $this->Cell($w[0],10, $item["Fecha"] ,1, 0, 'C' , $fill,);
        $this->Cell($w[1],10, $item["Asistencia"] ,1,0, 'C',  $fill);
        $this->Cell($w[2],10, utf8_decode($item["Medico"]) ,1, 0, 'C', $fill);
        $this->Cell($w[3],10, utf8_decode($item["Estado de pago"]), 1, 0 ,'C', $fill);
        $this->Cell($w[4],10, $item["Importe"],1,0, 'C', $fill);
        $this->Cell($w[5],10, utf8_decode($item["Descripcion"]),1,0, 'C', $fill);
        $this->Ln();
    }
    // Línea de cierre
    // $this->Cell(array_sum($w),0,'','T');
    $this->Ln();     
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('Landscape');


$controlesPDF = new informacionTramientosControlador();
$response = $controlesPDF->vistaPDFInformacionTratamientoControlador();

$controlesTitlePDF = new informacionTramientosControlador();
$response2 = $controlesTitlePDF->vistaTituloPDFInformacionTratamientoControlador();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(30, 10, "Paciente: ", 0, 0, 'L', 0);
$pdf->Cell(30, 10,  $response2["Paciente"], 0, 1, 'L', 0);
$pdf->Cell(30, 10, "DNI: ", 0, 0, 'L', 0);
$pdf->Cell(30, 10, $_GET["dni"], 0, 1, 'L', 0);
$pdf->Cell(30, 10, utf8_decode("Médico: "), 0, 0, 'L', 0);
$pdf->Cell(30, 10, utf8_decode($response2['Medico']), 0, 1, 'L', 0);
$pdf->Cell(30, 10, "Sede: ", 0, 0, 'L', 0);
$pdf->Cell(30, 10, $response2['Sede'], 0, 1, 'L', 0);
$pdf->Cell(30, 10, "Tratamiento: ", 0, 0, 'L', 0);
$pdf->Cell(30, 10, utf8_decode($response2['NombreTratamiento']), 0, 1, 'L', 0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',12);
$header = array('Fecha', 'Asistencia', utf8_decode('Médico'), utf8_decode('Estado de Pago'),'Importe', utf8_decode('Descripción'));
$pdf->ImprovedTable($header,$response );
$pdf->Ln();

$pdf->Cell(30, 10, utf8_decode("Descripción y/o Recomendación: "), 0, 1, 'L', 0);
$pdf->MultiCell(190, 5, utf8_decode($response2['Descripcion']) , 0 ,'L');


$pdf->Output();
