<?php
include_once('./_actions/dbConfig.php');
include_once('./_actions/edit.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit User</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<style>
		.wrap {
			width: 100%;
			max-width: 700px !important;
			margin: 40px auto;
		}
	</style>
</head>

<body>
	<div class="wrap container">
		<h1 class="h3 mb-3 text-center">Update Form</h1>

		<form class="row" method="post" action="./_actions/edit.php?id=<?= $id ?>">
			<div class="col-sm-6">
				<label for="name" class="mb-2">Full Name:</label>
				<input type="text" name="name" id="name" class="form-control mb-3" placeholder="Full Name" required value="<?= $row['name'] ?>">
			</div>

			<div class="col-sm-6">
				<label for="email" class="mb-2">Email:</label>
				<input type="email" name="email" id="email" value="<?= $row['email'] ?>" class="form-control mb-3" placeholder="Email" required>
			</div>

			<div class="col-sm-6">
				<label for="password" class="mb-2">Password:</label>
				<input type="password" name="password" id="password" value="<?= $row['password'] ?>" class="form-control mb-3" placeholder="Password" required>
			</div>

			<div class="col-sm-6">
				<label for="phone" class="mb-2">Phone:</label>
				<input type="tel" name="phone" id="phone" value="<?= $row['phone'] ?>" class="form-control mb-3" placeholder="Phone" required>
			</div>

			<div class="col-12">
				<label for="address" class="mb-2">Address:</label>
				<textarea class="form-control mb-3" name="address" id="address" rows="3" placeholder="Enter your Address ..." required><?= $row['address'] ?></textarea>
			</div>

			<div class="col-sm-6">
				<label for="general" class="mb-2">General:</label>
				<select class="form-select mb-3" name="general" aria-label="Default select example">
					<option <?= $row['general'] == 'Manager' ? 'selected' : '' ?>>Manager</option>
					<option <?= $row['general'] == 'Developer' ? 'selected' : '' ?>>Developer</option>
					<option <?= $row['general'] == 'Software Engineer' ? 'selected' : '' ?>>Software Engineer</option>
				</select>
			</div>

			<div class="col-sm-6">
				<label for="gender" class="mb-2">Gender:</label>
				<div class="col-sm-10 w-100 mb-3">
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" value="Male" <?= $row['gender'] == 'Male' ? 'checked' : '' ?>>
						<label class="form-check-label" for="gridRadios1">
							Male
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" value="Female" <?= $row['gender'] == 'Female' ? 'checked' : '' ?>>
						<label class="form-check-label" for="gridRadios2">
							Female
						</label>
					</div>
				</div>
			</div>

			<div class="col-12">
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</form>

	</div>

</body>

</html>