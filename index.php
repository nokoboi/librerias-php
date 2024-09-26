<?php

/**
 * Instalar composer
 * descargar desde composer setup.exe e instalarlo
 * comprobar la instalacion en cmd composer -v
 */

 /**
  * Buscar librerías o paquetes de php
  * https://packagist.org
  */

  /**
   * Instalar libreria para genera pdf
   * html2pdf
   */

require 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
// $html2pdf = new Html2Pdf();

// $html = '<h1>Hola desde pdf</h1>';
// $html .= '<p>Soy un pdf generado desde php</p>';

// $html2pdf->writeHTML($html);
// $html2pdf->Output('pdf_creado.pdf');

$html2pdf = new Html2Pdf();
ob_start();
$html = ob_get_clean();
require_once 'plantilla.php';
$html2pdf->writeHTML($html);

$html2pdf->output('pdf_creado.pdf');





