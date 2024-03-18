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
$query = "SELECT * FROM Class_Schedules WHERE schedule_id = $id";
$result = $mysqli->query($query);

// Check if execution worked
if (!$result) {
    exit("500: Internal Server Error");
}

$classes = mysqli_fetch_assoc($result);


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
    require_once('../settings/core.php');
    check_login()
    ?>
    <div id='modal' class='z-10 modal fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center'>
        <div class='modal-content bg-white m-20 my-auto p-20 w-1/2 absolute'>
            <span id='closeModal' class='hover:text-black focus:text-black absolute  -top-3 right-0 pb-5 text-3xl font-bold cursor-pointer text-red-600' onclick="redirectToPage()">&times;</span>
            <form action="../action/edit_class_action.php?id=<?php echo $classes['schedule_id']; ?>" method="post">
                <div class="mb-3">
                    <label for="class-name" class="form-label">Class Name</label>
                    <input type="text" class="form-control" id="class-name" name="class-name" value="<?php echo $classes['class_name']; ?>" required>
                    <label for="class-date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="class-date" name="class-date" value="<?php echo $classes['class_date']; ?>" required>
                    <label for="class-start-time" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="class-start-time" name="class-start-time" value="<?php echo $classes['start_time']; ?>" required>
                    <label for="class-end-time" class="form-label">end Time</label>
                    <input type="time" class="form-control" id="class-end-time" name="class-end-time" value="<?php echo $classes['end_time']; ?>" required>
                    <label for="instructor-name" class="form-label">Instructor Name</label>
                    <select name="instructor-name" id="instructor-name" class="block border rounded-lg p-2">

                        <?php
                        // Populate the dropdown with family roles
                        foreach ($instructors as $role) {
                            echo "<option value=" . $role['instructor_id'] . ">" .  $role['full_name'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary text-black">Save</button>
            </form>
        </div>
    </div>
    <script> 
        // Function for form validation using HTML and JavaScript
        function validateForm() {
            var className = document.getElementById("class-name").value;
            if (className == "") {
                alert("Chore Name must be filled out");
                return false;
            }
        }

        function redirectToPage() {
            var redirectUrl = "../view/classes.php";
            window.location.href = redirectUrl;
        }
    </script>
</body>

</html>