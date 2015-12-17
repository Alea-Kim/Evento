<?php
	session_start();	// Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A M A L G A M A T E | Sign-In</title>
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
					<div class="wow bounceIn">
						<h2 class="wow bounceIn"> SIGN IN</h2>
						<hr>
					</div>
					<div class="iso-section wow fadeIn" data-wow-delay="0.6s">		
						<?php
							$dbh = pg_connect("host=localhost dbname=amalgamate user=postgres password=bascao");
							if (!$dbh) {
								die("Error in connection: " . pg_last_error());
							}

							$Username = pg_escape_string($_POST['Username']);
							$Password = pg_escape_string($_POST['Password']);
							
							$sql = "SELECT COUNT(*) FROM admin_account WHERE username='$Username' AND password='$Password'";
							$result = pg_query($dbh, $sql);
							$row = pg_fetch_array($result);
							if($row[0] == 1){
								$_SESSION["username"] = $Username;
								header("Location: http://localhost/final_final/adminProfile.php?username=" . $_SESSION["username"]);
							}
							else{
								$sql = "SELECT COUNT(*) FROM user_account WHERE username='$Username' AND password='$Password'";
								$result = pg_query($dbh, $sql);
								$row = pg_fetch_array($result);
								if($row[0] == 0) echo "<div><h4><p>Incorrect username or password. </p> <br /> <p>The username or password you’ve entered doesn’t match any account. <a href='index.php'> Sign up for an account. </a></p> <p>You can login using any email or username associated with your account. Make sure that it is typed correctly. </p></h4></div>";
								else{
									$sql = "SELECT is_approved FROM user_account WHERE username='$Username' AND password='$Password'";
									$result = pg_query($dbh, $sql);
									$row = pg_fetch_array($result);
									if($row[is_approved] == 't'){
										$_SESSION["username"] = $Username;
										$_SESSION["password"] = $Password;
										header("Location: http://localhost/final_final/home.php?username=" . $_SESSION["username"]);
									}
									else  echo "<div><h4>Request of account still pending.</h4></div>";
								}

							}
							// close connection
							pg_close($dbh);
						?>	
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
