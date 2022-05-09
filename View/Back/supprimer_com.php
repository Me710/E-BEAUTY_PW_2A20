<?php
	include 'C:/xampp/htdocs/E_Beauty/Controller/TypeB.php';
	$typeB=new TypeB();
	$typeB->supprimer_com($_GET["id_type"]);
	header('Location:index.php');
?>