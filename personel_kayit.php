<?php
error_reporting(0);
session_start(); 
include "baglantilarim.php";


$PERSONEL_ADI = $_POST['PERSONEL_ADI'];
$PERSONEL_SOYAD = $_POST['PERSONEL_SOYAD'];
$email= $_POST['email'];
$sifre= $_POST['sifre'];


    $sql2 ="INSERT INTO personel_bilgileri(PERSONEL_ADI,PERSONEL_SOYAD,email,sifre) VALUES ('".$_POST["PERSONEL_ADI"]."','".$_POST["PERSONEL_SOYAD"]."' , '".$_POST["email"]."','".$_POST["sifre"]."')";
     

     $sonuc = mysqli_query($conn,$sql2);
    if ($sonuc) {
         echo "Kayıt Başarıyla Oluştu";
    }
 else {
  echo "Hata: " ;
}

mysqli_close($conn);


?>