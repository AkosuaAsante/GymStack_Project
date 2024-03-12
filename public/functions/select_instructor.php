<?php
include '../settings/connection.php';

// SELECT query on the "family_name" table
$query = "SELECT * FROM Instructors";
$result = $mysqli->query($query);

// Check if execution worked
if (!$result) {
    die("Error executing the query: " . $mysqli->error);
}

// Fetch the results
$instructors = array();
while ($row = $result->fetch_assoc()) {
    $instructors[] = $row;
}

$mysqli->close();
?>
