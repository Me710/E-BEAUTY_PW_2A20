<?php

	include_once("C:/xampp/htdocs/E_Beauty/config.php");
	include_once("C:/xampp/htdocs/E_Beauty/Model/categorie.php");

	class categorieC {
		function affichercategorie(){
			$sql="SELECT * FROM categorie";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimercategorie($id_categorie){
			$sql="DELETE FROM categorie WHERE id_categorie=:id_categorie";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_categorie', $id_categorie);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajoutercategorie($categorie){
			$sql="INSERT INTO categorie (id_categorie, nom_categorie,image_categorie ) 
			VALUES (:id_categorie,:nom_categorie,:image_categorie)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_categorie' => $categorie->getid_categorie(),
					'nom_categorie' => $categorie->getnom_categorie(),
					'image_categorie'=> $categorie->getimage_categorie()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercategorie($id_categorie){
			$sql="SELECT * from categorie where id_categorie=$id_categorie";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$categorie=$query->fetch();
				return $categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiercategorie($categorie, $id_categorie){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorie SET 
						nom_categorie= :nom_categorie,
						image_categorie=:image_categorie
					WHERE id_categorie= :id_categorie'
				);
				$query->execute([
					'id_categorie' => $id_categorie,
					'nom_categorie' => $categorie->getnom_categorie(),
					'image_categorie'=>$categorie->getimage_categorie()
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function triercategorieDESC()
		{
		$sql = "SELECT * from categorie ORDER BY id_categorie DESC";
		$db = config::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
		}


		function triercategorieASC()
		{
		$sql = "SELECT * from categorie ORDER BY id_categorie ASC";
		$db = config::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
	    }
 
		function getcategorie($id){
            $sql="SELECT * from categorie where id_categorie= $id";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
    
                $categorie=$query->fetch();
                return $categorie;
            } 
            catch (Exception $e){
                die('error: '.$e->getMessage());
            }
        }
	
	}
?>