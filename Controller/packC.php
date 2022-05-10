<?php
	include_once 'C:/xampp/htdocs/AtelierPHP/config.php';
	include_once 'C:/xampp/htdocs/AtelierPHP/Model/pack.php';
	class PackC {
		function afficherpacks(){
			$sql="SELECT * FROM packs";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerpack($id){
			$sql2="DELETE FROM packservice WHERE idpack=:id";
			$db = config::getConnexion();
			$req2=$db->prepare($sql2);
			$req2->bindValue(':id', $id);
			try{
				$req2->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}

			$sql2="DELETE FROM packs WHERE id=:id";
			$db = config::getConnexion();
			$req2=$db->prepare($sql2);
			$req2->bindValue(':id', $id);
			try{
				$req2->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterpack($packs){
			$img_name = $_FILES['my_image']['name'];
			$img_size = $_FILES['my_image']['size'];
			$tmp_name = $_FILES['my_image']['tmp_name'];
			$error = $_FILES['my_image']['error'];

			if ($error === 0) {
				if ($img_size > 9000000) {
					$em = "Sorry, your file is too large.";
					header("Location: index.php?error=$em");
				}else {
					$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
					$img_ex_lc = strtolower($img_ex);

					$allowed_exs = array("jpg", "jpeg", "png"); 

					if (in_array($img_ex_lc, $allowed_exs)) {
						$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
						$img_upload_path = 'C:/xampp/htdocs/AtelierPHP/View/Front/stylistic-master/uploads/'.$new_img_name;
						move_uploaded_file($tmp_name, $img_upload_path);

						// Insert into Database
						$sql="INSERT INTO packs (nom, description, image_url2) 
			VALUES (:nom, :description, :image_url2)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $packs->getNom(),
					'description' => $packs->getDescription(),
					'image_url2' => $new_img_name
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
						header("Location: index.php");
					}else {
						$em = "You can't upload files of this type";
						header("Location: index.php?error=$em");
					}
				}
			}else {
				$em = "unknown error occurred!";
				header("Location: index.php?error=$em");
			}
		
		}




		function recupererpack($id){
			$sql="SELECT * from packs where id=$id";
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
		
		function modifierpack($packs, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE packs SET 
						nom= :nom, 
						description= :description
					WHERE id= :id'
				);
				$query->execute([
					'nom' => $packs->getNom(),
					'description' => $packs->getDescription(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>