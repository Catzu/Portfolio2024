<?php

// website title
define("WEBSITE_NAME", "That");

// Database variables
define('DB_TYPE', 'mysql');
define('DB_NAME', 'portfolio_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

//https protocal
define('PROTOCAL', 'https');

// Get protocol and server name
$protocol = $_SERVER['REQUEST_SCHEME'] . "://";
$host = $_SERVER['SERVER_NAME'];

// Define the root URL
define('ROOT', $protocol . $host . "/Portfolio2024/public/");

// Define the assets URL
define('ASSETS', ROOT . "assets/");

//set to true to allow error reporting. set to false when you upload online to stop error reporting

define('DEBUG',true);

if(DEBUG) {
	ini_set("display_errors",1);
}else{
	ini_set("display_errors",0);
}