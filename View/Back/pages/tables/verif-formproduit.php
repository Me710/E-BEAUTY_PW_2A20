<?php
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=projet_E_Beauty', 'root', "");
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  die("Une érreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET["terme"];
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête

 if (isset($terme))
 {
  $terme = strtolower($terme);
  $select_terme = $bdd->prepare("SELECT * FROM produit WHERE nom_produit LIKE ? OR id_produit LIKE ? OR prix_produit LIKE ? OR quantite_produit LIKE ?");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%","%".$terme."%","%".$terme."%" ));
 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Beauty</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
           <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div
          class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
        >
          <a class="sidebar-brand brand-logo" href="http://localhost/E_Beauty/View/Back/index.php">
            <img src="assets/images/logo.png" alt="logo"
          /></a>
          <a class="sidebar-brand brand-logo-mini" href="http://localhost/E_Beauty/View/Back/index.php"
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
            <a class="nav-link" href="http://localhost/E_Beauty/View/Back/chartjs.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">TABLEAU DE BORD</span>
            </a>
            
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">GESTION TABLES</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="http://localhost/E_Beauty/View/Back/index.php">UTILISATEURS</a></li>
                <li class="nav-item"> <a class="nav-link" href="http://localhost/E_Beauty/View/Back/pages/tables/gestion_categorie.php">PRODUITS-CAT</a></li>
                <li class="nav-item"> <a class="nav-link" href="http://localhost/E_Beauty/View/Back/pages/tables/gestion_produit.php">PRODUITS-UNI</a></li>
                <li class="nav-item"> <a class="nav-link" href="services.php">SERVICES</a></li>
                <li class="nav-item"> <a class="nav-link" href="commades.php">COMMANDES</a></li>
                <li class="nav-item"> <a class="nav-link" href="tutos.php">TUTOS VIDEOS</a></li>
                <li class="nav-item"> <a class="nav-link" href="http://localhost/E_Beauty/View/Back/gestion_blog.php">BLOGS</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-ajout" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">AJOUT</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-ajout">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="http://localhost/E_Beauty/View/Back/basic_elements.php">LIVREURS</a></li>
                <li class="nav-item"> <a class="nav-link" href="http://localhost/E_Beauty/View/Back/pages/tables/Ajout_categorie.php">PRODUITS-CATEGORIE</a></li>
                <li class="nav-item"> <a class="nav-link" href="http://localhost/E_Beauty/View/Back/pages/tables/Ajout_produit.php">PRODUITS-UNITAIRE</a></li>
                <li class="nav-item"> <a class="nav-link" href="services.php">SERVICES</a></li>
                <li class="nav-item"> <a class="nav-link" href="commades.php">COMMANDES</a></li>
                <li class="nav-item"> <a class="nav-link" href="tutos.php">TUTOS VIDEOS</a></li>
                <li class="nav-item"> <a class="nav-link" href="http://localhost/E_Beauty/View/Back/gestion_blog.php">BLOGS</a></li>
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
            <a class="nav-link" href="http://localhost/E_Beauty/View/Back/reclamation.php">
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
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
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
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
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
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
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
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
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
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
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
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
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
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">E_Beauty bendhief</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
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
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">produit</h4>
                    <p class="card-description"> Add class <code>.table-hover</code>

                    </p>
                    <a href="Ajout_produit.php"  name="ajouter"> <input  class="btn btn-primary waves-effect waves-light" type="submit" value="Ajouter"></a>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Id produit</th>
                            <th>Nom produit</th>
                            <th>prix produit</th>
                            <th>Quantite produit</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                       while($terme_trouve = $select_terme->fetch())
                       {
                        ?>
                          <tr>
                            <td> <?php echo $terme_trouve['id_produit']; ?></td>
                            <td><?php echo $terme_trouve['nom_produit']; ?></td>
                            <td><?php echo $terme_trouve['prix_produit']; ?></td>
                            <td><?php echo $terme_trouve['quantite_produit']; ?></td>
                          </tr>
                          <td>
                          <form method="POST" action="Modifier_produit.php">
                          <input class=" btn btn-success create-new-button" type="submit" name="Modifier" value="Modifier"><i class="mdi mdi-table-edit"></i>
                          <input type="hidden" value=<?PHP echo $terme_trouve['id_produit']; ?> name="id_produit">
                          </form>
                          </td>
                                                            <td>
                                                                <a  href="Supprimer_produit.php?id_produit=<?php echo $terme_trouve['id_produit']; ?>">  <input class="btn btn-danger waves-effect waves-light" type="submit" value="Supprimer"></a><i class="mdi mdi-delete"></i>
                                                            </td>
                        </tbody>
                        <?php  }
                                                      $select_terme->closeCursor();
                                                        ?>
                      </table>
                    </div>
                    <br>
                    <div class="p-15 p-b-0">
                                                        <form class="form-material" action = "verif-formproduit.php" method ="get">
                                                            <div class="form-group form-primary">
                                                                <div class="col-sm-4">
                                                                <input type = "search" name ="terme" class="form-control" required="">
                                                                
                                                                <span class="form-bar"></span>
                                                                <label class="float-label"><i class="fa fa-search m-r-10"></i>Search categorie</label>
                                                                </div>
                                                                </div>
                                                            <input  class="btn btn-success create-new-button" type = "submit" name = "s" value = "Rechercher" >
                                                            
                                                            <br>
                                                            <br>
                                                        </form>
                                          </div>

                    <br>
                    <div class="p-15 p-b-0">

<form method="POST" action="trieproduit.php">
<input type="submit"  name="trierasc" id="trierasc"  class="btn btn-success create-new-button" value="trierasc" ></input>
<input type="submit"  name="trierdesc"  id="trierdesc"  class="btn btn-success create-new-button" value="trierdesc" ></input>


</form>


<br>
</div>
                  </div>
                </div>
                </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
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
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>