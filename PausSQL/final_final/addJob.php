<?php
	session_start();	// Start the session
	$db = pg_connect("host=localhost dbname=amalgamate user=postgres password=bascao");	//connect to database
	if (!$db) {
		die("Error in connection: " . pg_last_error());
	}
	$Username = $_SESSION['username'];
	$jobN = $_POST['job_name'];
	
	$query = "INSERT INTO user_job VALUES('$Username', '$jobN')";
	$result = pg_query($query);

	pg_free_result($result);
	pg_close();
?>