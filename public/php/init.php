<?php
// init.php loads the environment file and sets up the PDO connection
require_once 'env.php';

try {
    loadEnv(__DIR__ . '/../../.env');
} catch (Exception $e) {
    error_log("Error loading \.env in init.php: " . $e->getMessage());
    die("Internal error.");
}

require_once 'connect.php';
require_once 'mysqlTables.php';
?>