<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "patientReg";

try {
    $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
    $pdo = new PDO($dsn, $dbUser, $dbPassword);
  // echo "DB Connection success: ";
} catch (PDOException $e) {
    echo "DB Connection Failed: " . $e->getMessage();
}
?>