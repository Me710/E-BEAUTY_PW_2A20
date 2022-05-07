<?php
    
    include_once('C:/xampp/htdocs/E_Beauty/Controller/notificationC.php');

    $id = $_GET['id'];

    $query ="UPDATE `notifications` SET `status` = 'read' WHERE `id` = $id;";
    performQuery($query);
    header('location:index.php');
    
?><br/>