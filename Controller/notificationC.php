<?php
    require_once("C:/xampp/htdocs/E_Beauty/config.php");

    function fetchAll($query){
        $pdo = Config::getConnexion();
        try{
            $stmt = $pdo->query($query);
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            $e->getMessage();  
        }
    }
    function performQuery($query){
        $pdo = Config::getConnexion();
        try{
            $stmt = $pdo->prepare($query);
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
        } catch(PDOException $e) {
            $e->getMessage();  
        }
    }

?>