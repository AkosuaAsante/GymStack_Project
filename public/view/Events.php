<!DOCTYPE html>
<html lang="en" lang="en">

<head>
    <title>Gym Stack</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/dasboard.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .task-list {
            max-width: 1000px;
            margin: 20px auto;
        }

        .task-item {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .task-buttons {
            display: flex;
            gap: 5px;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#" class="sidebar-link"> Gym Stack</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-items">
                    <a href="../view/Home_Dashboard.php" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-items">
                    <a href="../view/Client_list.php" class="sidebar-link">
                        <i class="lni lni-list"></i>
                        <span>Client List</span>
                    </a>
                </li>
                <li class="sidebar-items">
                    <a href="../view/Tasks.php" class="sidebar-link">
                        <i class="lni lni-clipboard"></i>
                        <span>Events </span>
                    </a>
                </li>
                <li class="sidebar-items">
                    <a href="../view/Classes.php" class="sidebar-link">
                        <i class="lni lni-bi-cycle"></i>
                        <span>Classes </span>
                    </a>
                </li>
                <li class="sidebar-items">
                    <a href="../view/Finance.php" class="sidebar-link">
                        <i class="lni lni-coin"></i>
                        <span>Finances</span>
                    </a>
                </li>
                <li class="sidebar-items">
                    <a href="../view/Profile.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile </span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="../action/logout_action.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Log Out</span>
                </a>
            </div>
        </aside>
        <div class="main p3">
            <nav class="navbar navbar-expand px-2 border-bottom">
                <div class="navbar">
                    <p class="navbar-brand lead">Events</p>
                </div>
            </nav>
            <div class="task-list">
                <div class="d-flex  mb-4 justify-content-end">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addTaskModal">
                        <i class="lni lni-plus"></i> Add New Event
                    </button>
                </div>

                <!-- Task Items -->
                <?php 
                 require_once('../functions/get_all_events.php');
                ?>

            </div>


        </div>

        <!--Add Modal -->
        <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addTaskModalLabel">Add New Task</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div>
                        <div class="modal-body">
                            <!-- Form-->
                            <form method="post" action="../action/add_event_action.php">
                                <div class="mb-3">
                                    <label for="eventName" class="form-label">Event Name</label>
                                    <input type="text" class="form-control" id="eventName" name="eventName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Event Date</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" required>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success text-black">Add Event</button>
                                </div>
                            </form>
                        </div>
                    </div>





























                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-Zi5KYJ4ZR/GGu0oOe1t9u4UpQ7g6jtjX9QQxqRYUNMz1EKDDSZuLlqKG5L/KO2bD"
                        crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                        crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
                        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
                        crossorigin="anonymous"></script>
</body>


</html>