<?php

session_start();
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
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        } else {
            // Invalid credentials
            echo '<script>
        if (window.confirm("Invalid email or password. Do you want to go to login page?")) {
            window.location.href = "login.php";
        }
        </script>';
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
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="admin/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="admin/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="admin/favicon/favicon-16x16.png">
    <link rel="manifest" href="admin/favicon/site.webmanifest">
    <link rel="mask-icon" href="admin/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <style>
        body {
            background: url('admin/images/login3.png') no-repeat center center fixed;
            background-size: cover;
        }

        .dark-mode {
            background-color: rgba(0, 0, 0, 0.8); /* Dark mode background color */
            color: white;
        }

        .transparent-bg {
            background-color: rgba(255, 255, 255, 0.5); /* Form background color with transparency */
        }
    </style>
    <title>CAUTION - SWIXXZ</title>
</head>
<body class="flex items-center justify-center h-screen dark-mode">

    <form class="p-8 rounded-lg shadow-lg bg-gray-900 rounded-md bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-30 border border-black
" method="post" action="">
        <h1 class="text-2xl text-center p-2">LETS SNEAK IN</h1>
        <label class="block text-white ">Email:</label>
        <input class="w-full mt-2 p-2 border rounded bg-black" type="email" name="email" required>

        <label class="block text-white mt-4">Password:</label>
        <input class="w-full mt-2 p-2 border rounded bg-black" type="password" name="password" required>

        <button class="w-full mt-4 bg-transparent border border-black text-white p-2 rounded hover:bg-black hover:text-white transition" type="submit">Login</button>
        <h1 class="text-xl text-center p-2">Not a member? <a href="register.php" class="text-black">Register here</a></h1>
    </form>

</body>
</html>


   
