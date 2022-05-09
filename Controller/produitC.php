<?php
	include_once 'C:/xampp/htdocs/E_Beauty/config.php';
	include_once 'C:/xampp/htdocs/E_Beauty/Model/produit.php';
	class produitC {
		function afficherproduit(){
			$sql="SELECT * FROM produit";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerproduit($id_produit){
			$sql="DELETE FROM produit WHERE id_produit=:id_produit";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_produit', $id_produit);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterproduit($produit){
			$sql="INSERT INTO produit (id_produit,nom_produit,prix_produit,quantite_produit,descrip_produit) 
			VALUES (:id_produit,:nom_produit,:prix_produit,:quantite_produit,:descrip_produit)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_produit' => $produit->getid(),
					'nom_produit' => $produit->getnom(),
					'prix_produit' => $produit->getprix(),
					'quantite_produit' => $produit->getquantite(),
					'descrip_produit' => $produit->getdescrip()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererproduit($id_produit){
			$sql="SELECT * from produit where id_produit=$id_produit";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierproduit($produit, $id_produit){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						nom_produit= :nom_produit,
						prix_produit= :prix_produit,
						quantite_produit= :quantite_produit,
						descrip_produit= :descrip_produit
					WHERE id_produit= :id_produit'
				);
				$query->execute([
					
					'id_produit' =>$id_produit,
					'nom_produit' => $produit->getnom(),
					'prix_produit' => $produit->getprix(),
					'quantite_produit' => $produit->getquantite(),
					'descrip_produit' => $produit->getdescrip()
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function trierproduitDESC()
		{
		$sql = "SELECT * from produit ORDER BY quantite_produit DESC";
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


		function trierproduitASC()
		{
		$sql = "SELECT * from produit ORDER BY quantite_produit ASC";
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

         
		function getproduit($id){
            $sql="SELECT * from produit where id_produit= $id";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
    
                $produit=$query->fetch();
                return $produit;
            } 
            catch (Exception $e){
                die('error: '.$e->getMessage());
            }
        }
	


	}
?>