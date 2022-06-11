<?php
    include_once("config.php");

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM users INNER JOIN roles ON users.role_id = roles.idrole INNER JOIN genders ON users.gender_id = genders.idjeniskelamin WHERE id = '$id'");
    $result = mysqli_fetch_array($result);

    var_dump($result);
?>