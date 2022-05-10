<?php
	include_once 'C:/xampp/htdocs/AtelierPHP/config.php';
	include_once 'C:/xampp/htdocs/AtelierPHP/Model/service-pack.php';

	class ServicePackC {

		
		function ajout() {	
			if ((isset($_POST["J_insert"])) && ($_POST["J_insert"] == "group_note")) {
				try {	
						$db = config::getConnexion();
						$sql="INSERT INTO packservice (idpack, nompack, idservice, libelle, prix, image_url2) 
					VALUES (:idpack, :nompack, :idservice, :libelle, :prix, :image_url2)";
						
						$idpackI= ($_POST["packSelection"]);					
						
						$servicepackc = new ServicePackC();
						$found = $servicepackc->recupererpack($idpackI);			
						foreach($found as $row){
							$nomp = $row['nom'];  
						}
						
						foreach ($_POST['groupselect'] as $i => $value) {
							$idserviceI = ($_POST["idT"][$i]);			
							$libelleI = ($_POST["libelleT"][$i]);
							$prixI = ($_POST["prixT"][$i]);
							$urlI = ($_POST["urlT"][$i]);
							$query = $db->prepare($sql);
							$query->execute([
								'idpack' => $idpackI,
								'nompack' => $nomp,
								'idservice' => $idserviceI,
								'libelle' => $libelleI,
								'prix' => $prixI,
								'image_url2' => $urlI
							]);	
						//echo "<script>alert('$libelleI[$i]');</script>";
					}
				}
				catch (Exception $e) {
				$message = 'Something not working right!!';
				}
			}
		}
		
		
		function afficherservicepack(){
			$sql="SELECT * FROM packservice";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

		function supprimerservicepack($num){
			$sql="DELETE FROM packservice WHERE num=:num";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':num', $num);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

		function updateTotalPrice($idp) {
				$sql="SELECT * FROM packservice WHERE idpack=:idp";
				$db = config::getConnexion();
				try{
					$req = $db->prepare($sql);
					$req->bindValue(':idp', $idp);
					$req->execute();
					$liste = $req->fetchAll();	
					return $liste;
				}
				catch(Exception $e){
					die('Erreur:'. $e->getMessage());
				}		
		}

		function updateTotalPriceDB($prix, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE packs SET 
						prixtotal= :prix
					WHERE id= :id'
				);
				$query->execute([
					'prix' => $prix,
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function recupererpack($id){
			$sql="SELECT * FROM packs WHERE id=:idp";
				$db = config::getConnexion();
				try{
					$req = $db->prepare($sql);
					$req->bindValue(':idp', $id);
					$req->execute();
					$pack = $req->fetchAll();	
					return $pack;
				}
				catch(Exception $e){
					die('Erreur:'. $e->getMessage());
				}	
		}

		function recupererservice($id){
			$sql="SELECT * FROM services WHERE id=:idp";
				$db = config::getConnexion();
				try{
					$req = $db->prepare($sql);
					$req->bindValue(':idp', $id);
					$req->execute();
					$service = $req->fetchAll();	
					return $service;
				}
				catch(Exception $e){
					die('Erreur:'. $e->getMessage());
				}	
		}
		
		function recupererpackservice($id){
			$sql="SELECT * from packservice where idpack= :idp";
				$db = config::getConnexion();
				try{
					$req = $db->prepare($sql);
					$req->bindValue(':idp', $id);
					$req->execute();
					$packservice   = $req->fetchAll();	
					return $packservice;
				}
				catch(Exception $e){
					die('Erreur:'. $e->getMessage());
				}	
		}
		

	}
?>









		
