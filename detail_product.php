<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE idproduct=$id");
$result = mysqli_fetch_array($result);

var_dump($result);
?>