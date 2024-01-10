<?php 
include 'sidebar.php';
include 'conn.php';
include 'sessioncheck.php';
?>

<div class="container w-11/12 mx-auto p-8 dark:bg-gray-800">
    <h2 class="text-3xl font-semibold mb-4 text-white">Concerts List</h2>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM concerts");

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="bg-black text-white dark:bg-gray-700 p-4 shadow-md rounded-md mb-4">
            <h3 class="text-xl font-semibold mb-2"><?php echo $row['artist']; ?></h3>
            <p class="text-gray-600 dark:text-gray-300 mb-2"><?php echo $row['place']; ?></p>
            <p class="text-gray-600 dark:text-gray-300 mb-2"><?php echo $row['date'] . ' ' . $row['time']; ?></p>
            <div class="flex space-x-4">
                <a href="updateconcert.php?id=<?php echo $row['id']; ?>" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                    Update
                </a>
                <a href="deleteconcert.php?id=<?php echo $row['id']; ?>" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                    Delete
                </a>
            </div>
        </div>
    <?php
    }
    ?>

</div>
