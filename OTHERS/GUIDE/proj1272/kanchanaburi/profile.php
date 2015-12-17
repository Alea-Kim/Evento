<?php
	//$db_connection = pg_connect("host=localhost dbname=kanchanaburi username=kanchanaburi");

	//$result = pg_query($db_connection, "select * from job");

	include('functions.php');

	$db = new fnctns();

	if(isset($_GET['userId'])){
		$userId = $_GET['userId'];
		$db->viewUserProfile($userId);
	}
?>
<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kanchanaburi|Profile </title>

    <style>
      .server-action-menu {
          background-color: transparent;
          background-image: linear-gradient(to bottom, rgba(30, 87, 153, 0.2) 0%, rgba(125, 185, 232, 0) 100%);
          background-repeat: repeat;
          border-radius:20px;
          margin-top: 5%;
          margin-left: 10%;
      }
    </style>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>
  
  <script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='http://10.165.197.14:9090/tlbsgui/baseline/scg.js' mtid=4 mcid=12 ptid=4 pcid=11></script>
	
	<body>
		<nav class="navbar navbar-default">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.php">Kanchanaburi</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
				<li class="active"><a href="#">Profile</a></li>
				<li><a href="connections.php">Connections</a></li>
				
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
				  <ul class="dropdown-menu">
				    <li><a href="settings.php">Account Settings</a></li>
				    <li><a href="home.php">Log Out</a></li>
				  </ul>
				</li>
			  </ul>
			  <form class="navbar-form navbar-right" role="search">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search...">
				</div>
				<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
			  </form>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
		<div>
		  <div class="server-action-menu">
		    <!-- Main component for a primary marketing message or call to action -->
		    <div class="col-md-3">
		      <div class="thumbnail">
		        <img src="shib.jpg" alt="pic" class="img-thumbnail">
		        <div class="caption">
		          <h3>Full Name</h3>
		          <p>SHORT BIO</p>
		          <p>Company</p>
		          <p>Education</p>
		          <p>Details</p>
		          <p>Details</p>
		          <p>Details</p>
		          <p><a href="editprofile.php" class="btn btn-primary" role="button">Edit Profile</a></p>
		        </div>
		      </div>
		    </div>
		  </div> <!-- /container -->
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="../../assets/js/vendor/holder.min.js"></script>
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>

<!--
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
-->
