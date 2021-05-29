<?php
require_once __DIR__ . '/partials/scripts/get-single-room.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<?php // import head
require_once __DIR__ . '/partials/templates/head.php'; ?>

<body>
    
    <main class="container">
        <table class="table">
            <thead>
                <th>ID: </th>
                <th>Room Number: </th>
                <th>Floor: </th>
                <th></th>
            </thead>
            <tbody>
        <?php 
        if(!empty($room)) { ?> 
            <h1 class="my-4">Room <?php echo $room['room_number']; ?></h1>

        <ul>
            <li>Floor: <?php echo $room['floor']; ?></li>
            <li>Beds: <?php echo $room['beds']; ?></li>
        </ul>
        <?php } ?>
        

        <a href="./">Back to archive</a>
    </main>
                    
</body>
</html>


<table class="table">
            <thead>
                <th>ID: </th>
                <th>Room Number: </th>
                <th>Floor: </th>
                <th></th>
            </thead>
            <tbody>
                <?php // loop db data
                if (!empty($rooms)) {
                    foreach ($rooms as $room) { ?>
                        <tr>
                            <td><?php echo $room['id']; ?></td>
                            <td><?php echo $room['room_number']; ?></td>
                            
                            <td>
                                <a class="text-success" href="./show.php?id=<?php echo $room['id']; ?>">View room</a>
                            </td>
                        </tr>
                   <?php }
                }
                ?>

            </tbody>
        </table>