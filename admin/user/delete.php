<?php
    include_once("../../config.php");

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