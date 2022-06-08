<?php
    include_once("config.php");

    if( isset($_POST["submit"]) ) {
        $email = $_POST["email"];
        $password = $_POST["password"];

		
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
                <button type="submit" name="submit">Login</button>
			</div>
		</form>
</body>
</html>