<?php
    include('C:/xampp/htdocs/AtelierPHP/Controller/service-pack-C.php');
    $TraitementC=new ServicePackC();
	$result = $TraitementC->updateTotalPrice($_GET['id']);
    foreach($result as $row){
		$prixN = $row['prix'];  
        $nPrix += $prixN;
        //echo "<script>alert('$nPrix');</script>";
	}
    $TraitementC->updateTotalPriceDB($nPrix, $_GET['id']);
	header('Location:gestion_service.php');
?>