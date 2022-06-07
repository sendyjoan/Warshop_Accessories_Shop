<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'db_projectslm';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if (!$mysqli) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//function delete product
function deleteproduct($id) {
	global $mysqli;
	mysqli_query($mysqli, "DELETE FROM products WHERE idproduct = $id");
	return mysqli_affected_rows($mysqli);
}
 
function addproduct($data){
	global $mysqli;

	$namabarang = htmlspecialchars($data["namabarang"]);
	$ringkasan = htmlspecialchars($data["ringkasan"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$harga = $data["harga"];
	$harga = (int)$harga;
	$stock = $data["stock"];
	$stock = (int)$stock;
	$categori = $data["category"];
	$categori = (int)$categori;

	// upload gambar
	$gambar = upload();
	
	if( $gambar ) {
		return false;
	}

	mysqli_query($mysqli, "INSERT INTO products VALUES (null, $namabarang, $ringkasan, $deskripsi, $harga, $stock, $categori, $gambar)");
	
	return mysqli_affected_rows($mysqli);
}

function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

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

	// // cek jika ukurannya terlalu besar
	// if( $ukuranFile > 1000000 ) {
	// 	echo "<script>
	// 			alert('ukuran gambar terlalu besar!');
	// 		  </script>";
	// 	return false;
	// }

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'product_img/' . $namaFileBaru);

	return $namaFileBaru;
}
?>