<?php

$str = md5(microtime());;

$str = substr($str,0,6);

session_start();
//$_SESSION['c'] = "dfgdfg";
$_SESSION['cap_code'] = $str;

$img = imagecreate(125,50);

imagecolorallocate($img,225,225,225);

$txtcol = imagecolorallocate($img,255,0,0);

imagestring($img,10,30,16,$str,$txtcol);

header('Content:image/jpeg');

imagejpeg($img);

?>