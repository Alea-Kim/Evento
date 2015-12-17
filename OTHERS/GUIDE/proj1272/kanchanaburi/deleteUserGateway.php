<?php

include "functions.php";
$db = new fnctns();
// deleteUserGateway.php?userId=X



echo json_encode($db->deleteUser($_GET['userId']));
?>

