<?php
include '../settings/core.php';
include '../settings/connection.php';

// Check for GET URL
if (!isset($_GET['id'])) {
    header("Location: classes.php");
    exit();
}

$id = intval($_GET['id']);
// Write the SELECT all class query
$query = "SELECT * FROM Members WHERE member_id = $id";
$result = $mysqli->query($query);

// Check if execution worked
if (!$result) {
    exit("500: Internal Server Error");
}

$member = mysqli_fetch_assoc($result);


// Create a form for editing a chore
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/dasboard.css">
    <title>Edit Class</title>
</head>

<body>
    <?php
    // Include the role selection query logic
    require_once('../functions/select_instructor.php');
    ?>
    <div id='modal' class='z-10 modal fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center'>
        <div class='modal-content bg-white m-20 my-auto p-20 w-1/2 absolute'>
            <span id='closeModal' class='hover:text-black focus:text-black absolute  -top-3 right-0 pb-5 text-3xl font-bold cursor-pointer text-red-600' onclick="redirectToPage()">&times;</span>
            <form action="../action/edit_client_action.php?id=<?php echo $member['member_id']; ?>" method="post">
                        <div class="mb-3">
                            <label for="lname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $member['first_name'] ?>" required>
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $member['last_name'] ?>" required>
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $member['email'] ?>" required>
                            <label for="number" class="form-label">Number</label>
                            <input type="number" class="form-control" id="number" name="number" value="<?php echo $member['phone_number'] ?>" required>
                            <label for="Subscription" class="form-label">Subscription</label>
                            <select name="subscription" id="subscription" class="form-control block">
                                <?php
                                require_once("../functions/select_plan.php");
                                foreach ($plans as $plan) {
                                    echo "<option value=" . $plan['plan_id'] . ">" .  $plan['plan_name'] . "</option>";
                                }
                                ?>
                            </select>
                            <label for="role" class="form-label">Subscription</label>
                            <select name="role" id="role" class="form-control block">
                                <option value="1"> Admin </option>
                                <option value="2"> Client </option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary text-black">Save</button>
                    </form>
        </div>
    </div>
    <script> 
        // Function for form validation using HTML and JavaScript
        function validateForm() {
            var fname = document.getElementById("fname").value;
            var lname = document.getElementById("lname").value;
            var email = document.getElementById("email").value;
            if (fname === "" || lname === "" || email === "") {
                alert("Invalid Form Data");
                return false;
            }
        }

        function redirectToPage() {
            var redirectUrl = "../view/Client_list.php?error=Invalid Form Data";
            window.location.href = redirectUrl;
        }
    </script>
</body>

</html>