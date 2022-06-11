<?php
    include_once("config.php");

    if( isset($_POST["login"]) ) {
        $email = $_POST["email"];
        $password = $_POST["password"];
		// $password = $_POST[""];

		$result = mysqli_query($mysqli, "SELECT * FROM users WHERE email = '$email'");

		// cek username
		if( mysqli_num_rows($result) === 1 ) {

			// cek password
			$row = mysqli_fetch_assoc($result);
			if( password_verify($password, $row["password"]) ) {
				session_start();
				$email = $row["email"];
				$_SESSION["email"] = $email;
				echo "<script>
			    alert('Anda berhasil Login')
				document.location.href = 'index.php';
		       </script>";
				exit;
			}
		}
		$error = true;
		
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE Login</title>
</head>
<body>
	<h1>LOGIN</h1>
	<?php if( isset($error) ) : ?>
		<p style="color: red; font-style: italic;">username / password salah</p>
	<?php endif; ?>
<form action="" method="post" onSubmit="return validasi()">
			<div>
				<label>Email:</label>
				<input type="email" name="email" id="email" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
                <button type="submit" name="login">Login</button>
			</div>
		</form>
</body>
</html>