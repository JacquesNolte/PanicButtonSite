<?php
require '../vendor/autoload.php';


use AWSCognitoApp\AWSCognitoWrapper;

$wrapper = new AWSCognitoWrapper();
$wrapper->initialize();

if($wrapper->isAuthenticated()) {
    header('Location: /secure.php');
    exit;
}

?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Watch</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Home</a></li>
                          <li><a href='/login.php'>Login</a></li>
						  <!-- <li><a href="login.html">Login</a></li> -->
						  <li><a href="/register.php">Register</a></li>

						  <li><a href="/terms.php">T & C's</a></li>
						  <!-- <li><a href="account.html">Account</a></li> -->
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-10">
							<h5 class="text-white text-uppercase">Get your PIP Button today</h5>
							<h1>
								PIP Button				
							</h1>
							<a href="#" id="buy_now" class="primary-btn text-uppercase">Buy Now</a>
							<h6 class="text-white text-uppercase" id="signed_out_index" style="display: none;">Please login to buy product!</h6>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start video-sec Area -->
			<section class="video-sec-area section-gap" id="about">
				<div class="container">
					<div class="row justify-content-center align-items-center ">
						<div class="col-lg-6 video-left">
							<h6>Brand new app to blow your mind</h6>
							<h1>We’ve made a life <br>
							that will change you</h1>
							<p><span>We are here to listen from you deliver exellence</span></p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
							<a class="primary-btn" href="#">Get Started now</a>
						</div>
						<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
							<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-icon.png" alt=""></a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End video-sec Area -->
			
			<!-- Start top-course Area -->
			<section class="top-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Some Features That make the PIP Button Unique</h1>
								<p>Alert notifications simplified.</p>
							</div>
						</div>
					</div>					
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-3 course-left">
							<div class="single-course">
								<span class="lnr lnr-rocket"></span>
								<a href="#"><h4>PIP Management App</h4></a>
								<p>
									The PIP platform provides you with an easy-to-use mobile web application for configuring your PIP Button.
								</p>
							</div>
							<div class="single-course">
								<span class="lnr lnr-cog"></span>
								<a href="#"><h4>Battery Longevity</h4></a>
								<p>
									Incredible battery life of 10 years in most use cases or up to 4000 button clicks.
								</p>
							</div>							
						</div>
						<div class="col-lg-6 course-middle">
							<img class="img-fluid mx-auto d-block" src="img/c1.png" alt="">
						</div>
						<div class="col-lg-3 course-right">
							<div class="single-course">
								<span class="lnr lnr-apartment"></span>
								<a href="#"><h4>No Cellphone Signal Needed</h4></a>
								<p>
									This device transmits messages via the Sigfox network, therefore no cell reception is required.
								</p>
							</div>
							<div class="single-course">
								<span class="lnr lnr-phone"></span>
								<a href="#"><h4>Waterproof Case</h4></a>
								<p>
									The device has an official IP68 rating
								</p>
							</div>														
						</div>
					</div>
				</div>	
			</section>
			<!-- End top-course Area -->
			
			<!-- Start home-about Area -->
			<section class="home-about-area">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h1>Globally Connected <br>
							by Sigfox Network</h1>
							<p>
								<span>Sigfox, a 0G network connecting your physical world</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
							</p>
							<a class="text-uppercase primary-btn" href="sigfox.php">sigfox in 5 minutes</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->			

			<!-- Start service Area -->
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Some Features of the Mobile Web App include</h1>
							<p>
								Explore the features and integration of the PIP Button and the management platform.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-user"></span>Account Integration</h4>
								<p>
									One PIP account lets you manage and configure all you PIP devices from one platform.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>Custom Messages</h4>
								<p>
									Setup custom messages for each of the alert modes that come with you PIP Button.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-phone"></span>User Management</h4>
								<p>
									Add users to your account and assign a PIP Button to each of of the individual users.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-rocket"></span>Emergency Contacts</h4>
								<p>
									Add up to 4 emergency contacts for each PIP Button that you have configured on your account.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-diamond"></span>Emergency SMS or Email</h4>
								<p>
									Configure your button modes to send notifications to contacts via Email, SMS or Telegram.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-bubble"></span>Enable or Disable PIP Button</h4>
								<p>
									The app easily allows you to enable or disable notifications triggered by your button.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End service Area -->	

			<section class="unique-feature-area section-gap" id="unique">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Panic Button Modes</h1>
								<p>Each mode comes with a customizable notification message that can be configured.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-unique-product">
								<img class="img-fluid" src="/img/icons/button_blue.png" width="100px" alt="">
								<div class="desc">
									<h4>
										Single Click
									</h4>
									<p> </p>
									<p>Short click (press less than 2 seconds)</p>
									<!-- <h6>£399.0</h6>
									<a class="text-uppercase primary-btn" href="#">Pre Order</a> -->
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-unique-product">
								<img class="img-fluid" src="/img/icons/cloud_blue.png" width="100px" alt="">
								<div class="desc">
									<h4>
										Double Click
									</h4>
									<p> </p>
									<p>Double click (two short presses in succession)</p>
									<!-- <h6>£399.00</h6>
									<a class="text-uppercase primary-btn" href="#">Pre Order</a> -->
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-unique-product">
								<img class="img-fluid" src="/img/icons/network_blue.png" width="100px" alt="">
								<div class="desc">
									<h4>
										Short Press
									</h4>
									<p> </p>
									<p>Short press (press more than 2 seconds)</p>
									<!-- <h6>£399.00</h6>
									<a class="text-uppercase primary-btn" href="#">Pre Order</a> -->
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-unique-product">
								<img class="img-fluid" src="/img/icons/phone_blue.png" width="100px" alt="">
								<div class="desc">
									<h4>
										Long Press
									</h4>
									<p> </p>
									<p>Long press (press more than 6 seconds)</p>
									<!-- <h6>£399.00</h6>
									<a class="text-uppercase primary-btn" href="#">Pre Order</a> -->
								</div>
							</div>
						</div>																		
					</div>
				</div>	
			</section>

			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30">Pricing Options</h3>
						<div class="row">
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Standard Edition</h4>
									<h6 style="color:blue;">R699.00</h6>
									<p>This package inclued a subscription that is valid for 1 year. This package include 720 button presses per year. A Maximum of 2880 emails can be sent on this package per year. Once a bundle runs out, a bundle top up could be bought.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Gold Edition</h4>
									<h6 style="color:blue;">R999.00</h6>
									<p>This package is based on the standard edition, but includes a SMS bundle. 500 SMS per year is included in this subscription package</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Platinum Edition</h4>
									<h6 style="color:blue;">R1199.00</h6>
									<p>This package include both all of the features from the standard and the gold edition, but also include an extra option that allow for the sending of WhatsApp messages as well</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start faq Area -->
			<section class="faq-area section-gap" id="faq">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Frequently Asked Questions</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-start">
						<div class="col-lg-6 faq-left">
							<div id="accordion">
							  <div class="card">
							    <div class="card-header" id="headingOne">
							      <h5 class="mb-0">
							        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							          Are your Templates responsive?
							        </button>
							      </h5>
							    </div>

							    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							      <div class="card-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="headingTwo">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							          Does it have all the plugin as mentioned?
							        </button>
							      </h5>
							    </div>
							    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							      <div class="card-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="headingThree">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							          Can i use the these theme for my client?
							        </button>
							      </h5>
							    </div>
							    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							      <div class="card-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="headingThree">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
							          Are your Templates responsive?
							        </button>
							      </h5>
							    </div>
							    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							      <div class="card-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
							      </div>
							    </div>
							  </div>							  
							</div>							
						</div>	
					</div>
				</div>	
			</section>
			<!-- End faq Area -->
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			<script src="js/custom/index.js"></script>
		</body>
	</html>



