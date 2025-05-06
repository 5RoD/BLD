<?php

global $conn;

$queries = [
    // ContactUS table
    "CREATE TABLE IF NOT EXISTS ContactUS (
        contactus_id INT(6) AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        phonenumber INT(10),
        subject VARCHAR(50),
        message TEXT,
        date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )",
    
// MatchResults table
    "CREATE TABLE IF NOT EXISTS MatchResults (
        result_id INT AUTO_INCREMENT PRIMARY KEY,
        game_title VARCHAR(50) NOT NULL,
        our_team_name VARCHAR(50) NOT NULL,
        enemy_team_name VARCHAR(50) NOT NULL,
        our_score INT NOT NULL,
        enemy_score INT NOT NULL,
        match_type VARCHAR(50) NOT NULL,
        match_result VARCHAR(50) NOT NULL,
        match_date DATE NOT NULL,
        result_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )"
];

// Runs all the tables creations
try {
    foreach ($queries as $sql) {
        $conn->exec($sql);
    }
} catch (PDOException $e) {
    error_log("Table creation error: " . $e->getMessage());
    die("Internal error creating tables.");
}
?>