<?php
    include_once("config.php");

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM users INNER JOIN role ON users.role_id = role.idrole INNER JOIN genders ON users.gender_id = genders.idjeniskelamin WHERE id = '$id'");
    $result = mysqli_fetch_array($result);

    var_dump($result);
?>