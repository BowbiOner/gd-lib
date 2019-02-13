<?php
// set the content type to png
header("Content-type: image/png");
//create the image size or error
$handle = ImageCreate(400,400) or die("Cannot make the image bruh bruh");
//set the background color to white
$bg_color = ImageColorAllocate($handle, 255,255,255);
//set text color to white
$txt_color = ImageColorAllocate($handle, 0,0,0);
//the line color for the ellipse 
$line_color = ImageColorAllocate($handle, 100,100,100);
//on the image, x,y center, ,width then height of the ellipse, color
for ($i=0; $i<=130; $i=$i+10){
    imagefilledellipse($handle, $i, 25,100,200, $line_color);
    }
//placing the string on the png font(1-5), x,y, text and color
ImageString($handle, 5,5,18, "Trust me at the top it isn't lonely, dawg", $txt_color);
//create image
ImagePng($handle);
