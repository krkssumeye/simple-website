<?php
 session_start(); 
include "baglantilarim.php";




if(isset($_GET['PERSONEL_ID'])){
            $id=$_GET['PERSONEL_ID'];
            $silSorgusu="DELETE FROM personel_bilgileri WHERE PERSONEL_ID='$id'";
            if(mysqli_query($conn, $silSorgusu)) {
                echo "Kayıt silindi. <a href='personel_listeletablo.php'>Geri dön</a>";
            }
        }

// $silinecekID= $_POST['PERSONEL_ID'];
 

 
// $sonuc=mysqli_query($conn,"DELETE from personel_bilgileri
// where PERSONEL_ID=".$silinecekID);
 
// if($sonuc>0){
// echo "Başarıyla silindi,2 sn. sonra yönlendirileceksiniz.";
// header( "refresh:2;url=personel_listeletablo.php" ); 
//  }
// else
// echo "Bir sorun oluştu silinemedi";
 
?>
