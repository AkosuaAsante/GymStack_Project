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

foreach ($transactions as $transaction) {

    echo "<tr>
    <td>" . $transaction['transaction_type'] . "</td>
    <td>" . $transaction['monetary_value'] . "</td>
    <td>" . $transaction['descriptions'] . "</td>
</tr>";
}
