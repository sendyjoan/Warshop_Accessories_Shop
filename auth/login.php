<?php
    include_once("../config.php");
    session_start();
    
    if( isset($_POST["login"]) ) {
        $email = $_POST["email"];
        $password = $_POST["password"];

		$result = mysqli_query($mysqli, "SELECT * FROM users WHERE email = '$email'");

		// cek username
		if( mysqli_num_rows($result) === 1 ) {
			// cek password
			$row = mysqli_fetch_assoc($result);
			if( password_verify($password, $row["password"]) ) {
				$email = $row["email"];
				$_SESSION["email"] = $email;
				echo "<script>
			    alert('Anda berhasil Login')
				document.location.href = '../user/';
		       </script>";
				exit;
			}else{
                echo "<script>
			    alert('Login anda gagal!')
				document.location.href = '../index.php';
		       </script>";
            }
		}
		$error = true;
    }elseif (isset($_SESSION["email"])) {
        echo "<script>
            document.location.href = '../user/';
        </script>";
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
                <form class="login100-form validate-form" action="" method="post">
                    <div align="right" style="margin-bottom: 30px;">
                        <a href="../index.php">
                            <i class="fa fa-arrow-right text-sm pr-2 " style="color: #ffbe33">
                            </i>
                        </a>
                    </div>
                    <div class="login100-form-title p-b-43">
                        Masuk untuk Melanjutkan
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Ingat saya
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Lupa Password?
                            </a>
                        </div>
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn btn-1" type="submit" name="login">
                            Masuk
                        </button>
                    </div>

                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            Belum punya akun?
                        </span>
                        <span>
                            <a href="register.php" class="txt1">Daftar Sekarang</a>
                        </span>
                    </div>
                </form>
                <div class="login100-more" style="background-image: url('../public/assets/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="../public/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../public/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../public/vendor/bootstrap/js/popper.js"></script>
    <script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../public/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../public/vendor/daterangepicker/moment.min.js"></script>
    <script src="../public/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../public/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../public/js/main2.js"></script>

</body>

</html>