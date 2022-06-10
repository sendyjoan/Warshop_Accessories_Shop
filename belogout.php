<?php
    session_start();
    var_dump($_SESSION["email"]);

    unset($_SESSION["email"]);

     session_unset();
     session_destroy();

     header("location:belogin.php");
	
?>