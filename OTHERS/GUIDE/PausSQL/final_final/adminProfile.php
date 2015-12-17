<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A M A L G A M A T E | Sign-Up</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
  	
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">		
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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
				<a href="index.php" class="navbar-brand">AMALGAMATE</a>
			</div>
		</div>
	</nav>
	
	<section id="portfolio">
		<div class="col-md-">
			<div class="row">
				<div class="col-md-12">
					<div style="text-align:center;" class="wow bounceIn">
						<h2 class="wow bounceIn"> ADMIN ROLES</h2>
						<hr>
						<div class="col-md-4 col-sm-3 wow fadeInUp" data-wow-delay="0.6s">
							<div class="about-wrapper">
								<img src="images/name.png" class="img-responsive" alt="User Registration Icon">
								<?php
									echo '<a href="userRegistrationRequests.php">Approve User Registration</a>';
								?>
							</div>
						</div>
						<div class="col-md-4 col-sm-3 wow fadeInUp" data-wow-delay="0.6s">
							<div class="about-wrapper">
								<img src="images/job.png" class="img-responsive" alt="Approve Job Icon">
								<?php
									echo '<a href="jobPostingRequests.php">Approve Job Postings</a>';
								?>
							</div>
						</div>
						<div class="col-md-4 col-sm-3 wow fadeInUp" data-wow-delay="0.6s">
							<div class="about-wrapper">
								<img src="images/stats.png" class="img-responsive" alt="Statistics Icon">
								<?php
									echo '<a href="statistics.php">View Statistical Values</a>';
								?>
							</div>
						</div>
					</div>
					<div class="iso-section wow fadeIn" data-wow-delay="0.6s">		
						
					</div>
				</div>
			</div>
		</div>
	</section>

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