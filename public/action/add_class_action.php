<?php
include '../settings/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and assign each to a variable
    $className = $_POST['class-name'];
    $classDate = $_POST['class-date'];
    $classEndTime = $_POST['class-end-time'];
    $classStartTime = $_POST['class-start-time'];
    $instructorId = intval($_POST['instructor-name']);


    $insertQuery = "INSERT INTO Class_Schedules (class_name, instructor_id, class_date, start_time, end_time)
     VALUES ('$className', $instructorId, '$classDate', '$classStartTime', '$classEndTime')";
    $result = $mysqli->query($insertQuery);

    if ($result) {
        // Redirect to login page if execution is successful
        header("Location: ../view/classes.php");
        exit();
    } else {

        echo "500: Internal Server Error";
        exit();
    }
}

$mysqli->close();
?>
