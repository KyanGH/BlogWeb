<?php 

$dsn = "mysql:host=localhost;dbname=blogWeb";
$dbuser_name = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbuser_name, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}