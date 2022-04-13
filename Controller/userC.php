<?php require("C:/xampp/htdocs/E_Beauty/Model/user.php");
      require("C:/xampp/htdocs/E_Beauty/config.php");

      //require("../Model/user.php"); //en cas d'erreur, require produit une erreur et arrete le script tandis que include produit l'erreur mais continue l'execution du script
class UserC {
      function afficherUserBDD() {
        $pdo = Config::getConnexion();
            try{
              $query= $pdo->prepare(
                'select * from user'
              );
              $query->execute();
              $result = $query->fetchALL();
              return $result;
            } catch(PDOException $e) {
              $e->getMessage();  
            }
           
          }
          function ajouterUser($User){
            $sql="INSERT INTO User (FIRSTNAME,LASTNAME,USERNAME,PASSWORD,EMAIL,VILLE) 
            VALUES (:FIRSTNAME,:LASTNAME,:USERNAME,:PASSWORD,:EMAIL, :VILLE)";
            $pdo = config::getConnexion();
            try{
              $query = $pdo->prepare($sql);
              $query->execute([
                'FIRSTNAME' => $User->getFirstName(),
                'LASTNAME' => $User->getLastName(),
                'USERNAME' => $User->getUserName(),
                'PASSWORD' => $User->getPassword(),
                'EMAIL' => $User->getEmail(),
                'VILLE' => $User->getVille()
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
                'delete from user where userid=:id'
              );
              $query->bindValue(':id',$id);
              return $query->execute();
            } catch(PDOException $e) {
              $e->getMessage();  
            }
          }
          function updateUserBDD($User,$userid) {
            $pdo = Config::getConnexion();
            try{
              $query= $pdo->prepare(
                'update user set 
                FIRSTNAME=:FIRSTNAME,
                LASTNAME=:LASTNAME,
                USERNAME=:USERNAME,
                PASSWORD=:PASSWORD,
                EMAIL=:EMAIL,
                VILLE=:VILLE
                where userid=:userid'
              );
              $query->execute([
                'FIRSTNAME' => $User->getFirstName(),
                'LASTNAME' => $User->getLastName(),
                'USERNAME' => $User->getUserName(),
                'PASSWORD' => $User->getPassword(),
                'EMAIL' => $User->getEmail(),
                'VILLE' => $User->getVille(),
                ':userid' => $userid
              ]);
              echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch(PDOException $e) {
              $e->getMessage();  
            }
          }  
          function recupererUser($id){
            $sql="SELECT * from user where userid=:id";
            $db = config::getConnexion();
            try{
              $query=$db->prepare($sql);
              $query->bindValue(':id',$id);
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