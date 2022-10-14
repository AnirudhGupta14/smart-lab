<?php
//include connection file
include_once("connection.php");
include_once('libs/fpdf.php');
 
$db = new dbObj();
$connString =  $db->getConnstring();

$result = mysqli_query($connString, "SELECT * from patient");
 
$pdf = new FPDF();
$pdf->AddPage();
$width_cell=array(13,40,35,30,25,30);
$pdf->SetFont('Arial','B',11);
$pdf->SetFillColor(193,229,252);

$pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
$pdf->Cell($width_cell[1],10,'Full Name',1,0,'C',true);
$pdf->Cell($width_cell[2],10,'Mobile No.',1,0,'C',true); 
$pdf->Cell($width_cell[3],10,'City',1,0,'C',true);
$pdf->Cell($width_cell[4],10,'Gender',1,0,'C',true);
$pdf->Cell($width_cell[5],10,'Date',1,1,'C',true);

$pdf->SetFont('Arial','',14);
$pdf->SetFillColor(235,236,236); 
$fill=false;

foreach ($result as $row) 
{
    $pdf->Cell($width_cell[0],10,$row['p_id'],1,0,'C',$fill);
    $pdf->Cell($width_cell[1],10,$row['fname'] . " " . $row['lname'],1,0,'C',$fill, "bill-receipt.php?id=$row[p_id]");
    $pdf->Cell($width_cell[2],10,$row['mobile'],1,0,'C',$fill);
    $pdf->Cell($width_cell[3],10,$row['p_address'],1,0,'C',$fill);
    $pdf->Cell($width_cell[4],10,$row['gender'],1,0,'C',$fill);
    $pdf->Cell($width_cell[5],10,$row['p_date'],1,1,'C',$fill);
    $fill = !$fill;
}

$pdf->Output();
?>
