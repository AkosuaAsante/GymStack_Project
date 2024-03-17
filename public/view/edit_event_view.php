<?php
include '../settings/core.php';
include '../settings/connection.php';

// Check for GET URL
if (!isset($_GET['id'])) {
    header("Location: Event.php");
    exit();
}

$id = intval($_GET['id']);
// Write the SELECT all class query
$query = "SELECT * FROM Events WHERE event_id = $id";
$result = $mysqli->query($query);

// Check if execution worked
if (!$result) {
    exit("500: Internal Server Error");
}

$event = mysqli_fetch_assoc($result);


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
    <title>Edit Event</title>
</head>

<body>
<?php
    require_once('../settings/core.php');
    check_login();
    ?>
    <div id='modal' class='z-10 modal fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center'>
        <div class='modal-content bg-white m-20 my-auto p-20 w-1/2 absolute'>
            <span id='closeModal' class='hover:text-black focus:text-black absolute  -top-3 right-0 pb-5 text-3xl font-bold cursor-pointer text-red-600' onclick="redirectToPage()">&times;</span>
            <form method="post" action="../action/edit_event_action.php?id=<?php echo $event['event_id']; ?>>">
                                <div class="mb-3">
                                    <label for="eventName" class="form-label">Event Name</label>
                                    <input type="text" class="form-control" id="eventName" name="eventName" value="<?php echo $event['name']; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Event Date</label>
                                    <input type="date" class="form-control" id="date" name="date" value="<?php echo $event['date']; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $event['description']; ?>" required>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success text-black">Save</button>
                                </div>
                            </form>
        </div>
    </div>
    <script> 
        // Function for form validation using HTML and JavaScript
        function validateForm() {
            var name = document.getElementById("eventName").value;
            var date = document.getElementById("date").value;
            if (name === "" || date === "") {
                alert("Invalid Form Data");
                return false;
            }
        }

        function redirectToPage() {
            var redirectUrl = "../view/Events.php?error=Invalid Form Data";
            window.location.href = redirectUrl;
        }
    </script>
</body>

</html>
