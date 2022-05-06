
<?php include('Header.php') ?>
  
  <body>

    
			
	<section class="hero-wrap" style="background-image: url(img/bg_1.jpg);">
      	<div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 ftco-animate text-center">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Model Single</span></p>
	            <h1 class="mb-5 bread">Tutos Videos</h1>
	          </div>
	        </div>
	      </div>
   	 </section>
			
      	
  




	  <div class="col-md-9">
			<div class="table-responsive">	
				<table class="table table-bordered">
					<thead class="alert-info">
						
					</thead>
					<tbody>
						<?php
							require_once 'conn.php';
			
							$sql = "SELECT * FROM `file`";
							$query = $conn->prepare($sql);
							$query->execute();
							
							while($fetch = $query->fetch()){
						?>
					
					

						<img src="<?php echo $fetch['location']?>" alt="">
						<video controls width="500">

							<source src="<?php echo $fetch["C:/Users/wassim/Desktop/kraya/SEM2/WEB/xampp/htdocs/php/BACK/".'location']?>"
									type="video/mp4">



							Sorry, your browser doesn't support embedded videos.
							</video>
							<td><?php Echo $fetch['file_name'];?></td>		
							<td><?php Echo $fetch['date_uploaded'];?></td>		
									

						<?php
							}
						?>
					</tbody>
				</table>
			</div>	
		</div>
				



				 
	
	
	
	
	
	</div>
					
            
    























































































      
      <footer class="ftco-footer ftco-section img">
	    	<div class="overlay"></div>
	      <div class="container">
	        <div class="row mb-5">
	          <div class="col-md-3">
	            <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2 logo"><a href="index.php">Stylistic</a></h2>
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
	                <a class="blog-img mr-4" style="background-image: url(img/bg.jpg);"></a>
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
	                <a class="blog-img mr-4" style="background-image: url(img/image_2.jpg);"></a>
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
	                <li><a href="#" class="py-2 d-block">Home</a></li>
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