<?php
include_once("../../config.php");
session_start();
 if (!isset($_SESSION["role"])) {
    echo "<script>
    document.location.href = '../../auth/login.php';
    </script>";
 }

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$product = mysqli_query($mysqli, "SELECT * FROM products WHERE idproduct = $id");
$product = mysqli_fetch_array($product);

$email = $_SESSION["email"];

    $profile = mysqli_query($mysqli, "SELECT * FROM users WHERE email = '$email'");
    $profile = mysqli_fetch_array($profile);

// var_dump($product);

if( isset($_POST["ubah"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
    // var_dump($_POST);
    // var_dump($_FILES);
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = '#';
</script>
";
}


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Warshop Admin</title>
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
                <a class="navbar-brand brand-logo font-weight-bold" href="/">Warshop</a>
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
                                <p class="mb-1 text-black"><?php echo $profile["name"] ?></p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="../../belogout.php">
                                <i class="mdi mdi-logout me-2 text-primary"></i> Logout </a>
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
                                <span class="font-weight-bold mb-2"><?php echo $profile["name"] ?></span>
                                <span class="text-secondary text-small">Admin</span>
                            </div>
                            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <span class="menu-title">Tabel Produk</span>
                            <i class="mdi mdi-table-large menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../user/">
                            <span class="menu-title">Tabel Pengguna</span>
                            <i class="mdi mdi-table-large menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../create_admin.php">
                            <span class="menu-title">Tambah Admin</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-header">
                                    <a style="text-decoration: none;" class="text-dark" href="index.php">Produk / </a>
                                    <a style="text-decoration: none;" class="text-dark font-weight-bold"
                                        href="edit.php">Edit
                                        Produk</a>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="" id="myForm" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="namabarang">Nama Barang</label>
                                            <input type="text" name="namabarang" class="form-control" id="namabarang"
                                                value="<?= $product["namabarang"] ?>" aria-describedby="namabarang">
                                        </div>
                                        <div class="form-group">
                                            <label for="ringkasan">Ringkasan</label>
                                            <input type="text" name="ringkasan" class="form-control" id="ringkasan"
                                                value="<?= $product['ringkasan'] ?>" aria-describedby="ringkasan">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                                value="<?= $product['deskripsi'] ?>" aria-describedby="deskripsi">
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="number" name="harga" class="form-control" id="harga"
                                                value="<?= $product['harga'] ?>" aria-describedby="harga">
                                        </div>
                                        <div class="form-group">
                                            <label for="stock">Stock</label>
                                            <input type="number" name="stock" class="form-control" id="stock"
                                                value="<?= $product['stock'] ?>" aria-describedby="stock">
                                        </div>
                                        <div class=" form-group">
                                            <label for="gambar">Picture</label>
                                            <input type="file" class="form-control" name="gambar" value="gambar"></br>
                                            <img width="150px"
                                                src="../../public/assets/product_img/<?php echo $product['gambar']?>">
                                        </div>
                                        <input type="hidden" name="idproduct" value="<?= $product["idproduct"]; ?>">
                                        <input type="hidden" name="gambarLama" value="<?= $product["gambar"]; ?>">
                                        <button type="submit" name="ubah" id="ubah"
                                            class="btn btn-primary">Ubah</button>
                                    </form>
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
                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©Warshop
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