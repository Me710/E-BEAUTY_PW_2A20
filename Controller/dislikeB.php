<?php
	include_once 'C:/xampp/htdocs/E_Beauty/config.php';
	include_once 'C:/xampp/htdocs/E_Beauty/Model/likes.php';
	
	class likeB {

		function affichertype(){
			$sql="SELECT  FROM type";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		
		function afficher_type(){
			$sql="SELECT * FROM type";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouter_type($type) {
			$sql="INSERT INTO type (id_type, Nom) 
			VALUES (:id_type, :Nom)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_type' => $type->getId(),
					'Nom' => $type->getNom()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
        
	
?>
