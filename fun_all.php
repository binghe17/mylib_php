<?php

/* PHP重定向
方法一：header("Location:url地址");
方法二：echo "<scrīpt>window.location ="url地址";</scrīpt>";
方法三：echo "<meta http-equiv="Refresh" content="0;  url=url地址">"; 
 */



function GetIP() { //获取IP
	if($_SERVER["HTTP_X_FORWARDED_FOR"]) $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	else if($_SERVER["HTTP_CLIENT_IP"]) $ip = $_SERVER["HTTP_CLIENT_IP"];
	else if($_SERVER["REMOTE_ADDR"]) $ip = $_SERVER["REMOTE_ADDR"];
	else if(getenv("HTTP_X_FORWARDED_FOR")) $ip = getenv("HTTP_X_FORWARDED_FOR");
	else if(getenv("HTTP_CLIENT_IP")) $ip = getenv("HTTP_CLIENT_IP");
	else if(getenv("REMOTE_ADDR")) $ip = getenv("REMOTE_ADDR");
	else $ip = "Unknown";
	return $ip;
}


//将HTML表格的每行每列转为数组，采集表格数据
function get_td_array($table) {
	$table = preg_replace("'<table[^>]*?>'si", "", $table);
	$table = preg_replace("'<tr[^>]*?>'si", "", $table);
	$table = preg_replace("'<td[^>]*?>'si", "", $table);
	$table = str_replace("</tr>", "{tr}", $table);
	$table = str_replace("</td>", "{td}", $table);
	//去掉 HTML 标记
	$table = preg_replace("'<[/!]*?[^<>]*?>'si", "", $table);
	//去掉空白字符
	$table = preg_replace("'([rn])[s]+'", "", $table);
	$table = str_replace(" ", "", $table);
	$table = str_replace(" ", "", $table);
	$table = explode('{tr}', $table);
	array_pop($table);
	foreach($table as $key = > $tr) {
		$td = explode('{td}', $tr);
		array_pop($td);
		$td_array[] = $td;
	}
	return $td_array;
}


//----------------------------------------------------

/**
* 转化 \ 为 /
* 
* @param    string  $path   路径
* @return   string  路径
*/
function dir_path($path) {
    $path = str_replace("\\", '/', $path);
    if(substr($path, -1) != '/') $path = $path.'/';
    return $path;
}

/**
* 创建目录
* 
* @param    string  $path   路径
* @param    string  $mode   属性
* @return   string  如果已经存在则返回true，否则为flase
*/
function dir_create($path, $mode = 0777) {
    if(is_dir($path)) return TRUE;
    $ftp_enable = 0;
    $path = dir_path($path);
    $temp = explode('/', $path);
    $cur_dir = '';
    $max = count($temp) - 1;
    for($i=0; $i<$max; $i++) {
        $cur_dir .= $temp[$i].'/';
        if (@is_dir($cur_dir)) continue;
        @mkdir($cur_dir, 0777,true);
        @chmod($cur_dir, 0777);
    }
    return is_dir($path);
} 









?>