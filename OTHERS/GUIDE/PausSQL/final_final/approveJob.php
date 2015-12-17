<?php
	$db = pg_connect("host=localhost dbname=amalgamate user=postgres password=bascao");	//connect to database
	if (!$db) {
		die("Error in connection: " . pg_last_error());
	}
	$jobN = $_POST['job_name'];
	$query = "UPDATE job_vacancy SET is_approved=TRUE, managed_by='San Tayo Lunch?' WHERE job_name='$jobN'";
	$result = pg_query($query);

	pg_free_result($result);
	pg_close();
?>