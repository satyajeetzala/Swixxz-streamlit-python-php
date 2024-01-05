<?php 
include 'sidebar.php';
include 'conn.php';
include 'sessioncheck.php';
?>

<div class="lg:w-1/2 w-full bg-white p-6 shadow-md rounded-md">
    <h2 class="text-3xl font-semibold mb-4">Edit Concert Information</h2>

    <?php
    // Replace the following PHP code with your actual database connection and query

    $concertId = $_GET['id']; // Get the concert ID from the URL (assuming you pass it as a query parameter)

    // Fetch the concert data based on the ID
    $result = mysqli_query($conn, "SELECT * FROM concerts WHERE id = $concertId");

    if ($row = mysqli_fetch_assoc($result)) {
    ?>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="mb-4">
                <label for="artist" class="block text-gray-700 text-sm font-semibold mb-2">Artist:</label>
                <input type="text" name="artist" value="<?php echo $row['artist']; ?>" class="w-full border border-gray-300 p-2 rounded-md" required>
            </div>

            <!-- ... (similar structure for other fields) -->

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                    Update Concert
                </button>
                <a href="view-concerts.php" class="text-gray-600 hover:underline">Back to Concerts</a>
            </div>
        </form>
    <?php
    } else {
        echo "Concert not found.";
    }

    mysqli_close($conn);
    ?>
</div>
