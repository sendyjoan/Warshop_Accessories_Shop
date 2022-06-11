<?php
    include_once("config.php");

    // ambil data di URL
    $id = $_GET["id"];

    $nilai = mysqli_query($mysqli, "SELECT * FROM users WHERE id = '$id'");
    $nilai = mysqli_fetch_array($nilai);

    if ( isset($_POST["editfoto"])) {
        
        if (editpict($_FILES) > 0) {
            echo "
			<script>
				alert('Profile berhasil diubah!');
				document.location.href = 'showuser.php';
			</script>
		    ";
        } else {
            echo "
                <script>
                    alert('Profile gagal diubah!');
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
    <title>Edit Picture PHP</title>
</head>
<body>
    <h1>Edit Profile Picture</h1>
    <?php echo $nilai["picture"]; ?>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <input type="hidden" name="oldpicture" value="<?php echo $nilai["picture"]; ?>">
            <input type="hidden" name="id" value="<?php echo $nilai["id"]; ?>">
        <li>
            <label for="gambar">New Picture</label>
            <input type="file" name="gambar" id="gambar">
        </li>
        <li>
				<button type="submit" name="editfoto">Edit Foto</button>
		</li>
        </ul>
    </form>
</body>
</html>