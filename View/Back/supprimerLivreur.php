<?php
	include_once('C:/xampp/htdocs/E_Beauty/Controller/userC.php');
	$clientC=new UserC();
	$clientC->deleteUserBDD($_GET["LIVID"]);
	header('Location:index.php');
?>