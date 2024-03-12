<?php
// Declare constant variables for database connection parameters
$SERVER = "localhost:3308";
$USERNAME = "root";
$PASSWORD = "@StrateGicPlan20178##";
$DATABASE = "gym";

$mysqli = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE) or die("The database was not created");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
