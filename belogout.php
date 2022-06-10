<?php
    session_start();
    var_dump($_SESSION["email"]);

    unset($_SESSION["email"]);
    unset($_SESSION["role"]);

     session_unset();
     session_destroy();

     header("location:index.php");
	
?>