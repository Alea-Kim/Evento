<?php
	session_start();	// Start the session
	$db = pg_connect("host=localhost dbname=amalgamate user=postgres password=bascao");	//connect to database
	if (!$db) {
		die("Error in connection: " . pg_last_error());
	}
	$Username = $_SESSION['username'];
	$username = $_POST['username'];
	
	$query = "INSERT INTO user_connection VALUES('$Username', '$username')";
	$result = pg_query($query);

	$query = "INSERT INTO user_connection VALUES('$username', '$Username')";
	$result = pg_query($query);

	pg_free_result($result);
	pg_close();
?>