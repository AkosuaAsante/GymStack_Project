<?php
include '../settings/connection.php';

$registration_success = false;
$registration_error = '';

if (isset($_POST['sign-in'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $gymname = $_POST['gymname'];

    // Encrypt the password 
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Corrected variable name

    // Check if the connection object is valid
    if ($con) {
        // Prepare the SQL statement
        $query = "INSERT INTO customers (fname, lname, email, phoneNumber, password, role, gymname) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($query);

        if ($stmt) {
            // Bind parameters and execute the query
            $stmt->bind_param("ssssiss", $fname, $lname, $email, $phoneNumber, $hashed_password, $role, $gymname);
            
            if ($stmt->execute()) {
                // Set registration success message and redirect
                $registration_success = true;
                $redirect_url = "../login/loginpage.php?registration_success=true"; 
                header("Location: $redirect_url");
                exit();
            } else {
                // Set registration error message
                $registration_error = "Registration failed. Please try again. " . $stmt->error;
            }
        } else {
            // Set registration error message
            $registration_error = "Error: Statement preparation failed.";
        }
    } else {
        // Set registration error message
        $registration_error = "Error: Database connection failed.";
    }
}

// If form not submitted, redirect back to register_view page
header("Location: ../login/register_view.php");
exit();
?>
