<?php
// Declare constant variables for database connection parameters
$SERVER = "18.133.105.236";
$USERNAME = "root";
$PASSWORD = "cs341webtech";
$DATABASE = "gym";

$mysqli = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE) or die("The database was not created");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
