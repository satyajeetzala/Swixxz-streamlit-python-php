<?php
include 'conn.php';


if (isset($_GET['id'])) {
    $deleteId = $_GET['id'];

    // Delete the concert record from the database
    $deleteSql = "DELETE FROM concerts WHERE id=$deleteId";

    if ($conn->query($deleteSql) === TRUE) {
        ?> <script>alert('Concert deleted successfully!');</script>";
<?php header("Location: editconcerts.php");
    } else {
        echo "<p class='text-red-500'>Error deleting concert: " . $conn->error . "</p>";
    }
}



?>
