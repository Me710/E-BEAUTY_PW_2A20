<?php
	//session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("33975652481-bk60sfkg4aepfqug9peu6esce2d92n8e.apps.googleusercontent.com");
	$gClient->setClientSecret("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");
	$gClient->setApplicationName("E BEAUTY PAGE");
	$gClient->setRedirectUri("http://localhost/E_Beauty/View/Back/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
