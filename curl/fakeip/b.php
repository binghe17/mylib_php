<?php
echo '<pre>';
print_r($_SERVER);//$_SERVER['HTTP_REFERER']
echo '<br><br>';

// function getClientIp() { 
// if (!empty($_SERVER["HTTP_CLIENT_IP"])) 
// $ip = $_SERVER["HTTP_CLIENT_IP"]; 
// else if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) 
// $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
// else if (!empty($_SERVER["REMOTE_ADDR"])) 
// $ip = $_SERVER["REMOTE_ADDR"]; 
// else 
// $ip = "err"; 
// return $ip; 
// } 
// echo "IP: " . getClientIp() . ""; 
// echo "referer: " . $_SERVER["HTTP_REFERER"]; 



// function GetIP(){ 
// if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
// $ip = getenv("HTTP_CLIENT_IP"); 
// else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
// $ip = getenv("HTTP_X_FORWARDED_FOR"); 
// else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
// $ip = getenv("REMOTE_ADDR"); 
// else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
// $ip = $_SERVER['REMOTE_ADDR']; 
// else 
// $ip = "unknown"; 
// return($ip); 
// } 
// echo GetIP();