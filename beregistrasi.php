<?php
    include_once("config.php");

    if ( isset($_POST["registrasi"])) {
        // var_dump($_POST);
        if( registrasi($_POST) > 0){
            echo "<script>
                alert('Selamat anda telah terdaftar! Silahkan melakukan Login!')
                document.location.href = 'belogin.php';
                </script>";
        }else{
            echo "<script>
                alert('Proses Registrasi Gagal!')
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    <h1>Registrasi</h1>
    <form action="" method="post">
        <input type="hidden" name="role" id="role" value="1">
        <ul>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email">
            </li>
            <li>
                <label for="name">Nama Lengkap : </label>
                <input type="text" name="name" id="name">
            </li>
            
            <li>
                <label for="address">Alamat : </label>
                <input type="text" name="address" id="address">
            </li>
            <li>
                <label for="telephone">No. Telephone : </label>
                <input type="telephone" name="telephone" id="telephone">
            </li>
            <li>
                <label for="tanggallahir">Tanggal Lahir : </label>
                <input type="date" name="tanggallahir" id="tanggallahir">
            </li>
            <li>
                <label for="tempatlahir">Tempat Lahir : </label>
                <input type="text" name="tempatlahir" id="tempatlahir">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password1" id="password1">
            </li>
            <li>
                <label for="password">Konfirmasi Password : </label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <label for="gender">Jenis Kelamin :</label>
                <select id="gender" name="gender">
                <option value="1">Pria</option>
                <option value="2">Wanita</option>
                </select>
            </li>
            <li>
				<button type="submit" name="registrasi">Daftar Sekarang</button>
			</li>
        </ul>
    </form>
</body>
</html>