<?php
include '../settings/connection.php';


// Write the SELECT all class query
$query = "SELECT * FROM Members";
$result = $mysqli->query($query);

// Check if execution worked
if (!$result) {
    exit("500: Internal Server Error");
}


$members = array();

while ($row = mysqli_fetch_assoc($result)) {
    $members[] = $row;
}

foreach ($members as $member) {
    $query = "SELECT plan_name FROM Subscription_Plans WHERE plan_id = " . $member['plan_id'];
    $result = $mysqli->query($query);
    $plan = mysqli_fetch_assoc($result);
    $status = $member['plan_id'] == 4 ? "InActive" : "Active";

    echo "<tr>
    <th scope='row'>" . $member['member_id'] . "</th>
    <td>" . $member['first_name'] . "</td>
    <td>" . $member['last_name'] . "</td>
    <td>" . $member['email'] . "</td>
    <td>" . $member['phone_number'] . "</td>
    <td>" . $plan['plan_name'] . "</td>
    <td>" . $status . "</td>
    <td><a href='../view/edit_client_view.php?id=" . $member['member_id'] .  "' class='btn '>
            <i class='lni lni-pencil'></i>
        </a>
        <a href='../action/delete_client_action.php?id=" . $member['member_id'] .  "' class='btn '>
            <i class='lni lni-trash-can'></i>
        </a>
    </td>
</tr>";

}
