<?php
	include('C:/xampp/htdocs/E_Beauty/Controller/userC.php');
	$clientC=new UserC();
	$clientC->deleteUserBDD($_GET["USERID"]);
	header('Location:index.php');
?>