<?php require("C:/xampp/htdocs/E_Beauty/Model/Reclamation.php");
      require("C:/xampp/htdocs/E_Beauty/config.php");

      //require("../Model/reclamation.php"); //en cas d'erreur, require produit une erreur et arrete le script tandis que include produit l'erreur mais continue l'execution du script
class ReclamationC {
      function afficherReclamationBDD() {
        $pdo = Config::getConnexion();
            try{
              $query= $pdo->prepare(
                'select * from reclamation'
              );
              $query->execute();
              $result = $query->fetchALL();
              return $result;
            } catch(PDOException $e) {
              $e->getMessage();  
            }
           
          }
          function ajouterReclamation($reclamation){
            $sql="INSERT INTO reclamation (FIRSTNAME,LASTNAME,USERID,EMAIL,VILLE,MESSAGE) 
            VALUES (:FIRSTNAME,:LASTNAME,:USERID,:EMAIL,:VILLE,:MESSAGE)";
            $pdo = config::getConnexion();
            try{
              $query = $pdo->prepare($sql);
              $query->execute([
                'FIRSTNAME' => $reclamation->getFirstName(),
                'LASTNAME' => $reclamation->getLastName(),
                'USERID' => $reclamation->getUserId(),
                'EMAIL' => $reclamation->getEmail(),
                'VILLE' => $reclamation->getVille(),
                'MESSAGE' => $reclamation->getMessage()
              ]);			
            }
            catch (Exception $e){
              echo 'Erreur: '.$e->getMessage();
            }			
          }
  }
  
?>