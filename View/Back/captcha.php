<?php
session_start();
/*
$_SESSION['captcha'] = mt_rand(1000,9999);
$img = imagecreate(65,30);
$font = 'Rubik-Medium.ttf';

$bg = imagecolorallocate($img,255,255,255);
$textcolor = imagecolorallocate($img,0,0,0);

imagettftext($img,23,0,3,30,$textcolor,$font,$_SESSION['captcha']);

header('Content-type:image/jpeg');
imagejpeg($img);
imagedestroy($img);*/

// Set the content-type
header('Content-type: image/png');
 
// Create the image
$im = imagecreatetruecolor(400, 30);
 
// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 29, $white);
 
// The text to draw
$text = 'Testing...';
// Replace path by your own font path
$font = 'arial.ttf';
 
// Add some shadow to the text
imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);
 
// Add the text
imagettftext($im, 20, 0, 10, 20, $black, $font, $text);
 
// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);

?>

<?php

if(isset($_POST['captcha'])) {
    if(($_POST['captcha']) == ($_SESSION['captcha'])) 
  {
    echo "Captcha valide !";
  }
  else 
  {
    echo "Captcha invalide...";
  }
}

?>