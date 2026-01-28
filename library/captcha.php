<?php
session_start();

$captcha_code = rand(10000,99999);
$_SESSION["vercode"] = $captcha_code;

$width = 120;
$height = 40;

$image = imagecreate($width, $height);

$bg = imagecolorallocate($image, 255, 255, 255);
$textcolor = imagecolorallocate($image, 0, 0, 0);

imagestring($image, 5, 30, 10, $captcha_code, $textcolor);

header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
?>
