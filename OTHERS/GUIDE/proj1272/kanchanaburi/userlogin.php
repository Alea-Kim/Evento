<?php
	//$db_connection = pg_connect("host=localhost dbname=kanchanaburi username=kanchanaburi");

	//$result = pg_query($db_connection, "select * from job");

	include('functions.php');

	$db = new fnctns();

	if(isset($_POST['login_flag'])){
		$usermail = $_POST['usermail'];
		$password = $_POST['password'];

		$db->login($usermail,$password);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Kanchanaburi</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
		<link href="jumbotron.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	</head>
	<script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='http://10.165.197.14:9090/tlbsgui/baseline/scg.js' mtid=4 mcid=12 ptid=4 pcid=11></script>
	
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Kanchanaburi</a>
		    </div>
		    <div id="navbar" class="navbar-collapse collapse">
		      <form name="login" action="login.php" method="post" accept-charset="utf-8" class="navbar-form navbar-right">
		        <div class="form-group">
		          <input type="text" placeholder="Email Address" class="form-control" required>
		        </div>
		        <div class="form-group">
		          <input type="password" placeholder="Password" class="form-control" required>
		        </div>
		        <button type="submit" name="login_flag" class="btn btn-primary">Sign in</button>
		      </form>
		    </div><!--/.navbar-collapse -->
		  </div>
		</nav>

		<div class="jumbotron">
	      <div class="container">
	        <h1>Be great at what you do.</h1>
	        <p>Get started - it's free! </p>
	        <p><a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign Up &raquo;</a></p>
	      </div>
	    </div>

	    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Jobs</h2>
          <p>Choose from over a million jobs offered.</p>
        </div>
        <div class="col-md-4">
          <h2>Connections</h2>
          <p>Find and add friends and colleagues.</p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; CMSC 127 ST-3L</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>

<!--
<!DOCTYPE>
<html>
	<head>
		<title>CMSC127 Project - Login</title>
	</head>
	<body>
		<section class="loginform cf">
			<form name="login" action="login.php" method="post" accept-charset="utf-8">
	    	<table>
	    		<tr>
	    			<td><label for="usermail">Email</label></td>
	    			<td><input type="text" name="usermail" placeholder="yourname@email.com" required></td>
	    			<!- td><input type="email" name="usermail" placeholder="yourname@email.com" required></td
	    		</tr>
	    		<tr>
	    			<td><label for="password">Password</label></td>
	    			<td><input type="password" name="password" placeholder="password" required></li></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2"><input type="submit" name="login_flag" value="Login" style="width: 100%;"></td>
	    		</tr>
		        <td>
	    	</table>
</form>
</section>
	</body>
</html>
-->
