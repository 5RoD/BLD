<?php
// Load header
include_once('../includes/header.php');

// Load the database info and set up the MySQL connection
require_once('../php/init.php');

// Default page is set to 'home'
$page = isset($_GET['page']) ? basename($_GET['page']) : 'home';

// check if the page ends with .php
$page_file = $page . '.php';
if (file_exists($page_file)) { // if the file is REAL!!#!#?
    include_once($page_file); // this will load it
} else {
    include_once('404.php'); // Otherwise it's bad :(
}

// Load footer
include_once('../includes/footer.php');
?>
