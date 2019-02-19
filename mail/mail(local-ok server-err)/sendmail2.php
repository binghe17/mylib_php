<?php

require_once ('email.class.php');
//##########################################
$smtpserver = "smtp.live.com";//SMTP服务器
$smtpserverport =25;//SMTP服务器端口
$smtpusermail = "wkrldi-love@hotmail.com";//SMTP服务器的用户邮箱
$smtpemailto = "wkrldi-love@hotmail.com";//发送给谁
$smtpuser = "wkrldi-love@hotmail.com";//SMTP服务器的用户帐号
$smtppass = "dudtkadlek";//SMTP服务器的用户密码
$mailsubject = "laiyanji测试邮件系统";//邮件主题
$mailbody = "<h1> 这是一个测试程序 laiyanji.com </h1><b>啊个idsga大概矮冬瓜ii</b>";//邮件内容
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
//##########################################
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
$smtp->debug = FALSE;//是否显示发送的调试信息
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);



/*
function authMail($from, $namefrom, $to, $nameto, $subject, $message){

	//your configuration here

	$smtpServer = "smtp.qq.com"; //ip accepted as well
	$port = "25"; // should be 25 by default
	$timeout = "30"; //typical timeout. try 45 for slow servers
	$username = "binghe17"; //the login for your smtp
	$password = "9802080241"; //the pass for your smtp
	$localhost = "127.0.0.1"; //this seems to work always
	$newLine = "\r\n"; //var just for nelines in MS
	$secure = 0; //change to 1 if you need a secure connect
	  
	//you shouldn't need to mod anything else

	//connect to the host and port
	$smtpConnect = fsockopen($smtpServer, $port, $errno, $errstr, $timeout);
	$smtpResponse = fgets($smtpConnect, 4096);
	if(empty($smtpConnect))
	{
	   $output = "Failed to connect: $smtpResponse";
	   return $output;
	}
	else
	{
	   $logArray['connection'] = "Connected to: $smtpResponse";
	}

	//say HELO to our little friend
	fputs($smtpConnect, "HELO $localhost". $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['heloresponse'] = "$smtpResponse";

	//start a tls session if needed 
	if($secure)
	{
	   fputs($smtpConnect, "STARTTLS". $newLine);
	   $smtpResponse = fgets($smtpConnect, 4096);
	   $logArray['tlsresponse'] = "$smtpResponse";

	   //you have to say HELO again after TLS is started
	   fputs($smtpConnect, "HELO $localhost". $newLine);
	   $smtpResponse = fgets($smtpConnect, 4096);
	   $logArray['heloresponse2'] = "$smtpResponse";
	}

	//request for auth login
	fputs($smtpConnect,"AUTH LOGIN" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['authrequest'] = "$smtpResponse";

	//send the username
	fputs($smtpConnect, base64_encode($username) . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['authusername'] = "$smtpResponse";

	//send the password
	fputs($smtpConnect, base64_encode($password) . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['authpassword'] = "$smtpResponse";

	//email from
	fputs($smtpConnect, "MAIL FROM: $from" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['mailfromresponse'] = "$smtpResponse";

	//email to
	fputs($smtpConnect, "RCPT TO: $to" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['mailtoresponse'] = "$smtpResponse";

	//the email
	fputs($smtpConnect, "DATA" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['data1response'] = "$smtpResponse";

	//construct headers
	$headers = "MIME-Version: 1.0" . $newLine;

	$headers .= "Content-type: text/html; charset=iso-8859-1" . $newLine;
	$headers .= "To: $nameto <$to>" . $newLine;
	$headers .= "From: $namefrom <$from>" . $newLine;

	//observe the . after the newline, it signals the end of message
	fputs($smtpConnect, "To: $to\r\nFrom: $from\r\nSubject: $subject\r\n$headers\r\n\r\n$message\r\n.\r\n");
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['data2response'] = "$smtpResponse";

	// say goodbye
	fputs($smtpConnect,"QUIT" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['quitresponse'] = "$smtpResponse";
	$logArray['quitcode'] = substr($smtpResponse,0,3);
	fclose($smtpConnect);
	//a return value of 221 in $retVal["quitcode"] is a success 
	return($logArray);
}


$from='binghe17@qq.com';
$namefrom='adsfa';
$to='binghe17@qq.com';
$subject='aaa<b>aa</b>';
$message='<b>aaaaaaa<b><br/><h1>bbbbbb</h1>';

if(authMail($from, $namefrom, $to, $nameto, $subject, $message)) echo '发送成功';
else echo '发送失败';

*/








