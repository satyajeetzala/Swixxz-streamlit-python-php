<?php

session_start();

// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swixxz";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
