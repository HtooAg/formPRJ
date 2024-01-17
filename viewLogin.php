<?php
include_once("./_actions/dbConfig.php");
include_once("./_actions/login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container mt-4">
		<div class="row justify-content-center ">
			<div class="col-xl-12 col-lg-10">
				<?php if (!isset($_GET["incorrect"])) : ?>
					<div class="alert alert-success alert-dismissible fade show text-center" id="alertBox" role="alert">
						<strong>You are now inserted new record successfully!</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php endif ?>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Password</th>
								<th scope="col">Phone</th>
								<th scope="col">Address</th>
								<th scope="col">General</th>
								<th scope="col">Gender</th>
							</tr>
						</thead>
						<tbody class="table-group-divider">
							<?php foreach ($result as $row) : ?>
								<tr>
									<th scope="row"><?php echo $row->id ?></th>
									<td scope="row"><?php echo $row->name ?></td>
									<td scope="row"><?php echo $row->email ?></td>
									<td scope="row"><?php echo $row->password ?></td>
									<td scope="row"><?php echo $row->phone ?></td>
									<td scope="row"><?php echo $row->address ?></td>
									<td scope="row"><?php echo $row->general ?></td>
									<td scope="row"><?php echo $row->gender ?></td>
								</tr>
							<?php endforeach ?>
							<a href="./createLogin.php" class="btn btn-success">Add</a>
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
</body>

</html>