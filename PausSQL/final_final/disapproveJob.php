<?php
	$db = pg_connect("host=localhost dbname=amalgamate user=postgres password=bascao");	//connect to database
	if (!$db) {
		die("Error in connection: " . pg_last_error());
	}
	$jobN = $_POST['job_name'];
	$query = "DELETE FROM job_vacancy WHERE job_name='$jobN'";
	$result = pg_query($query);

	pg_free_result($result);
	pg_close();
?>