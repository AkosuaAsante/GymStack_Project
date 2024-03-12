<?php
include '../settings/connection.php';


// Write the SELECT all class query
$query = "SELECT * FROM Events";
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
    echo     "<div class='task-item rounded p-3'>
    <div>
        <h5 class='text-2xl font-bold'>" . $event['name'] . "</h5>
        <p class='text-lg my-4'>Event Date: " . $event['date'] . "</p>
        <p class='text-sm'>" . $event['description'] . "</p>
    </div>
    <div class='task-buttons'>
        <a href='../action/delete_event_action.php?id=" . $event['event_id'] .  "' class='btn'><i
                class='lni lni-trash-can'></i></a>
        <a href='../view/edit_event_view.php?id=" . $event['event_id'] .  "'  class='btn'><i class='lni lni-pencil'></i></a>
    </div>
</div>";
}
