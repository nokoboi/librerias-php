<?php
require 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();

ob_start();
require 'plantilla.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);

$html2pdf->output(__DIR__ .'/'.'pdf_creado.pdf', 'F');