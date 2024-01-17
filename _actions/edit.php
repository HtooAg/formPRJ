<?php
// include_once("dbConfig.php");

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// 	$name = $_POST['name'];
// 	$email = $_POST['email'];
// 	$password = $_POST['password'];
// 	$phone = $_POST['phone'];
// 	$address = $_POST['address'];
// 	$general = $_POST['general'];
// 	$gender = $_POST['gender'];

// 	$sql = "UPDATE reg SET name = '$name', password = '$password', phone = '$phone', address ='$address', general ='$general', gender = '$gender' WHERE id =" . $_GET['id'];
// 	$db->query($sql);

// 	header('location: ../viewLogin.php');
// 	exit();
// } else {
// 	echo "Error";
// }


// <!DOCTYPE html>
// <html lang="en">

// <head>
// 	<meta charset="UTF-8">
// 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
// 	<title>Home</title>
// 	<link rel="stylesheet" href="../css/bootstrap.min.css">
// 	<script src="../js/bootstrap.min.js"></script>
// 	<style>
// 		.wrap {
// 			width: 100%;
// 			max-width: 700px !important;
// 			margin: 40px auto;
// 		}
// 	</style>
// </head>

// <body>
// 	<div class="wrap container">
// 		<h1 class="h3 mb-3 text-center">User Table Form</h1>

// 		<form class="row" method="post" action="./editLogin.php?id=<?= $_GET['id'] 
?>">
// <div class="col-sm-6">
	// <label for="name" class="mb-2">Full Name:</label>
	// <input type="text" name="name" id="name" class="form-control mb-3" placeholder="Full Name" required value="<?= $result['name'] ?>">
	// </div>

// <div class="col-sm-6">
	// <label for="email" class="mb-2">Email:</label>
	// <input type="email" name="email" id="email" value="<?= $result['email'] ?>" class="form-control mb-3" placeholder="Email" required>
	// </div>

// <div class="col-sm-6">
	// <label for="password" class="mb-2">Password:</label>
	// <input type="password" name="password" id="password" value="<?= $result['password'] ?>" class="form-control mb-3" placeholder="Password" required>
	// </div>

// <div class="col-sm-6">
	// <label for="phone" class="mb-2">Phone:</label>
	// <input type="tel" name="phone" id="phone" value="<?= $result['phone'] ?>" class="form-control mb-3" placeholder="Phone" required>
	// </div>

// <div class="col-12">
	// <label for="address" class="mb-2">Address:</label>
	// <textarea class="form-control mb-3" name="address" id="address" rows="3" placeholder="Enter your Address ..." required><?= $result['address'] ?></textarea>
	// </div>

// <div class="col-sm-6">
	// <label for="general" class="mb-2">General:</label>
	// <select class="form-select mb-3" name="general" aria-label="Default select example">
		// <option <?= $result['general'] == 'Manager' ? 'selected' : '' ?>>Manager</option>
		// <option <?= $result['general'] == 'Developer' ? 'selected' : '' ?>>Developer</option>
		// <option <?= $result['general'] == 'Software Engineer' ? 'selected' : '' ?>>Software Engineer</option>
		// </select>
	// </div>

// <div class="col-sm-6">
	// <label for="gender" class="mb-2">Gender:</label>
	// <div class="col-sm-10 w-100 mb-3">
		// <div class="form-check">
			// <input class="form-check-input" type="radio" name="gender" value="Male" <?= $result['gender'] == 'Male' ? 'checked' : '' ?>>
			// <label class="form-check-label" for="gridRadios1">
				// Male
				// </label>
			// </div>
		// <div class="form-check">
			// <input class="form-check-input" type="radio" name="gender" value="Female" <?= $result['gender'] == 'Female' ? 'checked' : '' ?>>
			// <label class="form-check-label" for="gridRadios2">
				// Female
				// </label>
			// </div>
		// </div>
	// </div>

// <div class="col-12">
	// <button type="submit" class="btn btn-success">Update</button>
	// </div>
// </form>
// </div>
// </body>

//

</html>