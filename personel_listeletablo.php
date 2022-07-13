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
<form method="POST" action="personel_listele.php">
<table border="1" align="center" width="500">
<tr>
<td>Personel Adı</td>
<td>Personel Soyadı</td>
<td>E-Posta Adresi</td>
<td>Şifre</td>
<td>Sil</td>
</tr>

<?php 
session_start(); 
include "baglantilarim.php";

$sonuc=mysqli_query($conn,"select * from personel_bilgileri"); 
 
while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo '<td>'.$satir['PERSONEL_ADI'].'</td>';
echo '<td>'.$satir['PERSONEL_SOYAD'].'</td>';
echo '<td>'.$satir['email'].'</td>';
echo '<td>'.$satir['sifre'].'</td>';

echo '<td> <a href="personel_listele.php?PERSONEL_ID='.$satir['PERSONEL_ID'].'" onclick="return uyari();">Sil</a> </td>';
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