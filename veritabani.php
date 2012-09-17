<?php

$dbhost = "localhost";
$dbuser = "root";				//veritabaný kullanýcý adýnýz.
$dbpass = "";					//veritabaný þifreniz. Yoksa boþ býrakýn.
$dbname = "veritabani";			//veritabaný adý.

$baglanti = mysql_connect($dbhost, $dbuser, $dbpass);
	if (!$baglanti) die ("MySQL baðlantýsý baþarýsýz.");

mysql_select_db($dbname, $baglanti) or die ("Veritabanýna baðlanamadý.");
	
?>