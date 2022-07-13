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
<form method="POST" action="urunler_ekle.php">
<table border="1" align="center">
<tr>
<td colspan="2" align="center"> ÜRÜN EKLEME TABLOSU</td>
 
</tr>

<tr>
<td>Ürün Adı</td>
<td><input type="text" name="urun_adi" required></td>
</tr>
<tr>
<td>Ürün Kategori</td>
<td><input type="text" name="urun_kategori" required></td>
</tr>
<tr>
<td>Ürün Sezonu</td>
<td><input type="text" name="urun_sezon" required></td>
</tr>
<tr>
<td>Ürün Adet</td>
<td><input type="text" name="urun_adet" required></td>
</tr>
<tr>
<td>Ürün Fiyat</td>
<td><input type="text" name="urun_fiyat" required></td>
</tr>

</tr>
<tr>

<td  colspan="2" align="center"><input type="submit" value="EKLE"></td>
</tr>
</table>
</form>

</body>
</html>

<!-- 
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                           Ürünler
                        </span>
                    </a>
                    


                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-plus-circle fa-2x"></i>
                        <span class="nav-text">
                            Stok Kartı Oluştur
                        </span>
                    </a>
                   
                </li>
                
                <li>
                   <a href="#">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Kategoriler
                        </span>
                    </a>
                </li>
               <li>
                    <a href="fatura.php">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                          Faturalar
                        </span>
                    </a>
                </li>
                
                
            </ul> -->