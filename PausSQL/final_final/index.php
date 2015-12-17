<?php
	session_start();	//start the session
	session_unset();	// remove all session variables 
	session_destroy(); // destroy the session
	pg_close();	//disconnect from database
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>A M A L G A M A T E</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">		
		<link rel="stylesheet" href="css/templatemo-style.css">
	</head>
	<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
		</div>
		<nav class="navbar navbar-fixed-top custom-navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">A M A L G A M A T E</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#service" class="smoothScroll">Services</a></li>
						<li><a href="#contact" class="smoothScroll">Contact</a></li>
						<li><a href="#portfolio" class="smoothScroll">Member</a></li>
						<li><a href="#register" class="smoothScroll">Register</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- start home -->
		<section id="home">
			<div class="overlay">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="images/slider/1.jpg" alt="Slide 1">
							<div class="slider-caption">
								<div class="templatemo_homewrapper">
									<h2>
										<span class="wow fadeIn" data-wow-delay="0.3s">OPPORTUNITIES,</span>
										<span class="wow fadeIn" data-wow-delay="0.6s">OFFERS,</span>
										<span class="wow fadeIn" data-wow-delay="0.9s">EMPLOYMENT</span>
									</h2>
									<a href="#register" class="smoothScroll templatemo-slider-btn btn btn-default">SIGN UP</a>
								</div>
							</div>
						</li>
						<li>
							<img src="images/slider/2.jpg" alt="Slide 2">
							<div class="slider-caption">
								<div class="templatemo_homewrapper">
		                    	<h2>JOB OPPORTUNITIES</h2>
									<h1>EMPLOYMENT</h1>
									<h3>we work until you're employed</h3>
									<a href="#contact" class="smoothScroll templatemo-slider-btn btn btn-default">Meet Our Team</a>	
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- end home -->
		<!-- start service -->
		<section id="service">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wow bounceIn">
						<h2>Services</h2>
						<hr>
						<h4>we guide you from application to employment!</h4>
				
					</div>
				</div>
			</div>
		</section>
		<!-- end service -->
		<!-- start divider -->
		<div class="divider">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="divider-des">
							<h3 class="text-uppercase">The best and efficient way to get employed </h3>
							<p>safe reliable and worth of your trust	</p>
							<button class="btn btn-default text-uppercase">Download the terms</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- start contact -->
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wow bounceIn">
							<h2 class="wow bounceIn">CONTACT DETAILS</h2>
							<hr>
							<h4>GRAB THE OPPORTUNITY WHILE ITS STILL THERE</h4>
						</div>	
					<h4 class="wow bounce">YOU MAY CONTACT US THROUGH: +639987654321</h4>
					<div class ="col-md-29">
						<hr>
					</div>
				
					
					</div>
				</div>
			</div>
		</section>
		<!-- end contact -->
		<!-- start portfolio -->
		<section id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wow bounceIn">
							<h2 class="wow bounceIn">SIGN IN</h2>
							<hr>
							<h4>enjoy the status of being employed</h4>
						</div>					
							<form action="sign-in.php" method="post" role="form">
							<div class="col-md-4 col-sm-5 wow fadeIn" data-wow-delay="0.3s">
								<input type="text" placeholder="Username" name="Username" class="form-control">
							</div>
							<div class="col-md-4 col-sm-5 wow fadeIn" data-wow-delay="0.3s">
								<input type="password" placeholder="Password" name="Password" class="form-control">
							</div>
							<div class="col-md-4 col-sm-5 wow fadeIn" data-wow-delay="0.3s">
								<input type="submit" value="Log In" class="form-control button btn-primary">
							</div>				
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- end portfolio -->
		<!-- start register -->
		<section id="register">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wow bounceIn">
							<h2 class="wow bounceIn">SIGN UP</h2>
							<hr>
							<h4>Yes for employment</h4>
						</div>				
						<form action="sign-up.php" method="post" role="form">
							<div style="margin:auto; margin-bottom:10px; width:40%" class="wow fadeIn" data-wow-delay="0.3s">
								<input type="text" placeholder="Username" name="username" class="form-control" required="" />
							</div>
							<div style="margin:auto; margin-bottom:10px; width:40%" class="wow fadeIn" data-wow-delay="0.3s">
								<input type="password" placeholder="Password" name="password" class="form-control" required="" />
							</div>
							<div style="margin:auto; margin-bottom:10px; width:40%" class="wow fadeIn" data-wow-delay="0.3s">
								<input type="text" placeholder="Name" name="name" class="form-control" required="" />
							</div>
							<div style="margin:auto; margin-bottom:20px; width:40%" class="wow fadeIn" data-wow-delay="0.3s">
								<input type="email" placeholder="Email Address" name="eAdd" class="form-control" required="" />
							</div>
							<div style="margin:auto; margin-bottom:40px; width:30%" class="wow fadeIn" data-wow-delay="0.3s">
								<input type="submit" value="Submit Application" class="form-control button btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- end register -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="social-icon wow fadeIn" data-wow-delay="0.3s">
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/isotope.js"></script>
		<script src="js/imagesloaded.min.js"></script>
		<script src="js/smoothscroll.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>