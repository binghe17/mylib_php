<?php

/*服务器操作系统 登录名 密码进入才能访问页面。（不安全）
if (!isset($_SERVER['PHP_AUTH_USER'])) {
   header('WWW-Authenticate: Basic realm="My Realm"');
   header('HTTP/1.0 401 Unauthorized');
   echo 'Text to send if user hits Cancel button';
   exit;

} else {
   echo "<p>;Hello {$_SERVER['PHP_AUTH_USER']}.</p>;";
   echo "<p>;You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>;";
}*/





