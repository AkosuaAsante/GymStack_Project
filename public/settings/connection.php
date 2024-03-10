<?php
// Declare constant variables for database connection parameters
$servername = "localhost:3306";
$username = "root";
$password = "@StrateGicPlan20178##";
$database = "gym";

// Use mysqli connection method
$mysqli = new mysqli($servername, $username, $password, $database);

// Check if the connection worked
if ($mysqli->connect_error) {
    error_log("Connection failed: " . $mysqli->connect_error);
    die("Sorry, something went wrong. Please try again later.");
}
?>
