<?php
session_start();
include('C:/xampp/htdocs/E_Beauty/Controller/userC.php');

    $error = "";

    // create User
    $Client = null;

    // create an instance of the controller
    $ClientC = new UserC();
    if (
      isset($_POST["USER"]) &&
        isset($_POST["FirstName"]) &&
		isset($_POST["LastName"]) &&		
        isset($_POST["UserName"]) &&
		isset($_POST["Password"]) && 
        isset($_POST["Email"]) && 
        isset($_POST["Ville"])
    ) {
        if ( !empty($_POST["USER"]) &&
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
                $_POST['UserName'], 
				$_POST['Email'],
                $_POST['Password'],
                $_POST['Ville']
            );
            $Client->setTemoignage($_POST['Temoignage']);

            $ClientC->updateUserBDD($Client,$_POST['USER']);
            $_SESSION['USERID']=$_POST['USER'];
                 $_SESSION['EMAIL']=$_POST['Email'];
                 $_SESSION['USERNAME']=$_POST['UserName'];
                 $_SESSION['FIRSTNAME']=$_POST['FirstName'];
                 $_SESSION['LASTNAME']=$_POST['LastName'];
                 $_SESSION['PASSWORD']=$_POST['Password'];
                 $_SESSION['VILLE']=$_POST['Ville'];
                 $_SESSION['TEMOIGNAGE']=$_POST['Temoignage'];
            header('Location:my_profile.php');
        }
        else{
            $error = "Missing information";
        }  
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
    <title>E - BEAUTY Profile</title>
    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="assets/assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="assets/assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="assets/assets/vendors/jvectormap/jquery-jvectormap.css"
    />
    <link
      rel="stylesheet"
      href="assets/assets/vendors/flag-icon-css/css/flag-icon.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/assets/vendors/owl-carousel-2/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/assets/vendors/owl-carousel-2/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/assets/css/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/assets/images/favicon.png" />
  </head>
<body>
  <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div
          class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
        >
          <a class="sidebar-brand brand-logo" href="index.php">
            <img src="assets/assets/images/logo.png" alt="logo"
          /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"
            ><img src="assets/assets/images/logo-mini.svg" alt="logo"
          /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img
                    class="img-xs rounded-circle"
                    src="assets/assets/images/faces/face15.jpg"
                    alt=""
                  />
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo  $_SESSION['FIRSTNAME']; ?></h5>
                  <span>USER</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"
                ><i class="mdi mdi-dots-vertical"></i
              ></a>
              <div
                class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                aria-labelledby="profile-dropdown"
              >
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">
                      Parametre Compte
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">
                      Changer de mot de passe
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="my_profile.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">MON PROFIL</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="mes_reclamations.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">MES RECLAMATIONS</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="changePassword.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">CHANGER MDP</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div
            class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center"
          >
            <a class="navbar-brand brand-logo-mini" href="../../my_profile.php"
              ><img src="assets/assets/images/logo-mini.svg" alt="logo"
            /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a
                  class="nav-link btn btn-success create-new-button"
                  id="createbuttonDropdown"
                  aria-expanded="false"
                  href="http://localhost/E_Beauty/View/Front/index_profil.php"
                  >RETOUR A L'ACCUEIL</a
                >
                
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a
                  class="nav-link count-indicator dropdown-toggle"
                  id="messageDropdown"
                  href="#"
                  data-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="messageDropdown"
                >
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img
                        src="assets/assets/images/faces/face4.jpg"
                        alt="image"
                        class="rounded-circle profile-pic"
                      />
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Mark send you a message
                      </p>
                      <p class="text-muted mb-0">1 Minutes ago</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img
                        src="assets/assets/images/faces/face2.jpg"
                        alt="image"
                        class="rounded-circle profile-pic"
                      />
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Cregh send you a message
                      </p>
                      <p class="text-muted mb-0">15 Minutes ago</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img
                        src="assets/assets/images/faces/face3.jpg"
                        alt="image"
                        class="rounded-circle profile-pic"
                      />
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Profile picture updated
                      </p>
                      <p class="text-muted mb-0">18 Minutes ago</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a
                  class="nav-link count-indicator dropdown-toggle"
                  id="notificationDropdown"
                  href="#"
                  data-toggle="dropdown"
                >
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="notificationDropdown"
                >
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0">
                        Just a reminder that you have an event today
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0">Update dashboard</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  id="profileDropdown"
                  href="#"
                  data-toggle="dropdown"
                >
                  <div class="navbar-profile">
                    <img
                      class="img-xs rounded-circle"
                      src="assets/assets/images/faces/face15.jpg"
                      alt=""
                    />
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                      <?php echo  $_SESSION['LASTNAME']; ?>
                    </p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="profileDropdown"
                >
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Changer Mot de Passe</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1"><a href="http://localhost/E_Beauty/View/Back/deconnexion.php">Se deconnecter</a></p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <!--<p class="p-3 mb-0 text-center">Advanced settings</p>-->
                </div>
              </li>
            </ul>
            <button
              class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
              type="button"
              data-toggle="offcanvas"
            >
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">MON PROFILE</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">MON PROFILE</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    MON PROFILE
                  </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card"></div>
              <div class="col-md-6 grid-margin stretch-card"></div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">MON PROFILE</h4>
                    <p class="card-description">Les informations de votre profile</p>
                        <div id="error">
                          <?php echo $error; ?>
                        </div>
                      <form action="" method="POST">
                        <h6 class="heading-small text-muted mb-4">Information Utilisateur</h6>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-username">Nom Utilisateur</label>
                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" name="UserName" value=<?php echo $_SESSION['USERNAME'];?>>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-email">Email address</label>
                                <input type="email" id="input-email" class="form-control form-control-alternative" name="Email" placeholder="mail@example.com" value=<?php echo $_SESSION['EMAIL'];?> readonly>
                              </div>
                            </div>
                          </div>
                              <div>
                                <input
                                      type="hidden"
                                      class="form-control"
                                      id="USER"
                                      name="USER"
                                      placeholder="First Name"
                                      value="<?php echo  $_SESSION['USERID']; ?> "/>
                              </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-first-name">Nom</label>
                                <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" name="FirstName" value=<?php echo $_SESSION['FIRSTNAME'];?>>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-last-name">Prenom</label>
                                <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" name="LastName"value=<?php echo $_SESSION['LASTNAME'];?>>
                                <input type="hidden" id="input-last-name" class="form-control form-control-alternative" type="hidden" name="Password" value=<?php echo $_SESSION['PASSWORD'];?>>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="my-4">
                        <h6 class="heading-small text-muted mb-4">Contact information</h6>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-address">Address</label>
                                <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" name="Ville" value=<?php echo $_SESSION['VILLE'];?> type="text">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-city">City</label>
                                <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" name="Ville2" value=<?php echo $_SESSION['VILLE'];?>>
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-country">Country</label>
                                <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="Tunisia">
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label class="form-control-label" for="input-country">Postal code</label>
                                <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="my-4">
                        <h6 class="heading-small text-muted mb-4">Modification de Temoignage</h6>
                        <div class="pl-lg-4">
                          <div class="form-group focused">
                            <label>Temoignage</label>
                            <textarea rows="10" cols="20" class="form-control form-control-alternative" placeholder="modifier son temoignage..." name="Temoignage" value= "<?php echo  $_SESSION["TEMOIGNAGE"];?>"></textarea><br>
                            <input type="submit" class="btn btn-primary mr-2" name="modifier" value="Mettre à Jour">
                          </div>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card"></div>
              <div class="col-md-6 grid-margin stretch-card"></div>
              <div class="col-md-6 grid-margin stretch-card"></div>
              <div class="col-md-6 grid-margin stretch-card"></div>
              <div class="col-12 grid-margin stretch-card"></div>
              <div class="col-12 grid-margin"></div>

              <div class="col-md-6 grid-margin stretch-card"></div>
            </div>
          </div>
        </div>
      </div>    
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         
   <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted d-block text-center text-sm-left d-sm-inline-block"
                >Copyright © bootstrapdash.com 2020</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
              >
                Free
                <a
                  href="https://www.bootstrapdash.com/bootstrap-admin-template/"
                  target="_blank"
                  >Bootstrap admin templates</a
                >
                from Bootstrapdash.com</span
              >
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/assets/js/off-canvas.js"></script>
    <script src="assets/assets/js/hoverable-collapse.js"></script>
    <script src="assets/assets/js/misc.js"></script>
    <script src="assets/assets/js/settings.js"></script>
    <script src="assets/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/assets/js/Tableau de Bord.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>