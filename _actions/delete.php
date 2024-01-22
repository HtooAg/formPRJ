<?php
include_once("dbConfig.php");
$sql = "DELETE FROM reg WHERE id =" . $_GET['id'];
$db->query($sql);
// Retrieving the records
$statement = $db->query("SELECT * FROM reg");
$result = $statement->fetchAll();
$error = "Error inserting record!";
if ($sql == FALSE) {
	echo "Error: " . $sql . "<br>" . $error;
}
header('location: ../viewLogin.php');
exit();
