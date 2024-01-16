<?php
include("dbConfig.php");
// $sql = ("INSERT INTO reg(name, email, password, phone, address, general, gender) VALUES ('Alice', 'alice@gmail.com', 'alice-123', '09975463223', 'Latha Township, Yangon', 'Developer', 'Female')");

$sql = ("UPDATE reg SET name = 'Htoo Aung Wai', email = 'htoow243@gmail.com', password = 'htooaung-123', phone = '09750115358', address='Lanmadaw Township, Yangin', general = 'Software Engineer', gender = 'Male' WHERE id = 2");

// $sql = ("UPDATE reg SET name = 'Bob', email = 'bob@gmail.com', password = 'bob-234', phone = '09234253454', address='Mingalardon Township, Yangon', general = 'Human Rosources', gender = 'Male' WHERE id = 4");

// $sql = ("UPDATE reg SET name = 'Sofia', email = 'sofia@gmail.com', password = 'sofia-234', phone = '09793223345', gender = 'Female' WHERE id = 5");

// $sql = ("DELETE FROM reg WHERE name = 'Alice'");
$db->query($sql);
$error = "Error inserting record!";
if ($sql == TRUE) {
	echo "Record updated successfully" . "</br>";
} else {
	echo "Error: " . $sql . "<br>" . $error;
}
