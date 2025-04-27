<?php


require_once 'env.php'; // make sure this path is right zaki or whoever
loadEnv(__DIR__ . '/.env');

// Now grab creds from $_ENV
$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$dbname = $_ENV['DB_NAME'];

// Connect
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

echo "Connected successfully 🚀";
?>
