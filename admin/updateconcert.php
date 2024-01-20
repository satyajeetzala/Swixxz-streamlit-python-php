<?php 
include 'sidebar.php';
include 'conn.php';
include 'sessioncheck.php';
?>
<div class="container mx-auto p-8">
        <h2 class="text-3xl font-semibold mb-4 text-white">Update Concert Information</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $concertId = $_POST["id"];
            $artist = $_POST["artist"];
            $place = $_POST["place"];
            $date = $_POST["date"];
            $time = $_POST["time"];
        
            // Update data in the concerts table
            $sql = "UPDATE concerts SET artist='$artist', place='$place', date='$date', time='$time' WHERE id=$concertId";
        
            if ($conn->query($sql) === TRUE) {
                echo "<p class='text-green-500'>Concert updated successfully!</p>";
            } else {
                echo "<p class='text-red-500'>Error updating concert: " . $conn->error . "</p>";
            }
        }
        
        $concertId = $_GET['id'];

        // Fetch the concert data based on the ID
        $result = mysqli_query($conn, "SELECT * FROM concerts WHERE id = $concertId");

        if ($row = mysqli_fetch_assoc($result)) {
        ?>
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="mb-4">
                    <label for="artist" class="block text-gray-400 text-sm font-semibold mb-2">Artist:</label>
                    <input type="text" name="artist" value="<?php echo $row['artist']; ?>" class="dark:bg-gray-800 border border-gray-700 p-2 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="place" class="block text-gray-400 text-sm font-semibold mb-2">Place:</label>
                    <input type="text" name="place" value="<?php echo $row['place']; ?>" class="dark:bg-gray-800 border border-gray-700 p-2 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="date" class="block text-gray-400 text-sm font-semibold mb-2">Date:</label>
                    <input type="date" name="date" value="<?php echo $row['date']; ?>" class="dark:bg-gray-800 border border-gray-700 p-2 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="time" class="block text-gray-400 text-sm font-semibold mb-2">Time:</label>
                    <input type="time" name="time" value="<?php echo $row['time']; ?>" class="dark:bg-gray-800 border border-gray-700 p-2 rounded-md" required>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                        Update Concert
                    </button>
                    <a href="editconcerts.php" class="text-white hover:underline">Back to Concerts</a>
                </div>
            </form>
        <?php
        } else {
            echo "Concert not found.";
        }

        // Close your database connection
        mysqli_close($conn);
        ?>

    </div>