<?php
session_start();
require_once("config_google.php");
require_once ('autoload.php');
include_once("C:/xampp/htdocs/E_Beauty/Controller/userC.php");
include_once("C:/xampp/htdocs/E_Beauty/Controller/adminC.php");


if (isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
	$loginURL = $gClient->createAuthUrl();

$error="";

$userC= new UserC();
$user= new AdminC();
/*$admin = new admin("nebotchristian6@gmail.com",md5(""));
$user->ajouterAdmin($admin);
type
0 -> email ou mot de passe incorrecte
1 -> 
*/

if(isset($_POST["email"]) &&  
   isset($_POST["password"])) {
     if(!empty($_POST["email"]) &&  
          !empty($_POST["password"])) {
            if(isset($_POST['g-recaptcha-response'])) {
                    $recaptcha = new \ReCaptcha\ReCaptcha('6LdxAakfAAAAAF7ciYGhj1Gpv1S8y5V3gVe5NVgO');
                    $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
                  if ($resp->isSuccess()) {
                        //var_dump('Captcha Valide');
                        $message=$userC->connexionUser($_POST["email"],md5($_POST['password']));
                      if($message!='pseudo ou mot de passe est incorrect'){
                        echo '<script type="text/javascript">window.alert("'.$message.'");</script>'; 
                        header('Location:http://localhost/E_Beauty/View/Front/index_profil.php');
                      } 
                      else{
                        $message='pseudo ou le mot de passe est incorrect';
                        $error=$message;
                        echo '<script type="text/javascript">window.alert("'.$message.'");</script>'; 
                        $message2=$user->connexionAdmin($_POST["email"],md5($_POST['password']));
                          if($message2!='pseudo ou mot de passe est incorrect'){
                            header('Location:http://localhost/E_Beauty/View/Back/index.php');   
                          }
                          else{
                            $message2='pseudo ou le mot de passe est incorrect';
                            $error=$message2;
                             //header('Location:login.php');
                            }
                      }
                      
        } 
        else {
            $errors = $resp->getErrorCodes();
            var_dump('Captcha Invalide');
            var_dump($errors);
            
        }
      }
      else{
            var_dump('Captcha non rempli');
        }
    }
    else{
          $message='veuillez remplir les champs pour se connecter';
          echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }
                
  }
  else{
          $message='les champs ne sont pas biens definies';
          echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
  } 
    

?>

<?php
/* 
| Developed by: Tauseef Ahmad
| Last Upate: 13-12-2020 04:46 PM
| Facebook: www.facebook.com/ahmadlogs
| Twitter: www.twitter.com/ahmadlogs
| YouTube: https://www.youtube.com/channel/UCOXYfOHgu-C-UfGyDcu5sYw/
| Blog: https://ahmadlogs.wordpress.com/
 */ 
 
require_once 'config_facebook.php';

$permissions = ['email']; //optional

if (isset($accessToken))
{
  if (!isset($_SESSION['facebook_access_token'])) 
  {
    //get short-lived access token
    $_SESSION['facebook_access_token'] = (string) $accessToken;
    
    //OAuth 2.0 client handler
    $oAuth2Client = $fb->getOAuth2Client();
    
    //Exchanges a short-lived access token for a long-lived one
    $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
    $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
    
    //setting default access token to be used in script
    $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
  } 
  else 
  {
    $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
  }
  
  
  //redirect the user to the index page if it has $_GET['code']
  if (isset($_GET['code'])) 
  {
    header('Location: ./');
  }
  
  
  try {
    $fb_response = $fb->get('/me?fields=name,first_name,last_name,email');
    $fb_response_picture = $fb->get('/me/picture?redirect=false&height=200');
    
    $fb_user = $fb_response->getGraphUser();
    $picture = $fb_response_picture->getGraphUser();
    
    $_SESSION['USERID'] = $fb_user->getProperty('id');
    $_SESSION['FIRSTNAME'] = $fb_user->getProperty('name');
    $_SESSION['EMAIL'] = $fb_user->getProperty('email');
    $_SESSION['fb_user_pic'] = $picture['url'];
    
    
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Facebook API Error: ' . $e->getMessage();
    session_destroy();
    // redirecting user back to app login page
    header("Location: ./");
    exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK Error: ' . $e->getMessage();
    exit;
  }
} 
else 
{ 
  // replace your website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and you used
  $fb_login_url = $fb_helper->getLoginUrl('http://localhost/facebook1/', $permissions);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      .error{
        color: red;
      }
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>E - Beauty Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link href="<?php echo BASE_URL; ?>css/style.css" rel="stylesheet">
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

        <link
      href="assets2/js/plugins/bootsnav_files/skins/color.css"
      rel="stylesheet"
    />

    <link
      href="assets2/js/plugins/bootsnav_files/css/animate.css"
      rel="stylesheet"
    />

    <link
      href="assets2/js/plugins/bootsnav_files/css/bootsnav.css"
      rel="stylesheet"
    />

    <link
      href="assets2/js/plugins/bootsnav_files/css/overwrite.css"
      rel="stylesheet"
    />

    <link
      href="assets2/js/plugins/owl-carousel/owl.carousel.css"
      rel="stylesheet"
    />

    <link
      href="assets2/js/plugins/owl-carousel/owl.theme.css"
      rel="stylesheet"
    />

    <link
      href="assets2/js/plugins/owl-carousel/owl.transitions.css"
      rel="stylesheet"
    />

    <link
      href="assets2/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css"
      rel="stylesheet"
    />

    <!--// ICONS //-->

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <!--// BOOTSTRAP & Main //-->

    <link
      href="assets2/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link href="assets2/css/main.css" rel="stylesheet" />
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
                    <input name="password" type="password" class="form-control p_input" />
                  </div>
                  <div
                    class="form-group d-flex align-items-center justify-content-between"
                  >
                  </div>
                  <div class="g-recaptcha" data-sitekey="6LdxAakfAAAAAHU0C03Z9bT6_q1LCqiwpYozMOC2"></div>
                  <p class="error"><?php echo $error; ?></p>
                  <div class="text-center">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block enter-btn"
                    >
                      Se Connecter
                    </button>
                  </div>
                  <div class="login-form">
                  <form action="" method="post">   
                    <div class="text-center social-btn">
                      <a href="<?php echo $fb_login_url;?>" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Se connecter avec<b>Facebook</b></a>
                    </div>  
                  </form>
                  <div class="text-center">
                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" 
                    value="Se Connecter avec Google" class="btn btn-danger">
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

    <!--======================================== 

           Modal

    ========================================-->

    <!-- Modal -->

    <div
      class="modal fade"
      id="SignIn"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>

            <h4 class="modal-title text-center" id="myModalLabel">Sign In</h4>
          </div>

          <div class="modal-body">
            <form class="signup-form">
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="User Name"
                  required="required"
                />
              </div>

              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Password"
                  required="required"
                />
              </div>

              <div class="form-group text-center">
                <button type="submit" class="btn btn-blue btn-block">
                  Log In
                </button>
              </div>
            </form>
          </div>

          <div class="modal-footer text-center">
            <a href="#">Forgot your password /</a>

            <a href="#">Signup</a>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="assets2/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <script src="assets2/js/plugins/owl-carousel/owl.carousel.min.js"></script>

    <script src="assets2/js/plugins/bootsnav_files/js/bootsnav.js"></script>

    <script src="assets2/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <script src="assets2/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

    <script src="assets2/js/main.js"></script>
  </body>
</html>