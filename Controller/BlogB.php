<?php
	include_once 'C:/xampp/htdocs/E_Beauty/config.php';
	include_once 'C:/xampp/htdocs/E_Beauty/Model/Blog.php';
	//include_once 'C:/xampp/htdocs/E_Beauty/Model/Type.php';
	class BlogB {
		function afficher_blog(){
			$sql="SELECT * FROM blog";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimer_blog($id_blog) {
			$sql="DELETE FROM blog WHERE id_blog=:id_blog";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_blog', $id_blog);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouter_blog($blog){
			$sql="INSERT INTO blog (id_blog, Auteur, Date, Titre, Image, texte, type) 
			VALUES (:id_blog, :Auteur, :Date, :Titre, :Image, :texte, :type)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_blog' => $blog->getId(),
					'Auteur' => $blog->getAuteur(),
					'Date' => $blog->getDate(),
					'Titre' => $blog->getTitre(),
					'Image' => $blog->getIm(),
					'texte' => $blog->getText(),
					'type' => $blog->getType()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
        
		function recuperer_blog($id_blog){
			$sql="SELECT * from blog where id_blog=$id_blog";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$blog=$query->fetch();
				return $blog;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifier_blog($blog, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE blog SET 
						Auteur= :Auteur, 
						Titre= :Titre, 
						Date= :Date, 
						Image= :Image, 
						texte= :texte, 
						type= :type, 
					WHERE id_blog= :id_blog'
				);
				$query->execute([
					'Auteur' => $blog->getAuteur(),
					'Date' => $blog->getDate(),
					'Titre' => $blog->getTitre(),
					'Image' => $blog->getIm(),
					'texte' => $blog->getText(),
					'type' => $blog->getType(),
					'id_blog' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>