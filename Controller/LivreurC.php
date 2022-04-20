 <?php require_once("C:/xampp/htdocs/E_Beauty/Model/Livreur.php");
       require_once("C:/xampp/htdocs/E_Beauty/config.php");
 
 class LivreurC {
         function afficherLivBDD() {
        $pdo = Config::getConnexion();
            try{
              $query= $pdo->prepare(
                'select * from livreur'
              );
              $query->execute();
              $result = $query->fetchALL();
              return $result;
            } catch(PDOException $e) {
              $e->getMessage();  
            }
          }
          function ajouterLiv($Livreur){
            $sql="INSERT INTO livreur (FIRSTNAME,LASTNAME,USERNAME,PASSWORD,EMAIL,ZONELIV) 
            VALUES (:FIRSTNAME,:LASTNAME,:USERNAME,:PASSWORD,:EMAIL, :ZONELIV)";
            $pdo = config::getConnexion();
            try{
              $query = $pdo->prepare($sql);
              $query->execute([
                'FIRSTNAME' => $Livreur->getFirstName(),
                'LASTNAME' => $Livreur->getLastName(),
                'USERNAME' => $Livreur->getUserName(),
                'PASSWORD' => $Livreur->getPassword(),
                'EMAIL' => $Livreur->getEmail(),
                'ZONELIV' => $Livreur->getVille()
              ]);			
            }
            catch (Exception $e){
              echo 'Erreur: '.$e->getMessage();
            }			
          }
          function deleteLivreurBDD($id) {
            $pdo = Config::getConnexion();
            try{
              $query= $pdo->prepare(
                'delete from livreur where livid=:id'
              );
              $query->bindValue(':id',$id);
              return $query->execute();
            } catch(PDOException $e) {
              $e->getMessage();  
            }
          }
          function updateUserBDD($id) {
            $pdo = Config::getConnexion();
            try{
              $query= $pdo->prepare(
                'update livreur set where livid=:id'
              );
              $query->bindValue(':id',$id);
              return $query->execute();
            } catch(PDOException $e) {
              $e->getMessage();  
            }
          }
          function updateLivBDD($Livreur,$livid) {
            $pdo = Config::getConnexion();
            try{
              $query= $pdo->prepare(
                'update livreur set 
                FIRSTNAME=:FIRSTNAME,
                LASTNAME=:LASTNAME,
                USERNAME=:USERNAME,
                PASSWORD=:PASSWORD,
                EMAIL=:EMAIL,
                ZONELIV=:ZONELIV
                where livid=:livid'
              );
              $query->execute([
                'FIRSTNAME' => $Livreur->getFirstName(),
                'LASTNAME' => $Livreur->getLastName(),
                'USERNAME' => $Livreur->getUserName(),
                'PASSWORD' => $Livreur->getPassword(),
                'EMAIL' => $Livreur->getEmail(),
                'ZONELIV' => $Livreur->getVille(),
                ':livid' => $livid
              ]);
              echo $query->rowCount() . " records UPDATED successfully <br>";
              
            } catch(PDOException $e) {
              $e->getMessage();  
            }
          }  
          function recupererUser($id){
            $sql="SELECT * from livreur where livid=:id";
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
          function connexionUser($email,$password){
            $sql="SELECT *FROM livreur where Email=:email and Password=:password";
            $db = config::getConnexion();
            try{
              $query=$db->prepare($sql);
              $query->bindValue(':email',$email);
              $query->bindValue(':password',$password);
              $query->execute();
              $count=$query->rowCount();
              if($count==0){
                $message = "pseudo ou mot de passe est incorrect";
              }else {
                 $x=$query->fetch();
                 $message = "pseudo ou mot de passe correct";
                 $_SESSION['USERID']=$x['USERID'];
                 $_SESSION['EMAIL']=$x['EMAIL'];
                 $_SESSION['USERNAME']=$x['USERNAME'];
                 $_SESSION['FIRSTNAME']=$x['FIRSTNAME'];
                 $_SESSION['LASTNAME']=$x['LASTNAME'];
                 $_SESSION['PASSWORD']=$x['PASSWORD'];
                 $_SESSION['ZONELIV']=$x['ZONELIV'];
                 $_SESSION['TYPE']="Livreur";
              }
              return $message;
            }
            catch (Exception $e){
              die('Erreur: '.$e->getMessage());
            }
          }
          
  }

?>