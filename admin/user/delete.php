<?php
    include_once("../../config.php");
    session_start();
    if (!isset($_SESSION["role"])) {
       echo "<script>
       document.location.href = '../../auth/login.php';
       </script>";
    }

    $id = $_GET['id'];

    if( deleteuser($id) > 0 ) {
        echo "
            <script>
                alert('Data User Berhasil Dihapus');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data User Gagal Dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    }
?>