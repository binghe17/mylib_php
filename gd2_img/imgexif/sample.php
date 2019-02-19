<?php

/*******EXIF信息**********/
function photoexif($photo){
	require_once("photoexif.class.php");
	$ex = new EXIF();
	$ex->get_exif($photo);
	return $ex->TAG->to_string();
}
echo photoexif('D300_1.jpg');


