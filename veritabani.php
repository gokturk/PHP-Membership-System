<?php

$dbhost = "localhost";
$dbuser = "root";				//veritaban� kullan�c� ad�n�z.
$dbpass = "";					//veritaban� �ifreniz. Yoksa bo� b�rak�n.
$dbname = "veritabani";			//veritaban� ad�.

$baglanti = mysql_connect($dbhost, $dbuser, $dbpass);
	if (!$baglanti) die ("MySQL ba�lant�s� ba�ar�s�z.");

mysql_select_db($dbname, $baglanti) or die ("Veritaban�na ba�lanamad�.");
	
?>