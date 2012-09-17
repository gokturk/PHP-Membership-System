<?php include "veritabani.php"; ?>

<title>PHP Üyelik Formu</title>

<form id="form" name="form" method="post" action="profile.php">
  <table width="252" border="0" align="center">
    <tr>
      <td width="101">Kullanıcı Adı:</td>
      <td width="141"><label for="user"></label>
      <input type="text" name="user" id="user" /></td>
    </tr>
    <tr>
      <td>Şifre</td>
      <td><label for="pass"></label>
      <input type="password" name="pass" id="pass" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Send" id="Send" value="Giriş Yap" /></td>
    </tr>
  </table>
</form>
