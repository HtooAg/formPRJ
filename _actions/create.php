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

	try {
		$sql = "INSERT INTO reg (name, email, password, phone, address, general, gender) VALUES (:name, :email, :password, :phone, :address, :general, :gender)";
		$statement = $db->prepare($sql);
		$result = [
			':name' => $name,
			':email' => $email,
			':password' => $password,
			':phone' => $phone,
			':address' => $address,
			':general' => $general,
			':gender' => $gender,
		];
		$statement->execute($result);
		header('location:viewLogin.php');
		exit();
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
		exit();
	}
}
