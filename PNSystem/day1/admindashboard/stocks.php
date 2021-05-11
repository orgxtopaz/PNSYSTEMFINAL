
<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:/pnsystem/day1/landingpage.php');
}
// // ADMIN EXECUTION


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- HEADER LINKS  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../header/style.css">
    <link rel="stylesheet" href="../admindashboard/admin.css">


    <script src="../header/jquery.min.js"></script>
    <script src="../header/popper.js"></script>
    <script src="../header/bootstrap.min.js"></script>
    <script src="../header/main.js"></script>

    <!-- END -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


  

    <body class="sb-nav-fixed">


    <?php   include "../connection.php";?>
<?php
    if(isset($_SESSION['message'])):?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    ?>
</div>
<?php endif ?>

<?php

    require_once '../connection.php';
    $result = $conn->query("SELECT * FROM stocks") or die($conn->error);
?>






    <div class ="container-fluid">


  
       

     

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="adminhome.php">Admin Panel</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
            
            <a  class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="logoutadmin.php">Sign out</a>
           
            </div>
              
            </li>
         
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="adminhome.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Customize
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="products.php">Products</a>
                                <a class="nav-link" href="delivered.php">On Delivered</a>
                                <a class="nav-link" href="#">Stocks</a>
                                <a class="nav-link" href="sales.php">Sales</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                               
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>

                            </nav>
                        </div>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Zigm
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Stocks</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Stocks</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Primary Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Warning Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area mr-1"></i> Area Chart Example
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar mr-1"></i> Bar Chart Example
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i> Stocks
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                
                             


 <!-- INSERT PRODUCT                             -->
 <button type="button" class="btn btn-outline-dark" id="btn1" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Add New Stocks
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Stocks</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="../connection.php" method="POST">


                        <div class="mb-3">
                                    <label for="InputProductId " class="form-label">ProductId</label>
                                    <input type="text" name="ProductId" class="form-control" id="inputName" value="">
                         

                            <div class="mb-3">
                                <label for="InputSize" class="form-label">Size</label>
                                <input type="text" name="Size" class="form-control" id="inputPhoto" placeholder="" value="">
                               </div>

                              

                                <div class="mb-3">
                                    <label for="inputColors" class="form-label">Colors</label>
                                    <input type="text" name="Colors" class="form-control" id="inputType" value="">
                                </div>

                                <div class="mb-3">
                                    <label for="inputQuantity" class="form-label">Quantity</label>
                                    <input type="text" name="Quantity" class="form-control" id="inputDescription" >
                                </div>
                                
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                            </div>
                            <button type="submit" name="submitstocks" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <!-- END iNSERT PRODUCT -->
                <thead class="table-dark">
                
                <tr>
                    <th scope="col">Stock_Id</th>
                    <th scope="col">Product ID</th>
                    <th scope="col">Size</th>                  
                    <th scope="col">Colors</th>
                    <th scope="col">Quantity</th>
                
                    <th scope="action">Action</th>
                    
                </tr>
            </thead>
           <?php    
                while ($row =   $result->fetch_assoc()):
           ?>
          <tr>
					<td>
						<?php echo $row['StockId']; ?>
					</td>
                    
                    <td>
						<?php echo $row['ProductId']; ?>
					</td>


                    
                  
					<td>
						<?php echo $row['Size']; ?>
					</td>

                   
					<td>
						<?php echo $row['Colors']; ?>
					</td>
					<td>
						<?php echo $row['Quantity']; ?>
					</td>
                   
					<td>
                    <a href="crud/editstocks.php?editstocks=<?php echo $row['StockId'];?>"
                        class="btn btn-info">Edit</a>
                    <a href="../connection.php?deletestocks=<?php echo $row['StockId']; ?>"
                        class="btn btn-danger">Delete</a>
					</td>		
				</tr>
          <?php endwhile;?>



       
  <!--  -->
   

                                 </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <br>
            <br>
            <br>
            <br>           
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Mizada 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a> &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>



</div>


<!--  -->
</body>

</html>