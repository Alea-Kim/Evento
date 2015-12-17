<?php
	$db = pg_connect("host=localhost dbname=amalgamate user=postgres password=bascao");	//connect to database
	if (!$db) {
		die("Error in connection: " . pg_last_error());
	}
	$Username = $_POST['username'];
	$query = "DELETE FROM user_account WHERE username='$Username'";
	$result = pg_query($query);

	pg_free_result($result);
	pg_close();
?>