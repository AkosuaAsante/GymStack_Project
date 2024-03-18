<!DOCTYPE html>
<html lang="en" lang="en">

<head>
    <title>Gym Stack</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/dasboard.css">

</head>

<body>
    <?php
    require_once('../settings/core.php');
    require_once('../settings/connection.php');
    check_login();


    // Get the form data
    $id = $_SESSION['user_id'];

    // Prepare and execute SQL query to retrieve user data
    $query = "SELECT * FROM users WHERE user_id = '$id'";
    $result = $mysqli->query($query);
    $chore = mysqli_fetch_assoc($result);

    ?>
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
                    <a href="Home_Dashboard.php" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-items">
                    <a href="Client_list.php" class="sidebar-link">
                        <i class="lni lni-list"></i>
                        <span>Client List</span>
                    </a>
                </li>
                <li class="sidebar-items">
                    <a href="Events.php" class="sidebar-link">
                        <i class="lni lni-clipboard"></i>
                        <span>Events </span>
                    </a>
                </li>
                <li class="sidebar-items">
                    <a href="Classes.php" class="sidebar-link">
                        <i class="lni lni-bi-cycle"></i>
                        <span>Classes </span>
                    </a>
                </li>
                <li class="sidebar-items">
                    <a href="Finance.php" class="sidebar-link">
                        <i class="lni lni-coin"></i>
                        <span>Finances </span>
                    </a>
                </li>
                <li class="sidebar-items">
                    <a href="Profile.php" class="sidebar-link">
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
                    <p class="navbar-brand lead">Profile</p>
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
            <div class="col md-4 mx-4 ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Account settings</h4>
                        <hr class="mt-4 mb-8" />
                        <div class="col-span-8 overflow-hidden rounded-xl sm:bg-gray-50 sm:px-8 sm:shadow">
                            <form action="#" method="GET" id="profile-form">
                                <div class=" mb-4">
                                    <label for="profile-picture" class="block text-sm font-semibold text-gray-700">Profile
                                        Picture</label>

                                    <div id="profile-image" class="box-content h-40 w-40">
                                        <img class="object-scale-down h-48" id="profile-image" src="../images/blank profile.png" alt="profile" width='50px' length="50px" />
                                    </div>
                                    <input type="file" id="profile-pic-input" name="profilePicture" class="mt-2" accept="image/*">

                                    <div class="mb-4">
                                        <label for="first-name" class="block text-sm font-semibold text-gray-700">First
                                            Name</label>
                                        <input type="text" id="first-name" name="firstName" value="John"
                                            class="form-control">
                                    </div>

                                <div class="mb-4">
                                    <label for="first-name" class="block text-sm font-semibold text-gray-700">First
                                        Name</label>
                                    <input type="text" id="first-name" name="firstName" value="<?php echo $chore['fname'] ?>" class="form-control">
                                </div>

                                <div class="mb-4">
                                    <label for="last-name" class="block text-sm font-semibold text-gray-700">Last
                                        Name</label>
                                    <input type="text" id="last-name" name="lastName" value="<?php echo $chore['lname']; ?>" class="form-control">
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-semibold text-gray-700">Email
                                        Address</label>
                                    <input type="password" id="current-password" name="currentPassword" class="form-control" value="<?php echo $chore['email']; ?>">
                                </div>

                                    <div class="mb-4">
                                        <label for="current-password"
                                            class="block text-sm font-semibold text-gray-700">Current
                                            Password</label>
                                        <input type="password" id="current-password" name="currentPassword"
                                            class="form-control" placeholder="***********">
                                    </div>

                                <div class="mb-4">
                                    <label for="current-password" class="block text-sm font-semibold text-gray-700">Current
                                        Password</label>
                                    <input type="password" id="current-password" name="currentPassword" class="form-control" placeholder="***********">
                                </div>

                                <div class="mb-4">
                                    <label for="new-password" class="block text-sm font-semibold text-gray-700">New
                                        Password</label>
                                    <input type="password" id="new-password" name="newPassword" class="form-control" placeholder="***********">
                                </div>

                                <div class="mb-4">
                                    <label for="org-name" class="block text-sm font-semibold text-gray-700">Phone Number
                                    </label>
                                    <input type="text" id="org-name" name="orgname" value="<?php echo $chore['phoneNumber']; ?>" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Save Changes</button>
                            </form>
                            <div class="mb-10">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>