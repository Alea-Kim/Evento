<?php
	session_start();	// Start the session

	$db = pg_connect("host=localhost dbname=amalgamate user=postgres password=bascao");	//connect to database
	if (!$db) {
		die("Error in connection: " . pg_last_error());
	}

	$Password = $_SESSION["password"];
	$query = "select username from user_account where password='$Password'";
	$result = pg_query($query);
	
	$myrow = pg_fetch_assoc($result);
	if($myrow['username'] != $_SESSION["username"]){
		header("Location:'HTTP/1.0 403 Forbidden'");
	}
					
	pg_free_result($result);
?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>A M A L G A M A T E | Job Offerings</title>
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
					<a href="#" class="navbar-brand">AMALGAMATE</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="home.php" class="smoothScroll">Home</a></li>
						<li><a href="JobOfferings.php" class="smoothScroll">Job Offers</a></li>
						<li><a href="connect.php" class="smoothScroll">Connect</a></li>
						<li><a href="profile.php?username=<?php echo $_SESSION['username']; ?>" class="smoothScroll">Profile</a></li>
						<li><a href="index.php" class="smoothScroll">Log Out</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<section id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wow bounceIn">
							<h2 class="wow bounceIn">JOB VACANCIES</h2>
							<hr>
							<h4>your future starts here</h4>
						</div>
						<div class="iso-section wow fadeIn" data-wow-delay="0.6s">

							<ul class="filter-wrapper clearfix">							
								<form action="jobesearch.php" method="post" role="form">
									<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
									<input type="text" placeholder="Search for Job Vacancies" name="jobTitle" class="form-control">
								</div>
								<div class="col-md-2 wow fadeIn" data-wow-delay="0.3s">
									<input type="submit" value="Search" class="form-control button btn-primary">
								</div>
								</form>							
							</ul>

							<div class="iso-box-section">
								<div class="iso-box-wrapper col4-iso-box">

									<div class="iso-box graphic photoshop wallpaper col-md-4 col-sm-6 col-xs-12">
										<div class="portfolio-thumb">
											<img src="images/portfolio-img-1.jpg" class="fluid-img" alt="portfolio img">
											<div class="portfolio-overlay">
												<div class="portfolio-description">
													<a href="#" class="fa fa-search"></a>
													<a href="#" class="fa fa-link"></a>
													<h4>CEO GOOGLE</h4>
													<p>Hiring not so intelligent people that can manage GOOGLE.</p>	
												</div>											
											</div>
										</div>
									</div>
									<div class="iso-box graphic wallpaper col-md-4 col-sm-6 col-xs-12">
										<div class="portfolio-thumb">
											<img src="images/portfolio-img-2.jpg" class="fluid-img" alt="portfolio img">
											<div class="portfolio-overlay">
												<div class="portfolio-description">
													<a href="#" class="fa fa-search"></a>
													<a href="#" class="fa fa-link"></a>
													<h4>Web Programmer vs. Facebook </h4>
													<p>LOOKING FOR WEB PROGRAMMERS THAT WILL DO A SITE TO CHALLENGE FACEBOOK</p>
												</div> 
											</div>
										</div>
									</div>
									<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
										<div class="portfolio-thumb">
											<img src="images/portfolio-img-3.jpg" class="fluid-img" alt="portfolio img">
											<div class="portfolio-overlay">
												<div class="portfolio-description">
													<a href="#" class="fa fa-search"></a>
													<a href="#" class="fa fa-link"></a>
													<h4>Ashley Madisson Masseuse</h4>
													<p>HIRING ALL QUALIFIED MASSEUSE FOR ASHLEY MADISSON DATING SITE</p>
												</div>
											</div>
										</div>
									</div>
					
								</div>
							</div>
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


