<?php 
session_start();
if (isset($_POST["bayarchart"]) && isset($_SESSION["chart"])) {
    var_dump($_POST);
}elseif (isset($_POST["payment"])) {
    include_once("../../config.php");

    $totalpembayaran = $_POST["total"];
    $date = date('d / M / y');
    
    // gambar
    $namaFile = $_FILES['bukti']['name'];
	$ukuranFile = $_FILES['bukti']['size'];
	$error = $_FILES['bukti']['error'];
	$tmpName = $_FILES['bukti']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('Pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, '../../public/assets/payment_img/' . $namaFileBaru);
    $gambar = $namaFileBaru;

    echo $gambar;


}else{
    echo "<script>
    alert('Anda belum memiliki tagihan');
    document.location.href = '../../auth/login.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warshop | Payment</title>
</head>
<body>
    <h1>Paymen Page</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="total">Total Yang Harus Dibayar <?php echo $_POST["total"] ?></label>
                <input type="hidden" name="total" value="<?php echo $_POST["total"] ?>">
            </li>
            <li>
                <label for="buktipembayaran">Upload Bukti Pembayaran</label>
                <input type="file" name="bukti" id="bukti">
            </li>
            <li>
                <button type="submit" name="payment">Kirim Pembayaran</button>
            </li>
        </ul>
    </form>
</body>
</html>