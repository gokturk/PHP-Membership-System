<?php

$dbhost = "localhost";
$dbuser = "root";	
$dbpass = "";		
$dbname = "veritabani";	

$baglanti = mysql_connect($dbhost, $dbuser, $dbpass);
	if (!$baglanti) die ("MySQL bağlantısı başarısız.");

mysql_select_db($dbname, $baglanti) or die ("Veritabanına bağlanamadı.");
	
?>