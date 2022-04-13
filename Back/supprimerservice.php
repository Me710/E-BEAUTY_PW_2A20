<?php
	include('../Controller/serviceC.php');
	$TraitementC=new ServiceC();
	$TraitementC->supprimerservice($_GET["id"]);
	header('Location:index.php');
?>