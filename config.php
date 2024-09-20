<?php
// Database connection settings
$servername = "127.0.0.1"; // or "127.0.0.1"
$username = "root"; // MySQL username
$password = "root@123"; // MySQL password
$dbname = "adminregistration";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>