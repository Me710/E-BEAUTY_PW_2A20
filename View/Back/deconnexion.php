<?php
session_start();
session_destroy();
header("location:http://localhost/E_Beauty/View/Back/login.php");
?>