<?php

	include_once("C:/xampp/htdocs/E_Beauty/Controller/categorieC.php");

	$categorieC = new categorieC();
    $categorieC->supprimercategorie($_GET["id_categorie"]);
	header('Location:gestion_categorie.php');
?>





