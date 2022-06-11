<?php
    include_once("../../config.php");
    session_start();

    if ( empty($_SESSION["chart"]) OR !isset($_SESSION["chart"])) {
        echo "<script>alert('Keranjang Belanja Kosong! Silahkan Berbelanja Terlebih Dahulu'); location='../../product/index.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warshop | Chart</title>
</head>
<body>
    <h1>Keranjang Belanja</h1>
    <table width='100%' border=1>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>Sub Jumlah</th>
            <th>Aksi</th>
        </tr>
            <?php $nomor = 1; ?>
            <?php foreach ($_SESSION["chart"] as $id_product => $jumlah):?>
                <?php $ambil = mysqli_query($mysqli, "SELECT * FROM products WHERE idproduct = '$id_product'");
                $ambil = mysqli_fetch_assoc($ambil);
                $sub = $ambil["harga"] * $jumlah?>
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $ambil["namabarang"] ?></td>
                    <td>Rp. <?php echo number_format($ambil["harga"]) ?></td>
                    <td><?php echo $jumlah ?></td>
                    <td><?php echo $sub ?></td>
                    <td>
                        <a href="hapus.php?id=<?php echo $id_product ?>">Hapus</a>
                    </td>
                </tr>
                <?php $nomor++; ?>
            <?php endforeach ?>
    </table>
    <a href="../../product/index.php" >Lanjut Belanja</a>
    <br>
    <a href="checkout.php">Checkout Keranjang</a>
</body>
</html>