<?php
	//$db_connection = pg_connect("host=localhost dbname=kanchanaburi username=kanchanaburi");

	//$result = pg_query($db_connection, "select * from job");
	include "functions.php";
	$db = new fnctns();

	if(isset($_GET['userId'])){
		$userId = $_GET['userId'];
	}
?>

<!DOCTYPE>
<html>
	<head>
	
	</head>
	<body>
	<?php
		$db->viewAllUsers($userId);
	?>
	</body>
</html>
