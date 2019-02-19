<?php 
//预防数据库攻击的正确做法
function check_input($value) {
	// 去除斜杠
	if (get_magic_quotes_gpc()) {
		$value = stripslashes($value);
	}
	// 如果不是数字则加引号
	if (!is_numeric($value)) {
		$value = "'".mysql_real_escape_string($value)."'";
	}
	return $value;
}

//数据库连接
$con = mysql_connect("localhost", "root", "root");
if (!$con) {
	die('Could not connect: '.mysql_error());
}

// 进行安全的 SQL
$user = check_input($_POST['user']);
$pwd = check_input($_POST['pwd']);
$sql = "SELECT * FROM users WHERE user=$user AND password=$pwd";

mysql_query($sql);

mysql_close($con);







/* 显示时的用法
//addslashes() 函数在指定的预定义字符前添加反斜杠。
//stripslashes() 函数删除由 addslashes() 函数添加的反斜杠。
	$str="Who\'s John Adams?";
	echo stripslashes($str);
	输出:
		Who's John Adams?
 */

//其他知识点
//addcslashes() 函数在指定的字符前添加反斜杠。
//stripcslashes() 函数删除由 addcslashes() 函数添加的反斜杠。
?>