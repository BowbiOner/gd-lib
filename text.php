<?php 
//set the content type in the header
header ("Content-type: image/png");
//create the image with size (x,y) or spit out error
$handle = ImageCreate (200, 200) or die ("Cannot create the image");
//set the bg color of the png, with rgb
$bg_color = ImageColorAllocate ($handle, 0, 30, 200);
//set the color of the text on the png with rgb
$txt_color = ImageColorAllocate ($handle, 0, 0, 50);
//always start wih the handle, font size, rotation, x, y, the font, and our text (DONT FORGET DUMBASS FONT HAS TO BE IN THE FOLDER)
ImageTTFText ($handle, 10,35,20,200, $txt_color, "/Fonts/Chalkduster.ttf", "Using TTF for selecting font");
ImagePng ($handle);