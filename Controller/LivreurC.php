 <?php
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
            //foreach ($result as $row) {
              //echo $row['Id'].$row['LastName'].$row['FirstName'].$row['Email'].$row['Username'].$row['Password'];
            //}
          }
          function deleteUserBDD($id) {
            $pdo = Config::getConnexion();
            try{
              $query= $pdo->prepare(
                'delete from user where id=:id'
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
                'update user set where id=:id'
              );
              $query->bindValue(':id',$id);
              return $query->execute();
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
  }

?>