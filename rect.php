<?php

header ("Content-type: image/png");
//create the image size as 130, 50 OR spit error
$handle = ImageCreate (250, 100) or die ("Cannot create image");
//set the background color to the rect of red
$bg_color = ImageColorAllocate ($handle, 255,0,0);
//set the text color on the handle to green
$txt_color = ImageColorAllocate ($handle, 255,255,0);
//create the image string, (-,x,y) place it, the string of text and apply the color 
ImageString ($handle,5,5,50, "WE ARE GD-LIBBING OUT HERE!", $txt_color);
//create the png image with $handle
ImagePng($handle);