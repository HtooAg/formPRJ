<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<style>
		.wrap {
			width: 100%;
			max-width: 400px;
			margin: 40px auto;
		}
	</style>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="wrap">
		<?php if (isset($_GET["error"])) : ?>
			<div class="alert alert-danger"><?php echo ($_GET["error"]); ?></div>
		<?php endif ?>
		<h1 class="h3 mb-3 text-center">Login Form</h1>
		<form action="_actions/login.php" method="post">
			<label for="fname" class="mb-2">First Name:</label>
			<input type="text" name="fname" id="fname" class="form-control mb-3" placeholder="First Name" required>

			<label for="email" class="mb-2">Email:</label>
			<input type="email" name="email" id="email" class="form-control mb-3" placeholder="Email" required>

			<label for="password" class="mb-2">Password:</label>
			<input type="password" name="password" id="password" class="form-control mb-3" placeholder="Password" required>

			<label for="phone" class="mb-2">Phone:</label>
			<input type="tel" name="phone" id="phone" class="form-control mb-3" placeholder="Phone" required>

			<label for="address" class="mb-2">Address:</label>
			<input type="text" name="address" id="address" class="form-control mb-3" placeholder="Address" required>

			<label for="general" class="mb-2">General:</label>
			<select class="form-select mb-3" name="general" aria-label="Default select example">
				<option>General Enquiry</option>
				<option>Business Enquiry</option>
				<option>Media Enquiry</option>
			</select>

			<label for="gender" class="mb-2">Gender:</label>
			<div class="col-sm-10 w-100 mb-3">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
					<label class="form-check-label" for="gridRadios1">
						Male
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
					<label class="form-check-label" for="gridRadios2">
						Female
					</label>
				</div>
			</div>

			<button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
		</form>

		<br>
		<div class="text-center"><a href="_actions/register.php">Register</a></div>
	</div>
</body>

</html>