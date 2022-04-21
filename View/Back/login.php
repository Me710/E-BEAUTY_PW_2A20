<?php
session_start();
require_once("config_google.php");
include_once("C:/xampp/htdocs/E_Beauty/Controller/userC.php");
include_once("C:/xampp/htdocs/E_Beauty/Controller/adminC.php");

if (isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
	$loginURL = $gClient->createAuthUrl();


$message="test";

$userC= new UserC();
$user= new AdminC();
/*$admin = new admin("nebotchristian6@gmail.com",md5(""));
$user->ajouterAdmin($admin);*/

if(isset($_POST["email"]) &&  
   isset($_POST["password"])) {
     $message=$userC->connexionUser($_POST["email"],md5($_POST['password']));

     if($message!='pseudo ou mot de passe est incorrect'){
       echo '<script type="text/javascript">window.alert("'.$message.'");</script>'; 
       header('Location:http://localhost/E_Beauty/View/Front/index_profil.php');
     } 
     else{
       $message='pseudo ou le mot de passe est incorrect';
       echo '<script type="text/javascript">window.alert("'.$message.'");</script>'; 
       $message2=$user->connexionAdmin($_POST["email"],md5($_POST['password']));
              if($message2!='pseudo ou mot de passe est incorrect'){
              header('Location:http://localhost/E_Beauty/View/Back/index.php');   
              }
            else{
              $message2='pseudo ou le mot de passe est incorrect';
              header('Location:login.php');
            }
     }
     
}
else{
  //$message='Missing information';
  //echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
}
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
    <title>E - Beauty Login</title>
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
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
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
                <h3 class="card-title text-left mb-3">Login</h3>
                <form action="" method="POST">
                  
                  <div class="form-group">
                    <label>Email *</label>
                    <input type="text" name="email" class="form-control p_input" />
                  </div>
                  <div class="form-group">
                    <label>Mot de Passe *</label>
                    <input type="text" name="password" class="form-control p_input" />
                  </div>
                  <div
                    class="form-group d-flex align-items-center justify-content-between"
                  >
                  </div>
                  <div class="text-center">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block enter-btn"
                    >
                      Login
                    </button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook
                    </button>
                    <!--<button class="btn btn-google col" onclick="window.location = '<?php echo $loginURL ?>';">
                      <i class="mdi mdi-google-plus"></i> Google plus
                    </button>-->
                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" 
                    value="Log In With Google" class="btn btn-danger">
                  </div>
                  <p class="sign-up">
                    Avez vous déjà un compte ?<a
                      href="http://localhost/E_Beauty/View/Back/register.php"
                    >
                      S'enregistrer</a
                    >
                  </p>
                  <p class="sign-up">
                  <a href="resetPassword.php" class="forgot-pass">Mot de passe oublié ?</a></p>
                  
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