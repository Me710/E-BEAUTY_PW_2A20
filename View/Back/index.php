<?php 
include_once('C:/xampp/htdocs/E_Beauty/Controller/userC.php'); 
include_once('C:/xampp/htdocs/E_Beauty/Controller/LivreurC.php'); 
include_once('C:/xampp/htdocs/E_Beauty/Controller/notificationC.php'); 

    $userdb = new UserC();  
    $Livdb = new LivreurC();  
    $Client = $userdb->afficherUserBDD();      
    $livreur = $Livdb->afficherLivBDD();
    //var_dump($resultat);
    if(isset($_GET['rechercher'])) {
      if(!empty($_GET['rechercher'])){
      $rechercher = htmlspecialchars($_GET['rechercher']);
      $Client = $userdb->rechercherUserBDD($rechercher);
      $livreur = $Livdb->rechercherLivBDD($rechercher);
      //header("location:index.php");
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
    <title>E - BEAUTY Admin</title>
    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="assets/vendors/jvectormap/jquery-jvectormap.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/flag-icon-css/css/flag-icon.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel-2/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel-2/owl.theme.default.min.css"
    />
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
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div
          class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
        >
          <a class="sidebar-brand brand-logo" href="index.php">
            <img src="assets/images/logo.png" alt="logo"
          /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"
            ><img src="assets/images/logo-mini.svg" alt="logo"
          /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img
                    class="img-xs rounded-circle"
                    src="assets/images/faces/face15.jpg"
                    alt=""
                  />
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Christian NEBOT</h5>
                  <span>ADMINS</span>
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
                      Account settings
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
                      Change Password
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
            <a class="nav-link" href="chartjs.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">TABLEAU DE BORD</span>
            </a>
            
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">UTILISATEURS</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="basic_elements.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">AJOUT LIVREUR</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="mail.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">MAILING</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="reclamation.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">RECLAMATIONS</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.php -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div
            class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center"
          >
            <a class="navbar-brand brand-logo-mini" href="index.php"
              ><img src="assets/images/logo-mini.svg" alt="logo"
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
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action="" method="GET" name="FormRechercher">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Rechercher"
                    name="rechercher"
                    id="rechercher"
                  />
                  <button type="submit" class="btn btn-primary mr-2">
                        Rechercher
                      </button>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
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
              </li>
              <li class="nav-item dropdown border-left">
                <a
                  class="nav-link count-indicator dropdown-toggle"
                  id="notificationDropdown"
                  href="#"
                  data-toggle="dropdown"
                >
                  <i class="mdi mdi-bell"></i>
                  <?php
                    $query = "SELECT * from `notifications` where `status` = 'unread' order by `date` DESC";
                    if(count(fetchAll($query))>0){
                    ?>
                    <span class="badge badge-danger"><?php echo count(fetchAll($query)); ?></span>
                  <?php
                    }
                  ?>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="notificationDropdown"
                >
                <h6 class="p-3 mb-0">Notifications</h6>
                 <div class="dropdown-divider"></div>
                  <?php
                  $query = "SELECT * from `notifications` order by `date` DESC";
                  if(count(fetchAll($query))>0){
                      foreach(fetchAll($query) as $i){
                  ?>
                    <a style ="
                         <?php
                            if($i['status']=='unread'){
                                echo "font-weight:bold; color:blue;";
                            }
                         ?>
                         " 
                         class="dropdown-item preview-item"
                         href="viewNotif.php?id=<?php echo $i['id'] ?>">
                         <small><i><p class="preview-subject ellipsis mb-1"><?php echo date('F j, Y, g:i a',strtotime($i['date'])) ?></p></i></small><br/>
                        <?php 
                        if($i['type']=='reclamation'){ ?> 
                          <p class="preview-subject ellipsis mb-1"><?php echo ucfirst($i['name'])." a fais une nouvelle reclamation."; ?></p>
                        <?php }else if($i['type']=='inscription'){ ?>
                          <p class="preview-subject ellipsis mb-1"><?php echo ucfirst($i['name'])." a créer un compte."; ?></p>
                       <?php }
                        ?>
                    </a>
                    <div class="dropdown-divider"></div>
                    <?php
                      } ?>
                      <?php }  
                      else { ?>
                          <p class="preview-subject ellipsis mb-1"><?php echo "No Records yet."; ?></p>
                      <?php }
                          ?>
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
                      src="assets/images/faces/face15.jpg"
                      alt=""
                    />
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                      Christian NEBOT
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
                      <p class="preview-subject mb-1"><a href="http://localhost/E_Beauty/View/Back/deconnexion.php">Se deconnecter</a></p>
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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card E - BEAUTY-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img
                          src="assets/images/Tableau de Bord/Group126@2x.png"
                          class="gradient-E - BEAUTY-img img-fluid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">CLIENTS</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span
                            class="mdi mdi-arrow-top-right icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">LISTE DES CLIENTS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0"> 
                              </div>
                            </th>
                            <th>      </th>
                            <th>USERID</th>
                            <th>FIRSTNAME</th>
                            <th>LASTNAME</th>
                            <th>USERNAME</th>
                            <th>EMAIL</th>
                            <th>PASSWORD</th>
                            <th>VILLE</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php 
                              foreach($Client as $Cl) { ?>
                              <tr>
                                <td>
                                  <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                      <input
                                        type="checkbox"
                                        class="form-check-input"
                                      />
                                    </label>
                                  </div>
                                </td>
                                <td>
                                  <img
                                    src="assets/images/faces/face1.jpg"
                                    alt="image"
                                  />
                                </td>
                                  <td><?php Echo $Cl['USERID'];?></td>
                                  <td><?php Echo $Cl['FIRSTNAME'];?></td>
                                  <td><?php Echo $Cl['LASTNAME'];?></td>
                                  <td><?php Echo $Cl['USERNAME'];?></td>
                                  <td><?php Echo $Cl['EMAIL'];?></td>
                                  <td><?php Echo $Cl['PASSWORD'];?></td>
                                  <td><?php Echo $Cl['VILLE'];?></td>
                                  <td>
                                  <div>
                                    <td>
                                    <form method="POST" action="form_modifier.php">
                                      <input class="btn-outline-warning" type="submit" name="Modifier" value="Modifier">
                                      <input type="hidden" value=<?php echo $Cl['USERID']; $_SESSION["Type"]="Client";?> name="USERID">
                                    </form>
                                    </td>
                                    <td>
                                      <a href="supprimerClient.php?USERID=<?php echo $Cl['USERID']; $_SESSION["Type"]="Client";?>" class="btn-outline-danger">Supprimer</a>
                                    </td>
                                  </div> 
                              </tr>
                            <!--</td>-->
                              <?php }?>
                            <!--</td>-->
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">LIVREURS</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span
                            class="mdi mdi-arrow-top-right icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><a href="basic_elements.php">AJOUTER</a></h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span
                            class="mdi mdi-arrow-top-right icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card"></div>
              </div>
            </div>
          </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">LISTE DES LIVREUR</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0"> 
                              </div>
                            </th>
                            <th>      </th>
                            <th>LIVID</th>
                            <th>FIRSTNAME</th>
                            <th>LASTNAME</th>
                            <th>USERNAME</th>
                            <th>EMAIL</th>
                            <th>PASSWORD</th>
                            <th>ZONE LIVRAISON</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <?php 
                              foreach($livreur as $Liv) { ?>
                              <tr>
                                <td>
                                  <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                      <input
                                        type="checkbox"
                                        class="form-check-input"
                                      />
                                    </label>
                                  </div>
                                </td>
                                <td>
                                  <img
                                    src="assets/images/faces/face1.jpg"
                                    alt="image"
                                  />
                                </td>
                                  <td><?php Echo $Liv['LIVID'];?></td>
                                  <td><?php Echo $Liv['FIRSTNAME'];?></td>
                                  <td><?php Echo $Liv['LASTNAME'];?></td>
                                  <td><?php Echo $Liv['USERNAME'];?></td>
                                  <td><?php Echo $Liv['EMAIL'];?></td>
                                  <td><?php Echo $Liv['PASSWORD'];?></td>
                                  <td><?php Echo $Liv['ZONELIV'];?></td>
                                  <td>
                                  <div>
                                    <form method="POST" action="form_modifier_Livreur.php">
                                      <input class="btn-outline-warning" type="submit" name="Modifier" value="Modifier">
                                      <input type="hidden" value=<?php echo $Liv['LIVID'];?> name="LIVID">
                                    </form>
                                    </td>
                                    <td>
                                      <a href="supprimerLivreur.php?LIVID=<?php echo $Liv['LIVID'];?>" class="btn-outline-danger">Supprimer</a>
                                    </td>
                                  </div>
                              </tr>
                            <!--</td>-->
                              <?php }?>
                            <!--</td>-->
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.php -->
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
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/Tableau de Bord.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
