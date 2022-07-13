
  <!DOCTYPE html>
      <html>
      <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>STOK KONTOL OTOMASYON GİRİŞ</title>
         <link rel="stylesheet" href="girisayfa25.css">
      </head>
      <body>
     
      <form action="girisayfaphp.php" method="post">
         <div class="col-12 text-center align-self-center py-5">  
           <div class="section pb-5 pt-5 pt-sm-2 text-center">  
             <div class="card-3d-wrap mx-auto">  
              <div class="card-front">  
                <div class="center-wrap"> 
                  
                  <div class="section text-center">  
                    <form action="girisayfa.php?adim=basarili" method="POST">  
                    <h4 class="mb-4 pb-3">Giriş Yap</h4>  
                    <?php if (isset($_GET['error'])) { ?>
         <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
                    <div class="form-group">  
                      <input type="email" name="uname" class="form-style" placeholder="E-Posta Giriniz"  autocomplete="off" required  >  
                      <i class="input-icon uil uil-at"></i>  
                   </div>       
                   <div class="form-group mt-2" > 
                      <input type="password" name="password" class="form-style" placeholder="Şifrenizi Giriniz"  autocomplete="off" required >  
                      <i class="input-icon uil uil-lock-alt"></i>  
                   </div>  
                     <button type ="submit "class="btn mt-4" ><b>Giriş</b></button>
                  
                   </form> 
                 </div>  
                
                 
             </div>
                
          </div>  
       </div>  
    </div>  
 </div>
 


</body>
</html>







    