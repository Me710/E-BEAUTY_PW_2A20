<?php 
  include_once('C:/xampp/htdocs/E_Beauty/Controller/notificationC.php');
  
  $query1 = "SELECT * from `user`";
  $nbUser = count(fetchAll($query1));

  $query2 = "SELECT * from `livreur`";
  $nbLiv = count(fetchAll($query2));

  $query3 = "SELECT * from `ville`";
  $nbVille = count(fetchAll($query3));

  $query4 = "SELECT * from `reclamation`";
  $nbRec = count(fetchAll($query4));

  $query5 = "SELECT * from `user` where upper(`ville`) = 'TUNIS'";
  $tunis = count(fetchAll($query5));

  $query6 = "SELECT * from `user` where upper(`ville`) = 'ARIANA'";
  $ariana = count(fetchAll($query6));

  $query7 = "SELECT * from `user` where upper(`ville`) = 'SFAX'";
  $sfax = count(fetchAll($query7));

  $query8 = "SELECT * from `user` where upper(`ville`) = 'BIZERTE'";
  $bizerte = count(fetchAll($query8));

  $query9 = "SELECT * from `user` where upper(`ville`) = 'DJERBA'";
  $djerba = count(fetchAll($query9));

  $query10 = "SELECT * from `user` where upper(`ville`) = 'HAMMAMET'";
  $hammamet = count(fetchAll($query10));

  $query11 = "SELECT * from `user` where upper(`connecter`) = 'OUI'";
  $connecter = count(fetchAll($query11));

  $query12 = "SELECT * from `user` where upper(`connecter`) = 'NON'";
  $nonconnecter = count(fetchAll($query12));

?>
<!DOCTYPE html>
<html lang="en">
  <head>  
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E- Beauty DashBoard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
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
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Tableau de Bord </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tableau de Bord</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tableau de Bord</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php echo $nbUser ?></h3>
                          
                        </div>
                      </div>
                      
                    </div>
                    <h6 class="text-muted font-weight-normal">
                      Utilisateurs Inscrits
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php echo $nbLiv ?></h3>
                          
                        </div>
                      </div>
                      
                    </div>
                    <h6 class="text-muted font-weight-normal">
                      Livreurs Disponibles
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php echo $nbVille ?></h3>
                          
                        </div>
                      </div>
                      
                    </div>
                    <h6 class="text-muted font-weight-normal">Nombre de Ville</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php echo $nbRec ?></h3>
                          
                        </div>
                      </div>
                      
                    </div>
                    <h6 class="text-muted font-weight-normal">
                      Nombre de Reclamation
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <div>
            <div id="container2" style="height: 400%"></div>
            <input type="hidden" id="tunis" value="<?php echo $tunis ?>">
            <input type="hidden" id="ariana" value="<?php echo $ariana ?>">
            <input type="hidden" id="sfax" value="<?php echo $sfax ?>">
            <input type="hidden" id="bizerte" value="<?php echo $bizerte ?>">
            <input type="hidden" id="hammamet" value="<?php echo $hammamet ?>">
            <input type="hidden" id="djerba" value="<?php echo $djerba ?>">
             <script type="text/javascript">
                var dom2 = document.getElementById('container2');
                var tunis = document.getElementById('tunis');
                var ariana = document.getElementById('ariana');
                var sfax = document.getElementById('sfax');
                var bizerte = document.getElementById('bizerte');
                var hammamet = document.getElementById('hammamet');
                var djerba = document.getElementById('djerba');
                var myChart2 = echarts.init(dom2, 'dark', {
                  renderer: 'canvas',
                  useDirtyRect: false
                });
                var app2 = {};
                
                var option2;

                option2 = {
              xAxis: {
                type: 'category',
                data: ['Tunis', 'Ariana', 'Sfax', 'Bizerte', 'Hammamet', 'Djerba', 'Autres']
              },
              yAxis: {
                type: 'value'
              },
              series: [
                {
                  data: [tunis,ariana,sfax,bizerte,hammamet,djerba, 0],
                  type: 'line'
                }
              ]
            };

                if (option2 && typeof option2 === 'object') {
                  myChart2.setOption(option2);
                }

                window.addEventListener('resize', myChart2.resize);
              </script>
            </div>
            <div>
              <div id="container" style="height: 400%"></div>
              <input type="hidden" id="connecter" value="<?php echo $connecter ?>">
              <input type="hidden" id="nonconnecter" value="<?php echo $nonconnecter ?>">
                <script type="text/javascript">
                  var dom = document.getElementById('container');
                  var con = document.getElementById('connecter');
                  var ncon = document.getElementById('nonconnecter');
                  var myChart = echarts.init(dom, 'dark', {
                    renderer: 'canvas',
                    useDirtyRect: false
                  });
                  var app = {};
                  
                  var option;

                  option = {
                tooltip: {
                  trigger: 'item'
                },
                legend: {
                  top: '5%',
                  left: 'center'
                },
                series: [
                  {
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    itemStyle: {
                      borderRadius: 10,
                      borderColor: '#fff',
                      borderWidth: 2
                    },
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '40',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [
                      { value: 13, name: 'Non Connecter' },
                      { value: 1, name: 'Connecter' }
                    ]
                  }
                ]
              };

                  if (option && typeof option === 'object') {
                    myChart.setOption(option);
                  }

                  window.addEventListener('resize', myChart.resize);
              </script>
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
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/chart.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>



  