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
                        <a href="../view/Client_list.php" class="sidebar-link">
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
               <nav class="navbar navbar-expand px-2 border-bottom">
                    <div class="navbar">
                        <p class="navbar-brand lead">Client List</p>
                    </div>
                    <div class="d-flex align-items-center ms-auto">
                    <!-- Search bar and button -->
                      <form class="d-flex" action="#" method=post> 
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="lni lni-search"></i>
                        </button>
                      </form>
                    </div>
                </nav>

                <div class="table mt-5 mx-auto">
                    <table class="table">
                       <thead>
                          <tr>
                             <th scope="col">No</th>
                             <th scope="col">First Name</th>
                             <th scope="col">Last Name</th>
                             <th scope="col">Email</th>
                             <th scope="col">Number</th>
                             <th scope="col">Subcription</th>
                             <th scope="col">Status</th>
                             <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>nds@gmail.com</td>
                           <td>0203334567</td>
                           <td>Monthly</td>
                           <td>Active</td>
                           <td><button class="btn btn-warning">
                                    <i class="lni lni-pencil"></i> Edit
                                </button>
                                <button class="btn btn-danger">
                                <i class="lni lni-trash-can"></i> Delete
                                </button></td>


                          </tr>
                          <tr>
                          <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>dfe@gmailcom</td>
                            <td>0203334567</td>
                            <td>Monthly</td>
                            <td>Active</td>
                            <td><button class="btn btn-warning">
                                    <i class="lni lni-pencil"></i> Edit
                                </button>
                                <button class="btn btn-danger">
                                <i class="lni lni-trash-can"></i> Delete
                                </button></td>


                          </tr>
                           <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>Olsen</td>
                          <td>lawthelar@gmailcom</td>
                          <td>0203334567</td>
                          <td>Monthly</td>
                          <td>Active</td>
                          <td><button class="btn btn-warning">
                                    <i class="lni lni-pencil"></i> Edit
                                </button>
                                <button class="btn btn-danger">
                                <i class="lni lni-trash-can"></i> Delete
                                </button></td>
                          
                          </tr>
                      </tbody>
                  </table>

  

                </div>











            
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
       <script src="../js/dashboard.js"></script>
    </body>
</html>