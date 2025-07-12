<?php
$host ="localhost";
// $database = "esifeebu_astur";
// $user = "esifeebu_astur";
// $pass = "esifeebu_astuR";
$database = "db_hullka";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass, array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
                    PDO::ATTR_TIMEOUT => "1",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ));
} catch (PDOException $e) {
    die("PDO Connection Error: " . $e->getMessage());
}
?>