<?php

session_start();
if (!isset($_SESSION['user'])) {
	header('location: index.php');
	exit();
}

$fname = $_SESSION['user']['fname'];
$email = $_SESSION['user']['email'];
$phone = $_SESSION['user']['phone'];
$address = $_SESSION['user']['address'];
$general = $_SESSION['user']['general'];
$gender = $_SESSION['user']['gender'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container mt-5">
		<?php if (!isset($_GET["incorrect"])) : ?>
			<div class="alert alert-success">You are login successfully!</div>
		<?php endif ?>
		<h1 class="mb-3"><?php echo $fname ?> (Manager)</h1>
		<ul class="list-group">
			<li class="list-group-item">
				<b>Email: </b> <?php echo $email ?>
			</li>
			<li class="list-group-item">
				<b>Phone: </b> <?php echo $phone ?>
			</li>
			<li class="list-group-item">
				<b>Address: </b> <?php echo $address ?>
			</li>
			<li class="list-group-item">
				<b>General: </b> <?php echo $general ?>
			</li>
			<li class="list-group-item">
				<b>Gender: </b> <?php echo $gender ?>
			</li>
		</ul>
		</br>
		<a href="_actions/logout.php">Logout</a>
	</div>
</body>

</html>