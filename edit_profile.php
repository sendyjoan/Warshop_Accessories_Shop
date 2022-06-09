<?php
include_once("config.php");

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM users INNER JOIN role ON users.role_id = role.idrole INNER JOIN genders ON users.gender_id = genders.idjeniskelamin WHERE id = '$id'");
$result = mysqli_fetch_array($result);

// var_dump($result);

if ( isset($_POST["editprofile"])) {
    // var_dump($_POST);

    if( editprofile($_POST) > 0 ) {
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
    <title>Edit User</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="role" id="role" value="1">
        <input type="hidden" name="id" id="id" value="<?php echo $result['id'] ?>">
        <input type="hidden" name="email" value="<?php echo $result['email'] ?>">
        <ul>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="" id="" disabled value="<?php echo $result['email'] ?>">
            </li>
            <li>
                <label for="name">Nama Lengkap : </label>
                <input type="text" name="name" id="name" value="<?php echo $result['name'] ?>">
            </li>
            
            <li>
                <label for="address">Alamat : </label>
                <input type="text" name="address" id="address" value="<?php echo $result['address'] ?>">
            </li>
            <li>
                <label for="telephone">No. Telephone : </label>
                <input type="telephone" name="telephone" id="telephone" value="<?php echo $result['telephone'] ?>">
            </li>
            <li>
                <label for="tanggallahir">Tanggal Lahir : </label>
                <input type="date" name="tanggallahir" id="tanggallahir" value="<?php echo $result['tanggallahir'] ?>">
            </li>
            <li>
                <label for="tempatlahir">Tempat Lahir : </label>
                <input type="text" name="tempatlahir" id="tempatlahir" value="<?php echo $result['tempatlahir'] ?>">
            </li>
            <li>
                <label for="gender">Jenis Kelamin :</label>
                <select id="gender" name="gender">
                    <?php if($result["gender_id"] == 1 ){ ?>
                <option value="1" selected >Pria</option>
                <option value="2">Wanita</option>
                    <?php }else{?>
                <option value="1">Pria</option>
                <option value="2" selected>Wanita</option>
                    <?php }?>
                </select>
            </li>
            <li>
				<button type="submit" name="editprofile">Edit Profile</button>
			</li>
        </ul>
    </form>
</body>
</html>