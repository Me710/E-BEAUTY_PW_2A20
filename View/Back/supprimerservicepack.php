<?php
    include('C:/xampp/htdocs/AtelierPHP/Controller/service-pack-C.php');
	$servicepackC=new ServicePackC();
	$servicepackC->supprimerservicepack($_GET["num"]);
	header('Location:index.php');
?>