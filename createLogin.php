<?php
include_once('./_actions/create.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<style>
		.wrap {
			width: 100%;
			max-width: 700px !important;
			margin: 40px auto;
		}
	</style>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
	<div class="wrap container">
		<h1 class="h3 mb-3 text-center">User Table Form</h1>

		<form class="row" action="#" method="post">
			<div class="col-sm-6">
				<label for="name" class="mb-2">Full Name:</label>
				<input type="text" name="name" id="name" class="form-control mb-3" placeholder="Full Name" required>
			</div>

			<div class="col-sm-6">
				<label for="email" class="mb-2">Email:</label>
				<input type="email" name="email" id="email" class="form-control mb-3" placeholder="Email" required>
			</div>

			<div class="col-sm-6">
				<label for="password" class="mb-2">Password:</label>
				<input type="password" name="password" id="password" class="form-control mb-3" placeholder="Password" required>
			</div>

			<div class="col-sm-6">
				<label for="phone" class="mb-2">Phone:</label>
				<input type="tel" name="phone" id="phone" class="form-control mb-3" placeholder="Phone" required>
			</div>

			<div class="col-12">
				<label for="address" class="mb-2">Address:</label>
				<textarea class="form-control mb-3" name="address" id="address" rows="3" placeholder="Enter your Address ..." required></textarea>
			</div>

			<div class="col-sm-6">
				<label for="general" class="mb-2">General:</label>
				<select class="form-select mb-3" name="general" aria-label="Default select example">
					<option>Manager</option>
					<option>Developer</option>
					<option>Software Engineer</option>
				</select>
			</div>

			<div class="col-sm-6">
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
			</div>

			<div class="col-12">
				<button type="submit" class="w-100 btn btn-lg btn-primary">Create Form</button>
			</div>
		</form>
	</div>
	<script>
		setTimeout(() => {
			document.querySelector("#alertBox").style.display = "none";
		}, 3000);
	</script>
</body>

</html>