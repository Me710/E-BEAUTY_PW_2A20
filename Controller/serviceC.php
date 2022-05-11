<?php
	include 'C:/xampp/htdocs/AtelierPHP/config.php';
	include_once 'C:/xampp/htdocs/AtelierPHP/Model/service.php';
	class ServiceC {
		function rechercher_service($rechercher) {
            $pdo = Config::getConnexion();
            try{
              $query= $pdo->prepare(
                'SELECT * from services where libelle like "%'.$rechercher.'%" 
                or description like "%'.$rechercher.'%"
                or prix like "%'.$rechercher.'%"
                order by id DESC'
              );
              $query->execute();
              $result = $query->fetchALL();
              return $result;
            } catch(PDOException $e) {
              $e->getMessage();  
            }
          }
		  
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
			$img_name = $_FILES['my_image']['name'];
			$img_size = $_FILES['my_image']['size'];
			$tmp_name = $_FILES['my_image']['tmp_name'];
			$error = $_FILES['my_image']['error'];

			if ($error === 0) {
				if ($img_size > 9000000) {
					$em = "Sorry, your file is too large.";
					header("Location: gestion_service.php?error=$em");
				}else {
					$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
					$img_ex_lc = strtolower($img_ex);

					$allowed_exs = array("jpg", "jpeg", "png"); 

					if (in_array($img_ex_lc, $allowed_exs)) {
						$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
						$img_upload_path = 'C:/xampp/htdocs/AtelierPHP/View/Front/stylistic-master/uploads/'.$new_img_name;
						move_uploaded_file($tmp_name, $img_upload_path);

						// Insert into Database
						$sql="INSERT INTO services (libelle, description, prix, image_url) 
			VALUES (:libelle, :description, :prix, :new_img_name)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'libelle' => $services->getLibelle(),
					'description' => $services->getDescription(),
					'prix' => $services->getPrix(),
					'new_img_name' => $new_img_name
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
						header("Location: gestion_service.php");
					}else {
						$em = "You can't upload files of this type";
						header("Location: gestion_service.php?error=$em");
					}
				}
			}else {
				$em = "unknown error occurred!";
				header("Location: gestion_service.php?error=$em");
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