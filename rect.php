<?php

header ("Content-type: image/png");
//create the image size as 130, 50 OR spit error
$handle = ImageCreate (250, 100) or die ("Cannot create image");
//set the background color to the rect of red
$bg_color = ImageColorAllocate ($handle, 255,0,0);
//set the text color on the handle to green
$txt_color = ImageColorAllocate ($handle, 0,255,0);
//create the image string, place it, the string of text and apply the color 
ImageString ($handle,5,5,18, "WE ARE TEXTING OUT HERE!", $txt_color);
//create the png image with $handle
ImagePng($handle);