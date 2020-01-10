<?php

use setasign\Fpdi\Fpdi;
require('fpdf/fpdf.php');
require('zen/src/autoload.php');
/* $fpdf = new FPDF();
$fpdf->AddPage();
$fpdf->SetFont('Arial','',12);
$fpdf->Cell(30,5,"Hola mundo");
$fpdf->Output(); */
// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile('Rental_agreement_2020.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx,null,null,null,null,true);


//--------------------RENTAL TEXT-------------------
// CUSTOMER N. TEXT
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(2, 4, 7);
$pdf->SetXY(46, 55.5);
$pdf->Write(11,"23908");
// RENTAL AGREEMENT N. TEXT
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(2, 4, 7);
$pdf->SetXY(177, 55.5);
$pdf->Write(11,"54898");
//--------------------CUSTOMER TEXT-----------------
// FULLNAME TEXT
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(2, 4, 7);
$pdf->SetXY(46, 68.6);
$pdf->Write(11,"Marvin Vigil");
// COMPANY TEXT
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(2, 4, 7);
$pdf->SetXY(46, 75);
$pdf->Write(11,"MV AGENCY");
// ADDRESS TEXT
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(2, 4, 7);
$pdf->SetXY(46, 81);
$pdf->Write(11,"5790 Groove Str 1243");
// JOBSITE TEXT
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(2, 4, 7);
$pdf->SetXY(46, 87.5);
$pdf->Write(11,"El Cerrito");
// PHONE TEXT
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(2, 4, 7);
$pdf->SetXY(46, 93.3);
$pdf->Write(11,"123-123-1234");
//--------------------DATE&TIME TEXT-----------------
// DATE OUT TEXT
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(2, 4, 7);
$pdf->SetXY(157, 68.9);
$pdf->Write(11,"2/12/2020");
// DATE OUT->TIME TEXT
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(2, 4, 7);
$pdf->SetXY(157, 74.8);
$pdf->Write(11,"8:43");
// EST DATE IN TEXT
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(2, 4, 7);
$pdf->SetXY(157, 87.5);
$pdf->Write(11,"2/15/2020");
// EST DATE IN->TIME TEXT
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(2, 4, 7);
$pdf->SetXY(157, 93.8);
$pdf->Write(11,"20:00");
//$filename='54898';
//$filePath='DOCS/MVRENT.pdf';
//$pdf->Output($filePath,'F');
$pdf->Image('esignature/doc_signs/az.png',42,250,47);
$filename='54898';
$filePath='DOCS/MVRENT.pdf';
$pdf->Output($filePath,'F');