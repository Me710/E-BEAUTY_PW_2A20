<?php
	session_start();
	require_once "config_google.php";

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location:login.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$_SESSION['USERID'] = $userData['id'];
	$_SESSION['EMAIL'] = $userData['email'];
	//$_SESSION['gender'] = $userData['gender'];
	$_SESSION['PICTURE'] = $userData['picture'];
	$_SESSION['LASTNAME'] = $userData['familyName'];
	$_SESSION['FIRSTNAME'] = $userData['givenName'];
	$_SESSION['USERNAME'] = $userData['givenName'];
	$_SESSION['PASSWORD'] = "good";
	$_SESSION['VILLE'] = "Ariana";
	$_SESSION['TEMOIGNAGE'] = "Aucun teimoignage pour le moment";

	header('Location:http://localhost/E_Beauty/View/Front/index_profil.php');
	exit();
?>