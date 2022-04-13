<?php
	include '../config.php';
	include_once '../Model/service.php';
	class ServiceC {
		function afficherservices(){
			$sql="SELECT * FROM services";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerservice($id){
			$sql="DELETE FROM services WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterservice($services){
			$sql="INSERT INTO services (libelle, description, prix) 
			VALUES (:libelle, :description, :prix)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'libelle' => $services->getLibelle(),
					'description' => $services->getDescription(),
					'prix' => $services->getPrix()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererservice($id){
			$sql="SELECT * from services where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$services=$query->fetch();
				return $services;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierservice($services, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE services SET 
						libelle= :libelle, 
						description= :description, 
						prix= :prix
					WHERE id= :id'
				);
				$query->execute([
					'libelle' => $services->getLibelle(),
					'description' => $services->getDescription(),
					'prix' => $services->getPrix(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>