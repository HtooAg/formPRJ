<?php
session_start();
$fname = $_POST["fname"];
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
			"fname" => $fname,
			"email" => $email,
			"password" => $password,
			"phone" => $phone,
			"address" => $address,
			"password" => $password,
			"general" => $general,
			"gender" => $gender,
		];
		header('location: ../profile.php');
	} else {
		$errorMessage = "Login failed! Please try again.";
		header('location: ../index.php?error=' . $errorMessage);
	}
} else {
	$errorMessage = "Email and password are required.";
	header('location: ../index.php?error=' . $errorMessage);
}
