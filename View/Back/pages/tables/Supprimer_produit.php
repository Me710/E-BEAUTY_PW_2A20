<?php

	include_once("C:/xampp/htdocs/E_Beauty/Controller/produitC.php");
	
	$produitC = new produitC();
    $produitC->supprimerproduit($_GET["id_produit"]);
	header('Location:gestion_produit.php');
?>