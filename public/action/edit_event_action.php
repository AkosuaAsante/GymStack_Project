<?php
include '../settings/connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id =intval($_GET['id']);
    $name = $_POST['eventName'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    // Prepare and execute the UPDATE query
    $query = "UPDATE Events SET name = '$name', date = '$date', description = '$description' WHERE event_id = $id";
    $result = $mysqli->query($query);
    if ($result) {
        header("Location: ../view/Events.php");
        exit(); 
    } else {
        // Display error message if query execution failed
        echo "Error updating chore: " . mysqli_error($mysqli);
    }

}
?>
