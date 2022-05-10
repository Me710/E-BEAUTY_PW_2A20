<?php
	include_once '../FRONT/connection.php';
	include_once '../Model/Commentaire.php';
	
	
	  class CommentaireB
	  {
		 function ajouter_com($com)
		  {
			 $sql="INSERT INTO commentaires (id_com,pseudo, commentaire) 
			 VALUES (:id_com,:pseudo, :commentaire)";
			 $db = config::getConnexion();
			 try{
				 $query = $db->prepare($sql);
				 $query->execute([
				 	'id_com' => $com->getcomId(),
					 'pseudo' => $com->getpseudo(),
					 'commentaire' => $com->getcommentaire()
				 ]);			
			 }
			 catch (Exception $e)
			 {
				 echo 'Erreur: '.$e->getMessage();
			 }			
		 }
 
		 function afficher_com(){
			 $sql="SELECT * FROM commentaire";
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
