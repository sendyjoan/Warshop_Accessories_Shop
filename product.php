<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY idproduct ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
</head>
<body>
    <h1>Product Page</h1>

    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Summary</th> <th>Description</th> <th>Price</th> <th>Stock</th> <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['namabarang']."</td>";
        echo "<td>".$user_data['ringkasan']."</td>";
        echo "<td>".$user_data['deskripsi']."</td>";
        echo "<td>".$user_data['harga']."</td>";
        echo "<td>".$user_data['stock']."</td>";
        echo "<td><a href='detail_product.php?id=$user_data[idproduct]'>Detail</a> <br> <a href='edit_product.php?id=$user_data[idproduct]'>Edit</a></td>";
    }
    ?>
    </table>
</body>
</html>