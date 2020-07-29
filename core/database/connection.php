<?php
$dsn = 'mysql:host=localhost; dbname=tweety';
$user = 'root';
$pass = 'chelseatavb';

try {
  $pdo = new PDO($dsn, $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
  echo 'Connection error! ' . $err->getMessage();
}
