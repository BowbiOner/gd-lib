<?php
//set the content type 
header("Content-type: image/png");
//create the image or erroer
$handle = ImageCreate(400,400) or die ("cannot make the image bro bro");
//background color white
$bg = imagecolorallocate($handle, 255,255,255);
//set r,g,b to a variable
$red = imagecolorallocate($handle, 255,0,0);
$green = imagecolorallocate($handle,0,255,0);
$blue = imagecolorallocate($handle, 0,0,255);
//create three pieces of pie, with image, cx,cy, width, height, start deg, end deg, , color and style
imagefilledarc($handle, 200, 200, 200, 200, 0, 90, $red, IMG_ARC_NOFILL);
imagefilledarc($handle, 200, 200, 200, 200, 90, 260, $blue, IMG_ARC_EDGED);
imagefilledarc($handle, 200, 200, 200, 200, 260, 360, $green, IMG_ARC_NOFILL);
ImagePng($handle);