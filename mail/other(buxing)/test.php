<?php

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once("class.phpmailer.php");
 // optional, gets called from within class.phpmailer.php if not already loaded
require_once("class.smtp.php");

$mail             = new PHPMailer();

$body             = $mail->getFile('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
// sets the prefix to the servier,如果是gmail需要开启ssl并修改smtp和端口
//$mail->SMTPSecure = "ssl";                 
$mail->Host       = "smtp.qq.com";      // sets 163 as the SMTP server
$mail->Port       = 25;                   // set the SMTP port for the 163 server

$mail->Username   = "binghe17";  // 163 username 163帐户的用户名，需要与前面的smtp对应
$mail->Password   = "9802080241";            // 163 password 163帐户密码，与前面对应

$mail->AddReplyTo("binghe17@qq.com","First Last");//回复邮箱地址，发送时没什么用。

$mail->From       = "binghe17@qq.com";//发件人地址，需要更改
$mail->FromName   = "xxx"; //发件人名称

$mail->Subject    = "test";

$mail->Body       = "testtesttest";                      //HTML Body，内容，
//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 
// optional, comment out and test
$mail->AltBody ="text/html";
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);

$mail->AddAddress("binghe17@qq.com", "test");//收件人，需要修改

//$mail->AddAttachment("images/phpmailer.gif");             // attachment

$mail->IsHTML(true); // send as HTML

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>