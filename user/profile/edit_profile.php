<?php
include_once("../../config.php");

session_start();
    if ( isset($_SESSION["role"])) {
        echo "<script>
       document.location.href = '../../auth/login.php';
       </script>";
    }

// ambil data di URL
// $id = 1;
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM users INNER JOIN roles ON users.role_id = roles.idrole INNER JOIN genders ON users.gender_id = genders.idjeniskelamin WHERE id = '$id'");
$result = mysqli_fetch_array($result);

// var_dump($result);

if ( isset($_POST["editprofile"])) {
    // var_dump($_POST);

    if( editprofile($_POST) > 0 ) {
		echo "
			<script>
				alert('Profile berhasil diubah!');
				document.location.href = '../index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Profile gagal diubah!');
				document.location.href = '../index.php';
			</script>
		";
	}

}

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="../../public/assets/images/favicon.png" type="">

    <title> Warshop | Edit Profile</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="../../public/assets/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../../public/assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../../public/assets/css/responsive.css" rel="stylesheet" />
    <link href="../../public/assets/css/profile.css" rel="stylesheet" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="sub_page">

    <div class="hero_area">
        <div class="bg-box">
            <img src="../../public/assets/images/hero-bg.jpg" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="../../index.php">
                        <span>
                            Warshop
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../product/">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../about.php">Tentang</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="index.php class="user_link text-warning">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <a class="cart_link" href="../chart.php">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                            <a href="../../belogout.php" class="user_link">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>


    <div class="container emp-profile">
        <span class="ml-5 pb-5">
            <i class="fa fa-arrow-left text-sm pr-2 " style="color: #ffbe33">
            </i>
            <a class="text-md font-medium" href="index.php?id=<?php echo $id ?>" style="color: #ffbe33">Kembali</a>
        </span>
        <div align="center">
            <h3 class=" text-white">
                Edit Profil
            </h3>
        </div>
        <form method="post" action="" class="col-10 mt-2" style="margin-left: 86px;" enctype="multipart/form-data">
            <input type="hidden" name="role" id="role" value="1">
            <input type="hidden" name="id" id="id" value="<?php echo $result['id'] ?>">
            <input type="hidden" name="email" value="<?php echo $result['email'] ?>">
            <div class="form-group">
                <label style="color: #ffbe33;" for="name">Email</label>
                <input type="text" class="form-control bg-dark text-white" id="" name="" aria-describedby="" disabled
                    value="<?php echo $result['email'] ?>">
            </div>
            <div class="form-group">
                <label style="color: #ffbe33;" for="name">Nama Lengkap</label>
                <input type="text" class="form-control bg-dark text-white" id="name" name="name" aria-describedby="name"
                    value="<?php echo $result['name'] ?>">
            </div>
            <div class="form-group">
                <label style="color: #ffbe33;" for="address">Alamat</label>
                <input name="address" id="address" class="form-control bg-dark text-white"
                    value="<?php echo $result['address'] ?>">
            </div>
            <div class="form-group">
                <label style="color: #ffbe33;" for="telephone">Telepon</label>
                <input type="text" class="form-control bg-dark text-white" id="telephone" name="telephone"
                    aria-describedby="telephone" value="<?php echo $result['telephone'] ?>">
            </div>
            <div class="form-group">
                <label style="color: #ffbe33;" for="tanggallahir">Tanggal Lahir</label>
                <input type="date" class="form-control bg-dark text-white" id="tanggallahir" name="tanggallahir"
                    aria-describedby="tanggallahir" value="<?php echo $result['tanggallahir'] ?>">
            </div>
            <div class="form-group">
                <label style="color: #ffbe33;" for="tempatlahir">Tempat lahir</label>
                <input type="text" class="form-control bg-dark text-white" id="tempatlahir" name="tempatlahir"
                    aria-describedby="tempatlahir" value="<?php echo $result['tempatlahir'] ?>">
            </div>
            <div class="form-group">
                <label style="color: #ffbe33;" for="gender">Jenis Kelamin</label>
                <select id="gender" name="gender" class="form-control bg-dark text-white">
                    <?php if($result["gender_id"] == 1 ){ ?>
                    <option value="1" selected>Pria</option>
                    <option value="2">Wanita</option>
                    <?php }else{?>
                    <option value="1">Pria</option>
                    <option value="2" selected>Wanita</option>
                    <?php }?>
                </select>
            </div>
            <!-- <div class="form-group">
                <label style="color: #ffbe33;" for="photo">Foto Profil</label>
                <input type="file" class="form-control bg-dark text-white" id="photo" aria-describedby="photo">
            </div> -->
            <div align="center">
                <button type="submit" name="editprofile"
                    class="btn btn-warning col-3 text-white font-weight-bold mb-2 mt-3">Simpan</button>
            </div>
        </form>
    </div>

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Kontak Kami
                        </h4>
                        <div class="contact_link_box">
                            <a
                                href="https://www.google.com/maps/place/Sekargadung,+Pungging,+Mojokerto+Regency,+East+Java/@-7.5546809,112.56805,15z/data=!3m1!4b1!4m5!3m4!1s0x2e7874fe96cf4081:0xfbd4b8b656de7b!8m2!3d-7.5539338!4d112.5662284">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Lokasi
                                </span>
                            </a>
                            <a href="https://wa.me/6287702508782">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Hubungi +6287702508782
                                </span>
                            </a>
                            <a href="https://www.instagram.com/mrshop515/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <span>
                                    mrshop515
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo">
                            Warshop
                        </a>
                        <p>
                            UMKM Kerajinan Tas dan Dompet Mojokerto merupakan usaha menengah yang bergerak pada sektor
                            kerajinan tangan
                        </p>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>
                        Jam Operasional
                    </h4>
                    <p>
                        <b>Senin - Minggu</b>
                    </p>
                    <p>
                        <li>
                            Pagi = 08.00 - 12.00
                        </li>
                        <li>
                            Sore = 14.00 - 16.00
                        </li>
                        <li>
                            Malam = 19.00 - 22.00
                        </li>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="../../public/assets/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="../../public/assets/js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js">
    </script>
    <!-- custom js -->
    <script src="../../public/assets/js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>