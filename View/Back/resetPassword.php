<?php
include_once("C:/xampp/htdocs/E_Beauty/config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>E - Beauty Reset Password</title>
    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/css/vendor.bundle.base.css"
    />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div
            class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg"
          >
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h4 class="card-title text-left mb-3">Reinitialiser Mot de Passe</h4>
                <form action="" method="POST">
                  <div class="form-group">
                    <label>Email *</label>
                    <input type="text" name="email" class="form-control p_input" />
                  </div>
                  <div class="text-center">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block enter-btn"
                    >
                      Envoyer un Mot de Passe Aleatoire
                    </button>
                  </div>
                  <p class="sign-up">
                    Vous n'avez pas un compte ?<a
                      href="http://localhost/E_Beauty/View/Back/register.php"
                    >
                      S'enregistrer</a
                    >
                  </p>
                  <p class="sign-up">
                    <a
                      href="http://localhost/E_Beauty/View/Back/login.php"
                    >
                      Retour pour à la page connexion</a
                    >
                  </p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
<?php

if(isset($_POST['email']))
{
    $password = uniqid();
    $hashPassword = md5($password);
    
    $db = config::getConnexion();

    $message = "Dear User";
    $message .= " , You have succesfully undergone the procedure to reset your password. Your new password is: ";
    $message.= $password;
    $message .= ".Use it to login to your E-Beauty account.";

    if(mail($_POST['email'],"Reinitialisation Mot de Passe",$message,"From:ebeautycontact01@gmail.com")) {
       $test = "UPDATE user SET password = ? where email = ?";
       $stmt = $db->prepare($test);
       $stmt->execute([$hashPassword, $_POST['email']]);
       echo "Mail envoyé"; 
    }
    else {
        echo "Une erreur est survenue...";
    }

    
}
?>