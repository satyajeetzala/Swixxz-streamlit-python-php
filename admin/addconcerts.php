<?php 
include 'sidebar.php';
include 'conn.php';
include 'sessioncheck.php';
?>
<div class="p-4 sm:ml-64 lg:w-1/2 md:w-2/3 w-full bg-white p-6 shadow-md rounded-md">
        <h2 class="text-3xl font-semibold mb-4">Add Concert</h2>
        <?php
        
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $artist = $_POST["artist"];
            $place = $_POST["place"];
            $date = $_POST["date"];
            $time = $_POST["time"];

            // Insert data into the concerts table
            $sql = "INSERT INTO concerts (artist, place, date, time) VALUES ('$artist', '$place', '$date', '$time')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='text-green-500'>Concert added successfully!</p>";
            } else {
                echo "<p class='text-red-500'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }

            // Close the database connection
            $conn->close();
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="space-y-6">
            <div>
                <label for="artist" class="block text-sm font-medium text-gray-700">Artist:</label>
                <input type="text" id="artist" name="artist" class="form-input mt-1 block w-full rounded-md" required>
            </div>

            <div>
                <label for="place" class="block text-sm font-medium text-gray-700">Place:</label>
                <input type="text" id="place" name="place" class="form-input mt-1 block w-full rounded-md" required>
            </div>

            <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Date:</label>
                <input type="date" id="date" name="date" class="form-input mt-1 block w-full rounded-md" required>
            </div>

            <div>
                <label for="time" class="block text-sm font-medium text-gray-700">Time:</label>
                <input type="time" id="time" name="time" class="form-input mt-1 block w-full rounded-md" required>
            </div>

            <div>
                <button type="submit" class="bg-pink-700 text-white px-4 py-2 rounded-md">Add Concert</button>
            </div>
        </form>
    </div>