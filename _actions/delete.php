<?php
include_once("dbConfig.php");
$sql = "DELETE FROM reg WHERE id =" . $_GET['id'];
$db->query($sql);

$error = "Error inserting record!";
if ($sql == TRUE) {
	echo "Record deleted successfully" . "</br>";
} else {
	echo "Error: " . $sql . "<br>" . $error;
}
header('location: ../viewLogin.php');
exit();
