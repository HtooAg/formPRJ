<?php
include_once("dbConfig.php");

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	$sql = "SELECT * FROM reg WHERE id = $id";
	$statement = $db->query($sql);
	$row = $statement->fetch(PDO::FETCH_ASSOC);

	if (!$row) {
		echo "User not found";
		exit();
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$general = $_POST['general'];
		$gender = $_POST['gender'];

		$sql = "UPDATE reg SET name = '$name', email = '$email', password = '$password', phone = '$phone', address = '$address', general = '$general', gender = '$gender' WHERE id = $id";

		$db->query($sql);

		header('location: ../viewLogin.php');
		exit();
	}
} else {
	echo "Error: ID parameter not set";
	exit();
}
