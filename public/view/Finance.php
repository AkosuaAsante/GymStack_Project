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
                        <a href="../view/Tasks.php" class="sidebar-link">
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
                        <a href="../view/Finance.php" class="sidebar-link">
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
                        <p class="navbar-brand lead">Expenses and Revenue</p>
                    </div>
                </nav>
                <div class="d-flex  mb-4 justify-content-end mx-4">
                <button type="button" class="btn btn-success mt-4 d-flex  mb-4 " data-bs-toggle="modal" data-bs-target="#addTransactionModal">
                <i class="lni lni-plus"></i>Add Transaction
                 </button>
                 </div>

                 <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Transaction Summary</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody id="transactionTableBody">
                                <!-- Transaction data w-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



           </div> 
     </div>  
      <!-- Add Transaction Modal -->
    <div class="modal fade" id="addTransactionModal" tabindex="-1" aria-labelledby="addTransactionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTransactionModalLabel">Add Transaction</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="financeForm">
                        <div class="mb-3">
                            <label for="transactionType" class="form-label">Transaction Type</label>
                            <select class="form-select" id="transactionType" required>
                                <option value="expense">Expense</option>
                                <option value="revenue">Revenue</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="amount" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="addTransaction()">Add Transaction</button>
                    </form>
                </div>
            </div>
        </div>
     
     
     






















     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Zi5KYJ4ZR/GGu0oOe1t9u4UpQ7g6jtjX9QQxqRYUNMz1EKDDSZuLlqKG5L/KO2bD" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
    <script src="../js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
         crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
      crossorigin="anonymous"></script>
</body>           

</html                