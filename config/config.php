<?php

$host = 'localhost';
$dbname = 'test';
$username = 'root';
$password = '';

try {

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

echo "Connected to $dbname on $host successfully.";

} catch (PDOException $e) {

die("Unable to connect to the database $dbname :" . $e->getMessage());

}

?>