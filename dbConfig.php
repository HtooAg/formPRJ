<?php
$db = new PDO('mysql:dbhost=localhost; dbname=register', 'root', '', [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

// Retrieving the records
$statement = $db->query("SELECT * FROM reg");
$result = $statement->fetchAll();
