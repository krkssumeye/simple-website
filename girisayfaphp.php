<?php 
session_start(); 
include "baglantilarim.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: girisayfa.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: girisayfa.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM personel_bilgileri WHERE email='$uname' AND sifre='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['sifre'] === $pass) {
            	$_SESSION['user_name'] = $row['email'];
            	$_SESSION['name'] = $row['PERSONEL_ADI'];
            	$_SESSION['id'] = $row['PERSONEL_ID'];
            	header("Location: kontrolpaneli.php");
		        exit();
            }else{
				header("Location: girisayfa.php?error=Şifrenizi ya da E-postanızı kontrol ediniz.");
		        exit();
			}
		}else{
			header("Location: girisayfa.php?error=Şifrenizi ya da E-postanızı kontrol ediniz.");
	        exit();
		}
	}
	
}else{
	header("Location: girisayfa.php");
	exit();
}