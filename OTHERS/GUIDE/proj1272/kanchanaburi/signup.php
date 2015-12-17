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
<html lang="en">
  <head>
  	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   	<title>Kanchanaburi|Sign Up </title>

    <style>
      .form-control{
          margin: 20px;
      }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head><script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='http://10.165.197.14:9090/tlbsgui/baseline/scg.js' mtid=4 mcid=12 ptid=4 pcid=11></script>

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
			      <a class="navbar-brand" href="index.html">Kanchanaburi</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				  <div class="nav navbar-nav navbar-right">
				  	<br><p>Already has an account? <a href="login.php">Sign in.</a></p>
				  </div>
				</div>
			</div>
		</nav>
    	
    	<br><br>
		<div class="container" id="scontainer">
	   		<form>
				<h2 class="page-header"><small>About</small><h2>
				<div class="row">
					<div class="col-xs-4">
						<input id="firstName" class="form-control" placeholder="First Name" required>
					</div>
					<div class="col-xs-4">
						<input id="lastName" class="form-control" placeholder="Last Name" required>
					</div>
					<select id="inputEmail" class="form-control Country" placeholder="Country" required>
						<option>*Philippines</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>   
					</select>
					<input id="postalCode" class="form-control" placeholder="Postal Code" required>
			    
				    <h2 class="page-header"><small>Validation</small><h2>
				    <label for="inputEmail" class="sr-only">Email address</label>
				    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
				    <label for="inputPassword" class="sr-only">Password</label>
				    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
				    <input type="password" id="inputPassword" class="form-control" placeholder="Retype Password" required>
				    
				    <h2 class="page-header"><small>Occupational Background</small><h2>
				    <label class="radio-inline">
				      <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"><small>Student</small>
				    </label>
				    <label class="radio-inline">
				      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"><small>Employee</small> 
				    </label>
				    <label class="radio-inline">
				      <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"><small>Admin</small>
				    </label>
				    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
				    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
				    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
			    </div>
			</div>   
		  </form>
		</div> <!-- /container -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>