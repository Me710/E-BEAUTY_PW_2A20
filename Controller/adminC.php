<?php require_once("C:/xampp/htdocs/E_Beauty/Model/Admin.php");
      require_once("C:/xampp/htdocs/E_Beauty/config.php");

      //require("../Model/user.php"); //en cas d'erreur, require produit une erreur et arrete le script tandis que include produit l'erreur mais continue l'execution du script
class AdminC {
          function recupererUser($id){
            $sql="SELECT * from admins where adminid=:id";
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
          function ajouterAdmin($admin){
            $sql="INSERT INTO admins (PASSWORD,EMAIL) 
            VALUES (:PASSWORD,:EMAIL)";
            $pdo = config::getConnexion();
            try{
              $query = $pdo->prepare($sql);
              $query->execute([
                'PASSWORD' => $admin->getPassword(),
                'EMAIL' => $admin->getEmail()
              ]);			
            }
            catch (Exception $e){
              echo 'Erreur: '.$e->getMessage();
            }			
          }
          function connexionAdmin($email,$password){
            $sql="SELECT *FROM admins where Email=:email and Password=:password";
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
              }
              return $message;
            }
            catch (Exception $e){
              die('Erreur: '.$e->getMessage());
            }
          }   
  }
  
?>