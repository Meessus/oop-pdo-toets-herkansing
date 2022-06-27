<?php
class Database {

// properties
private $host = 'localhost';
private $user = 'admin_pdo_iosd2109c';
private $pass = 'fgQtoaQr0lyv8zJw';
private $dbname = 'oop-pdo-toets-herkansing';

private $sql = "SELECT * FROM richestpeople";

function __construct()
{
  $dsn = "mysql:host=$this->host;dbname=$this->dbname";
  try {
   $pdo = new PDO($dsn, $this->user, $this->pass);
   $stmt = $pdo->query($this->sql);

   
   if($stmt === false){
    die("Er is een fout opgetreden.");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
}
}