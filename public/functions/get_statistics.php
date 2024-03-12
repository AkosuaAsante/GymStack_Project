<?php
include '../settings/connection.php';


// Write the SELECT all class query
$query = "SELECT * FROM Transactions";
$result = $mysqli->query($query);

// Check if execution worked
if (!$result) {
    exit("500: Internal Server Error");
}


$transactions = array();

while ($row = mysqli_fetch_assoc($result)) {
    $transactions[] = $row;
}

$revenue = 0;
$expenses = 0;
$total_customers = 0;
$active_customers = 0;

foreach ($transactions as $transaction) {

    if ($transaction['transaction_type'] == 'IN') {
        $revenue += $transaction['monetary_value'];
    } else {
        $expenses += $transaction['monetary_value'];
    }
}

$profit = $revenue - $expenses;


// Write the SELECT all class query
$query = "SELECT * FROM Members";
$result = $mysqli->query($query);

// Check if execution worked
if (!$result) {
    exit("500: Internal Server Error");
}


$members = array();

while ($row = mysqli_fetch_assoc($result)) {
    $members[] = $row;
}


foreach ($members as $member) {
    if ($member['plan_id'] != 4) {
        $active_customers++;
    }
    $total_customers++;
}

?>