<?php
include_once("config.php");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
    // var_dump($_POST);
	// var_dump($_FILES);
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( addproduct($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'product.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'add_product.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data product</title>
</head>
<body>
	<h1>Tambah data product</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="namabarang">Nama Barang : </label>
				<input type="text" name="namabarang" id="namabarang" required>
			</li>
			<li>
				<label for="ringkasan">Ringkasan : </label>
				<input type="text" name="ringkasan" id="ringkasan">
			</li>
			<li>
				<label for="deskripsi">Deskripsi :</label>
				<input type="text" name="deskripsi" id="deskripsi">
			</li>
			<li>
				<label for="harga">Harga :</label>
				<input type="number" name="harga" id="harga">
			</li>
            <li>
				<label for="stock">Stock :</label>
				<input type="number" name="stock" id="stock">
			</li>
            <li>
                <label for="category">Pilih Kategori :</label>
                <select id="category" name="category">
					<?php
						$kategori = mysqli_query($mysqli, "SELECT * FROM categories ORDER BY idkategori ASC");
						while ($data = mysqli_fetch_array($kategori)) {
							echo "<option value = ".$data['idkategori'].">".$data['kategori']."</option>";
						}
						
					?>
                </select>
            </li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
    </form>
</body>