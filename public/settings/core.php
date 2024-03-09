<?php
// Start session if not already started
session_start();
function check_login() {
    // Check if user ID session exists
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login/loginpage.php");
        die();
    }
}
?>
