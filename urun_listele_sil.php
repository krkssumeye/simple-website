<?php
 session_start(); 
include "baglantilarim.php";




if(isset($_GET['urunler_ıd'])){
            $id=$_GET['urunler_ıd'];
            $silSorgusu="DELETE FROM urunler WHERE urunler_ıd='$id'";
            if(mysqli_query($conn, $silSorgusu)) {
                echo "Kayıt silindi. <a href='urun_listele.php'>Geri dön</a>";
            }
        }
?>
