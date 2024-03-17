<?php
session_start();

unset($_SESSION['user_id']);

// Redirect to login_view page
header("Location: ../login/loginpage.php");
exit();
?>
