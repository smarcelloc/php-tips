<?php

use Dompdf\Dompdf;

require __DIR__ . '/../../vendor/autoload.php';

//$options = new Options();
//$options->set

$pdf = new Dompdf();

// Cache
ob_start();
require __DIR__ . '/content.php';
$contentHTML = ob_get_clean();
$pdf->loadHtml($contentHTML, 'UTF-8');

// Normal
//$pdf->loadHtml(file_get_contents(__DIR__ . '/content.php'), 'UTF-8');

$pdf->setPaper('a4', 'landscape');
$pdf->render();

// Download
//$pdf->stream('name-documento.php');

// Exibir
// header('Content-Type: application/pdf');
// echo $pdf->output();
$pdf->stream('name-documento.php', ['Attachment' => 0]);
