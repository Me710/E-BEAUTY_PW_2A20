<?php
include('C:/xampp/htdocs/E_Beauty/Controller/userC.php');
session_start();

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
            $ClientC->updateUserBDD($Client,$_POST['USER']);
            $_SESSION['USERID']=$_POST['USER'];
                 $_SESSION['EMAIL']=$_POST['Email'];
                 $_SESSION['USERNAME']=$_POST['UserName'];
                 $_SESSION['FIRSTNAME']=$_POST['FirstName'];
                 $_SESSION['LASTNAME']=$_POST['LastName'];
                 $_SESSION['PASSWORD']=$_POST['Password'];
                 $_SESSION['VILLE']=$_POST['Ville'];
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
    <link href="style_profile.css" rel="stylesheet">
    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="http://localhost/E_Beauty/View/Back/assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="http://localhost/E_Beauty/View/Back/assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="http://localhost/E_Beauty/View/Back/assets/vendors/jvectormap/jquery-jvectormap.css"
    />
    <link
      rel="stylesheet"
      href="http://localhost/E_Beauty/View/Back/assets/vendors/flag-icon-css/css/flag-icon.min.css"
    />
    <link
      rel="stylesheet"
      href="http://localhost/E_Beauty/View/Back/assets/vendors/owl-carousel-2/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="http://localhost/E_Beauty/View/Back/assets/vendors/owl-carousel-2/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="http://localhost/E_Beauty/View/Back/assets/css/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="http://localhost/E_Beauty/View/Back/assets/images/favicon.png" />
  </head>
<body>
  <div class="main-content">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div
          class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
        >
          <a class="sidebar-brand brand-logo" href="index.php">
            <img src="http://localhost/E_Beauty/View/Back/assets/images/logo.png" alt="logo"
          /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"
            ><img src="http://localhost/E_Beauty/View/Back/assets/images/logo-mini.svg" alt="logo"
          /></a>
        </div>
    </nav>
      <!--Partial-->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div
            class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center"
          >
            <a class="navbar-brand brand-logo-mini" href="index.php"
              ><img src="http://localhost/E_Beauty/View/Back/assets/images/logo-mini.svg" alt="logo"
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
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search products"
                  />
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a
                  class="nav-link btn btn-success create-new-button"
                  id="createbuttonDropdown"
                  data-toggle="dropdown"
                  aria-expanded="false"
                  href="#"
                  >+ Create New Project</a
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
                  
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img
                        src="http://localhost/E_Beauty/View/Back/assets/images/faces/face2.jpg"
                        alt="image"
                        class="rounded-circle profile-pic"
                      />
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="notificationDropdown"
                >
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0">
                        Update Tableau de Bord
                      </p>
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
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0">New admin wow!</p>
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
                      src="http://localhost/E_Beauty/View/Back/assets/images/faces/face15.jpg"
                      alt=""
                    />
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                      <?php Echo $_SESSION['LASTNAME']; Echo $_SESSION['FIRSTNAME'];?>
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
                      <p class="preview-subject mb-1">Settings</p>
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
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
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
      <!--/Partial-->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(spectacle.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white"><?php echo  $_SESSION['USERNAME'];?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can view your information and post a testimonial about your experience with us.</p>
            <a href="#!" class="btn btn-info">Edit profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="image.jpg" class="rounded-circle" alt="logo">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="http://localhost/E_Beauty/View/Back/deconnexion.php" class="btn btn-sm btn-info mr-4">LogOut</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">0</span>
                      <span class="description">Commandes</span>
                    </div>
                    <div>
                      <span class="heading">0</span>
                      <span class="description">Favoris</span>
                    </div>
                    <div>
                      <span class="heading">0</span>
                      <span class="description">Panier</span>
                    </div>
                    <div><input
                          type="hidden"
                          class="form-control"
                          id="USER"
                          name="USER"
                          placeholder="First Name"
                          value="<?php echo  $_SESSION['USERID']; ?> "/></div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  <?php echo $_SESSION['FIRSTNAME'];?><span class="font-weight-light">, 21</span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php echo $_SESSION['VILLE'];?> Tunisia
                </div>
      
                
                <hr class="my-4">
                <p>La mode et la beauté ont bien évoluées depuis les temps qu’elles sont apparues dans le quotidien de la société. À présent, chacun peut faire de ce qu’il veut de son corps, de son visage, de son apparence grâce à nombreuse inventions dans le monde de l’esthétique comme la chirurgie et le maquillage. La beauté et ses artifices.</p>
     
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Mon compte</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" name="UserName" value=<?php echo $_SESSION['USERNAME'];?>>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" name="Email" placeholder="mail@example.com" value=<?php echo $_SESSION['EMAIL'];?> readonly>
                      </div>
                    </div>
                  </div>
                  <div><input
                          type="hidden"
                          class="form-control"
                          id="USER"
                          name="USER"
                          placeholder="First Name"
                          value="<?php echo  $_SESSION['USERID']; ?> "/></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" name="FirstName" value=<?php echo $_SESSION['FIRSTNAME'];?>>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" name="LastName"value=<?php echo $_SESSION['LASTNAME'];?>>
                        <input type="hidden" id="input-last-name" class="form-control form-control-alternative" type="hidden" name="Password" value=<?php echo $_SESSION['PASSWORD'];?>>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
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
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Reclammations</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>Reclammations</label>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="ajouter une reclamation..">...</textarea><br>
					          <input type="submit" id='submit' value='MODIFIER'>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6 m-auto text-center">
        <div class="copyright">
          <p>E- BEAUTY</p>
        </div>
      </div>
    </div>
  </footer>
</body>