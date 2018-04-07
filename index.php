<?php

require_once('/var/www/html/pdfProject/tcpdf/tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT,  "letter", true, 'UTF-8', false);

$html = file_get_contents('/var/www/html/pdfProject/index.html');

$pdf->AddPage();
  
$pdf->SetFont('amirii',  16);

$pdf->WriteHTML($html, true, false, true, false, '');

$pdf->Output('example.pdf', 'I');