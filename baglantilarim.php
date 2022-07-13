<?php 
    $_SERVER = "localhost";
    $kullanici="root";
    $sifre = "";
    $veritabanı = "stok_kontrol_otomasyon";
    $conn = mysqli_connect($_SERVER, $kullanici, $sifre , $veritabanı );

 if (!$conn) {
    echo "Connection failed!";
   } ?>