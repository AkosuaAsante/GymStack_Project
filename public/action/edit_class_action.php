<?php
include '../settings/connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id =intval($_GET['id']);
    $className = $_POST['class-name'];
    $classDate = $_POST['class-date'];
    $classEndTime = $_POST['class-end-time'];
    $classStartTime = $_POST['class-start-time'];
    $instructorId = intval($_POST['instructor-name']);

    echo $id;
    echo $className;

    // Prepare and execute the UPDATE query
    $query = "UPDATE Class_Schedules SET instructor_id = '$instructorId', class_name = '$className', class_date = '$classDate', start_time = '$classStartTime', end_time = '$classEndTime'  WHERE schedule_id = $id";
    $result = $mysqli->query($query);
    if ($result) {
        header("Location: ../view/classes.php");
        exit(); 
    } else {
        // Display error message if query execution failed
        echo "Error updating chore: " . mysqli_error($mysqli);
    }

}
?>
