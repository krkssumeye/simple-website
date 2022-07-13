<?php
error_reporting(0);
session_start(); 
include "baglantilarim.php";


$urun_adi = $_POST['urun_adi'];
$urun_kategori = $_POST['urun_kategori'];
$urun_sezon = $_POST['urun_sezon'];
$urun_adet = $_POST['urun_adet'];
$urun_fiyat= $_POST['urun_fiyat'];



	$sql2 ="INSERT INTO urunler(urun_adi, urun_kategori,urun_sezon,urun_adet,urun_fiyat) VALUES ('".$_POST["urun_adi"]."','".$_POST["urun_kategori"]."' , '".$_POST["urun_sezon"]."','".$_POST["urun_adet"]."','".$_POST["urun_fiyat"]."')";
	 

	 $sonuc = mysqli_query($conn,$sql2);
	if ($sonuc) {
		 echo "Kayıt Başarıyla Oluştu";
	}
 else {
  echo "Hata: " ;
}
mysqli_close($conn);

?>

