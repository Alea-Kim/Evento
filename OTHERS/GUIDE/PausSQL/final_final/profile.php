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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A M A L G A M A T E | Profile</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 	
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

	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-3 wow fadeInUp" data-wow-delay="0.6s">
					<div class="about-wrapper" style="text-align:center;">
						<img src="images/new.jpg" class="img-responsive" alt="Profile Picture">
						<?php
							$connection = $_GET['username'];
							$username = $_SESSION['username'];
							if($_SESSION['username'] == $_GET['username']){
								$username = $_SESSION["username"];
								echo "<h3 style='text-align:center'>@$username</h3>";
							}
							else{
								$query = "SELECT * FROM user_connection WHERE connection='$connection' AND user_acc_name='$username'";
								$result = pg_query($query);
								$flag = 0;
								while($myrow = pg_fetch_assoc($result)) {
									$flag = 1;
								}
								$username = $_GET['username'];
								echo "<h3 style='text-align:center'>@$username</h3>";
								if($flag == 0)
									echo '<br /><br /><button value="' . $username . '" class="add button btn-success"> ADD TO CONNECTIONS </button>';
							}
						?>
					</div>
				</div>

				<div style="margin:auto" class="container">
					<div class="col-md-7 wow bounceIn">
						<h2>PROFILE</h2> <hr>
					</div> 
					<div class="col-md-8 wow bounceIn">
						<ul class="nav nav-pills">
						    <li class="active"><a data-toggle="pill" href="#cv">Resume</a></li>
						    <li><a data-toggle="pill" href="#job">Occupations</a></li>
						    <li><a data-toggle="pill" href="#interests">Field of Interests</a></li>
						    <li><a data-toggle="pill" href="#postings">Job Postings</a></li>
							<li><a data-toggle="pill" href="#links">Connections</a></li>
						</ul>
					</div>
					<div class="col-md-8 tab-content">
						<div id="cv" class="tab-pane fade in active">
							<h3 style="text-decoration:underline">RESUME</h3> 
							<?php
								if($_SESSION['username'] == $_GET['username'])
									echo '<a href="editProfile.php"><span class="glyphicon glyphicon-edit"></span></a><br />';

								$query = "SELECT * FROM user_account WHERE username='$username'";
								$result = pg_query($query);
								
								while($myrow = pg_fetch_assoc($result)) {
									printf ('<p> <p style="font-weight:bold;font-size:16px;"> %s <br />%s</p> BIRTHDAY: %s <br /> EMAIL: %s <br /> MOBILE NUMBER: %s <br /> COLLEGE: %s <br /> HIGHEST EDUCATIONAL ATTAINMENT: %s </p><br /><p style="font-weight:bold;font-size:16px;">Objective:</p><p> %s </p> <br />', $myrow['name'], $myrow['complete_address'], $myrow['birthday'], $myrow['email'], $myrow['mobile_number'], $myrow['college'], $myrow['highest_educ_attained'], $myrow['objective']);
								}

								$query = "SELECT degree FROM user_degree WHERE user_acc_name='$username'";
								$result = pg_query($query);
								
								echo '<p style="font-weight:bold;font-size:16px;"> Educational Background: </p>';
								if($_SESSION['username'] == $_GET['username'])
										echo '<a href="addDegree.php"><span class="glyphicon glyphicon-edit"></span></a>';
								while($myrow = pg_fetch_assoc($result)) {
									$flag = 1;
									printf ('<li>%s</li>', $myrow['degree']);
								}
												
								pg_free_result($result);
							?>
						</div>		

						<div id="job" class="tab-pane fade">
							<h3 style="text-decoration:underline">OCCUPATIONS
								<?php
									$query = "SELECT job_name FROM user_job WHERE user_acc_name='$username'";
									$result = pg_query($query);
									$rows = pg_num_rows($result);
									
									echo "(" . $rows . ")";
								?>
							</h3>
							<ul>
								<?php
									if($_SESSION['username'] == $_GET['username'])
										echo '<a href="editProfile.php"><a href="JobOfferings.php"><span class="glyphicon glyphicon-edit"></span></a>';
									else $username = $_GET['username'];
									$query = "SELECT job_name FROM user_job WHERE user_acc_name='$username'";
									$result = pg_query($query);
								
									$flag = 0;
									while($myrow = pg_fetch_assoc($result)) {
										$flag = 1;
										printf ('<li> %s </li>', $myrow['job_name']);
									}
									if($flag==0) echo "<p> No occupation. </p>";
												
									pg_free_result($result);
								?>		
							</ul>
						</div>

						<div id="interests" class="tab-pane fade">
							<h3 style="text-decoration:underline">FIELD OF INTERESTS
								<?php
									$query = "SELECT field FROM user_field WHERE user_acc_name='$username'";
									$result = pg_query($query);
									$rows = pg_num_rows($result);

									echo "(" . $rows . ")";
								?>
							</h3>
							<ul>
								<?php
									if($_SESSION['username'] == $_GET['username'])
										echo '<a href="addInterest.php"><span class="glyphicon glyphicon-edit"></span></a>';
									else $username = $_GET['username'];
									$query = "SELECT field FROM user_field WHERE user_acc_name='$username'";
									$result = pg_query($query);
								
									$flag = 0;
									while($myrow = pg_fetch_assoc($result)) {
										$flag = 1;
										printf ('<li> %s </li>', $myrow['field']);
									}
									if($flag==0) echo "<p> No field of interest. </p>";
												
									pg_free_result($result);
								?>		
							</ul>
						</div>

						<div id="postings" class="tab-pane fade">
							<h3 style="text-decoration:underline">JOB POSTINGS					
								<?php
									$connection = $_GET['username'];
									$username = $_SESSION['username'];
									$query = "SELECT * FROM user_connection WHERE connection='$connection' and user_acc_name='$username'";
									$result = pg_query($query);
									$flag = 0;
									while($myrow = pg_fetch_assoc($result)) {
										$flag = 1;
									}

									?>
							</h3>
							<ul>
								<?php
									if($_SESSION['username'] == $_GET['username'])
										echo '<a href="postJob.php"><span class="glyphicon glyphicon-edit"></span></a>';
									else $username = $_GET['username'];
									$query = "SELECT job_name FROM job_vacancy WHERE posted_by='$username' and is_approved = TRUE";
									$result = pg_query($query);
								
									$flag = 0;
									while($myrow = pg_fetch_assoc($result)) {
										$flag = 1;
										printf ('<li> %s </li>', $myrow['job_name']);
									}
									if($flag==0) echo "<p> No job postings. </p>";
												
									pg_free_result($result);
								?>		
							</ul>
						</div>

						<div id="links" class="tab-pane fade">
							<h3 style="text-decoration:underline">CONNECTIONS
								<?php
									$query = "SELECT connection from user_connection WHERE user_acc_name='$username'";
									$result = pg_query($query);
									$rows = pg_num_rows($result);
									
									echo "(" . $rows . ")";
								?>
							</h3>
							<ul>
								<?php	
									if($_SESSION['username'] == $_GET['username'])
										echo '<a href="connect.php"><span class="glyphicon glyphicon-edit"></span></a>';
									else $username = $_GET['username'];
									$query = "SELECT connection FROM user_connection WHERE user_acc_name='$username'";
									$result = pg_query($query);
								
									$flag = 0;
									while($myrow = pg_fetch_assoc($result)) {
										$flag = 1;
										printf ('<li> <a href="profile.php?username=%s"> %s </a></li>', $myrow['connection'], $myrow['connection']);
									}
									if($flag==0) echo "<p> No connections. </p>";
												
									pg_free_result($result);
								?>		
							</ul>
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

	<script>
		$(document).ready(function(){
			$(".add").click(function(){
				$.post("http://localhost/final_final/addUser.php",{
					username: $(this).val()
				},
				function (res){
					console.log($(this).val());
				});
			});
		});
	</script>
</body>
</html>
