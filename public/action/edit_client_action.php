<?php
include '../settings/connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id =intval($_GET['id']);
    $fname = $_POST['lname'];
    $lname = $_POST['fname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $role = intval($_POST['role']);
    $plan = intval($_POST['subscription']);

    // Prepare and execute the UPDATE query
    $query = "UPDATE Members SET plan_id = '$plan', role_id = '$role', first_name = '$fname', last_name = '$lname', email = '$email', phone_number = '$number'  WHERE member_id = $id";
    $result = $mysqli->query($query);
    if ($result) {
        header("Location: ../view/Client_list.php");
        exit(); 
    } else {
        // Display error message if query execution failed
        echo "Error updating chore: " . mysqli_error($mysqli);
    }

}
?>
