<?php
include 'navbar.php';
include 'conn.php';
// Start the session 
session_start();

// Check if the user is not logged in (session variable not set)
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page using JavaScript
    echo '<script>window.location.href = "login.php";</script>';
    // Stop further execution to prevent content from being displayed
    exit();
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<br>
<br>
<br>
<br>
<div class="w-full mx-auto text-center bg-gray-900 bg-opacity-40 p-4 rounded-md mb-8">
                <h2 class="text-3xl font-semibold text-white">Discover New Arists of the New Age</h2>
            </div>


 
<br>
<br>

<div class="container mx-auto rounded" style="background-color: rgba(0, 0, 0, 0.3)">
        <div class="bg-black p-4 rounded-md mb-8">
                <h2 class="text-3xl font-semibold text-white">Machine Gun Kelly</h2>
            </div>
    <div class="row">
        <!-- Left Side (Image) -->
        <div class="col-md-6">
            <img src="admin\images\mgk.jpg" alt="Left Side Image" class="img-fluid" style="margin: 10px;">
        </div>

        <!-- Right Side (Iframe) -->
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9" style="margin: 10px; height: 95%;">
                <iframe src="https://open.spotify.com/embed/album/3sKZHtQoq3tPtkXbT8PJAc?utm_source=oembed"
                    class="embed-responsive-item" allowfullscreen
                    allow="clipboard-write; encrypted-media; fullscreen; picture-in-picture;"
                    style="padding-right: 13px;"></iframe>
            </div>

        </div>
    </div>
</div>

<br>


<br>
<div class="container mx-auto rounded" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="bg-black p-4 rounded-md mb-8">
                <h2 class="text-3xl font-semibold text-white">Kailee Morgue</h2>
            </div>
    <div class="row">
        <!-- Left Side (Image) -->
        <div class="col-md-6">
            <img src="admin\images\kailee.jpg" alt="Left Side Image" class="img-fluid" style="margin: 10px;">
        </div>

        <!-- Right Side (Iframe) -->
        <div class="col-md-6">
        <div class="embed-responsive embed-responsive-16by9" style="margin: 10px; height: 95%;">
  <iframe src="https://open.spotify.com/embed/album/4fXvwuGNst1OzuwVdoK80D?utm_source=oembed" class="embed-responsive-item" allowfullscreen allow="clipboard-write; encrypted-media; fullscreen; picture-in-picture;" style="padding-right: 13px;"></iframe>
</div>

        </div>
    </div>
</div>
<br>
<div class="container mx-auto rounded" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="bg-black p-4 rounded-md mb-8">
                <h2 class="text-3xl font-semibold text-white">The Weeknd</h2>
            </div>
    <div class="row">
        <!-- Left Side (Image) -->
        <div class="col-md-6">
            <img src="admin\images\weeknd2.jpg" alt="Left Side Image" class="img-fluid" style="margin: 10px;">
        </div>

        <!-- Right Side (Iframe) -->
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9" style="margin: 10px;height:95%;">
                <iframe src="https://open.spotify.com/embed/album/2ODvWsOgouMbaA5xf0RkJe?utm_source=oembed"
                    class="embed-responsive-item" allowfullscreen
                    allow="clipboard-write; encrypted-media; fullscreen; picture-in-picture;"
                    style="padding-right:13px;"></iframe>
            </div>
        </div>
    </div>
</div>
<br>