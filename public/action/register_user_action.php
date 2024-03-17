<?php
include '../settings/connection.php';

$registration_success = false;
$registration_error = '';

if (true) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];   
    $gymname = $_POST['gymname'];

    // Encrypt the password 
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the connection object is valid
    if ($mysqli) {
        // Prepare the SQL statement
        $query = "INSERT INTO users (fname, lname, email, phoneNumber, password, gymname) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);

        if ($stmt) {
            // Bind parameters and execute the query
            $stmt->bind_param("ssssss", $fname, $lname, $email,$phoneNumber, $hashed_password, $gymname);           
            
            if ($stmt->execute()) {
                // Set registration success message and redirect
                $registration_success = true;
                $redirect_url = "../login/loginpage.php?registration_success=true"; 
                header("Location: $redirect_url");
                exit();

            } else {
                // Redirect with a generic error message
                header("Location: ../login/register.php?registration_error=true");
                exit();
            }
        } else {
            // Redirect with a generic error message
            header("Location: ../login/register.php?registration_error=true");
            exit();
      }
    } else {

        header("Location: ../login/register.php?registration_error=true");
         exit();
     }
 }

