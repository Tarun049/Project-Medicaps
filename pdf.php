<? php
require "fpdf.php";
$dbcon=mysqli_connect("localhost","root","","attendancedb");
class myPDF extend FPDF{
function header(){
$this->SetFront('arial',8,14);
$this->Cell(276,5,'Street Address of Employee',0,0,'C');
$this->Ln();
$this->SetFront('Time','',12);
$this->Cell(276,10,'Street Address of Employee',0,0,'C');
$this->Ln();
}

function footer(){
$this->SetY(-15);
$this->SetFront('Arial','',8);
$this->Cell(0,10,'Page'.$this->PageNp().'/{nb}',0,0,'c');

function headerTable(){
$this->SetFront('Times','8',12);
$this->Cell(20,10,'roll_no',1,0,'C');
$this->Cell(40,10,'subject',1,0,'C');
$this->Cell(40,10,'day',1,0,'C');
$this->Cell(60,10,'lecture',1,0,'C');
$this->Cell(36,10,'branch',1,0,'C');
$this->Cell(30,10,'semester',1,0,'C');
$this->Cell(50,10,'attendance',1,0,'C');
$this->Cell(30,10,'date',1,0,'C');
$this->Ln();
}
function viewTable($db){
$this->SetFront('Time','',12);
$start = $dbcon->query('select * from student');
while($data = $stmt->fetch(PDO::FETCH_OBJ)){
$this->Cell(20,10,'roll_no',1,0,'C');
$this->Cell(40,10,'subject',1,0,'C');
$this->Cell(40,10,'day',1,0,'C');
$this->Cell(60,10,'lecture',1,0,'C');
$this->Cell(36,10,'branch',1,0,'C');
$this->Cell(30,10,'semester',1,0,'C');
$this->Cell(50,10,'attendance',1,0,'C');
$this->Cell(30,10,'date',1,0,'C');
$this->Ln();
}
}
}

$pdf = new myPDF();
$pdf->AliasNBPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->output();

}