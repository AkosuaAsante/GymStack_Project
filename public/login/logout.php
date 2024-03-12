<?php
// Start session
session_start();

// Unset the session IDs created during login
unset($_SESSION['user_id']);
unset($_SESSION['role']);

// Redirect to login_view page
header("Location:../view/landingpage.php");
exit(); 

