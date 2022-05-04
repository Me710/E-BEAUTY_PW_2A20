<?php
	include 'C:/xampp/htdocs/E_Beauty/Controller/BlogB.php';
	$blogB=new BlogB();
	$blogB->supprimer_blog($_GET["id_blog"]);
	header('Location:index.php');
?>