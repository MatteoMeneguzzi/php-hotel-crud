<?php

// get data for rooms

require_once __DIR__ . '/database.php';

// Ottieni camere

$sql = "SELECT `id`, `room_number`, `floor` 
        FROM `stanze`";

$result = $conn->query($sql);

if($result && $result->num_rows > 0) {
    $rooms = [];
    while($row = $result->fetch_assoc()) {
        // popolare array stanze
        $rooms[] = $row;
    }
    // var_dump($rooms);
} else {
    echo "query error"; 
}

// close db connection

$conn->close();