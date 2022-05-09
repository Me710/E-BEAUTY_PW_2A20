<?php 
include('C:/xampp/htdocs/E_Beauty/Controller/BlogB.php');
include('C:/xampp/htdocs/E_Beauty/Controller/TypeB.php'); 
//include('C:/xampp/htdocs/E_Beauty/Controller/LivreurC.php'); 

$blogB=new BlogB();
$listeBlogs=$blogB->afficher_blog(); 
$typeB=new TypeB();
$listeTypes=$typeB->afficher_type(); 
$typeC=new TypeB();
$listeType=$typeC->afficher_com();

    //var_dump($resultat);

    if(isset($_GET['rechercher'])) {
      if(!empty($_GET['rechercher'])){
      $rechercher = htmlspecialchars($_GET['rechercher']);
      $listeBlogs = $blogB->rechercher_blog($rechercher);
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
    <title>E-BEAUTY Admin</title>
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
      <a
        class="nav-link"
        href="http://localhost/E_Beauty/View/Back/chartjs.php"
      >
        <span class="menu-icon">
          <i class="mdi mdi-chart-bar"></i>
        </span>
        <span class="menu-title">TABLEAU DE BORD</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#ui-basic"
        aria-expanded="false"
        aria-controls="ui-basic"
      >
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">GESTION TABLES</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="index.php">UTILISATEURS</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="http://localhost/E_Beauty/View/Back/pages/tables/gestion_categorie.php"
              >PRODUITS-CAT</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="http://localhost/E_Beauty/View/Back/pages/tables/gestion_produit.php"
              >PRODUITS-UNI</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="commades.php">COMMANDES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tutos.php">TUTOS VIDEOS</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="http://localhost/E_Beauty/View/Back/gestion_blog.php"
              >BLOGS</a
            >
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#ui-ajout"
        aria-expanded="false"
        aria-controls="ui-basic"
      >
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">AJOUT</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-ajout">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a
              class="nav-link"
              href="http://localhost/E_Beauty/View/Back/basic_elements.php"
              >LIVREURS</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="http://localhost/E_Beauty/View/Back/pages/tables/Ajout_categorie.php"
              >PRODUITS-CATEGORIE</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="http://localhost/E_Beauty/View/Back/pages/tables/Ajout_produit.php"
              >PRODUITS-UNITAIRE</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">COMMANDES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">TUTOS VIDEOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/E_Beauty/View/Back/ajout_blog.php">BLOGS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/E_Beauty/View/Back/table_type.php">BLOGS-TYPE</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="http://localhost/E_Beauty/View/Back/mail.php">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">MAILING</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a
        class="nav-link"
        href="http://localhost/E_Beauty/View/Back/reclamation.php"
      >
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">RECLAMATIONS</span>
      </a>
    </li>
  </ul>
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
                          <h3 class="mb-0">BLOGS</h3>
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
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">LISTE DES BLOGS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0"> 
                              </div>
                            </th>
                            <th>      </th>
                            <th>ID DU BLOG</th>
                            <th>Auteur</th>
                            <th>Date</th>
                            <th>TITRE</th>
                            <th>Description</th>
                            <th>Type</th>
                            
                            <th></th>
                            
                            
                            <!--<th>SEXE</th>
                            <th>DATE_ENREG</th>-->
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <?php 
                              foreach($listeBlogs as $Blog) { ?>
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
                                    src="assets/images/faces/face3.jpg"
                                    alt="image"
                                  />
                                </td>
                                  <td><?php Echo $Blog['id_blog'];?></td>
                                  <td><?php Echo $Blog['Auteur'];?></td>
                                  <td><?php Echo $Blog['Date'];?></td>
                                  <td><?php Echo $Blog['Titre'];?></td>
                               <!-- div>   <td><?php// Echo $Blog['Image'];?></td></div --> 
                                  <td><?php Echo $Blog['texte'];?></td>
                                  <td><?php Echo $Blog['type'];?></td>
                                  
                                  <td>
                                  <div>
                                    <td>
                                    <form method="POST" action="form_modifier_blog.php" onsubmit="return validateForm(event)">
                                      <input class="btn-outline-primary" type="submit" name="Modifier" value="Modifier">
                                      <input type="hidden" value=<?php echo $Blog['id_blog']; ?> name="id_blog">
                                    </form>
                                    </td>
                                    <!--<td>
                                        <input class="btn-outline-warning" Type="submit" value="Modifier">
                                    </td>-->
                                    <td>
                                      <a href="supprimer_blog.php?id_blog=<?php echo $Blog['id_blog']; ?>" class="btn-outline-danger">Supprimer</a>
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
                          <h3 class="mb-0">TYPES</h3>
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
                          <h3 class="mb-0"><a href="table_type.php">AJOUTER</a></h3>
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
                    <h4 class="card-title">LISTE DES TYPES DE BLOG</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0"> 
                              </div>
                            </th>
                            <th>      </th>
                            <th>id_type</th>
                            <th>NOM</th>
                            <th></th>
                            <!--<th>SEXE</th>
                            <th>DATE_ENREG</th>-->
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <?php 
                              foreach($listeTypes as $Type) { ?>
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
                                    src="assets/images/faces/face2.jpg"
                                    alt="image"
                                  />
                                </td>
                                  <td><?php Echo $Type['id_type'];?></td>
                                  <td><?php Echo $Type['Nom'];?></td>
                                  <td>
                                  <div>
                                    <td>
                                    <form method="POST" action="modifier_type.php">
                                      <input class="btn-outline-primary" type="submit" name="Modifier" value="Modifier">
                                      <input type="hidden" value=<?php echo $Type['id_type']; ?> name="id_type">
                                    </form>
                                    </td>
                                    <!--<td>
                                        <input class="btn-outline-warning" Type="submit" value="Modifier">
                                    </td>-->
                                    <td>
                                      <a href="supprimer_type.php?id_type=<?php echo $Type['id_type']; ?>" class="btn-outline-danger">Supprimer</a>
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
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">COMMENTAIRES</h4>
            <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <TH></TH>
                            <th>PSEUDO</th>
                            <th>COMMENTAIRE</th>
                            <!--<th>SEXE</th>
                            <th>DATE_ENREG</th>-->
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <?php 
                              foreach($listeType as $Type) { ?>
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
                                
                                  <td><?php Echo $Type['Nom'];?></td>
                                  <td><?php Echo $Type['com'];?></td>
                                
                                    <td>
                                      <a href="supprimer_com.php?id_type=<?php echo $Type['id_type']; ?>" class="btn-outline-danger">Supprimer</a>
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
    <script src="assets/js/control.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
