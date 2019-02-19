<?php
//PHP用FTP函数创建目录 
//只是抛砖引玉供大家参考学习,做网站时考虑前后台分离,可以使用这种文法,直接把静态页生成到另一台服务器上使用 

// create directory through FTP connection


function FtpMkdir($path, $newDir) {

	$server = 'ftp.yourserver.com'; // ftp server
	$connection = ftp_connect($server); // connection
	$user = "me";
	$pass = "password";
	$result = ftp_login($connection, $user, $pass); // login to ftp server
	// check if connection was made
	if((!$connection) || (!$result)) {
		return false;
		exit();
	} else {
		ftp_chdir($connection, $path); // go to destination dir
		if(ftp_mkdir($connection, $newDir)) { // create directory
			return $newDir;
		} else {
			return false;
		}
		ftp_close($conn_id); // close connection
	}

} ?>