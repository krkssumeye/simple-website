<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="sidebar.css">
<body>

  <div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="kontrolpaneli.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            KONTROL PANELİ
                        </span>
                    </a>
                  
                </li>

               

            <ul class="logout">
                <li>
                   <a href="girisayfa.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            ÇIKIŞ
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
<style>  
     table {  
      font-family: arial, sans-serif;  
      border-collapse: collapse;  
      width: 80%;  
      margin-top: 17%;
     }  
     td, th {  
      border: 3px solid rgb(54, 22, 4);  
      text-align: center;  
      padding: 15px;  
     }  

     tr:nth-child(even) {  
      background-color: #9e5535;  
     }  
      tr:nth-child(odd) {  
      background-color: #F0D598;  }
input{
    border:2px solid rgb(54, 22, 4);
    height: 25px;
}

     </style>  
<form method="POST" action="urun_listele_sil.php">
<table border="1" align="center" width="500">
<tr>
<td>Ürün Adı</td>
<td>Ürün Kategori</td>
<td>Ürün Sezon</td>
<td>Ürün Adet</td>
<td>Ürün Fiyat</td>
<td>Sil</td>
</tr>

<?php 
session_start(); 
include "baglantilarim.php";

$sonuc=mysqli_query($conn,"select * from urunler"); 
 
while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo '<td>'.$satir['urun_adi'].'</td>';
echo '<td>'.$satir['urun_kategori'].'</td>';
echo '<td>'.$satir['urun_sezon'].'</td>';
echo '<td>'.$satir['urun_adet'].'</td>';
echo '<td>'.$satir['urun_fiyat'].'</td>';


echo '<td> <a href="urun_listele_sil.php?urunler_ıd='.$satir['urunler_ıd'].'" onclick="return uyari();">Sil</a> </td>';
echo '</tr>';
}

 ?>

</table>
</form>
</body>
</html>

<script language="JavaScript">
function uyari() {
 
if (confirm("Bu kaydı silmek istediğinize emin misiniz?"))
   return true;
else 
   return false;
}
</script>