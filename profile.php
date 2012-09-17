<?php include "veritabani.php"; ?>
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<?php

$user = $_POST["user"]; 
$pass = $_POST["pass"]; 

$giris = mysql_query("SELECT * from users where user='$user' && pass='$pass'"); 

if(@mysql_num_rows($giris) > 0 ) { 
echo "Sisteme giriş başarıyla gerçekleşti."; 
} else { 
echo "Kullanıcı adı yada şifre yanlış."; 
} 
?>