<?php
header("Content-type: image/gif");
$handle = ImageCreate(400,400);
$bg_color = imagecolorallocate($handle, 0, 0,0);
$txt_color = imagecolorallocate($handle, 250, 255, 255);
ImageString($handle, 5,5,30, "GD_TUT Exercises", $txt_color);
ImageGif($handle);
