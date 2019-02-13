<?php 
//set the header of the file
header("Content-type: image/png");
//create the image w size or spit error
$handle = ImageCreate (200,200) or die ("cannot create the image");
//set the bg color with allocate ($handle, r,g,b)
$bg_color = ImageColorAllocate ($handle, 0,0,255);
//set the color of the text with allocate ($handle, r,g,b)
$txt_color = ImageColorAllocate ($handle, 255,255,255);
//set the color of the line to ($handle, r,g,b)
$line_color = ImageColorAllocate ($handle, 0, 0, 0);
//start the line on $handle, beginning x,y and ending x,y
ImageLine ($handle, 65, 0, 130, 50, $line_color);
//set the text on $handle, font(1-5), x,y, text and color
ImageString ($handle, 10,5,18, "GD_LIBBBBB", $txt_color);
//create the png
ImagePng($handle);