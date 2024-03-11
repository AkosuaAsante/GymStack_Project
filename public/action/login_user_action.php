<?php
include '../settings/connection.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if (isset($_POST['sign-in'])) {
    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute SQL query to retrieve user data
    $query = "SELECT * FROM users WHERE email = ?"; 
    $stmt = $mysqli->prepare($query);
    
    if (!$stmt) {    
        $response = array(
            'success' => false,
            'message' => 'Database error: ' . $mysqli->error
        );
    } else {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if any row was returned
        if ($result === false) {
            // Database error
            $response = array(
                'success' => false,
                'message' => 'Database error: ' . $stmt->error
            );
        } elseif ($result->num_rows == 1) {
            // Fetch record
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {                
                // Set user_id in the session
                $_SESSION['user_id'] = $user['user_id'];  
                echo "done";              
                header("Location:../view/Home_Dashboard.php");
                exit;

            } else {
                // Invalid password
                $response = array(
                    'success' => false,
                    'message' => 'Incorrect password'
                );
            }
        } else {
            // User not registered
            $response = array(
                'success' => false,
                'message' => 'User not registered'
            );
        }
    }

    // Send the JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

