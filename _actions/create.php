<?php
include("dbConfig.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$general = $_POST['general'];
	$gender = $_POST['gender'];

	$sql = "INSERT INTO reg (name, email, password, phone, address, general, gender) VALUES ('$name', '$email', '$password', '$phone', '$address', '$general', '$gender')";
	$db->query($sql);

	$error = "Error inserting record!";
	if ($sql == TRUE) {
		echo "Record updated successfully" . "</br>";
	} else {
		echo "Error: " . $sql . "<br>" . $error;
	}
	header('location:viewLogin.php');
	exit();
}
