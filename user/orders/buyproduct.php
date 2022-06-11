<?php
    session_start();
    if (isset($_SESSION["role"])) {
       echo "<script>
       document.location.href = '../../auth/login.php';
       </script>";
    }elseif ( !isset($_SESSION["email"])) {
       echo "<script>
      document.location.href = '../../auth/login.php';
      </script>";
   }else{
        $id_product = $_GET["id"];
        if ( isset($_SESSION["chart"][$id_product])) {
            $_SESSION["chart"][$id_product] += 1;
        }else{
            $_SESSION["chart"][$id_product] = 1;
        }
   }
//    echo "<pre>";
//    print_r($_SESSION);
//    echo "</pre>";
echo "<script> alert('Barang Telah dimasukkan Keranjang!'); </script>";
echo "<script>location='../../product/index.php';</script>";
?>