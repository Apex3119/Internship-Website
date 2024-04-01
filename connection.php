<?php

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "dmrc-internship";

// Create a connection
$conn =  mysqli_connect($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the protocol (http or https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

// Get the host (domain name)
$host = $_SERVER['HTTP_HOST'];

// Get the base path (if your application is not in the root directory of the server)
$base_path = dirname($_SERVER['PHP_SELF']);

// Construct the base URL
$base_url = $protocol . "://" . $host . $base_path . "/";

// If your application is in the root directory, you can use:
// $base_url = $protocol . "://" . $host . "/";

// Output the base URL
define("BASEURL", $base_url);


?>