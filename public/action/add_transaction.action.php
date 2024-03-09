<?php
include '../settings/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and assign each to a variable
    $type = $_POST['transactionType'];
    $amount = intval($_POST['amount']);
    $description = $_POST['description'];


    $insertQuery = "INSERT INTO Transactions (transaction_type, monetary_value, descriptions)
     VALUES ('$type', $amount, '$description')";
    $result = $mysqli->query($insertQuery);

    if ($result) {
        // Redirect to login page if execution is successful
        header("Location: ../view/Finance.php");
        exit();
    } else {

        echo "500: Internal Server Error";
        exit();
    }
}

$mysqli->close();
?>
