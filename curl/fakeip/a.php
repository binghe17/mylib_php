<?php

//echo $_SERVER['HTTP_REFERER'];


// $ch = curl_init(); 
// curl_setopt($ch, CURLOPT_URL, "http://localhost/0906/make/b.php"); 
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:8.8.8.8', 'CLIENT-IP:8.8.8.8')); //构造IP 
// curl_setopt($ch, CURLOPT_REFERER, "http://www.baidu.com/ "); //构造来路 
// curl_setopt($ch, CURLOPT_HEADER, 1); 
// $out = curl_exec($ch); 
// curl_close($ch); 



/*

//PHP CURL模拟GET及POST函数 
function vcurl($url, $post = '', $cookie = '', $cookiejar = '', $referer = ''){    
    $tmpInfo = '';    
    $cookiepath = getcwd().'./'.$cookiejar;    
    $curl = curl_init();    
    curl_setopt($curl, CURLOPT_URL, $url);    
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);    
    if($referer) {    
    curl_setopt($curl, CURLOPT_REFERER, $referer);    
    } else {    
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1);     
    }    
    if($post) {    
    curl_setopt($curl, CURLOPT_POST, 1);     
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post);    
    }    
    if($cookie) {    
    curl_setopt($curl, CURLOPT_COOKIE, $cookie);    
    }    
    if($cookiejar) {    
    curl_setopt($curl, CURLOPT_COOKIEJAR, $cookiepath);    
    curl_setopt($curl, CURLOPT_COOKIEFILE, $cookiepath);    
    }    
    //curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);    
    curl_setopt($curl, CURLOPT_TIMEOUT, 100);    
    curl_setopt($curl, CURLOPT_HEADER, 0);    
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);    
    $tmpInfo = curl_exec($curl);    
    if (curl_errno($curl)) {    
       echo '<pre><b>错误:</b><br />'.curl_error($curl);    
    }    
    curl_close($curl);    
    return $tmpInfo;    
}    
vcurl('http://baidu.com/');
*/