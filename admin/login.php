<?php


// Include your database connection file (e.g., conn.php)
include('conn.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user input (add more validation as needed)
    if (empty($email) || empty($password)) {
        // Handle empty fields
        echo "Please enter both email and password.";
        exit();
    }

    // Query to check email and password in the database
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if a matching user is found
        if (mysqli_num_rows($result) > 0) {
            // Fetch user data
            $user = mysqli_fetch_assoc($result);

            // Create a session variable for user_id
            $_SESSION['user_id'] = $user['id'];

            // Redirect to a logged-in page or homepage
            echo '<script>window.location.href = "../index.php";</script>';
            exit();
        } else {
            // Invalid credentials
            echo "Invalid email or password.";
        }

        // Free the result set
        mysqli_free_result($result);
    } else {
        // Error in the query
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>


    <!-- Your HTML content goes here -->
    <form method="post" action="">
        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <!-- Your other HTML content goes here -->
