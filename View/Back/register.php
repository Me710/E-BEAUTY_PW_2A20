<?php
    //include('C:/xampp/htdocs/E_Beauty/Model/User.php'); 
    include('C:/xampp/htdocs/E_Beauty/Controller/userC.php'); 

    $error = "";

    // create User
    $Client = null;

    // create an instance of the controller
    $ClientC = new UserC();
    if (
        isset($_POST["FirstName"]) &&
		isset($_POST["LastName"]) &&		
        isset($_POST["UserName"]) &&
		isset($_POST["Password"]) && 
        isset($_POST["Email"]) && 
        isset($_POST["Ville"])
    ) {
        if (
            !empty($_POST["FirstName"]) && 
			!empty($_POST['LastName']) &&
            !empty($_POST["UserName"]) && 
			!empty($_POST["Password"]) && 
            !empty($_POST["Email"]) && 
            !empty($_POST["Ville"])
        ) {
            $Client = new User(
                $_POST['FirstName'],
				$_POST['LastName'],
                $_POST['Password'], 
				$_POST['Email'],
                $_POST['UserName'],
                $_POST['Ville']
            );
            $ClientC->ajouterUser($Client);
            header('Location:login.php');
        }
        else
            $error = "Missing information";
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style>
      .error{
        color: red;
      }
    </style>
<script type="text/javascript" src="controle_saisie.js"></script>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>E - Beauty Register</title>
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
                <h3 class="card-title text-left mb-3">Register</h3>
                <form class="forms-sample" action="" method="POST" name="FormAjout" onsubmit="return Verif()">
                      <div class="form-group">
                        <label for="TypeUtilisateur">Type  d'Utilisateur</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Client</option>
                          <option>Livreur</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="FirstName">First Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="FirstName"
                          name="FirstName"
                          placeholder="First Name"
                        />
                        <p id="errorNR" class="error"></p>
                      </div>
                      <div class="form-group">
                        <label for="LastName">Last Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="LastName"
                          name="LastName"
                          placeholder="Last Name"
                        />
                        <p id="errorPR" class="error"></p>
                      </div>
                      <div class="form-group">
                        <label for="UserName">User Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="UserName"
                          name="UserName"
                          placeholder="User Name"
                        />
                        <p id="errorNU" class="error"></p>
                      </div>
                      <div class="form-group">
                        <label for="Email">EmaiL address</label>
                        <input
                          type="email"
                          class="form-control"
                          id="Email"
                          name="Email"
                          placeholder="xxxx@esprit.tn"
                        />
                        <p id="errorMR" class="error"></p>
                      </div>
                      <div class="form-group">
                        <label for="Password">Password</label>
                        <input
                          type="password"
                          class="form-control"
                          id="Password"
                          name="Password"
                          placeholder="Password"
                        />
                        <p id="errorPass" class="error"></p>
                      </div>
                      <div class="form-group">
                        <label for="PasswordConf">Confirm Password</label>
                        <input
                          type="password"
                          class="form-control"
                          id="PasswordConf"
                          name="PasswordConf"
                          placeholder="Confirm Password"  
                        />
                        <p id="errorPassC" class="error"></p>
                      </div>
                      <div class="form-group">
                        <label for="Ville">Ville/Zone de Livraison</label>
                        <input
                          type="text"
                          class="form-control"
                          id="Ville"
                          name="Ville"
                          placeholder="Location"
                        />
                        <p id="errorV" class="error"></p>
                      </div>
                      <!--<div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>-->
                      <div class="form-group">
                        <label>Image upload</label>
                        <input
                          type="file"
                          name="img[]"
                          class="file-upload-default"
                        />
                        <div class="input-group col-xs-12">
                          <input
                            type="text"
                            class="form-control file-upload-info"
                            disabled
                            placeholder="Upload Image"
                          />
                          <span class="input-group-append">
                            <button
                              class="file-upload-browse btn btn-primary"
                              type="button"
                            >
                              Upload
                            </button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">
                        Register
                      </button>
                      <button class="btn btn-dark">Cancel</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook col mr-2">
                      <i class="mdi mdi-facebook"></i> Facebook
                    </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus
                    </button>
                  </div>
                  <p class="sign-up text-center">
                    Already have an Account?<a
                      href="../View/Back/pages/samples/login.php"
                    >
                      Sign In</a
                    >
                  </p>
                  <p class="terms">
                    By creating an account you are accepting our<a href="#">
                      Terms & Conditions</a
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
