
<?php
/*
    include_once('C:/xampp/htdocs/E_Beauty/Model/Commentaire.php'); 
    require_once('C:/xampp/htdocs/E_Beauty/Controller/CommentaireB.php'); 

    $error = "";

    // create User
    $commentaire = null;

    // create an instance of the controller
    $commentaireB = new CommentaireB();
    if (
   
	  isset($_POST["pseudo"])&&
	  isset($_POST["commentaire"])
	//  isset($_POST["id_blog"])
    ) {
        if (
           
			      !empty($_POST['pseudo'])&&
				  !empty($_POST['commentaire'])
	//			  !empty($_POST['id_blog'])				
	  ) {
                $commentaire = new Commentaire(
              		  $_POST['id_com'],
			          $_POST['pseudo'],
					  $_POST['commentaire']
					 // $_POST['id_blog']
					   );
            $commentaireB->ajouter_com($com);
            header('Location:model-single.php');
        }
        else
            $error = "Missing information";
    }*/
//	$typeB=new TypeB();
//$listeCom=$commentaireB->afficher_com();

include_once('C:/xampp/htdocs/E_Beauty/Model/Type.php'); 
include_once('C:/xampp/htdocs/E_Beauty/Controller/TypeB.php'); 

$error = "";

// create User
$type = null;

// create an instance of the controller
$typeB = new TypeB();
if (

  isset($_POST["Nom"])&&
  isset($_POST["com"])
) {
	if (
	   
			  !empty($_POST['Nom'])&&
			  !empty($_POST['com'])
	) {
			$type = new Type(
			$_POST['id_type'],
				  $_POST['Nom'],
				  $_POST['com']
		);
		$typeB->ajouter_com($type);
		header('Location:blog-single.php');
	}
	else
		$error = "Missing information";
}  

$typeB=new TypeB();
$listeTypes=$typeB->afficher_com();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E - BEAUTY Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

	<style>
        .star {
            font-size: 1.5rem;
        }
        
        .hover {
            color: rgb(255, 196, 0);
        }
    </style>
  </head>
  <body>

    <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="img" style="background-image: url(images/image_4.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.php" class="logo">E - BEAUTY<br><span>Agence de Model</span></a></h1>
              <ul>
                <li><a href="index_profil.php"><span>Acceuil</span></a></li>
                <li><a href="about.php"><span>About</span></a></li>
                <li class="active"><a href="model.php"><span>Models</span></a></li>
                <li><a href="blog.php"><span>Blog</span></a></li>
                <li><a href="contact.php"><span>Contact</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    <div id="colorlib-page">
      <header>
      	<div class="container">
	        <div class="colorlib-navbar-brand">
	          <a class="colorlib-logo" href="index.php">E - BEAUTY<br><span>Agence de Model</span></a>
	        </div>
	        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
			<p class="breadcrumbs"><ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
	                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="https://www.facebook.com/atypiqueprod"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="https://www.instagram.com/atypiqueprod.22/"><span class="icon-instagram"></span></a></li>
					<link rel="stylesheet" href="#"  >
	              </ul></p>
        </div>
      </header>
			
			<section class="hero-wrap" style="background-image: url(images/bg_1.jpg);">
      	<div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 ftco-animate text-center">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Acceuil</a></span> <span>Model Single</span></p>
	            <h1 class="mb-5 bread">Andrea Smith</h1>
	          </div>
	        </div>
	      </div>
      </section>
			
			<section class="ftco-section">
      	<div class="container">
      		<div class="row justify-content-center">
      			<div class="col-md-10">
      				<div class="row model-detail d-mf-flex align-items-center">
      					<div class="col-md-6 ftco-animate">
      					
      							<div class="items">
		      						<img src="images/image_5.jpg" class="img-fluid" alt="Colorlib Template">
				<div><a href="action.php?t=1&id_blog=<?php= $id_blog ?>"><span class="icon-thumbs-up"></span></a>(<?php= likes ?>)
				<a href="action.php?t=1&id_blog=<?php echo $Blog['id_blog']; ?>"><span class="icon-thumbs-up"></span></a>(<?php= likes ?>) 
				  <a href="action.php?t=2&id_blog=<?php= $id_blog ?>">      <span class="icon-thumbs-down"></span></a></a>(<?php= $dislikes ?>) </div>
				<div><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a>
				  	 <a href="https://www.instagram.com/"><span class="icon-instagram"></span></a>
					   <a href="https://www.twitter.com/"><span class="icon-telegram"></span></a>  </div>	
					   <a href="supprimer_com.php?id_type=<?php echo $Type['id_type']; ?>" class="btn-outline-danger">Supprimer</a>			 
				  <div> <i class="star" data-note="1">&#9733;</i>
							  <i class="star" data-note="2">&#9733;</i>
    						  <i class="star" data-note="3">&#9733;</i>
    						  <i class="star" data-note="4">&#9733;</i>
    						  <i class="star" data-note="5">&#9733;</i>
   							  <i class="note">Note : </i>
								 <script>
        const stars = document.querySelectorAll('.star');
        let check = false;
        stars.forEach(star => {
            star.addEventListener('mouseover', selectStars);
            star.addEventListener('mouseleave', unselectStars);
            star.addEventListener('click', activeSelect);
        })

        function selectStars(e) {
            const data = e.target;
            const etoiles = priviousSiblings(data);
            if (!check) {
                etoiles.forEach(etoile => {
                    etoile.classList.add('hover');
                })
            }

        }

        function unselectStars(e) {
            const data = e.target;
            const etoiles = priviousSiblings(data);
            if (!check) {
                etoiles.forEach(etoile => {
                    etoile.classList.remove('hover');
                })
            }
        }

        function activeSelect(e) {
            if (!check) {
                check = true;
                document.querySelector('.note').innerHTML = 'Note ' + e.target.dataset.note;
            }
        }

        function priviousSiblings(data) {
            let values = [data];
            while (data = data.previousSibling) {
                if (data.nodeName === 'I') {
                    values.push(data);
                }
            }
            return values;
        }
    </script></div>
	      						
								  <!--	<div><h5>commentaire:</h5></div>
								  <form method="POST">
									  <input type="text" name="pseudo" placeholder="votre pseudo"/><br>
									  <textarea name="commentaire" id="commentaire" cols="30" rows="1"></textarea><br>
									  <input type="submit" value="poster" name="com">
								  </form>
								  <?php if(isset($c_erreur)) {echo "erreur: " .$c_erreur; } ?>
								  
								  <div-->
								  <!--     <div >
                    <h3 class="card-title" color='pink'>Commentaire</h3>
                        <div id="error">
                          <?php echo $error; ?>
                        </div>
                    <form class="forms-sample" action="" method="POST" >
                      
                     
                      <div class="form-group">
                        <input
                          type="text"
                          id="pseudo"
                          name="pseudo"
                          placeholder="pseudo"
                        />
                      </div>
					  <div class="form-group">
                        <textarea name="commentaire" id="commentaire" cols="30" rows="1"></textarea>
                      </div> 
                    <input type="submit" value="poster" name="com">  
					</form>
                  </div-->

                  <div class="card-body">
                    <h3 class="card-title">Comentaires :</h3>
                        <div id="error">
                          <?php echo $error; ?>
                        </div>
                    <form class="forms-sample" action="" method="POST" onsubmit="return Verif()">
                      <div class="form-group">
                        <input
                          type="text"
                          id="nom"
                          name="Nom"
                          placeholder="votre pseudo"
                        />
                        <p id="errorNN" class="error"></p>
                      </div> 
					  <div class="form-group">
						<textarea name="com" id="com" cols="30" rows="1" placeholder="commentaire"></textarea>
                        <p id="errorNR" class="error"></p>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> poster </button>
                    </form>
                  </div>
                </div>


				<div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            
                            <th>pseudo</th>
                            <th>commentaire</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <?php 
                              foreach($listeTypes as $Type) { ?>
                              <tr>
                                
                                
                                  <td><?php Echo $Type['Nom'];?></td>
                                  <td><?php Echo $Type['com'];?></td>
                                
                                
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
				


      					<div class="col-md-1"></div>
      					<div class="col-md-5 model-info ftco-animate">
      						<h3 class="mb-4">Maquillage</h3>
							  <h4 class="mb-4">Franck</h4>
      						<p><span>Date</span> <span>20-04-2022</span></p>
									<p><span>Type</span> <span>Blog de mode</span></p>
									<p><span></span> <span>Depuis la fin des années 2000, le secteur se professionnalise avec l’arrivée des premières blogueuses à plein temps (Garance Doré, La Revue de Kenza, Le Blog de Betty, The Cherry Blossom Girl), souvent autodidactes6. « Toutes ces influenceuses ont créé un nouveau métier, le leur7. » Elle se voient suivies par la blogosphère de la mode masculine à l'instar de BonneGueule ou Comme un camion.

Aujourd’hui les blogs à fort trafic passent, à l’instar des médias classiques, par des régies qui regroupent plusieurs blogueurs, et se chargent de la commercialisation des espaces publicitaires. Les deux principales agences (Talent Agency, Glam Media (en)) ont toutes deux levé plusieurs millions d’euros en 2013 pour poursuivre leur développement8. « Rien n'est vraiment gratuit avec les blogueuses. toutes les grandes influenceuses disposent d'un agent qui gère leurs droits » précise Eric Briones9. C'est le cas de Chiara Ferragni par exemple dont le manager multiplie les partenariats entre la blogueuse et les marques9. Outre l'aspect financier, cette multiplication des contrats permet de démontrer une relative indépendance vis-vis des marques9. De toutes façons, « les entreprises ont tout intérêt à respecter l’indépendance du blogueur »10.

Face aux audiences importantes de ces blogs, de plus souvent ciblées10, les commentaires sur chaque publication, ainsi que la bonne gestion de ceux-ci, concourent à augmenter encore le trafic et à attirer les annonceurs9. La dimension de la communauté fidèle au blog reste primordiale. Plus ce trafic et le ranking sont élevés, plus les tarifs augmentent.</span></p>

									
								
      					</div>
      				</div>
      				<div class="row no-gutters mt-5">
      					<div class="col-md-6 col-lg-3 fto-animate">
      						<a href="model.php"><img src="images/image_4.jpg" class="img-fluid" alt="Colorlib Template"></a>
      					</div>
      					<div class="col-md-6 col-lg-3 fto-animate">
      						<a href="model.php"><img src="images/image_5.jpg" class="img-fluid" alt="Colorlib Template"></a>
      					</div>
      					<div class="col-md-6 col-lg-3 fto-animate">
      						<a href="model.php"><img src="images/image_8.jpg" class="img-fluid" alt="Colorlib Template"></a>
      					</div>
      					<div class="col-md-6 col-lg-3 fto-animate">
      						<a href="model.php"><img src="images/image_7.jpg" class="img-fluid" alt="Colorlib Template"></a>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>
      
      <footer class="ftco-footer ftco-section img">
	    	<div class="overlay"></div>
	      <div class="container">
	        <div class="row mb-5">
	          <div class="col-md-3">
	            <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2 logo"><a href="index.php">E - BEAUTY</a></h2>
	              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
	                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md-4">
	            <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2">Recent Blog</h2>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-2">
	             <div class="ftco-footer-widget mb-4 ml-md-4">
	              <h2 class="ftco-heading-2">Site Links</h2>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">Acceuil</a></li>
	                <li><a href="#" class="py-2 d-block">About</a></li>
	                <li><a href="#" class="py-2 d-block">Model</a></li>
	                <li><a href="#" class="py-2 d-block">Services</a></li>
	                <li><a href="#" class="py-2 d-block">Blog</a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md-3">
	            <div class="ftco-footer-widget mb-4">
	            	<h2 class="ftco-heading-2">Have a Questions?</h2>
	            	<div class="block-23 mb-3">
		              <ul>
		                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
		                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
		                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
		              </ul>
		            </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12 text-center">

	            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	        </div>
	      </div>
	    </footer>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

	    <!-- Modal -->
	    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
	      <div class="modal-dialog" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>
	          <div class="modal-body">
	            <form action="#">
	              <div class="form-group">
	                <label for="appointment_name" class="text-black">Full Name</label>
	                <input type="text" class="form-control" id="appointment_name">
	              </div>
	              <div class="form-group">
	                <label for="appointment_email" class="text-black">Email</label>
	                <input type="text" class="form-control" id="appointment_email">
	              </div>
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="appointment_date" class="text-black">Date</label>
	                    <input type="text" class="form-control" id="appointment_date">
	                  </div>    
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="appointment_time" class="text-black">Time</label>
	                    <input type="text" class="form-control" id="appointment_time">
	                  </div>
	                </div>
	              </div>
	              

	              <div class="form-group">
	                <label for="appointment_message" class="text-black">Message</label>
	                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
	              </div>
	              <div class="form-group">
	                <input type="submit" value="Send Message" class="btn btn-primary">
	              </div>
	            </form>
	          </div>
	          
	        </div>
	      </div>
	    </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>