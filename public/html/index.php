<?php
// Load header
include_once('../includes/header.php');

// Load the database info and set up the MySQL connection
require_once('../php/init.php');

// Default page is set to 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page_file = $page . '.php';

if (file_exists($page_file)) {
    include_once($page_file);
} else {
    include_once('404.php');
}

// Load footer
include_once('../includes/footer.php');
?>
