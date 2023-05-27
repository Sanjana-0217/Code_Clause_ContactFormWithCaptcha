<?php
session_start();

$captcha = generateRandomString(6);
$_SESSION["captcha"] = $captcha;

$image = imagecreatetruecolor(100, 30);
$bgColor = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 0, 0, 99, 29, $bgColor);
imagettftext($image, 18, 0, 10, 20, $textColor, )
