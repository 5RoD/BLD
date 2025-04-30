<?php
// Use this file to connect to mysql correctly!
require_once 'env.php';
require_once 'connect.php';
// loads the database info safely
try {
    loadEnv(__DIR__ . '/../../.env');
} catch (Exception $e) {
    error_log("Yo an error happened fix me @ init.php" . $e -> getMessage());
}

?>