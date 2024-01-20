<?php
session_start();
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user input (add more validation as needed)
    if (empty($name) || empty($email) || empty($password)) {
        echo "<script>alert('filll all fields');</script>";
        exit();
    }

    // Check if the email is already registered
    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        echo '<script>
        if (window.confirm("Email is already registered. Choose a different email. Do you want to go to the registration page?")) {
            window.location.href = "register.php";
        }
        </script>';
    
        exit();
    }

    // Insert user data into the database
    $insertQuery = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    $insertResult = mysqli_query($conn, $insertQuery);

    if ($insertResult) {
        // Registration successful
        $_SESSION['registration_success'] = true;
        header("Location: login.php"); // Redirect to login page
        exit();
    } else {
        // Error in the query
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}

// Check if registration success session variable is set and display a message
if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']) {
    echo '<script>alert("Registration successful. You can now login.");</script>';
    unset($_SESSION['registration_success']); // Clear the session variable
}
?>


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
        <h1 class="text-2xl text-center p-2">CREATE AN ACCOUNT</h1>
        
        <label class="block text-white">Full Name:</label>
        <input class="w-full mt-2 p-2 border rounded bg-black" type="text" name="name" required>

        <label class="block text-white mt-4">Email:</label>
        <input class="w-full mt-2 p-2 border rounded bg-black" type="email" name="email" required>

        <label class="block text-white mt-4">Password:</label>
        <input class="w-full mt-2 p-2 border rounded bg-black" type="password" name="password" required>

        <button class="w-full mt-4 bg-transparent border border-black text-white p-2 rounded hover:bg-black hover:text-white transition" type="submit">Register</button>
        
        <h1 class="text-xl text-center p-2">Already a member? <a href="login.php" class="text-black">Login here</a></h1>
    </form>

</body>
</html>
