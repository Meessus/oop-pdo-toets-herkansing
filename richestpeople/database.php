<?php
$host = 'localhost';
$user = 'admin_pdo_iosd2109c';
$pass = 'fgQtoaQr0lyv8zJw';
$dbname = 'oop-pdo-toets-herkansing';

$dsn = "mysql:host=$host;dbname=$dbname";

$sql = "SELECT * FROM richestpeople";
  try {
   $pdo = new PDO($dsn, $user, $pass);
   $stmt = $pdo->query($sql);

   
   if($stmt === false){
    die("Er is een fout opgetreden.");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
