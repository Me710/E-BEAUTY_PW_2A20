<?php
	
	include_once("C:/xampp/htdocs/E_Beauty/Controller/produitC.php");
    
	$produit=null;
	$produitC=new produitC();
	$listeproduit=$produitC->afficherproduit(); 
?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>INVOICE</title>
 </head>
 <body>
 <?php 
 //include("header.php");
  session_start();

    require('fpdf/fpdf.php');
 $pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Liste des Produits',1,1,C);
$pdf->Cell(95,10,'',0,1);
foreach($listeproduit as $produit){
$pdf->SetTextColor(199, 0, 57);
$pdf->Cell(40,20,'',0,1);
$pdf->Cell(38,20,'Item ID : ',1,1);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(38,20,$produit['id_produit'],0,1);
$pdf->SetTextColor(199, 0, 57);
$pdf->Cell(45,20,'Item Name : ',1,2);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(45,20,$produit['nom_produit'],0,1);
$pdf->SetTextColor(199, 0, 57);
$pdf->Cell(52,20,'Item Price : ',1,2);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(52,20,$produit['prix_produit'],0,1);
$pdf->SetTextColor(199, 0, 57);
$pdf->Cell(59,20,'Item Quantity : ',1,2);	
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(59,20,$produit['quantite_produit'],0,1);

$pdf->Cell(0,10,'',1,1,C);

}




$pdf->Cell(40,20,'',0,1);
$pdf->Output();

 ?>
 </body>
 </html>