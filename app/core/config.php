<?php

// website title
define("WEBSITE_NAME", "That");

/* -------------------------------------------------------------------------- */
// Load environment variables from .env file
$env = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/.env');

// Define database constants using the .env file variables
define('DB_TYPE', 'mysql');
define('DB_NAME', $env['DB_NAME']);
define('DB_USER', $env['DB_USER']);
define('DB_PASS', $env['DB_PASS']);
define('DB_HOST', $env['DB_HOST']);

// Optionally, establish a database connection here if needed
$conn = new mysqli(
    DB_HOST,
    DB_USER,
    DB_PASS,
    DB_NAME
);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/* -------------------------------------------------------------------------- */

//https protocal
define('PROTOCAL', 'https');

// Get protocol and server name
$protocol = $_SERVER['REQUEST_SCHEME'] . "://";
$host = $_SERVER['SERVER_NAME'];

// Define the root URL
define('ROOT', $protocol . $host . "/Portfolio2024/public/");

// Define the assets URL
define('ASSETS', ROOT . "assets");

//set to true to allow error reporting. set to false when you upload online to stop error reporting

define('DEBUG',true);

if(DEBUG) {
	ini_set("display_errors",1);
}else{
	ini_set("display_errors",0);
}