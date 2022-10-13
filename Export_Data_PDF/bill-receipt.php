<?Php
// connection to database
include_once("connection.php");
include_once('libs/fpdf.php');
include_once('barcode-generator.php');

$pdf = new PDF_BARCODE('P', 'mm', 'A4');
$pdf->AddPage();

$id = $_GET['id'];

$db = new dbObj();
$connString =  $db->getConnstring();

$result = mysqli_query($connString, "SELECT * from patient WHERE p_id={$id}");
$row = mysqli_fetch_array($result);

$pdf->SetFont('Arial','B',25);
$pdf->Cell(80);
$pdf->Cell(30,12,'ABC Diagonstics',0,1,'C',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(80);
$pdf->Cell(30,5,'Phone No.: XXXXXXXXXX',0,1,'C',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(80);
$pdf->Cell(30,8,'Address.: New Delhi',0,1,'C',false); 

$pdf->SetDrawColor(188,188,188);
$pdf->Line(10,40,200,40);

$pdf -> SetY(42); 
$pdf->Cell(80);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(22,8,'Bill. No.: ',0,0,'L',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(30,8,$row['p_id'],0,1,'L',false); 

$number = rand(100,100000);
$t=time();
$random = $number.''.$t;
$random = substr($random,0,12);
$pdf->EAN13(170, 43, $random, 7, 0.3, 9);

$pdf->Line(10,58,200,58);
$pdf -> SetY(62); 

$pdf->SetFont('Arial','B',14);
$pdf->Cell(22,8,'Reg. No.: ',0,0,'L',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,8,$row['p_id'],0,0,'L',false);

$result1 = mysqli_query($connString, "SELECT * from doctor WHERE p_id={$id}");
$row1 = mysqli_fetch_array($result1);

$pdf->Cell(66);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(29,8,'Referred by: ',0,0,'L',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(20,8,"  " . $row1['title'] . " " . $row1['fname'],0,1,'L',false); 

$pdf->SetFont('Arial','B',14);
$pdf->Cell(18,8,'Name: ',0,0,'L',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,8,$row['fname'] . " ". $row['lname'],0,0,'L',false); 

$pdf->Cell(70);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(15,8,'Date: ',0,0,'L',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(20,8,$row['p_date'],0,1,'L',false); 

$pdf->SetFont('Arial','B',14);
$pdf->Cell(19,8,'Mobile: ',0,0,'L',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,8,$row['mobile'],0,0,'L',false); 

$pdf->Cell(69);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(34,8,'Received By: ',0,0,'L',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(30,8,$row['fname'],0,1,'L',false); 

$pdf->SetFont('Arial','B',14);
$pdf->Cell(26,8,'Age / Sex: ',0,0,'L',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,8,$row['years'] . " YRS" . " / " . $row['gender'],0,1,'L',false); 

$pdf->SetFont('Arial','B',14);
$pdf->Cell(18,8,'Email: ',0,0,'L',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,8,$row['email'],0,1,'L',false); 

$pdf->SetFont('Arial','B',14);
$pdf->Cell(24,8,'Address: ',0,0,'L',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,8,$row['p_address'],0,1,'L',false); 

$pdf->SetFont('Arial','B',14);
$pdf->Cell(30,8,'Aadhar No.: ',0,0,'L',false); 
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,8,$row['aadhar'],0,1,'L',false); 

$pdf->SetDrawColor(188,188,188);
$pdf->Line(10,123,200,123);

$pdf -> SetY(124); 
$pdf->SetFont('Arial','B',17);
$pdf->Cell(80);
$pdf->Cell(30,15,'Case Details',0,1,'C',false); 

$width_cell=array(15,125,50);
$pdf->SetFont('Arial','B',11);
$pdf->SetFillColor(193,229,252);

$pdf->Cell($width_cell[0],10,'S. No.',1,0,'C',true);
$pdf->Cell($width_cell[1],10,'Lab Investigations',1,0,'C',true);
$pdf->Cell($width_cell[2],10,'Fee',1,1,'C',true);


// $pdf->SetXY(80,50);

// $pdf->SetY(110);
// $pdf->Line(10,100,190,100);
// $pdf->SetXY(30,130);
// $pdf->SetFont('Arial','UB',16);
// $pdf->Cell(100,10,'SUBJECT:',0,0,'L',false);  
// $pdf->Cell(50,10,'MARK',0,1,'L',false);  
// $pdf->SetFont('Arial','',14);
// $pdf->SetX(30);
// $pdf->Cell(100,10,'SOCIAL',0,0,'L',false);  
// $pdf->Cell(50,10,$row->social,0,1,'L',false); 

// $pdf->SetX(30);
// $pdf->Cell(100,10,'SCIENCE',0,0,'L',false);  
// $pdf->Cell(50,10,$row->science,0,1,'L',false); 

// $pdf->SetX(30);
// $pdf->Cell(100,10,'MATH',0,0,'L',false); 
// $pdf->Cell(50,10,$row->math,0,1,'L',false); 

// $pdf->Line(30,170,150,170);

// $pdf->SetX(30);
// $pdf->Cell(98,10,'TOTAL',0,0,'L',false); 
// $pdf->Cell(50,10,$row->total,0,1,'L',false);

// $pdf->SetXY(160,220);
// $pdf->Cell(50,10,'Signature',0,1,'L',false);
// $pdf->Output();
// }else{
// print_r($dbo->errorInfo()); 	
// }	
$pdf->Output();
?>

