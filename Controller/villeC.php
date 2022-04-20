<?php include_once("C:/xampp/htdocs/E_Beauty/Model/Ville.php");
      include_once("C:/xampp/htdocs/E_Beauty/config.php");

      //require("../Model/user.php"); //en cas d'erreur, require produit une erreur et arrete le script tandis que include produit l'erreur mais continue l'execution du script
class VilleC {
      function afficherVilleBDD() {
        $pdo = Config::getConnexion();
            try{
              $query= $pdo->prepare(
                'select * from ville'
              );
              $query->execute();
              $result = $query->fetchALL();
              return $result;
            } catch(PDOException $e) {
              $e->getMessage();  
            }
           
          }
          function ajouterUser($User){
            $sql="INSERT INTO ville (IDVILLE) 
            VALUES (:IDVILLE)";
            $pdo = config::getConnexion();
            try{
              $query = $pdo->prepare($sql);
              $query->execute([
                'IDVILLE' => $User->getVille()
              ]);			
            }
            catch (Exception $e){
              echo 'Erreur: '.$e->getMessage();
            }			
          }
          function deleteUserBDD($id) {
            $pdo = Config::getConnexion();
            try{
              $query= $pdo->prepare(
                'delete from ville where idville=:idville'
              );
              $query->bindValue(':idville',$id);
              return $query->execute();
            } catch(PDOException $e) {
              $e->getMessage();  
            }
          }
  
          function recupererUser($id){
            $sql="SELECT * from ville where idville=:idville";
            $db = config::getConnexion();
            try{
              $query=$db->prepare($sql);
              $query->bindValue(':idville',$id);
              $query->execute();

              $adherent=$query->fetch();
              return $adherent;
            }
            catch (Exception $e){
              die('Erreur: '.$e->getMessage());
            }
          }  
             
  }
  
?>