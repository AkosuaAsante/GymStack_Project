<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="../css/dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css" rel="stylesheet" />


</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          <div href="#" class="logo">
            <img src="../images/logo_transparent.png" alt="" />
            <span id="name" class="nav-item">GYM STACK</span>
          </div>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-home"></i>
            <span class="nav-item">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-list"></i>
            <span class="nav-item">Client List</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-user"></i>
            <span class="nav-item">Profile</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-dollar-sign"></i>
            <span class="nav-item">Subscriptions</span>
          </a>
        </li>
        <li>
          <a href="#" class="settings">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Settings</span>
          </a>
        </li>
        <li>
          <a href="#" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
          </a>
        </li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>Dashboard</h1>
      </div>

      <div class="dashboard-section" id="calendar-section">
        <h2>Calendar of Sessions</h2>
        <div class="dashboard-section-content">
          <div id="calendar"></div>
        </div>
      </div>


      <div class="dashboard-section">
        <h2>Upcoming Events</h2>
        <div class="dashboard-section-content">
          <!-- Upcoming Events Content -->
        </div>
      </div>

      <!-- Statistics Overview -->
      <div class="dashboard-section">
        <h2>Statistics Overview</h2>
        <div class="dashboard-section-content statistics-overview">
          <!-- Statistics Content -->
        </div>
      </div>

      <!-- Total Revenue, Total Expenses, Net Profit -->
      <div class="dashboard-section">
        <div class="dashboard-section-content statistics-item">
          <h3>Total Revenue</h3>
          <p>$XXXX</p>
        </div>
        <div class="dashboard-section-content statistics-item">
          <h3>Total Expenses</h3>
          <p>$XXXX</p>
        </div>
        <div class="dashboard-section-content statistics-item">
          <h3>Net Profit</h3>
          <p>$XXXX</p>
        </div>
      </div>

      <!-- Total Users, Active Users -->
      <div class="dashboard-section">
        <div class="dashboard-section-content statistics-item">
          <h3>Total Users</h3>
          <p>XXXX</p>
        </div>
        <div class="dashboard-section-content statistics-item">
          <h3>Active Users</h3>
          <p>XXXX</p>
        </div>
      </div>

      <!-- Reports (From Clients) -->
      <div class="dashboard-section">
        <h2>Reports (From Clients)</h2>
        <div class="dashboard-section-content">
          <!-- Reports Content -->
        </div>
      </div>
  </div>
  </div>
  </section>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
  <script src="../js/dashboard.js"></script>
</body>

</html>