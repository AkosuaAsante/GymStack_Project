<?php
include '../settings/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and assign each to a variable
    $fname = $_POST['lname'];
    $lname = $_POST['fname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $role = intval($_POST['role']);
    $plan = intval($_POST['subscription']);


    $insertQuery = "INSERT INTO Members (first_name, last_name, email, phone_number, plan_id, role_id)
     VALUES ('$fname', '$lname', '$email', '$number', $plan, $role)";
    $result = $mysqli->query($insertQuery);

    if ($result) {
        // Redirect to login page if execution is successful
        header("Location: ../view/Client_list.php");
        exit();
    } else {

        echo "500: Internal Server Error";
        exit();
    }
}

$mysqli->close();
?>
