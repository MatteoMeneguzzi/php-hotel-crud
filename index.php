<?php
require_once __DIR__ . '/partials/scripts/get-rooms.php' 
?>
<!DOCTYPE html>
<html lang="en">

<?php // import head
require_once __DIR__ . '/partials/templates/head.php'; ?>

<body>
    
    <main class="container">
        <h1 class="my-4">customers Archive</h1>

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
    </main>
                    
</body>
</html>