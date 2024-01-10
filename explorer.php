<?php 
include 'navbar.php';
include 'conn.php';
// Start the session 
session_start();

// Check if the user is not logged in (session variable not set)
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page using JavaScript
    echo '<script>window.location.href = "login.php";</script>';
    // Stop further execution to prevent content from being displayed
    exit();
}
?>

<br>
<br>

<div class="h-96 mt-5" style="min-height: 800px;">
  <iframe class="w-10/12 h-full rounded-xl dark:bg-gray-800 mx-auto" src="http://localhost:8501/" title="Streamlit App" frameborder="0" allowfullscreen></iframe>
  </div>

  <?php 
include 'footer.php';

?>
