<?php
/*

 */

/* 程序运行时间
	$s = microtime(TRUE);
	//代码...
	$e = microtime(TRUE);
	echo $e-$s;
 */


/*

学习要点：
	1.PHP 日期和时间库

使用 PHP 编程时，与你遇到的大多数其他类型的数据相比，日期和时间有很大不同。
因为日期和时间没有明确的结构，并且日期的计算和表示也很麻烦。在 PHP 中，日期和时
间函数库是 PHP 语言的一个核心部分。
时间戳是自 1970 年 1 月 1 日（00:00:00 GMT）以来的秒数。它也被称为 Unix 时间
戳（Unix Timestamp）。 Unix 时间戳(Unix timestamp)，或称 Unix 时间(Unix time)、POSIX 时
间(POSIX time)，是一种时间表示方式，定义为从格林威治时间 1970 年 01 月 01 日 00 时 00
分 00 秒起至现在的总秒数。Unix 时间戳不仅被使用在 Unix 系统、类Unix 系统中，也在许
多其他操作系统中被广泛采用。例如(1184557366 表示 2007-07-16 03:42:46 )


一．PHP 日期和时间库

验证日期：checkdate()函数能够很好地验证日期，提供的日期如果有效，则返回 true，
否则返回 false。
*/
echo '<pre>';

if (checkdate(2,29,2007)) {
echo '日期合法';
} else {
echo '日期不合法';
}
echo '<br>';

//格式化时间和日期：date()函数返回根据预定义指令格式化时间和日期的字符串形式。
//所有格式参数，可以参考手册。
echo date('Y-m-d H:i:sa');
echo '<br>';

//直接输入日期和时间
echo date('今天的日期和时间为：Y/m/d H:i:sa');
echo '<br>';
//可以插入无关的字符串


//查看更多时间信息：gettimeofday()函数返回与当前时间有关的元素所组成的一个关联数组。
print_r(gettimeofday()); //可以传入一个真(1)
echo '<br>';


//将时间戳转换成友好的值：getdate()函数接受一个时间戳，并返回一个由其各部分组成的关联数组。如果不给参数，那么返回当前的时间和日期。
print_r(getdate(1184557366));
echo '<br>';


//获取当前的时间戳：time()函数可以获取当前的时间戳，并且可以通过设置时间戳的值。
echo date('Y-m-d H:i:s' ,time()+(7* 24* 60* 60));
echo '<br>';


//获取特定的时间戳：mktime()函数可以生成给定日期时间的时间戳。
echo mktime( 14,14,14,11,11,2007);
echo '<br>';
echo date('Y-m-d H:i:s' ,mktime( 14,14,14,11,11,2007));
echo '<br>';


//计算时间差
$now = time();
$taxday = mktime( 0,0,0,7,17,2010);
echo round(($taxday - $now)/60/60);
echo '<br>';


//将日期转换成时间戳：strtotime()将人可读的日期转换为 Unix 时间戳。
echo strtotime( '2007-10-31 14:31:33');
echo '<br>';


//计算时间差
echo (strtotime('2007-10-31 14:31:33' ) - strtotime('2007-10-31 11:31:33'))/ 60/60;
echo '<br>';


//获取当前文件最后修改时间：getlastmod()可以得到当前文件最后修改时间的时间戳。
echo date('Y-m-d H:i:s' ,getlastmod());
echo '<br>';


/*设置时区和 GMT/UTC：
修改 php.ini 文件中的设置，找到[date]下的;date.timezone = 选项，将该项修改为
date.timezone=Asia/Shanghai，然后重新启动 apache 服务器。
putenv()函数可以设置当前的默认时区。 
 */
putenv('TZ=Asia/Shanghai');
echo date('Y-m-d H:i:s' );
echo '<br>';


//date_default_timezone_set();	//可以设置当前的默认时区。
date_default_timezone_get();	//可以获取当前的默认时区。



date_default_timezone_set('Asia/Shanghai');
echo date('Y-m-d H:i:s' );
echo '<br>';


//取得本地时间 localtime()函数可以取得本地时间数据，然后返回一个数组。
date_default_timezone_set('Asia/Shanghai');
print_r(localtime());
echo '<br>';
print_r(localtime(time(), true));
echo '<br>';

//计算页面脚本运行时间：microtime()函数，该函数返回当前 UNIX 时间戳和微秒数。返回格式为 msec sec 的字符串，其中 sec 是当前的 UNIX 时间戳，msec 为微秒数。
function fntime() {
	list($msec, $sec) = explode(' ', microtime());
		return $msec +$sec;
}
$start_time = fntime();
for($i=0;$i<1000000;$i++) {
	//
}
$end_time = fntime();
echo round($end_time - $start_time,4);
echo '<br>';

echo '</pre>';
?>;
