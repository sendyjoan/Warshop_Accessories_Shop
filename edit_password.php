<?php
    include_once("config.php");

    $id = $_GET["id"];

    $query = mysqli_query($mysqli, "SELECT password FROM users WHERE id = '$id'");
    $query = mysqli_fetch_array($query);

    if(isset($_POST["editpass"])){
        if (editpassword($_POST) > 0) {
            echo "
			<script>
				alert('Password berhasil diubah!');
				document.location.href = 'showuser.php';
			</script>
		";
        }else{
            echo "
			<script>
				alert('Passsword GAGAL diubah!');
				document.location.href = 'showuser.php';
			</script>
		";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Password</title>
</head>
<body>
    <h1>Edit Password</h1>
    <form action="" method="post">
        <ul>
            <input type="hidden" name="oldpassword" value="<?php echo $query["password"] ?>">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <li>
                <label for="newpassword1">Password Baru</label>
                <input type="password" name="newpassword1" id="newpassword1">
            </li>
            <li>
                <label for="newpassword2">Confirmasi Password</label>
                <input type="password" name="newpassword2" id="newpassword2">
            </li>
            <li>
                <button type="submit" name="editpass">Ubah Password</button>
            </li>
        </ul>
    </form>
</body>
</html>