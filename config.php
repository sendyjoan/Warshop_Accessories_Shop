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
	global $conn;

	$namabarang = htmlspecialchars($data["namabarang"]);
	$ringkasan = htmlspecialchars($data["ringkasan"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$harga = htmlspecialchars($data["harga"]);
	$stock = htmlspecialchars($data["stock"]);
	$categori = htmlspecialchars($data["category"]);
	$date = date("d/m/Y h:i:s");

	// upload gambar
	$gambar = upload();
	if( $gambar ) {
		return false;
	}

	$query = "INSERT INTO products
				VALUES
			  ('', '$namabarang', '$ringkasan', '$deskripsi', '$harga', '$stock', '$categori', '$date', '$date')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
?>