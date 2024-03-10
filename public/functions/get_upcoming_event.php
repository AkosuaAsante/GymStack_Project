<?php
include '../settings/connection.php';


// Write the SELECT all class query
$query = "SELECT * FROM Events WHERE date >= CURDATE() ORDER BY date ASC LIMIT 5";
$result = $mysqli->query($query);

// Check if execution worked
if (!$result) {
    exit("500: Internal Server Error");
}


$events = array();

while ($row = mysqli_fetch_assoc($result)) {
    $events[] = $row;
}

foreach ($events as $event) {
    echo     "<div class='task-item my-4'>
    <div>
        <h5 class='text-sm font-bold'>" . $event['name'] . "</h5>
        <p class='text-xs my-4'>Event Date: " . $event['date'] . "</p>
    </div>
</div>";
}
