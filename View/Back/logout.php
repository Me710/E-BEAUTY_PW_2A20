<?php
	require_once "config_google.php";
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
	session_destroy();
	header('Location: login.php');
	exit();
?>