<?php

include "functions.php";
$db = new fnctns();
// viewUsersGateway.php


if($_GET['filter']=='1'){
	$filter = "WHERE activated = 'true'";
	
}else if($_GET['filter']=='2'){
	$filter = "WHERE activated = 'false'";
}

echo json_encode($db->viewAllUsersAjax($filter));

?>

