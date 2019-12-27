<?php
require '../vendor/autoload.php';

use AWSCognitoApp\AWSCognitoWrapper;

$wrapper = new AWSCognitoWrapper();
$wrapper->initialize();

$entercode = false;

if(isset($_POST['action'])) {

    if($_POST['action'] === 'code') {
        $username = $_POST['username'] ?? '';

        $error = $wrapper->sendPasswordResetMail($username);

        if(empty($error)) {
            header('Location: forgotpassword.php?username=' . $username);
        }
    }

    if($_POST['action'] == 'reset') {

        $code = $_POST['code'] ?? '';
        $password = $_POST['password'] ?? '';
        $username = $_GET['username'] ?? '';

        $error = $wrapper->resetPassword($code, $password, $username);

        // TODO: show message on new page that password has been reset
        if(empty($error)) {
            header('Location: index.php?reset');
        }
    }
}

if(isset($_GET['username'])) {
    $entercode = true;
}
?>

<!-- <!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='x-ua-compatible' content='ie=edge'>
        <title>AWS Cognito App - Register and Login</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <h1>Menu</h1>
        <ul>
            <li><a href='/'>Index</a></li>
            <li><a href='/secure.php'>Secure page</a></li>
            <li><a href='/confirm.php'>Confirm signup</a></li>
            <li><a href='/forgotpassword.php'>Forgotten password</a></li>
            <li><a href='/logout.php'>Logout</a></li>
        </ul>
        <p style='color: red;'><?php echo $error;?></p>
        <?php if($entercode) { ?>
        <h1>Reset password</h1>
        <p>If your account was found, an e-mail has been sent to the associated e-mailadres. Enter the code and your new password.</p>
        <form method='post' action=''>
            <input type='text' placeholder='Code' name='code' /><br />
            <input type='password' placeholder='Password' name='password' /><br />
            <input type='hidden' name='action' value='reset' />
            <input type='submit' value='Reset password' />
        </form>
        <?php } else { ?>
        <h1>Forgotten password</h1>
        <p>Enter your username and we will sent you a reset code to your e-mailadres.</p>
        <form method='post' action=''>
            <input type='text' placeholder='Username' name='username' /><br />
            <input type='hidden' name='action' value='register' />
            <input type='hidden' name='action' value='code' />
            <input type='submit' value='Receive code' />
        </form>
        <?php }?>
    </body>
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
			        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu-active"><a href="index.html#home">Home</a></li>
			          <li><a href="index.html#about">About</a></li>
			          <li><a href="index.html#service">Service</a></li>
			          <li><a href="index.html#unique">Unique Feature</a></li>
			          <li><a href="index.html#review">Review</a></li>
			          <li><a href="index.html#faq">Faq</a></li>
			          <li class="menu-has-children"><a href="">Pages</a>
			            <ul>
			              <li><a href="generic.html">Generic</a></li>
			              <li><a href="elements.html">Elements</a></li>
			            </ul>
			          </li>
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
								<h2 class="text-white">Reset Password</h2>
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
								<h3 class="mb-30">Reset Password</h3>

                                <?php if($entercode) { ?>
                                <h1>Reset password</h1>
                                <p>If your account was found, an e-mail has been sent to the associated e-mailadres. Enter the code and your new password.</p>
                                <form method='post' action=''>
									<div class="mt-10">
										<input type="text" name="code" placeholder="Code" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Code'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input">
									</div>
                                    <input type='hidden' name='action' value='reset' />
									<div class="mt-10">
                                        <input type='submit' value='Reset Password' />
									</div>
								</form>
                                <?php } else { ?>
                                <h1>Forgotten password</h1>
                                <p>Enter your username and we will sent you a reset code to your e-mailadres.</p>
                                <form method='post' action=''>
									<div class="mt-10">
										<input type="text" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required class="single-input">
									</div>
									<!-- <div class="mt-10">
										<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input">
									</div> -->
                                    <input type='hidden' name='action' value='register' />
                                    <input type='hidden' name='action' value='code' />
									<div class="mt-10">
                                        <input type='submit' value='Receive Code' />
									</div>
								</form>
                                <?php }?>
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
		</body>
	</html>
