<?php

// creates necessary tables if they don’t exist
global $conn;
$sql = "CREATE TABLE IF NOT EXISTS ContactUS (
    contactus_id INT(6) AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    subject VARCHAR(50),
    message TEXT,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
)";
try {
    $conn->exec($sql);
} catch (PDOException $e) {
    error_log("Table creation error: " . $e->getMessage());
    die("Internal error creating tables.");
}
?>