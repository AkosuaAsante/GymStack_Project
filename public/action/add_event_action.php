<?php
include '../settings/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and assign each to a variable
    $name = $_POST['eventName'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    $insertQuery = "INSERT INTO Events (name, description, date)
     VALUES ('$name', '$description', '$date')";
    $result = $mysqli->query($insertQuery);

    if ($result) {
        // Redirect to login page if execution is successful
        header("Location: ../view/Events.php");
        exit();
    } else {

        echo "500: Internal Server Error";
        exit();
    }
}

$mysqli->close();
?>
