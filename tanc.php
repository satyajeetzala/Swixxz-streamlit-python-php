<?php include 'navbar.php'; 
include 'conn.php';
?>
<?php


// Fetch terms and conditions text from the database
$result = mysqli_query($conn, "SELECT * FROM tandc");
$row = mysqli_fetch_assoc($result);
$tctext = $row['tctext'];

// Close the database connection
mysqli_close($conn);
?>

<br>
<br>
<div class="container mx-auto p-8">
    <div class="bg-black p-8 shadow-md rounded-md">
        <h2 class="text-3xl text-white font-semibold mb-4">Terms and Conditions</h2>
        <div class="text-gray-600">
            <?php echo nl2br($tctext); // Use nl2br to preserve line breaks from the database ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>