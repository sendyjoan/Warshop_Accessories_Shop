<?php
    include_once("../config.php");
    session_start();
    if (isset($_SESSION["email"])) {
        if (isset($_SESSION["role"])) {
            echo "<script>
				document.location.href = '../admin/product';
		       </script>";
        }
        echo "<script>
            document.location.href = '../user';
        </script>";
    }

    if ( isset($_POST["registrasi"])) {
        // var_dump($_POST);
        if( registrasi($_POST) > 0){
            echo "<script>
                alert('Selamat anda telah terdaftar! Silahkan melakukan Login!')
                document.location.href = 'login.php';
                </script>";
        }else{
            echo "<script>
                alert('Proses Registrasi Gagal!')
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../public/assets/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/main2.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="regist100-form validate-form" style="background-color: #0c0c0c;" action="" method="post">
                    <input type="hidden" name="role" id="role" value="1">
                    <input type="hidden" name="gender" id="gender" value="1">
                    <div align="right" style="margin-bottom: 15px;">
                        <a href="login.php">
                            <i class="fa fa-arrow-right text-sm pr-2 " style="color: #ffbe33">
                            </i>
                        </a>
                    </div>
                    <span class="login100-form-title p-b-43">
                        Daftar
                    </span>

                    <div class="wrap-regist100 validate-input" data-validate="Anda harus memasukkan nama Anda">
                        <input class="input100" type="text" name="name" placeholder="Masukkan Nama" required>
                    </div>

                    <div class="wrap-regist100 validate-input"
                        data-validate="Diperlukan alamat wmail yang valid: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Masukkan Email" required>
                    </div>


                    <div class="wrap-regist100 validate-input" data-validate="Password tidak boleh kosong">
                        <input class="input100" type="password" name="password1" placeholder="Masukkan Password" required>
                    </div>

                    <div class="wrap-regist100 validate-input" data-validate="Masukkan konfirmasi password">
                        <input class="input100" type="password" name="password2" placeholder="Masukkan Konfirmasi Password" required>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn btn-1" name="registrasi">
                            Daftar
                        </button>
                    </div>

                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            Sudah punya akun?
                        </span>
                        <span>
                            <a href="login.php" class="txt1">Login Sekarang</a>
                        </span>
                    </div>
                </form>
                <div class="login100-more" style="background-image: url('../public/assets/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="../public/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../public/assets/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../public/assets/vendor/bootstrap/js/popper.js"></script>
    <script src="../public/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../public/assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../public/assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="../public/assets/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../public/assets/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../public/assets/js/main2.js"></script>

</body>

</html>