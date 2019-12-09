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
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

        <!-- Navbar profil -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>




        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">

             <li class="nav-item dropdown no-arrow">
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
                <a class="nav-link" href="../index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="far fa-plus-square"></i>
                    <span>New Product</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../New_Employee.html">
                    <i class="fas fa-user-plus"></i>
                    <span>New Employee</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../New_vehicle.html">
                    <i class="fas fa-shipping-fast"></i>
                    <span>New vehicle</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="../product.php">Products</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../Employee.php">Employees</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../Vehicle.php">Vehicles</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="customer.php">customers</a>

                </div>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>

                <!-- Icon Cards-->
<?php
include 'classes/dbconnection.class.php';
$db=new dbconnection;
$cnnx=$db->connect();
$reponse=$cnnx->prepare('SELECT * FROM product WHERE pid =:param_id');
 $reponse->bindParam(':param_id', $_GET['pid']); 
 $reponse->execute();  
 $donnees = $reponse->fetch();
?>
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i> ADD product</div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <div class="container">
                                <div class="card card-register mx-auto mt-5">
                                    <div class="text-center card-header">EDIT PRODUCT</div>
                                    <div class="card-body">
                                        <form method="POST" action="update_product.php">
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                    <div class="form-label-group">
                                                            <input type="text" id="name" value="<?php echo $donnees['pid']?>" name="pid" class="form-control" placeholder="nom de produit" required="required" autofocus="autofocus">
                                                            <label for="name">ID produit </label>
                                                        </div>
                                                        <div class="form-label-group">
                                                            <input type="text" id="name" value="<?php echo $donnees['name']?>" name="name" class="form-control" placeholder="nom de produit" required="required" autofocus="autofocus">
                                                            <label for="name">nom  de produit </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-label-group">
                                                            <input type="text" id="lasdescription" value="<?php echo $donnees['description']?>" name="description" class="form-control" placeholder="description de produit " required="required">
                                                            <label for="description">description</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                                <div class="form-group">
                                                    <select class="form-control" name="categorie"  id="categorie">
                                                      <option value="" selected disabled hidden>Choose la categorie de produit </option>
                                                      <option value="breakfast">breakfast</option>
                                                      <option value="dessert">dessert</option>
                                                      <option value="dinner">dinner</option>
                                                      <option value="freshfood">freshfood</option>
                                                      <option value="lunch">lunch</option>
                                      
                                                    </select>
                                                  </div>
                                            
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-label-group">
                                                            <input type="number" id="price" value="<?php echo $donnees['price']?>" name="price" class="form-control" placeholder="prix de produit ">
                                                            <label for="price">prix de produit </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-label-group">
                                                            <input type='file' name='file' id="file" value="<?php echo $donnees['file']?>"  required="required">
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" name="done" class="btn btn-primary btn-block" >add product</button>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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