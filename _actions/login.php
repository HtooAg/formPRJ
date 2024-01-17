<?php
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$general = $_POST["general"];
$gender = $_POST["gender"];

function validateUser($email, $password)
{
	return (!empty($email) && !empty($password));
}

if (!empty($email) && !empty($password)) {
	$validUser = validateUser($email, $password);

	if ($validUser) {
		$_SESSION["user"] = [
			"name" => $fname,
			"email" => $email,
			"password" => $password,
			"phone" => $phone,
			"address" => $address,
			"password" => $password,
			"general" => $general,
			"gender" => $gender,
		];
		header('location: ../viewLogin.php');
	} else {
		$errorMessage = "Login failed! Please try again.";
		header('location: createLogin.php?error=' . $errorMessage);
	}
} else {
	$errorMessage = "You need to fill the form first!";
	header('location: createLogin.php?error=' . $errorMessage);
}
