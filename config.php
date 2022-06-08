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
	$namabarang = htmlspecialchars($_POST["namabarang"]);
	$ringkasan = htmlspecialchars($_POST["ringkasan"]);
	$deskripsi = htmlspecialchars($_POST["deskripsi"]);
	$harga = $_POST["harga"];
	$harga = (int)$harga;
	$stock = $_POST["stock"];
	$stock = (int)$stock;
	$categori = $_POST["category"];
	$categori = (int)$categori;

	// Gambar 
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

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'product_img/' . $namaFileBaru);

	// var_dump($namaFileBaru);

	mysqli_query($mysqli, "INSERT INTO products (namabarang, ringkasan, deskripsi, harga, stock, category_id, gambar) VALUES ('$namabarang', '$ringkasan', '$deskripsi', '$harga', '$stock', '$categori', '$namaFileBaru')");
	$status = mysqli_affected_rows($mysqli);

	return $status;
}
?>