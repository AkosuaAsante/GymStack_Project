<?php
include '../settings/connection.php';


// Write the SELECT all class query
$query = "SELECT * FROM Class_Schedules";
$result = $mysqli->query($query);

// Check if execution worked
if (!$result) {
    exit("500: Internal Server Error");
}


$classes = array();

while ($row = mysqli_fetch_assoc($result)) {
    $classes[] = $row;
}

foreach ($classes as $class) {
    $query_instructor = "SELECT full_name FROM Instructors WHERE instructor_id = '$class[instructor_id]'";
    $instructor = $mysqli->query($query_instructor);
    $instructor = mysqli_fetch_assoc($instructor);
    $instructor = $instructor['full_name'];


    echo "<tr>
    <th scope='row'>" . $class['schedule_id'] . "</th>
    <td>" . $class['class_name'] . "</td>
    <td>" . $class['class_date'] . "</td>
    <td>" . $class['start_time'] . "</td>
    <td>" . $instructor . "</td>
    <td><a href='../view/edit_class_view.php?id=" . $class['schedule_id'] .  "' class='btn '>
            <i class='lni lni-pencil'></i>
        </a>
        <a href='../action/delete_class_action.php?id=" . $class['schedule_id'] .  "' class='btn '>
            <i class='lni lni-trash-can'></i>
        </a>
    </td>
</tr>";

}
