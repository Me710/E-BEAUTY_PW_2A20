<?php
	include_once 'C:/xampp/htdocs/E_Beauty/config.php';
	include_once 'C:/xampp/htdocs/E_Beauty/Model/Commentaire.php';


	class CommentaireB
     {
        function ajouter_com($com)
         {
			$sql="INSERT INTO commentaire (/*id_com, */pseudo, commentaire/*,id_blog*/) 
			VALUES (/*:id_com, */:pseudo, :commentaire)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
				//	'id_com' => $com->getIdc(),
					'pseudo' => $com->getPs(),
                    'commentaire' => $com->getcom()
				]);			
			}
			catch (Exception $e)
			{
				echo 'Erreur: '.$e->getMessage();
			}			
		}

        function afficher_com(){
			$sql="SELECT pseudo FROM commentaire";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
	}
?>