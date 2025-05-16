<?php
require_once("../php/connect.php");

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$dbname = $_ENV['DB_NAME'];
$port = $_ENV['DB_PORT'];
global $conn;



try {


// Get all contact messages
$stmt = $conn->query("SELECT * FROM MatchResults ORDER BY result_date DESC");
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "COnnected sucessfully";
} catch (PDOException $e) {
    die("DB ERROR: " . $e->getMessage());
}
?>

