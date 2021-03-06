<?php

    session_start();
    if(empty($_SESSION)){
        header("Location: ../index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.php">Foody Dashboard</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

        <!-- Navbar profil -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>




        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">

            <l <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
                </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="New_product.php">
                    <i class="far fa-plus-square"></i>
                    <span>New Product</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="New_Employee.php">
                    <i class="fas fa-user-plus"></i>
                    <span>New Employee</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="New_vehicle.php">
                    <i class="fas fa-shipping-fast"></i>
                    <span>New vehicle</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="product.php">Products</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Employee.php">Employees</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Vehicle.php">Vehicles</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="customer.php">customers</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="contact.php">Messages</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="order.php">Orders</a>

                </div>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5">
                                        <?php
                                         include "php/classes/count.class.php";
                                        $msg=new counte;
                                        $num_msg=$msg->num_message();
                                        echo $num_msg->rowCount();
                                        ?>  
                                    Messages</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="contact.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div class="mr-5">
                                <?php
                                         
                                        
                                        $num_msg=$msg->num_vehicule();
                                        echo $num_msg->rowCount();
                                        ?> 
                                            
                                Vehicle</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="vehicle.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5">
                                <?php
                                       
                                        $num_msg=$msg->num_product();
                                        echo $num_msg->rowCount();
                                        
                                        ?>    
                                Products</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="product.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-user-friends"></i>
                                </div>
                                <div class="mr-5">
                                <?php
                                       
                                        $num_msg=$msg->num_message();
                                        echo $num_msg->rowCount();
                                        ?>    
                                Customers</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="customer.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-dark o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                                <div class="mr-5">
                                <?php
                                       
                                        $num_msg=$msg->num_empl();
                                        echo $num_msg->rowCount();
                                        ?>    
                                
                                Employees</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="employee.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-info o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-hamburger"></i>
                                </div>
                                <div class="mr-5">
                                    
                                <?php
                                       
                                        $num_msg=$msg->num_order();
                                        echo $num_msg->rowCount();
                                        ?>
                                Orders</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="order.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                            </a>
                        </div>
                    </div>
                </div>


               


                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright © Foody 2019</span>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logOut.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/datatables/jquery.dataTables.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>

        <!-- Demo scripts for this page-->
        <script src="js/demo/datatables-demo.js"></script>
        <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>