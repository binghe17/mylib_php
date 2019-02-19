<?php
/* -------设置部分----------------- */
$timelife=time()+10;		//注意：当前时间加上要增加的秒数。刷新一次之后开始在发送头中发送出$_COOKIE值。
//$timelife=time()+3600*24;	//保留一天

setcookie("username", "xiaoming", $timelife);	//设置COOKIE变量，设置生存时间才能被保存在客户机的COOKIE临时文件夹中。
setcookie("sex", "man");						//设置COOKIE变量，没有设置生存时间，所以不生成。浏览器关闭前保存在内存中。
setcookie("age", 25, $timelife );				//设置COOKIE变量，每次访问页面都会重新更新计时时间（刷新）。过期后只被删除，本生存时间内的COOKIE变量值。
//setcookie("username", "", time()-3600);		//销毁COOKIE变量，（手动销毁），过期销毁法。


/*
//setcookie("username", "xiaoli", time()+3600, "/",   ".aonun.com");	//全设置的例子
//设置COOKIE(键，       值，      生存时间，   根路径，一级网址开始);	//相应说明
 */



/* -------使用部分----------------- */
if (isset($_COOKIE["username"])) {
	echo '欢迎你： '.$_COOKIE['username'];		//输出 xiaoming
	echo '<pre>';print_r($_COOKIE);echo '</pre>';//查看 COOKIE数组中的所有值
	echo '到期时间：'.date('Y-m-d H:i:s', $timelife);

} else {
	echo '你是第一次访问，已生成记录。（请刷新页面）';
	//date_default_timezone_set('PRC');
	echo date('Y-m-d H:i:s');

}



/* cookie数组。
setrawcookie("cookie[three]","cookiethree");
setrawcookie("cookie[two]","cookietwo");
setrawcookie("cookie[one]","cookieone");

// 输出 cookie （在重载页面后）
if (isset($_COOKIE["cookie"]))
  {
  foreach ($_COOKIE["cookie"] as $name => $value)
    {
    echo "$name : $value <br />";
    }
  }

//结果：
//	three : cookiethree
//	two : cookietwo
//	one : cookieone

*/











/* COOKIE的详细说明

	//设置格式：
	bool setcookie( string name [, string value [, int expire [, string path [, string domain ]]]] )

	name 		必写，cookie 名称
	value 		可选，cookie 值

	expire 		可选，过期时间，时间戳格式（注意：不写的话关闭浏览器就直接删除变量。）
	path 		可选，服务器端有效路径，/ 表示整个域名有效，默认为当前设置 cookie 时页面的路径
	domain 		可选，该 cookie 有效的域名

	//使用格式：
	echo $_COOKIE['username'];

 */

?>