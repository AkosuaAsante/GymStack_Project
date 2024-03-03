<!DOCTYPE html>
<html lang="en" lang="en">
    <head>
        <title>Gym Stack</title>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
         crossorigin="anonymous">
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
                        <a href="#" class="sidebar-link">
                        <i class="lni lni-list"></i>
                         <span>Client List</span>
                        </a>
                    </li>
                    <li class="sidebar-items">
                        <a href="#" class="sidebar-link">
                        <i class="lni lni-clipboard"></i>
                         <span>Tasks </span>
                        </a>
                    </li>
                    <li class="sidebar-items">
                        <a href="#" class="sidebar-link">
                        <i class="lni lni-bi-cycle"></i>
                         <span>Classes </span>
                        </a>
                    </li>
                    <li class="sidebar-items">
                        <a href="#" class="sidebar-link">
                        <i class="lni lni-coin"></i>
                         <span>Finances </span>
                        </a>
                    </li>
                    <li class="sidebar-items">
                        <a href="#" class="sidebar-link">
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
                <nav class="navbar navbar-expand px-3 border-bottom">
                    <div class="navbar">
                        <p class="navbar-brand lead">Dashboard</p>
                    </div>
                </nav>
                <div class="row mt-4">
                    <!-- Upcoming Events -->
                    <div class="col md-4 mx-4 ">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Upcoming Events</h6>
                                <!-- Add upcoming events content here -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 m-4">
                <div class="col-md-4">
                         <div class="card enlarge-card">
                            <div class="card-body">
                                <p class="card-title"><i class="lni lni-revenue"></i> Total Revenue</p>
                                <p class="card-text">$XXXX</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                         <div class="card enlarge-card">
                            <div class="card-body">
                                <p class="card-title"><i class="lni lni-revenue"></i> Total Expenses</p>
                                <p class="card-text">$XXXX</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                         <div class="card enlarge-card">
                            <div class="card-body">
                                <p class="card-title"><i class="lni lni-revenue"></i> Net Profit</p>
                                <p class="card-text">$XXXX</p>
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row mt-5 m-4">
                <div class="col-md-6">
                         <div class="card enlarge-card">
                            <div class="card-body">
                                <p class="card-title"><img width="30" height="30" src="https://img.icons8.com/ios-filled/50/group-foreground-selected.png" 
                                alt="group-foreground-selected"/> Total Customers</p>
                                <p class="card-text">$XXXX</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6">
                         <div class="card enlarge-card">
                            <div class="card-body">
                                <p class="card-title"><img width="30" height="30" 
                                src="https://img.icons8.com/ios-filled/50/group-foreground-selected.png" 
                                alt="group-foreground-selected"/></i> Active Customers</p>
                                <p class="card-text">$XXXX</p>
                            </div>
                          </div>
                    </div>
                   
                </div>





                  


           




                
            </div>





       </div>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
       <script src="../js/dashboard.js"></script>
     </body>






</html>