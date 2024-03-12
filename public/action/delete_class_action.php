<?php
include '../settings/connection.php';

if (!isset($_GET['id'])) {
    header("Location: ../view/classes.php");
    exit();
}

$id = intval($_GET['id']);
$del_query = "DELETE FROM Class_Schedules WHERE schedule_id = $id";
$result = $mysqli->query($del_query);

if ($result) {
    // Redirect to chore display page if execution is successful
    header("Location: ../view/classes.php");
    exit();
} else {
    // Take appropriate action (display error on chore_control_view page)
    echo "Error 500: " . mysqli_error($mysqli);
}
?>
