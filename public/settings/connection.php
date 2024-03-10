<?php
// Declare constant variables for database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "gym";

// Use mysqli connection method
$mysqli = new mysqli($servername, $username , $password, $database);

// Check if the connection worked
if ($mysqli->connect_error) {
    echo "Die Failed To connect to Database";
    die("Connection failed: " . $mysqli->connect_error);
}
?>
