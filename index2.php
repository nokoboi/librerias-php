<?php
require 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();

ob_start();
require 'plantilla.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);

$html2pdf->output(__DIR__ .'/'.'pdf_creado.pdf', 'F');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    
</body>
</html>