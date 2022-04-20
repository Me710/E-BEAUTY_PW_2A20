<?php
	include_once('C:/xampp/htdocs/E_Beauty/Controller/LivreurC.php');
	$clientC=new LivreurC();
	$clientC->deleteLivreurBDD($_GET["LIVID"]);
	header('Location:index.php');
?>