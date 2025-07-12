<?php
require('assets/fpdf/fpdf.php');
require('config/conexion.php');
require('class/global.php');

$id = $_GET['id'] ?? null;
$id_empresa = 1;

if (!$id) die('ID de acopio no proporcionado.');

$acopio = Globales::mdlObtenerAcopioPorId($id);
$empresa = Globales::getEmpresa($id_empresa);
if (!$acopio) die('Acopio no encontrado.');

function utf($text) {
    return utf8_decode($text);
}

$pdf = new FPDF('P', 'mm', [80, 300]);
$pdf->AddPage();
$pdf->SetMargins(5, 5, 5);

// ENCABEZADO
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 6, 'HULLKA COFFEE', 0, 1, 'C');

// LOGO
$pdf->Image('assets/favicon.png', 30, $pdf->GetY(), 20, 20); // ajusta el path al logo real
$pdf->Ln(22);

// EMPRESA
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(70, 4, utf($empresa->nombre), 0, 1, 'C');
$pdf->Cell(70, 4, utf($empresa->direccion), 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(70, 5, 'RUC: '. $empresa->ruc, 0, 1, 'C');

// TÍTULO DOCUMENTO
$pdf->Ln(5);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(70, 5, 'NOTA DE ACOPIO', 0, 1, 'C');

// INFORMACIÓN DEL ACOPIO
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(70, 5, utf8_decode("Código: " . $acopio->codigo), 0, 1, 'C');
$pdf->Cell(70, 5, 'FECHA: ' . utf($acopio->fecha), 0, 1, 'C');

// DATOS DEL SOCIO
$pdf->Cell(70, 5, utf("PRODUCTOR: " . $acopio->productor), 0, 1, 'C');
$pdf->Cell(70, 5, utf("DNI: " . $acopio->dni_socio), 0, 1, 'C');
$pdf->Cell(70, 5, utf("BASE SECTORIAL: " . $acopio->base_sectorial), 0, 1, 'C');

// LÍNEA
$pdf->Ln(2);
$pdf->Cell(70, 5, str_repeat('-', 70), 0, 1, 'C');

// DATOS DE LA MATERIA PRIMA
$pdf->Ln(3);
$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(35, 5, 'CONCEPTO', 1, 0, 'C');
$pdf->Cell(35, 5, 'VALOR', 1, 1, 'C');

$pdf->SetFont('Arial', '', 7);
$pdf->Cell(35, 5, 'SACOS', 1, 0, 'L');
$pdf->Cell(35, 5, $acopio->cantida_sacos, 1, 1, 'C');

$pdf->Cell(35, 5, 'KILOS BRUTOS', 1, 0, 'L');
$pdf->Cell(35, 5, number_format($acopio->kilos_brutos, 2), 1, 1, 'C');

$pdf->Cell(35, 5, 'TARA', 1, 0, 'L');
$pdf->Cell(35, 5, number_format($acopio->tara, 2), 1, 1, 'C');

$pdf->Cell(35, 5, 'KILOS NETOS', 1, 0, 'L');
$pdf->Cell(35, 5, number_format($acopio->kilos_netos, 2), 1, 1, 'C');

$pdf->Cell(35, 5, 'QQ NETOS', 1, 0, 'L');
$pdf->Cell(35, 5, number_format($acopio->qq_netos, 2), 1, 1, 'C');

$pdf->Cell(70, 5, utf("RENDIMIENTO: " . $acopio->rendimiento_fisico), 0, 1, 'C');
$pdf->Cell(70, 5, utf("HUMEDAD: " . $acopio->humedad . " %"), 0, 1, 'C');

$pdf->Ln(3);
$pdf->Cell(70, 5, str_repeat('-', 70), 0, 1, 'C');

// MENSAJE FINAL
$pdf->Ln(5);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(70, 5, utf("Representación impresa del acopio de materia prima."), 0, 1, 'C');
// $pdf->Cell(70, 5, utf("Gracias por su entrega."), 0, 1, 'C');

$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);
// $pdf->Cell(70, 5, utf("GRACIAS POR CONFIAR EN NOSOTROS"), 0, 1, 'C');

// GENERACIÓN
$pdf->Output('I', 'ticket_acopio_' . $acopio->codigo . '.pdf');
exit;
