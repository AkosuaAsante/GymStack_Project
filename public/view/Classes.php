<!DOCTYPE html>
<html lang="en" lang="en">

<head>
    <title>Gym Stack</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/dasboard.css">

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
                        <span>Tasks </span>
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
                        <span>Finances </span>
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
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Log Out</span>
                </a>
            </div>
        </aside>
        <div class="main p3">
            <nav class="navbar navbar-expand px-2 border-bottom">
                <div class="navbar">
                    <p class="navbar-brand lead">Classes List</p>
                </div>
                <div class="d-flex align-items-center ms-auto">

                    <form class="d-flex" action="#" method=post>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="lni lni-search"></i>
                        </button>
                    </form>
                </div>
            </nav>
            <div class="d-flex justify-content-end mb-3 mt-3 mx-3">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addClientModal">
                    <i class="lni lni-plus"></i> Add Class
                </button>
            </div>


            <div class="table mt-5 mx-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Class ID</th>
                            <th scope="col">Class Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Instructor Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Aerobics</td>
                            <td>01/03/2023</td>
                            <td>12:00 PM</td>
                            <td>David Graham</td>
                            <td><button class="btn ">
                                    <i class="lni lni-pencil"></i>
                                </button>
                                <button class="btn">
                                    <i class="lni lni-trash-can"></i>
                                </button>
                            </td>


                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Stretching</td>
                            <td>02/03/2023</td>
                            <td>01:00 PM</td>
                            <td>David Graham</td>
                            <td><button class="btn ">
                                    <i class="lni lni-pencil"></i>
                                </button>
                                <button class="btn">
                                    <i class="lni lni-trash-can"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Cardio</td>
                            <td>02/03/2023</td>
                            <td>03:30 PM</td>
                            <td>Kristine Sparks</td>
                            <td><button class="btn ">
                                    <i class="lni lni-pencil"></i>
                                </button>
                                <button class="btn">
                                    <i class="lni lni-trash-can"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- Modal -->

    <div class="modal fade" id="addClientModal" tabindex="-1" aria-labelledby="addClientModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addClientModalLabel">Add Class</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="class-name" class="form-label">Class Name</label>
                            <input type="text" class="form-control" id="class-name" name="class-name" required>
                            <label for="class-date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="class-date" name="class-date" required>
                            <label for="class-time" class="form-label">Time</label>
                            <input type="time" class="form-control" id="class-time" name="class-time" required>
                            <label for="instructor-name" class="form-label">Instructor Name</label>
                            <select name="instructor-name" id="instructor-name">
                                <option value="Steve Urkel"> Steve Urkel</option>
                                <option value="Jessice Jones">Jessice Jones</option>
                                <option value="David Graham">David Graham</option>
                                <option value="Kristine Sparks">Kristine Sparks</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>

            <div>
            </div>







































            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Zi5KYJ4ZR/GGu0oOe1t9u4UpQ7g6jtjX9QQxqRYUNMz1EKDDSZuLlqKG5L/KO2bD"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
            <script src="../js/dashboard.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
                integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
                crossorigin="anonymous"></script>
</body>

</html>