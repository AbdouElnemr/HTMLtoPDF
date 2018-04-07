<?php

require_once('/var/www/html/pdfProject/TCPDF/tcpdf.php');

$pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$html = file_get_contents('/var/www/html/pdfProject/index.html');


  $pdf->AddPage();

  $pdf->SetFont('cid0cs',  15);

  $pdf->WriteHTML($html, true, false, true, false, '');


$pdf->Output('/var/www/html/pdfProject/example.pdf', 'I');