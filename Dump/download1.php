<?php
$con = mysqli_connect("localhost","root","","login1");
require_once('fpdf/cellfit.php');
$pdf = new FPDF_CellFit();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);	
$ret ="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='login1' AND `TABLE_NAME`='payment_cash_success'";
$query1= mysqli_query($con,$ret);
$header=mysqli_fetch_all($query1);
$cnt=1;
if(mysqli_num_rows($query1) > 0)
{
foreach($header as $heading) {
foreach($heading as $column_heading)
$pdf->CellFitScale(24,15,join(" ",(explode("_",$column_heading))),1,'R');
}}
//code for print data
$sql = "SELECT * from  payment_cash_success";
$query= mysqli_query($con,$sql);
if(! empty( $mysqli->error ) ){
    echo $mysqli->error;  // <- this is not a function call error()
 }

 $results=mysqli_fetch_all($query);
$cnt=1;
if(mysqli_num_rows($query) > 0)
{
foreach($results as $row) {
$pdf->SetFont('Arial','',7);	
$pdf->Ln();
foreach($row as $column)
$pdf->CellFitScaleForce(25,7,$column,1);
} }
$pdf->Output();
?>