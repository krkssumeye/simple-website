<?php 
    $_SERVER = "localhost";
    $kullanici="root";
    $sifre = "";
    $veritaban─▒ = "stok_kontrol_otomasyon";
    $conn = mysqli_connect($_SERVER, $kullanici, $sifre , $veritaban─▒ );

 if (!$conn) {
    echo "Connection failed!";
   } ?>