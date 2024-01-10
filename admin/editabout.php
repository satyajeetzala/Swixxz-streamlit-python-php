<?php

include 'sidebar.php';
include 'conn.php';
include 'sessioncheck.php';
// Handle form submission
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $updatedTCText = $_POST["updatedTCText"];

    // Update terms and conditions text in the database using prepared statement
    $updateQuery = "UPDATE about SET abouttext = ?";
    $stmt = mysqli_prepare($conn, $updateQuery);

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "s", $updatedTCText);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "<p class='text-green-500'>About updated successfully!</p>";
    } else {
        echo "<p class='text-red-500'>Error updating terms and conditions: " . mysqli_error($conn) . "</p>";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Fetch current terms and conditions text from the database
$result = mysqli_query($conn, "SELECT * FROM about");
$row = mysqli_fetch_assoc($result);
$tctext = $row['abouttext'];

// Close the database connection
mysqli_close($conn);
?>

<div class="container mx-auto p-8">
    <div class="bg-gray-800 bg-opacity-50 text-white p-8 shadow-md rounded-md">
        <h2 class="text-3xl font-semibold mb-4">Update About</h2>

        <!-- Form to update terms and conditions -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-4">
                <label for="updatedTCText" class="block text-gray-700 text-sm font-semibold mb-2">Updated Terms and Conditions:</label>
                <textarea name="updatedTCText" class="bg-black w-full h-32 border border-gray-300 p-2 rounded-md" required><?php echo $tctext; ?></textarea>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                    Update About
                </button>
            </div>
        </form>
    </div>
</div>