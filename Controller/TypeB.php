<?php
	include_once 'C:/xampp/htdocs/E_Beauty/config.php';
	include_once 'C:/xampp/htdocs/E_Beauty/Model/Type.php';
	
	class TypeB {

		public function afficherBlog($id_type)
		{
			try{
				$pdo= getConnexion();
				$query = $pdo->prepare(
					'SELECT * from blog where type=$id'
				);
				$query->execute([
					'id' => $id_type
				]);		
				return $query->fetch();
			} catch (PDOExeption $e) {
				$e->getMessage();
			}

		}

		function affichertype(){
			$sql="SELECT Nom FROM type";
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
		function supprimer_type($id_type){
			$sql="DELETE FROM type WHERE id_type=:id_type";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_type', $id_type);
			try{
				$req->execute();
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
        
		function recuperer_type($id_type){
			$sql="SELECT * from type where id_type=$id_type";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$type=$query->fetch();
				return $type;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifier_type($type, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE type SET 
						Nom= :Nom,
					WHERE id_type= :id_type'
				);
				$query->execute([
					'Nom' => $type->getNom(),
					'id_type' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>
