<?php
include_once("config.php");

// ambil data di URL
$id = 20;

// query data mahasiswa berdasarkan id
$product = mysqli_query($mysqli, "SELECT * FROM products WHERE idproduct = $id");
$product = mysqli_fetch_array($product);

var_dump($product);

if( isset($_POST["ubah"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
    // var_dump($_POST);
    // var_dump($_FILES);
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'product.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'edit_product.php';
			</script>
		";
	}


}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Update data product</title>
</head>

<body>
    <h1>Update data product</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <input type="hidden" name="idproduct" value="<?= $product["idproduct"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $product["gambar"]; ?>">
            <li>
                <label for="namabarang">Nama Barang : </label>
                <input type="text" name="namabarang" id="namabarang" required value="<?= $product['namabarang'] ?>">
            </li>
            <li>
                <label for="ringkasan">Ringkasan : </label>
                <input type="text" name="ringkasan" id="ringkasan" value="<?= $product['ringkasan'] ?>">
            </li>
            <li>
                <label for="deskripsi">Deskripsi :</label>
                <input type="text" name="deskripsi" id="deskripsi" value="<?= $product['deskripsi'] ?>">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="number" name="harga" id="harga" value="<?= $product['harga'] ?>">
            </li>
            <li>
                <label for="stock">Stock :</label>
                <input type="number" name="stock" id="stock" value="<?= $product['stock'] ?>">
            </li>
            <li>
                <label for="category">Pilih Kategori :</label>
                <select id="category" name="category">
                    <?php
						$kategori = mysqli_query($mysqli, "SELECT * FROM categories ORDER BY idkategori ASC");
						while ($data = mysqli_fetch_array($kategori)) {
                            if ($data['idkategori'] == $product['category_id']) {
                                echo "<option selected value = ".$data['idkategori'].">".$data['kategori']."</option>";
                            }else{
                                echo "<option value = ".$data['idkategori'].">".$data['kategori']."</option>";
                            }
						}
					?>
                </select>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>