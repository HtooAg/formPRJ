<?php
include_once("dbConfig.php");

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	try {
		$sql = "SELECT * FROM reg WHERE id = :id";
		$statement = $db->prepare($sql);
		$statement->execute([':id' => $id]);
		$row = $statement->fetch(PDO::FETCH_ASSOC);

		if (!$row) {
			echo "User not found";
		}

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$general = $_POST['general'];
			$gender = $_POST['gender'];

			$sql = "UPDATE reg SET name = :name, email = :email, password = :password, phone = :phone, address = :address, general = :general, gender = :gender WHERE id = :id";
			$statement = $db->prepare($sql);
			$result = [
				':id' => $id,
				':name' => $name,
				':email' => $email,
				':password' => $password,
				':phone' => $phone,
				':address' => $address,
				':general' => $general,
				':gender' => $gender,
			];
			$statement->execute($result);

			header('location: ../viewLogin.php');
			exit();
		}
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
		exit();
	}
} else {
	echo "Error: ID parameter not set";
}
