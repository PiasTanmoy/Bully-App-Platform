<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'Hello World!');
$pdf->Ln();
//$pdf->Output();

$fh = fopen('tempTXT.txt','r');
$file_content = '';
while ($line = fgets($fh)) {
    $file_content = $file_content.$line.'<br>';
    $pdf->Cell(40, 10, $line);
    $pdf->Ln();

}
fclose($fh);

//echo $file_content;
//
//$pdf->Cell(40, 10, $file_content);
$pdf->Ln();
$pdf->Cell(40,10,'Powered by FPDF.',0,1,'C');
$pdf->Output();
//$homepage = file_get_contents('tempTXT.txt', FILE_USE_INCLUDE_PATH);
//echo $homepage;

?>