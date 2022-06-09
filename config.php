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

function ubah($data) {
	global $mysqli;

	$id = $data["idproduct"];
	$namabarang = htmlspecialchars($data["namabarang"]);
	$ringkasan = htmlspecialchars($_POST["ringkasan"]);
	$deskripsi = htmlspecialchars($_POST["deskripsi"]);
	$harga = $_POST["harga"];
	$harga = (int)$harga;
	$stock = $_POST["stock"];
	$stock = (int)$stock;
	$categori = $_POST["category"];
	$categori = (int)$categori;
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	$gambar = null;
	
	// cek apakah user pilih gambar baru atau tidak
	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		// Gambar 
			$namaFile = $_FILES['gambar']['name'];
			$tmpName = $_FILES['gambar']['tmp_name'];

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
		$gambar = $namaFileBaru;
	}
	

	$query = "UPDATE products SET
				namabarang = '$namabarang',
				ringkasan = '$ringkasan',
				deskripsi = '$deskripsi',
				harga = '$harga',
				stock = '$stock',
				category_id = '$categori',
				gambar = '$gambar'
			  WHERE idproduct = $id
			";

	mysqli_query($mysqli, $query);

	$status = mysqli_affected_rows($mysqli);	
	return $status;
}

function registrasi($data){
	global $mysqli;

	$email = $data["email"];
    $role = $data["role"];
    $name = $data["name"];
    $gender = $data["gender"];
    $address = $data["address"];
    $tele = $data["telephone"];
    $tgl = $data["tanggallahir"];
    $tmp = $data["tempatlahir"];
    $pass1 = $data["password1"];
    $pass2 = $data["password2"];

	$result = mysqli_query($mysqli, "SELECT * FROM users WHERE email = '$email'");
    // var_dump($_POST); //Debug Regis
    if (mysqli_fetch_assoc($result)) {
	     echo "<script>
		    alert('Email sudah terdaftar!')
	        </script>";
    }elseif( $pass1 !== $pass2 ){
         echo "<script>
			    alert('Password Tidak Sama')
		       </script>";
    } else {
        $pass1 = password_hash($pass1, PASSWORD_DEFAULT);
        mysqli_query($mysqli, "INSERT INTO users (name, email, gender_id, address, telephone, tanggallahir, tempatlahir, role_id, password) VALUES('$name', '$email', '$gender', '$address', '$tele', '$tgl', '$tmp', '$role', '$pass1')");
        $affect = mysqli_affected_rows($mysqli);   

		return $affect;
    }
}

function deleteuser($id) {
	global $mysqli;
	mysqli_query($mysqli, "DELETE FROM users WHERE id = $id");
	return mysqli_affected_rows($mysqli);
}

function editprofile($data){
	global $mysqli;

	$id = $data["id"];
	$oldpass = $data["password"];
	$role = $data["role"];
	$oldphoto = $data["oldphoto"];
	$email = $data["email"];
	$name = $data["name"];
    $gender = $data["gender"];
    $address = $data["address"];
    $tele = $data["telephone"];
    $tgl = $data["tanggallahir"];
    $tmp = $data["tempatlahir"];
	$newpass = $data["password1"];
	$newpass2 = $data["password2"];

	if ($_FILES["photo"]["error"] === 4) {
		$photo = $oldphoto;
	}else{
		// Gambar 
		$namaFile = $_FILES['photo']['name'];
		$tmpName = $_FILES['photo']['tmp_name'];

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

		move_uploaded_file($tmpName, 'user_img/' . $namaFileBaru);
		$photo = $namaFileBaru;
	}

	if(isset($data["password1"])){
		if ( $newpass !== $newpass2) {
			echo "<script>
					alert('Password Tidak Sama <br> Password Gagal Diperbaharui')
				   </script>";
			$newpass = $oldpass;
		}
	}
	
	if (!isset($pass1)) {
		$newpass = $oldpass;
	}else{
		$query = "UPDATE users SET
			name = '$name',
			email = '$email',
			gender_id = '$gender',
			address = '$address',
			telephone = '$tele',
			tanggallahir = '$tgl',
			tempatlahir = '$tmp',
			picture = '$photo',
			role_id = '$role',
			password = '$newpass'
			WHERE id = '$id'
		";
		$hasil = mysqli_query($mysqli, $query);
		$hasil = mysqli_affected_rows($hasil);
	}
}
?>