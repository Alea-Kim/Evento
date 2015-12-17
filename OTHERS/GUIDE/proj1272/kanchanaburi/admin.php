<?php
	//$db_connection = pg_connect("host=localhost dbname=kanchanaburi username=kanchanaburi");

	//$result = pg_query($db_connection, "select * from job");

	include('functions.php');

	$db = new fnctns();

	if(isset($_POST['email','password'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$db->addUser($email,$password);
	}
?>

