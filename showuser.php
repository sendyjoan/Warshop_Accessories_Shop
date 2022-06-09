<?php
    include_once("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM users INNER JOIN role ON users.role_id = role.idrole INNER JOIN genders ON users.gender_id = genders.idjeniskelamin;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
</head>
<body>
    <h1>Show User</h1>
    <table width='80%' border=1>

        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Address</th>
            <th>Telephone</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Picture</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        <?php  
        while($data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$data['name']."</td>";
            echo "<td>".$data['email']."</td>";
            echo "<td>".$data['jeniskelamin']."</td>";
            echo "<td>".$data['address']."</td>";
            echo "<td>".$data['telephone']."</td>";
            echo "<td>".$data['tanggallahir']."</td>";
            echo "<td>".$data['tempatlahir']."</td>";
            echo "<td>".$data['picture']."</td>";
            echo "<td>".$data['role']."</td>";
            echo "<td><a href='detail_user.php?id=$data[id]'>Detail</a> <br>
            <a href='edit_product.php?id=$data[id]'>Edit</a> <br> 
            <a href='delete_product.php?id=$data[id]'>Delete</a> </td>";
        }
        ?>
    </table>
</body>
</html>