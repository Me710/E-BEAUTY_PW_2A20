<?php
	include 'C:/xampp/htdocs/E_Beauty/Controller/TypeB.php';
	$typeB=new TypeB();
	$typeB->supprimer_type($_GET["id_type"]);
	header('Location:index.php');
?>