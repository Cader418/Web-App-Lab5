<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="bbcss.css" rel="stylesheet">
    <?php include 'admin-ind.php';?>
    <script>
        function generateCards(){
            //Convert php lists to JavaScript lists
            var fac_name = <?php echo json_encode($fac_name) ?>;
            var fac_DOJ = <?php echo json_encode($fac_DOJ) ?>;
            var qualification = <?php echo json_encode($qualification) ?>;
            var department = <?php echo json_encode($department) ?>;
            var len = fac_name.length;
            for(var i = 0; i < len; i++){ //Print each on cards
                //Display info
                document.getElementById('faculty').innerHTML += ("<b>Name:</b> " + fac_name[i]
                + "<br><b>Date of Joining:</b> " + fac_DOJ[i] + "<br><b>Qualification:</b> " + qualification[i] + "<br><b>department:</b> " + department[i] + "</br>");
            }

            //Convert php lists to JavaScript lists
            var stu_name = <?php echo json_encode($stu_name) ?>;
            var YOE = <?php echo json_encode($YOE) ?>;
            var YOG = <?php echo json_encode($YOG) ?>;
            var major = <?php echo json_encode($major) ?>;
            var GPA = <?php echo json_encode($GPA) ?>;
            var len = stu_name.length;
            for(var i = 0; i < len; i++){ //Print each on cards
                //Display info
                document.getElementById('students').innerHTML += ("<b>Name:</b> " + stu_name[i] + "<br><b>Enrolled:</b> " + YOE[i] 
                + "<br><b>Expected Graduation:</b> " + YOG[i] + "<br><b>Major:</b> " + major[i] + "<br><b>GPA:</b> " + GPA[i] + "<br><br>");
            }
        }
    </script>
</head>

<body id="page-top" onload="generateCards()">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">EMG</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                           

                        <!-- Nav Item - Alerts -->

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN PAGE</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Faculty</h6>
                                </div>
                                <div id="faculty" class="card-body">

                                </div>
                            </div>

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Student</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                    <form action="add-student.php" method="POST">
                                        Student ID:
                                        <input type="text" name = "stu_id"> <br>
                                        Student Name:
                                        <input type="text" name = "stu_name"> <br>
                                        Year of Enrollment:
                                        <input type="number" min="1900" max="2099" step="1" name = "YOE"> <br>
                                        Student Major: 
                                        <input type="text" name = "stu_major"> <br>
                                        GPA:
                                        <input type="text" name = "GPA"> <br>
                                        Expected Graduation:
                                        <input type="number" min="1900" max="2099" step="1" name = "YOG"> <br>
                                        Username:
                                        <input type="text" name = "uid"> <br>
                                        Password:
                                        <input type="text" name = "psw"> <br>

                                        <input class="btn" type="submit"></input>
                                    </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Students</h6>
                                </div>
                                <div id="students" class="card-body">

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>