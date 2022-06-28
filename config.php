<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {
  $db = new PDO("mysql:host=$servername;dbname=price", $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  $e->getMessage();
}