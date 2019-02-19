<?php 
$ch = curl_init(); 
$url = __DIR__."http://hi_test.byethost18.com/b.php"; 

$header = array( 
'CLIENT-IP:58.68.44.61', 
'X-FORWARDED-FOR:58.68.44.61', 
); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $header); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
$page_content = curl_exec($ch); 
curl_close($ch); 
echo $page_content; 
?> 
