<?php
	include('C:/xampp/htdocs/AtelierPHP/Controller/packC.php');
	$packC=new PackC();
	$packC->supprimerpack($_GET["id"]);
	header('Location:gestion_service.php');
?>