<?php
//1、CURL模拟登陆的流程和步骤
//2、tempnam 创建一个临时文件
//3、使用CURL模拟登陆到PHP100论坛

$cookie_file    =    tempnam('./temp','cookie'); //tempnam 创建一个临时文件
$login_url      =    'http://bbs.php100.com/login.php';
$post_fields    =    'cktime=31536000&step=2&pwuser=php100-88&pwpwd=111111';

$ch = curl_init($login_url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不输出，只返回数据
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);//保存cookie文件。
curl_exec($ch);
curl_close($ch);


$url='http://bbs.php100.com/userpay.php';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);//读取cookie文件中的数据
$contents = curl_exec($ch);
preg_match("/<li>  (.*)<\/li>/",$contents,$arr);
echo $arr[1];
curl_close($ch);
?>