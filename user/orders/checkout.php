<?php
    include_once("../../config.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warshop | Checkou</title>
</head>
<body>
<h1>Checkout</h1>
    <table width='100%' border=1>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>Sub Jumlah</th>
        </tr>
            <?php $nomor = 1; ?>
            <?php $total = 0 ?>
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
                </tr>
                <?php $nomor++; ?>
                <?php $total += $sub ?>
            <?php endforeach ?>
    </table>
    <?php echo $total ?>
    <form action="payment.php" method="post">
        <input type="hidden" name="total" value="<?php echo $total ?>">
        <button type="submit" name="bayarchart">Bayar Sekarang</button>
    </form>

</body>
</html>