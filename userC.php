<?php include ('../Model/user.php');
      require ('../config.php');
      //require("../Model/user.php"); //en cas d'erreur, require produit une erreur et arrete le script tandis que include produit l'erreur mais continue l'execution du script
    class UserC {
      function afficherUserBDD() {
        $pdo = Config::getConnexion();
        try{
         $query= $pdo->query(
            'select * from user'
          ); 
          $query->execute();
          $result = $query->fetchALL();
          return $result;
        } catch(PDOException $e) {
          $e->getMessage();  
        }
      
      }
        function afficherUser($user) {
            echo "<table border='2'>
            <tr>
              <th>Prenom</th>
              <th>Nom</th>
              <th>Email</th>
              <th>Username</th>
              <th>Password</th>
            </tr>

            <tr>
            <td>".$user->getLastName()."</td>
            <td>".$user->getFirstName()."</td>
            <td>".$user->getPassword()."</td>
            <td>".$user->getEmail()."</td>
            <td>".$user->getUsername()."</td>
            </tr>
         </table>";
    }
    public function Delete($id){
      $pdo = Config::getConnexion();
      $query= $pdo->prepare(
        'delete from user where id=:id'
      );
      $query->bindValue(':id', $id);
    try {
      $query->execute(); 
    }
    catch (PDOException $e) { 
      echo $e->getMessage();
    }
  }
}
  public function Update($id) {
    $pdo = Config::getConnexion();
    try{
      $query= $pdo->query(
         'select * from user where id=:id'
       ); 
       $query->execute();
       $result = $query->fetch();
       return $result;
     } catch(PDOException $e) {
       $e->getMessage();  
     }
  }
  public function Ajout($user) {
    $pdo = Config::getConnexion();
    $sql = $pdo->prepare(
      "insert into user ('LastName','FirstName', 'Email', 'Username','Password') values (:nom, :prenom, :email, :utilisateur, :mdp)";
    ) 
    $query->bindValue(':nom', $user->getLastName());
    $query->bindValue(':prenom', $user->getFirstName());
    $query->bindValue(':email', $user->getEmail());
    $query->bindValue(':utilisateur', $user->getUsername());
    $query->bindValue(':mdp', $user->getPassword());
    try {
      $sql->execute();
    }
    catch (PDOException $e) {
      echo $e->getMessage();
    }   
  }
?>