<?php

require_once ('email.class.php');
//##########################################
$smtpserver = "smtp.live.com";//SMTP������
$smtpserverport =25;//SMTP�������˿�
$smtpusermail = "wkrldi-love@hotmail.com";//SMTP���������û�����
$smtpemailto = "wkrldi-love@hotmail.com";//���͸�˭
$smtpuser = "wkrldi-love@hotmail.com";//SMTP���������û��ʺ�
$smtppass = "dudtkadlek";//SMTP���������û�����
$mailsubject = "laiyanji�����ʼ�ϵͳ";//�ʼ�����
$mailbody = "<h1> ����һ�����Գ��� laiyanji.com </h1><b>����idsga��Ű�����ii</b>";//�ʼ�����
$mailtype = "HTML";//�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ�
//##########################################
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤.
$smtp->debug = FALSE;//�Ƿ���ʾ���͵ĵ�����Ϣ
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

if(authMail($from, $namefrom, $to, $nameto, $subject, $message)) echo '���ͳɹ�';
else echo '����ʧ��';

*/








