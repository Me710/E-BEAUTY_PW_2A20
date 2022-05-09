<?php
    include('C:/xampp/htdocs/E_Beauty/Model/BLog.php'); 
    include('C:/xampp/htdocs/E_Beauty/Controller/BlogB.php'); 

    $error = "";

    // create Blog
    $Blog = null;

    // create an instance of the controller
    $BlogB = new BlogB();
    if (
      isset($_POST["id_blog"]) &&
      isset($_POST["Auteur"]) &&		
      isset($_POST["Date"]) &&
      isset($_POST["Titre"]) &&
      isset($_POST["Image"]) &&		
      isset($_POST["texte"]) &&
      isset($_POST["type"])
      ) {
          if (
              !empty($_POST["id_blog"]) && 
              !empty($_POST['Auteur']) &&
              !empty($_POST["Date"]) && 
              !empty($_POST["Titre"])&& 
              !empty($_POST['Image']) &&
              !empty($_POST["texte"]) && 
              !empty($_POST["type"])
          ) {
              $Blog = new Blog(
                  $_POST['id_blog'],
                  $_POST['Auteur'],
                  $_POST['Titre'],
                  $_POST['Date'],
                  $_POST['Image'],
                  $_POST['texte'],
                  $_POST['type']
              );
            $BlogB->modifier_blog($Blog,$_POST['id']);
            header('Location:form_modifier_blog.php');
        }
        else
            $error = "Missing information";
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
    <title>E - Beauty</title>
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
    <link
      rel="stylesheet"
      href="assets/vendors/select2/select2.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css"
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
      <!-- partial:../../partials/_sidebar.html -->
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
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div
            class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center"
          >
            <a class="navbar-brand brand-logo-mini" href="../../index.php"
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
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="createbuttonDropdown"
                >
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Software Development
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        UI Development
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Software Testing
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
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
                        src="assets/images/faces/face4.jpg"
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
                        src="assets/images/faces/face2.jpg"
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
                        src="assets/images/faces/face3.jpg"
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
                      src="assets/images/faces/face15.jpg"
                      alt=""
                    />
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                      Franck Fongang
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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form elements</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Form elements
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
                    <h4 class="card-title">Formulaire de Modification </h4>
                    <p class="card-description">nouvelles informations</p>
                        <div id="error">
                          <?php echo $error; ?>
                        </div>
                        <?php
                            if (isset($_POST['id_blog'])){
                                $ID =  $_POST['id_blog'];
                                $Blog = $BlogB->recuperer_blog($_POST['id_blog']);	
                        ?>
                    <form class="forms-sample" action="" method="POST">
                      <div class="form-group">
                        <label for="Blog">Id du blog</label>
                        <input
                          type="text"
                          class="form-control"
                          id="id"
                          name="id"
                          placeholder="identifiant"
                          value="<?php echo $Blog['id_blog'
                        ]; ?> "/>


                        
                      </div>
                      <div class="form-group">
                        <label for="Auteur">Auteur</label>
                        <input
                          type="text"
                          class="form-control"
                          id="Auteur"
                          name="Auteur"
                          placeholder="Auteur"
                          value="<?php echo $Blog['Auteur'
                        ]; ?> "/>
                        
                      </div>

                      <div class="form-group">
                        <label for="Date">Date de publication</label>
                        <input
                          type="date"
                          class="form-control"
                          id="Date"
                          name="Date"
                          value="<?php echo $Blog['Date'
                        ]; ?> "/>
                        </div>
                        
                      <div class="form-group">
                        <label for="Titre">Titre</label>
                        <input
                          type="text"
                          class="form-control"
                          id="Titre"
                          name="Titre"
                          placeholder="titre du blog"
                          value="<?php echo $Blog['Titre'
                        ]; ?> "
                        />
                      </div>

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
                            value="<?php echo $Blog['Image'
                        ]; ?> "
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

                      <div class="form-group">
                        <label for="Blog">texte</label>
                        <input
                          type="text"
                          class="form-control"
                          id="texte"
                          name="texte"
                          placeholder="description"
                          value="<?php echo $Blog['texte'
                        ]; ?> "/>
                         </div>

                      <button type="submit" class="btn btn-primary mr-2"> Modifier</button>
                      <!--<td>
                        <input type="submit" value="Modifier"> 
                      </td>-->
                      <button Type="reset" class="btn btn-dark">Annuler</button>
                      <button><a href="index.php">Retour à la liste des Blogs</a></button>
                    </form>
                  <?php
                  }
                  ?>
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
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page -->
    <script src="assets/js/control.js"></script>
    
  </body>
</html>