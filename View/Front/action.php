   <?php 
include_once 'C:/xampp/htdocs/E_Beauty/config.php';
include_once('C:/xampp/htdocs/E_Beauty/Controller/BlogB.php');
include_once('C:/xampp/htdocs/E_Beauty/Controller/TypeB.php'); 
//include('C:/xampp/htdocs/E_Beauty/Controller/LivreurC.php'); 

$blogB=new BlogB();
$listeBlogs=$blogB->afficher_blog(); 
$typeB=new TypeB();
$listeTypes=$typeB->afficher_type(); 
    //var_dump($resultat);
    if (
        isset($_GET["id_blog"],$_GET["t"])
         AND
                !empty($_GET["id_blog"]) AND 
                      !empty($_GET['t']))
             {
                $getId = (int) $_GET['id_blog'];
                $gett = (int) $_GET['t'];
                
                $pdo= config::getConnexion();
				$check = $pdo->prepare(
					'SELECT id_blog from blog where id_blog=?'
				);
				$check->execute(array($getId));
                
                if($check->rowCount() == 1)
                {
                    if($gett == 1) {
                        $ins = $pdo->prepare( 'INSERT INTO likes (id_blog) values (?)');
                        $ins->execute(array($getId));

                    }elseif($gett == 2 )
                    {
                        $ins = $pdo->prepare( 'INSERT INTO dislikes (id_blog) values (?)');
                        $ins->execute(array($getId));
                    }
                    header('Location:model-single.php');
                }

                else{
                    exit('Missing information');
               
            }
    }
?>
