<?php
// connect.php creates a global PDO connection using already loaded .env variables
require_once 'env.php';

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$dbname = $_ENV['DB_NAME'];
$port = $_ENV['DB_PORT'];

// Try to connect to database
try {
    global $conn;
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed @ connect.php: " . $e->getMessage());
}
?>