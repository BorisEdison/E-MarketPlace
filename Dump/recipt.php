<?php 
session_start();
$adminlogin = $_SESSION['UserLoginId'];
if (!isset($_SESSION['UserLoginId'])) {
    header("location:Login_User.php");
}

$con = mysqli_connect("localhost","root","","login1");
         $q = "select  fname from ulogin where mail ='{$adminlogin}'";

         $query= mysqli_query($con,$q);
         $res = mysqli_fetch_array($query)
?>
<?php
$paymentId=$_GET['paymentid'];
$con = mysqli_connect("localhost","root","","login1"); 
$sql="select * from address where username='$adminlogin' ";
$sq = mysqli_query($con,$sql);
$res = mysqli_fetch_array($sq);
$sql="SELECT * FROM `payment_success` WHERE payment_id='$paymentId' ";
$sq1 = mysqli_query($con,$sql);
$date=date("Y/m/d");
$total=$quantity=0;
//call the FPDF library
require('fpdf/fpdf.php');
//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'Farmer Bazaar',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'[Street Address]',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'[City, Country, ZIP]',0,0);
$pdf->Cell(25 ,5,'Date: ',0,0);
$pdf->Cell(34 ,5,$date,0,1);//end of line

$pdf->Cell(130 ,5,'Phone [+12345678]',0,0);
$pdf->Cell(25 ,5,'Customer ID: ',0,0);
$pdf->Cell(34 ,5,$adminlogin,0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->Cell(100 ,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,join(" ",array($res['firstname'],$res['lastname'])),0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,join(" ",array($res['houseno'],$res['area'],$res['city'],$res['state'],$res['pincode'])),0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$res['phno'],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,5,'Description',1,0);
$pdf->Cell(25 ,5,'Quantity',1,0);
$pdf->Cell(34 ,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter
while($res1 = mysqli_fetch_array($sq1)){
    $pdf->Cell(130 ,5,$res1['name'],1,0);
    $pdf->Cell(25 ,5,$res1['p_quantity'],1,0);
    $pdf->Cell(34 ,5,$res1['final_price'],1,1,'R');//end of line
    $total=$total+$res1['final_price'];
    $quantity=$quantity+$res1['p_quantity'];
}




//summary
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,$total,0,0);
$pdf->Cell(7,5,'Rs',1,0);
$pdf->Cell(27,5,$total,1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Quantity',0,0);
$pdf->Cell(7,5,'Kg',1,0);
$pdf->Cell(27,5,$quantity,1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Tax Rate',0,0);
$pdf->Cell(7,5,'Rs',1,0);
$pdf->Cell(27,5,'10%',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Total Due',0,0);
$pdf->Cell(7,5,'Rs',1,0);
$pdf->Cell(27,5,$total,1,1,'R');//end of line



//output the result
$pdf->Output();
?>