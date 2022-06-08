<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../public/assets/adminAssets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../public/assets/adminAssets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../public/assets/adminAssets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../public/assets/adminAssets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="/"><img src="../../public/assets/adminAssets/images/logo.svg"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="/"><img
                        src="../../public/assets/adminAssets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="../../public/assets/adminAssets/images/faces/face1.jpg" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">Sendy Joan</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img src="../../public/assets/adminAssets/images/faces/face1.jpg" alt="profile">
                                <span class="login-status online"></span>
                                <!--change to offline or busy as needed-->
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2">Sendy Joan</span>
                                <span class="text-secondary text-small">Admin</span>
                            </div>
                            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="menu-title">Products Table</span>
                            <i class="mdi mdi-table-large menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Products Table </h3>
                        <div class="float-left my-2">
                            <form action="#">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search . . . " name="search"
                                        value="#">
                                    <button class="btn btn-success" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-right my-2 mb-4">
                                        <a class="btn btn-success" href="create.php"> Input Menu</a>
                                    </div>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                                <th>Picture</th>
                                                <th width="500px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Id</td>
                                                <td>Bai bai</td>
                                                <td>60000</td>
                                                <td>70</td>
                                                <td><img class="rounded" width="50px" height="50px" src="#" alt=""
                                                        srcset=""></td>
                                                <td>
                                                    <form action="#" method="POST">
                                                        <a class="btn btn-info" href="detail.php">Show</a>
                                                        <a class="btn btn-primary" href="edit.php">Edit</a>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="btn">
                                    #
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
        <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©SLM
                    2022</span>
                <span class="float-none float-sm-end mt-1 mt-sm-0 text-end">Feel free using this website!</span>
            </div>
        </footer>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../../public/assets/adminAssets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="../../public/assets/adminAssets/vendors/chart.js/Chart.min.js"></script>
        <script src="../../public/assets/adminAssets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../public/assets/adminAssets/js/off-canvas.js"></script>
        <script src="../../public/assets/adminAssets/js/hoverable-collapse.js"></script>
        <script src="../../public/assets/adminAssets/js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="../../public/assets/adminAssets/js/dashboard.js"></script>
        <script src="../../public/assets/adminAssets/js/todolist.js"></script>
        <!-- End custom js for this page -->
</body>

</html>