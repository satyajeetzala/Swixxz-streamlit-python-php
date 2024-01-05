<?php
include 'navbar.php';
include 'conn.php';
?>
<?php
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
<br>
<div class="relative w-11/12 h-76 mx-auto overflow-hidden rounded-lg mt-12">
    <!-- Landscape Image -->
    <img class="w-full h-full object-cover" src="admin/images/concertsjxdn.jpg" alt="Landscape Image">

    <!-- Text Overlay and Button -->
    <div class="absolute inset-0 flex items-center text-white decoration-green justify-center text-center bg-black bg-opacity-20">
        <div>
            <h2 class="text-4xl font-bold mb-4"><br> </h2><b>
            <p class="text-4xl mt-12 text-stone-500	tracking-widest mt-5">FIRST EVER INDIA TOUR (COMING SOON) </p>
          <b>
        </div>
    </div>
</div>

<div class="container w-10/12 mx-auto py-8 mt-5">
        <h2 class="text-3xl font-semibold mb-4 text-white">Upcoming Concerts</h2>
<br>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <?php
            // Replace the following PHP code with your actual database connection and query
            

            
            $result = mysqli_query($conn, "SELECT * FROM concerts");

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="h-full w-full bg-black rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-50 border border-gray-100
 text-white p-4 shadow-md rounded-md">
                    <h3 class="text-xl font-semibold mb-2"><?php echo $row['artist']; ?></h3>
                    <p class="text-gray-600 mb-2"><?php echo $row['place']; ?></p>
                    <p class="text-gray-600 mb-2"><?php echo $row['date'] . ' ' . $row['time']; ?></p>
                </div>
            <?php
            }

            mysqli_close($conn);
            ?>
            <!DOCTYPE html>

        </div>
    </div>

<br>
<?php include 'footer.php'; ?>