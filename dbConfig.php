<?php
$db = new PDO('mysql:dbhost=localhost; dbname=register', 'root', '', [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$statement = $db->query("SELECT * FROM reg");
$result = $statement->fetchAll();
print_r($result) . "</br>";

// $sql = ("INSERT INTO reg(name, email, password, phone, address, general, gender) VALUES ('Htoo Aung Wai', 'htoow243@gmail.com', 'htooaung-123', '09975463223', 'Latha Township, Yangon', 'Programmer', 'Male')");

// $sql = ("UPDATE reg SET name = 'Alice', email = 'alice@gmail.com', password = '123', phone = '09432423423', address='Kanthar Township, Mandalay', general = 'Software Engineer', gender = 'Female' WHERE id = 3");

// $sql = ("UPDATE reg SET name = 'Bob', email = 'bob@gmail.com', password = 'bob-234', phone = '09234253454', address='Mingalardon Township, Yangon', general = 'Human Rosources', gender = 'Male' WHERE id = 4");

$sql = ("UPDATE reg SET name = 'Sofia', email = 'sofia@gmail.com', password = 'sofia-234', phone = '09793223345', gender = 'Female' WHERE id = 5");

$db->query($sql);
$error = "Error inserting record!";
if ($sql == TRUE) {
	echo "Record inserted successfully" . "</br>";
} else {
	echo "Error: " . $sql . "<br>" . $error;
}
