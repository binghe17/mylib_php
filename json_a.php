<?php

/**
 * header
 */
header('Content-Type:text/html; charset=utf-8'); //标头设置，让火狐和 IE 保持编码统一


/**
 * JSON标准格式        json_decode($str) , json_decode($str,true)
 */

echo '<pre>';
$json1 = '1234567890'; //数字
$json2 = '"string"'; //字符串
$json3 = 'null'; //空值
$json4 = 'true'; //布尔值
$json5 = '["string",1234,null,true,false]'; //索引数组
$json6 = '{"guan":123,"lian":"asdf"}'; //关联数组
$b = json_decode($json4, true); //使用：JSON->PHP
print_r($b);
echo '<pre>';


/**
 * mysql
 */

//    integer 整数
//    unsigned 无符号
//    NOT NULL 不为空
//    AUTO_INCREMENT 自增
