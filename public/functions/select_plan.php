<?php
include '../settings/connection.php';

// SELECT query on the "family_name" table
$query = "SELECT * FROM Subscription_Plans";
$result = $mysqli->query($query);

// Check if execution worked
if (!$result) {
    die("Error executing the query: " . $mysqli->error);
}

// Fetch the results
$plans = array();
while ($row = $result->fetch_assoc()) {
    $plans[] = $row;
}

$mysqli->close();
?>
