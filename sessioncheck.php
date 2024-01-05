<?php
// Start the session session_start();

// Check if the user is not logged in (session variable not set)
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page using JavaScript
    echo '<script>window.location.href = "admin/login.php";</script>';
    // Stop further execution to prevent content from being displayed
    exit();
}
?>
