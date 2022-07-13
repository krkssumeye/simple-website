
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="proje.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="kontrolpaneli.css">
</head>
<body>

 <nav class="navbar navbar-expand navbar-light  fixed-top">
     <!-- LOGO -->
     <div class="logo">KONTROL PANELİ</div>
					
     
     <!-- NAVIGATION MENU -->
     <ul class="nav-links">
       <!-- USING CHECKBOX HACK -->
       <input type="checkbox" id="checkbox_toggle" />
       <label for="checkbox_toggle" class="hamburger">&#9776;</label>    
<!-- Nav kısmını oluşturdum responsive  olması için chechbox ekledim  -->
       <!-- NAVIGATION MENUS -->
       <div class="menu">

      <li class="services">
           <a href="/">PERSONEL İŞLEMLERİ</a>
           <!-- DROPDOWN MENU -->
           <ul class="dropdown">
             <li><a href="personel_ekle.php">Personel Ekle </a></li>
             <li><a href="personel_listeletablo.php">Personel Listele/Sil</a></li>
            
           </ul>
         </li>


         <li class="services">
           <a href="/">ÜRÜN İŞLEMLERİ</a>
           <!-- DROPDOWN MENU -->
           <ul class="dropdown">
             <li><a href="urunler.php">Ürün Ekle</a></li>
             <li><a href="urun_listele.php">Ürün Listele/Sil</a></li>
             
           </ul>
         </li>

       

     
        <li class="nav-item">
          <a href="girisayfa.php"  class="active">ÇIKIŞ</a>
       </div>
     </ul>
   </nav>	     





    <section id="mainSlider" class="slider">
	<div class="container1">
<div id="mainCaption" class="caption">
 <h1>STOK KONTROL PANELİ</h1>




	 
</div>
</div>
</section>
		
<section id="parallax" class="sectionArea">
<div class="parallaxTop">
	
	<a href="urun_listele.php" target="iframe_sayfaiceriği" class="SectionHeader">ÜRÜNLER</a>
	
</div>  
</section>



  <section id="sonsection" class="sectionArea">
<div class="sonsectionTop">
  
  <a href="personel_listeletablo.php" target="iframe_sayfaiceriği" class="SectionHeader">PERSONEL BİLGİLERİ</a>
  
</div>  
</section>


<br><br>

    <!-- footer kısmını tasarladım -->
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
          
            <p class="copyright">Sümeyye Karakaş © 2022</p>
        </footer>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


                                                                   
</body>
</html>