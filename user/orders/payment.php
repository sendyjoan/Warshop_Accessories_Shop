<?php 
session_start();
if (isset($_POST["bayarchart"]) && isset($_SESSION["chart"])) {
    
}elseif (isset($_POST["payment"])) {
    include_once("../../config.php");

    $iduser = $_SESSION["id"];
    $total = $_POST["total"];
    $date = date("Y-m-d H:i:s");
    
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

    $pembelian = mysqli_query($mysqli, "INSERT INTO pembelian VALUES ('', '$iduser', '$date', '$total', '$gambar')");
    
    if (mysqli_affected_rows($mysqli) > 0) {
        // Menginput Detail Chart
        $idpembelian = mysqli_query($mysqli, "SELECT idpembelian FROM pembelian WHERE buktipembayaran = '$gambar'");
        $idpembelian = mysqli_fetch_array($idpembelian);
        $idpembelian = (int)$idpembelian["idpembelian"];
        
        foreach ($_SESSION["chart"] as $id_product => $jumlah) {
            $subtot = mysqli_query($mysqli, "SELECT harga FROM products WHERE idproduct = '$id_product'");
            $subtot = mysqli_fetch_array($subtot);
            $subtot = $subtot["harga"] * $jumlah;
            mysqli_query($mysqli, "INSERT INTO chart VALUES ('', '$id_product', '$idpembelian', '$jumlah', '$subtot')");
            $stock = mysqli_query($mysqli, "SELECT stock FROM products WHERE idproduct = '$id_product'");
            $stock = mysqli_fetch_array($stock);
            $stock = $stock["stock"] - $jumlah;
            mysqli_query($mysqli, "UPDATE products SET stock = '$stock' WHERE idproduct = '$id_product'");

        }

        if (mysqli_affected_rows($mysqli) > 0) {
            unset($_SESSION["chart"]);
            echo "<script>
            alert('Transaksi Berhasil');
            document.location.href = 'chart.php';
            </script>";
        }else{
            echo "<script>
            alert('Transaksi Gagal');
            document.location.href = 'chart.php';
            </script>";
        }
    }else{
        echo "<script>
        alert('Data gagal Di Simpan');
        document.location.href = 'chart.php';
        </script>";
    }
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