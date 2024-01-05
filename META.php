<html>
<head>
    <title>Add Concert</title>
</head>
<body>

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
        echo "<p>Concert added successfully!</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }

    // Close the database connection
    $conn->close();
}
?>

<h2>Add Concert</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="artist">Artist:</label>
    <input type="text" name="artist" required>
    <br><br>
    
    <label for="place">Place:</label>
    <input type="text" name="place" required>
    <br><br>
    
    <label for="date">Date:</label>
    <input type="date" name="date" required>
    <br><br>

    <label for="time">Time:</label>
    <input type="time" name="time" required>
    <br><br>

    <input type="submit" value="Add Concert">
</form>

</body>
</html>
