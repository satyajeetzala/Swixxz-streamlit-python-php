<?php
// index.php

// Include the conn.php file for database connection and session handling


// Include the login.php file for login functionality

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website</title>
    <link rel="stylesheet" href="admin/styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-FfZydQ2MkGAJOOfArxTNEpS7UqV+kuB5Q6b9e0RQE0yQWenQ5dAT9e8aVFjc+qiy/Ju8ngXwEJ0pL2RgeKyGyg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lacquer">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lacquer">
        <link rel="apple-touch-icon" sizes="180x180" href="admin/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="admin/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="admin/favicon/favicon-16x16.png">
    <link rel="manifest" href="admin/favicon/site.webmanifest">
    <link rel="mask-icon" href="admin/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>

<body class="font-sans relative bg-gradient-to-b from-pink-900 via-gray-900 to-rose-900" style="background-image: url('admin/images/nbg.jpg');background-repeat: no-repeat;  background-size:cover;">

    <!-- Banner Image -->
    <div id="navbar" style="height:auto;" class="flex items-center justify-between -mb-8" >
    <!-- Logo and Navigation Links -->
    <div class="flex items-center">
        <a href="index.php" class="flex items-center">
            <img src="https://www.swixxz.com/cdn/shop/files/attempt6_480x.gif?v=1614301760" class="object-cover h-16 pl-2" alt="SWIXXZ" />
        </a>
        <a href="index.php" class="hover:text-pink-700 text-xl">Home</a>
        <a href="page.php" class="hover:text-pink-700 text-xl">Concerts</a>
        <a href="artists.php" class="hover:text-pink-700 text-xl">Artists</a>
        <a href="explorer.php" class="hover:text-pink-700 text-xl">Explorer</a>
        <a href="about.php" class="hover:text-pink-700 text-xl">About</a>
    </div>

    <!-- User Logo -->
    
    <div>
    <a href="logout.php" class="hover:text-pink-700 text-xl">Log Out</a>
    </div>
</div>
