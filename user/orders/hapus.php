<?php
    session_start();
    $id = $_GET["id"];
    unset($_SESSION["chart"][$id]);

    echo "<script>alert('Produk Berhasil Terhapus dari Keranjang');
        location='chart.php'</script>";
?>