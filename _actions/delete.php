<?php
include_once("dbConfig.php");

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	try {
		$sql = "DELETE FROM reg WHERE id = :id";
		$statement = $db->prepare($sql);
		$statement->execute([':id' => $id]);

		header('location: ../viewLogin.php');
		exit();
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
		exit();
	}
} else {
	echo "Error: ID parameter not set";
	exit();
}
