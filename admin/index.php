<?php 
include 'sidebar.php';
include 'conn.php';

?>

<div class="p-4 lg:w-1/2 md:w-2/3 w-full p-4 sm:ml-64 lg:w-1/2 md:w-2/3 w-full bg-black p-6 shadow-md rounded-md shadow-md rounded-md">
        <h2 class="text-3xl font-semibold mb-4">Concerts Dashboard</h2>

        <?php
        // Replace the following PHP code with your actual database connection and query
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $result = mysqli_query($conn, "SELECT COUNT(*) AS total_concerts FROM concerts");
        $row = mysqli_fetch_assoc($result);
        $totalConcerts = $row['total_concerts'];

        
        ?>

        <div class="bg-gradient-to-r from-pink-600 to-purple-800 p-6 rounded-md text-white">
            <h3 class="text-xl font-semibold mb-2">Available Concerts</h3>
            <p class="text-4xl font-bold"><?php echo $totalConcerts; ?></p>
        </div>
    </div>

    <div class="p-4 sm:ml-64 lg:w-1/2 md:w-2/3 w-full bg-black p-6 shadow-md rounded-md">
        <h2 class="text-3xl font-semibold mb-4">Concerts Dashboard</h2>

        <?php
        // Replace the following PHP code with your actual database connection and query
       

        $result = mysqli_query($conn, "SELECT * FROM concerts");

        mysqli_close($conn);
        ?>

        <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-md overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-2 px-4">ID</th>
                    <th class="py-2 px-4">Artist</th>
                    <th class="py-2 px-4">Place</th>
                    <th class="py-2 px-4">Date</th>
                    <th class="py-2 px-4">Time</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td class="py-2 px-4"><?php echo $row['id']; ?></td>
                        <td class="py-2 px-4"><?php echo $row['artist']; ?></td>
                        <td class="py-2 px-4"><?php echo $row['place']; ?></td>
                        <td class="py-2 px-4"><?php echo $row['date']; ?></td>
                        <td class="py-2 px-4"><?php echo $row['time']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
