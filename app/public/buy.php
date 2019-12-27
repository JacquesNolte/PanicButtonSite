<?php
require '../vendor/autoload.php';

use AWSCognitoApp\AWSCognitoWrapper;

$wrapper = new AWSCognitoWrapper();
$wrapper->initialize();

// Notify PayFast that information has been received
header( 'HTTP/1.0 200 OK' );
flush();

if(!$wrapper->isAuthenticated()) {
    header('Location: /');
    exit;
}

$user = $wrapper->getUser();
$pool = $wrapper->getPoolMetadata();
$users = $wrapper->getPoolUsers();

?>

<!-- <html>

<header>
</header>

<body>

<form onsubmit="return callPayFast()" action="https://sandbox.payfast.co.za/eng/process" >

<input type="hidden" id="merchant_id" name="merchant_id" value="10000100">
<input type="hidden" id="merchant_key" name="merchant_key" value="46f0cd694581a">
<input type="hidden" id="return_url" name="return_url" value="https://www.yoursite.com/success">
<input type="hidden" id="cancel_url" name="cancel_url" value="https://www.yoursite.com/cancel">
<input type="hidden" id="notify_url" name="notify_url" value="https://www.yoursite.com/notify">

<input type="text" id="name_first" name="name_first" placeholder="First Name">
<input type="text" id="name_last" name="name_last" placeholder="Last Name">
<input type="text" id="email_address" name="email_address" placeholder="Email Address">
<input type="text" id="cell_number" name="cell_number" placeholder="Cell Number">

<input type="hidden" id="m_payment_id" name="m_payment_id" value="01AB">
<input type="hidden" id="amount" name="amount" value="699.00">
<input type="hidden" id="item_name" name="item_name" value="PIP Button">
<input type="hidden" id="item_description" name="item_description" value="Sigfox Panic Button">

<button type="submit">Buy Now with PayFast</button>

</form>


</body>

<script src="payfast.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</html> -->

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
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
			        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu-active"><a href="index.php">Home</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- Start banner Area -->
			<section class="generic-banner">				
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white">Buy Now</h2>
							</div>
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30">Enter Credentials</h3>

								<form onsubmit="return callPayFast()" action="https://sandbox.payfast.co.za/eng/process">

                                    <input type="hidden" id="merchant_id" name="merchant_id" value="10015623">
                                    <input type="hidden" id="merchant_key" name="merchant_key" value="09v06hjrdu21e">
                                    <input type="hidden" id="return_url" name="return_url" value="http://pipcommerceplatform-env.ee56xpyxcp.eu-west-1.elasticbeanstalk.com/paymentsuccess.php">
                                    <input type="hidden" id="cancel_url" name="cancel_url" value="https://www.yoursite.com/cancel">
                                    <input type="hidden" id="notify_url" name="notify_url" value="http://pipcommerceplatform-env.ee56xpyxcp.eu-west-1.elasticbeanstalk.com/notify.php">
                                    <input type="hidden" id="m_payment_id" name="m_payment_id" value="01AB">
                                    <input type="hidden" id="amount" name="amount" value="699.00">
                                    <input type="hidden" id="item_name" name="item_name" value="PIP Button">
                                    <input type="hidden" id="item_description" name="item_description" value="Sigfox Panic Button">

									<div class="mt-10">
                                        <input type="text" id="name_first" name="name_first" placeholder="First Name" required class="single-input">
									</div>
									<div class="mt-10">
                                        <input type="text" id="last_first" name="last_first" placeholder="Last Name" required class="single-input">
									</div>
                                    <div class="mt-10">
                                        <input type="text" id="email_address" name="email_address" placeholder="Email Address" required class="single-input">
									</div>
                                    <div class="mt-10">
                                        <input type="text" id="cell_number" name="cell_number" placeholder="Cell Number" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="checkbox" id="agree" name="agree" required> By checking this box you are agreeing to the <a href="/terms.php">terms and conditions</a>.
									</div>
									<div class="mt-10">
                                        <button type="submit">Buy Now with PayFast</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Align Area -->

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

            <script src="payfast.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		</body>
	</html>