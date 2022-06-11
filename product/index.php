<?php
// Create database connection using config file
session_start();
    if ( isset($_SESSION["role"])) {
        echo "<script>
       document.location.href = '../auth/login.php';
       </script>";
    }elseif ( !isset($_SESSION["email"])) {
        echo "<script>
       document.location.href = '../auth/login.php';
       </script>";
    }
$id = $_SESSION["id"];
include_once("../config.php");
// Fetch all users data from database
 $result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY idproduct ASC");
 if (isset($_SESSION["role"])) {
    echo "<script>
    document.location.href = '../auth/login.php';
    </script>";
 }elseif ( !isset($_SESSION["email"])) {
    echo "<script>
   document.location.href = '../auth/login.php';
   </script>";
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
    <link rel="shortcut icon" href="../public/assets/images/favicon.png" type="">

    <title> Warshop | Produk</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../public/assets/css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="../public/assets/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../public/assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../public/assets/css/responsive.css" rel="stylesheet" />


</head>

<body class="sub_page">

    <div class="hero_area">
        <div class="bg-box">
            <img src="../public/assets/images/hero-bg.jpg" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.php">
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
                            <li class="nav-item ">
                                <a class="nav-link" href="../user/">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Produk<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../user/about.php">Tentang</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="../user/profile/index.php?id=<?php echo $id ?>" class="user_link">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <a class="cart_link" href="../user/orders/chart.php">
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
                            <a href="../belogout.php" class="user_link">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->

    </div>

    <!-- product section -->
    <section class="food_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Produk Kami
                </h2>
            </div>

            <ul class="filters_menu">
            </ul>
            <div class="filters-content">
                <div class="row grid">
                    <?php  
                        while($user_data = mysqli_fetch_array($result)) {         
                    ?>
                    <div class="col-sm-4 col-lg-3 all sepatu">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <img src="../public/assets/product_img/<?php echo $user_data['gambar'] ?>" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        <?php echo $user_data['namabarang'] ?>
                                    </h5>
                                    <p>
                                        <?php echo $user_data['ringkasan'] ?>
                                    </p>
                                    <div class="options">
                                        <h6>
                                            Rp.<?php echo $user_data['harga'] ?>,-
                                        </h6>
                                        <a href="../user/orders/buyproduct.php?id=<?php echo $user_data['idproduct'] ?>">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 456.029 456.029"
                                                style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
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
                                                        <path
                                                            d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- end product section -->


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
    <script src="../public/assets/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="../public/assets/js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="../public/assets/js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>