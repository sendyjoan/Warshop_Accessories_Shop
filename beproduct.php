<?php
// Create database connection using config file
include_once("config.php");
// Fetch all users data from database
 $result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY idproduct ASC");

session_start();
if (!isset($_SESSION["email"])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE | Product</title>
</head>
<body>
    <table width='100%' border=1>

    <tr>
        <th>Nama</th>
        <th>Ringkasan</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Stock</th>
        <th>Category ID</th>
        <th>Gambar</th>
        <th>Action</th>
    </tr>
    <?php  
        while($data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$data['namabarang']."</td>";
            echo "<td>".$data['ringkasan']."</td>";
            echo "<td>".$data['deskripsi']."</td>";
            echo "<td>".$data['harga']."</td>";
            echo "<td>".$data['stock']."</td>";
            echo "<td>".$data['category_id']."</td>";
            echo "<td>".$data['gambar']."</td>";
            echo "<td><a href='detail_product.php?id=$data[idproduct]'>Detail</a>";
        }
        ?>
    </table>
</body>
</html>