<?php
include_once("./_actions/dbConfig.php");

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
									<th scope="row"><?= $row->id ?></th>
									<td scope="row"><?= $row->name ?></td>
									<td scope="row"><?= $row->email ?></td>
									<td scope="row"><?= $row->password ?></td>
									<td scope="row"><?= $row->phone ?></td>
									<td scope="row"><?= $row->address ?></td>
									<td scope="row"><?= $row->general ?></td>
									<td scope="row"><?= $row->gender ?></td>
									<td scope="row"><a href="" class="btn btn-success">Edit</a></td>
									<td scope="row"><a href="./_actions/delete.php?id=<?= $row->id ?>" class="btn btn-danger">Delete</a></td>
								</tr>
							<?php endforeach ?>

						</tbody>

					</table>
					<a href="./createLogin.php" class="btn btn-success">Add</a>
				</div>
			</div>
		</div>
	</div>
</body>

</html>