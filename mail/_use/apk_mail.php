<?php
 error_reporting(E_ALL & ~E_NOTICE);
if($_POST['tel']){
	$to = "jiang0086@hotmail.com,binghe17@qq.com";
	$subject = $_POST['my'] ? 'secret talk: '.$_POST['my'] : "secret talk Tels!!";
	$message = $_POST['tel'];
	$headers = "MIME-Version: 1.0" . "\r\n";
	//$headers .= "Content-type:text/html;charset=utf-8" . "\r\n"; // 当发送 HTML 电子邮件时，请始终设置 content-type
	//$headers .= 'cc: hi_test@yahoo.cn' . "\r\n";
	mail($to,$subject,$message,$headers);
	//echo $_POST['tel'];
}else {
	echo 'error';
}



