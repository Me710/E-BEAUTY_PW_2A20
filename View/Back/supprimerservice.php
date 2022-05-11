<?php
	include('C:/xampp/htdocs/AtelierPHP/Controller/serviceC.php');
	$TraitementC=new ServiceC();
	$TraitementC->supprimerservice($_GET["id"]);
	header('Location:gestion_service.php');
?>