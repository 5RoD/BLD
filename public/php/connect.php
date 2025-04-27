<?php


require_once 'env.php'; // make sure this path is right zaki or whoever
loadEnv(__DIR__ . '/../../.env'); // Updated path to root directory

// Now grab creds from $_ENV
$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$dbname = $_ENV['DB_NAME'];
$port = $_ENV['DB_PORT'];

// Connect
$conn = new mysqli($host, $user, $pass, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
