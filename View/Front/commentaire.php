<meta charsets"utf-8" />
<?php 
include_once 'C:/xampp/htdocs/E_Beauty/config.php';
include_once('C:/xampp/htdocs/E_Beauty/Controller/BlogB.php');
include_once('C:/xampp/htdocs/E_Beauty/Controller/TypeB.php'); 
$db = config::getConnexion();
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '',
[
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
if (
	isset($_GET["id_blog"]) AND  !empty($_GET['id_blog']))
	{
		$getId=htmlspecialchars($_GET['id_blog']);
		$blog= $bdd->prepare('SELECT * FROM blog where id_blog = ?');
		$blog->execute(array($getID));
		$blog= $blog->fetch();


		if (
			isset($_POST['com'])) 
			{
				if(isset($_POST['pseudo'],$_POST['commentaire'])	AND  !empty($_POST['pseudo']) AND !empty($_POST['commentaire']))
				{
					$pseudo=htmlspecialchars($_GET['pseudo']);
					$commentaire=htmlspecialchars($_GET['commentaire']);

					$ins = $bdd->prepare('INSERT INTO commentaire (pseudo, commentaire, id_blog) values (?,?,?)');
					$ins->execute(array($pseudo,$commentaire,$getId));
				}
			else{ $c_erreur = "tous les champs doivent etre remplis";
			}
		}
	
                     
?>
<h5>commentaire:</h5>
								  <form method="POST">
									  <input type="text" name="pseudo" placeholder="votre pseudo"/><br>
									  <textarea name="commentaire" id="commentaire" cols="30" rows="1"></textarea><br>
									  <input type="submit" value="poster" name="com">
								  </form>
								  <?php if(isset($c_erreur)) {echo "erreur: " .$c_erreur; } ?>
								  
<?php 
}
?>