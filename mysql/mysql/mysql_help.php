<?php
/*
 * 
 * 设计程序流程： 功能需求》页面设计》数据库设计》代码设计》调试发布
 * 初始化》条件》代码操作

1、MYSQL简介与概要
MySQL是一个小型关系型数据库管理系统，开发者为瑞典MySQL AB公司，现在已经被Sun公司收购，支持FreeBSD、Linux、MAC、Windows等多种操作系统 
与其他的大型数据库例如Oracle、DB2、SQL Server等相比功能稍弱一些

1、可以处理拥有上千万条记录的大型数据
2、支持常见的SQL语句规范
3、可移植行高，安装简单小巧
4、良好的运行效率，有丰富信息的网络支持
5、调试、管理，优化简单（相对其他大型数据库）

1.关系型数据库比普通文件的数据访问速度更快。
2.关系型数据库更容易查阅并提取满足特定条件的数据。
3.关系型数据库更具有专门的内置机制处理并发访问，作为程序员，不需要为此担心。
4.关系型数据库可以提供对数据的随即访问。
5.关系型数据库具有内置的权限系统。

4、其他常用Mysql函数介绍
mysql_num_rows用于计算查询结果中所得行的数目
mysql_insert_id传回最后一次使用 INSERT 指令的 ID。
mysql_tablename取得数据库名称
mysql_error返回错误信息
mysql_close关闭 MySQL 链接


2、访问MYSQL的几种途径

知识点：MYSQL默认使用的是3306端口

1、使用工具MYSQL官方的工具访问：MySQL Administrator tool 
2、使用第三方工具访问：mysqlexec 、 mysql连接器  
3、使用WEB方式访问：phpMyAdmin（最常见） 

比较：
    使用客户端工具操作效率高，安全性高
    使用WEB方式简单方便，不受限制


3、介绍数据库中常用字段类型
整数型：TINYINT，SMALLINT，INT，BIGINT
小数型：FLOAT，DOUBLE，DECIMAL(M,D)
字符型：CHAR，VARCHAR
日期型：DATETIME ，DATE，TIMESTAMP
备注型：TINYTEXT ，TEXT ，LONGTEXT



4、创建一个简单的数据库
创建一个数据库命令：CREATE TABLE
删除一个数据库命令：DROP TABLE
修改一个字段名称：  RENAME TABLE `原字段` TO `新字段` ;
删除一个字段：      ALTER TABLE `表`  DROP `原字段`
插入一个字段：      ALTER TABLE `表`  ADD `新字段` …  AFTER `原字段

CREATE TABLE `test` (
  `id` 	int(10)  NOT NULL auto_increment,
  `uid` 	varchar(10) NOT NULL  default '0',
  `regdate`  date NOT NULL,
  `remark`    text  NULL,
   PRIMARY KEY  (`id`)
)


-------------

1）表格
关系数据库由关系组成，这些关系通常称为表格。顾名思义，一个关系就是一个数据的
表格。电子数据表就是一种表格。
2）列
表中的每一列都有惟一的名称，包含不同的数据。此外，每一列都有一个相关的数据类
型。
3）行
表中的每一行代表一个客户。每一行具有相同的格式，因而也具有相同的属性。行也成
为记录。
4）值
每一行由对应每一列的单个值组成。每个值必须与该列定义的数据类型相同。
5）键
每一条数据所对应的唯一的标识。
6）模式
数据库整套表格的完整设计成为数据库的模式。
7）关系
外键标识两个表格数据的关系。


如何设计 Web 数据库
1）考虑要建模的实际对象。
2）避免保存冗余数据。
3）使用原子列值（对每一行的每个属性只存储一个数据。）
4）选择有意义的键。
5）考虑需要询问数据库的问题。
6）避免多个空属性的设计

---
日期型
DATETIME	'0000-00-00 00:00:00'
DATE    	'0000-00-00'
TIMESTAMP	00000000000000
TIME    	'00:00:00'
YEAR    	0000

---
字符串型
            CHAR(4)	存储需求 VARCHAR(4)	存储需求
''          '   '	4个字节	''	    1个字节
'ab'	    'ab '	4个字节	'ab '	3个字节
'abcd'	    'abcd'	4个字节	'abcd'	5个字节
'abcdefgh'	'abcd'	4个字节	'abcd'	5个字节

---
整数型
          字节  最小值	              最大值
		        (带符号的/无符号的)	   (带符号的/无符号的)
TINYINT	    1	 -128                  	127
		            0	                255
SMALLINT	2	-32768	                32767
		            0	                65535
MEDIUMINT	3	-8388608            	8388607
                    0               	16777215
INT     	4   -2147483648            	2147483647
	               	0               	4294967295
BIGINT     	8	-9223372036854775808	9223372036854775807
	            	0	                18446744073709551615
----
整数型
FLOAT	    4	+-1.175494351E-38	    +-3.402823466E+38
DOUBL E	    8	+-                      +-
                2.2250738585072014E-    1.7976931348623157E+
                308                     308
DECIMAL	    可变	它的取值范围可变。

----
备注型
            描述
TINYTEXT	字符串，最大长度255个字符
TEXT	    字符串，最大长度65535个字符
MEDIUMTEXT	字符串，最大长度16777215个字符
LONGTEXT	字符串，最大长度4294967295个字符



-----------

分组语句：group by 字段                        语句最后 order之前
排序语句：order by 字段，字段 ASC / DESC       语句最后 limit之前
指针查询：limit 初始值，结束值                 语句最后


计算：

  COUNT(*) 统计函数
  MAX(*) 最大值函数
  MIN (*) 最小值函数
  AVG(*) 平均值函数
  SUM(*) 累计值函数（∑）

---------------
三．MySQL 常用函数

文本函数
用法                              	描述
CONCAT(x,y,...)	                    创建形如 xy 的新字符串
LENGTH(column)	                    返回列中储存的值的长度
LEFT(column,x)	                    从列的值中返回最左边的 x 个字符
RIGHT(column,x)	                    从列的值中返回最右边的 x 个字符
TRIM(column)	                    从存储的值删除开头和结尾的空格
UPPER(column)	                    把存储的字符串全部大写
LOWER(column)	                    把存储的字符串全部小写
SUBSTRING(column, start,length)	    从 column 中返回开始 start 的 length个字符（索引从 0 开始）
MD5(column)	                        把储存的字符串用 MD5 加密
SHA(column)	                        把存储的字符串用 SHA 加密

数字函数
用法          	描述
ABS(x)          返回 x 的绝对值
CEILING(x)  	返回 x 的值的最大整数
FLOOR(x)    	返回 x 的整数
ROUND(x)    	返回 x 的四舍五入整数
MOD(x)	        返回 x 的余数
RNAD()	        返回 0-1.0 之间随机数
FORMAT(x,y)     返回一个格式化后的小数
SIGN(x)	        返回一个值，正数(+1)，0，负数 (-1)
SQRT(x)	        返回 x 的平方根

日期和时间函数
用法	描述
HOUR(column)	只返回储存日期的小时值
MINUTE(column)	只返回储存日期的分钟值
SECOND(column)	只返回储存日期的秒值
DAYNAME(column)	返回日期值中天的名称
DAYOFMONTH(column)	返回日期值中当月第几天
MONTHNAME(column)	返回日期值中月份的名称
MONTH(column)	返回日期值中月份的数字值
YEAR(column)	返回日期值中年份的数字值
CURDATE()	返回当前日期
CURTIME()	返回当前时间
NOW()	返回当前时间和日期

格式化日期和时间(DATE_FORMAT()和 TIME_FORMAT())
用法	示例
%e	一月中的某天	1~31
%d	一月中的某天，两位	01~31
%D	带后缀的天	1st~31st
%W	周日名称	Sunday~Saturday
    简写的周日名称	Sun-Sat
%c	月份编号	1~12
%m	月份编号，两位	01~12
%M	月份名称	January~December
%b	简写的月份名称	Jan~Dec
%Y	年份	2002
%y	年份，两位	02
%l	小时	1~12
%h	小时,两位	01~12
%k	小时，24 小时制	0~23
%H	小时，24 小制度，两位	00~23
%i	分钟	00~59
%S	秒	00~59
%r	时间	8:17:02 PM
%T	时间，24 小时制	20:17:02 PM
%p	上午或下午	AM 或 PM


MySQL 数据库操作
1)显示当前存在的数据库
>SHOW DATABASES;
2)选择你所需要的数据库
>USE guest;
3)查看当前所选择的数据库
>SELECT DATABASE();
4)查看一张表的所有内容
 
>SELECT * FROM guest;
5)根据数据库设置中文编码
 
//可以先通过 SHOW TABLES;来查看有多少张表
 
>SET NAMES gbk;
6)创建一个数据库
 
//set names utf8;


 







>CREATE DATABASE book;
7)在数据库里创建一张表
>CREATE TABL E users (
 
>username VARCHAR(20),
 
//NOT NULL 设置不允许为空
 
>sex CHAR(1),
>birth DATETIME);
8)显示表的结构
>DESCIRBE users;
9)给表插入一条数据
>INSERT INTO users (username,sex,birth) VALUES ('Lee','x',NOW());
10)筛选指定的数据
> SELECT * FROM users WHERE username = 'Lee';
11)修改指定的数据
>UPDATE users SET sex = '男' WHERE username='Lee';
12)删除指定的数据
> DELETE FROM users WHERE username='Lee';
13)按指定的数据排序
 
> SELECT * FROM users ORDER BY birth DESC;
14)删除指定的表
>DROP TABLE users;
15)删除指定的数据库
>DROP DATABASE book;





四．SQL 语句详解


1.创建一个班级数据库 school，里面包含一张班级表 grade，包含编号(id)、姓名(name)、
邮件(email)、评分(point)、注册日期(regdate)。
 
mysql>CREATE DATABASE school;
 
//创建一个数据库
 
mysql> CREATE TABL E grade (
//UNSIGNED 表示无符号，TINYINT(2) 无符号整数 0-99，NOT NULL 表示不能为
空，AUTO_INCREMENT 表示从 1 开始没增加一个字段，累计一位
-> id TINYINT(2) UNSIGNED NOT NULL AUTO_INCREMENT,
-> name VARCHAR(20) NOT NULL,
-> email VARCHAR(40),
-> point TINYINT(3) UNSIGNED NOT NULL,
-> regdate DATETIME NOT NULL,
 
-> PRIMARY KEY (id)
 
//表示 id 为主键，让 id 值唯一，不得重复。
 
-> );

2.给这个班级表 grade 新增 5-10 条学员记录
mysql> INSERT INTO grade (name,email,point,regdate) VALUES
('Lee','yc60.com@gmail.com',95,NOW());

3.查看班级所有字段的记录，查看班级 id,name,email 的记录
mysql> SELECT * FROM grade;
 

mysql> SELECT id,name,email FROM grade;


WHERE 表达式的常用运算符

=	等于
<	小于
>	大于
<=	小于或等于
>=	大于或等于
!=	不等于
IS NOT NULL	具有一个值
IS NULL	没有值
BETWEEN	在范围内
NOT BETWEEN	不在范围内
IN	指定的范围
OR	两个条件语句之一为真
AND	两个条件语句都为真
NOT	条件语句不为真



4.姓名等于'Lee'的学员，成绩大于 90 分的学员，邮件不为空的成员，70-90 之间的成员
mysql> SELECT * FROM grade WHERE name='Lee';
mysql> SELECT * FROM grade WHERE point>90;
mysql> SELECT * FROM grade WHERE email IS NOT NULL;
mysql> SELECT * FROM grade WHERE point BETWEEN 70 AND 90;
mysql> SELECT * FROM grade WHERE point IN (95,82,78);


5.查找邮件使用 163 的学员，不包含 yc60.com 字符串的学员
mysql> SELECT * FROM grade WHERE email LIKE '%163.com';
mysql> SELECT * FROM grade WHERE email NOT LIKE '%yc60.com%';


6.按照学员注册日期的倒序排序，按照分数的正序排序
mysql> SELECT * FROM grade ORDER BY regdate DESC;
mysql> SELECT * FROM grade ORDER BY point ASC;


7.只显示前三条学员的数据，从第 3 条数据开始显示 2 条
mysql> SELECT * FROM grade LIMIT 3;
mysql> SELECT * FROM grade LIMIT 2,2;

8.修改姓名为'Lee'的电子邮件
mysql> UPDATE grade SET email='yc60.com@163.com' WHERE name='Lee';
 


9.删除编号为 4 的学员数据
mysql> DELETE FROM grade WHERE id=4;


MYSQL 分组函数
用法	描述
AVG(column)	返回列的平均值
COUNT(column)	统计行数
MAX(column)	求列中的最大值
MIN(column)	求列中的最小值
SUM(column)	求列中的和



10.过一遍以上的分组函数
略。


11.检查这个表的信息
mysql> SHOW TABLE STAT US \G;


12.优化一张表
mysql> OPTIMIZE TABLE grade;



-------------

<form action="" method="GET" >
<input type="text" size=10 name="user"/>
<input type="text" size=20  name="title"/>
<textarea name="content"></textarea>
<input type="submit" name="submit"/>
</form>
------------

4、PHP接收参数的几种方式

PHP5在默认的情况下接收参数是需要使用
$_GET['value'];
$_POST['value'];

还可以在PHP.ini 文件中的
 将register_globals = Off
 改register_globals = on (不推荐)

可以直接使用，$value的值

-----------------

1、提交表单Javascript验证
<form action="" method="post" name="myform" onsubmit="return CheckPost();">

<SCRIPT language=javascript>
function CheckPost()
{
	if (myform.user.value=="")
	{
		alert("请填写用户");
		myform.user.focus();
		return false;
	}
	if (myform.title.value.length<5)
	{
		alert("标题不能少于5个字符");
		myform.title.focus();


2、str_replace替换函数
str_replace( 被替换的值，替换的值，被替换的内容)；
function htmtocode($content) {
   $content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
   return $content;
}

3、htmlspecialchars 格式化html
主要功能是将HTML格式化，防止在输出html时被浏览器执行
htmlspecialchars(所要格式化对象,定义单双引号,编码)

4、md5加密函数
md5( 加密对象 )
据说世界上公认比较安全的一种加密算法，但好像前些年被山东大学一名老师
写出了解密运算公式！

5、COOKIE 的使用和登陆
setcookie("TEST", "value", 3600, "/dir", ".domains.com", true);
cookie名,cookie值,保存时间,cookie保存路径,起效域名,https发送







-------------------

2、学习分页的一种公式

（1）分页原理
所谓分页显示，也就是讲数据库中的结果集，一段一段显示出来

（2）需要的条件
怎么分段，当前在第几段 （每页有几条，当前再第几页）

前10条记录：select * from table limit 0,10 
第11至20条记录：select * from table limit 10,10 
第21至30条记录：select * from table limit 20,10 
* 
（3）得到公式
（当前页数 - 1 ）X 每页条数 ， 每页条数
Select * from table limit ($Page- 1) * $PageSize, $PageSize 

------------------
3、parse_url()解析URL函数

parse_url() 是讲URL解析成有固定键值的数组的函数
$ua=parse_url("http://username:password@hostname/path?arg=value#anchor");
print_r($ua);
结果：

Array
(
    [scheme] => http
    [host] => hostname
    [user] => username
    [pass] => password
    [path] => /path
    [query] => arg=value
    [fragment] => anchor
)


 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
第 16 章 PHP 操作 MySQL


学习要点：
1.PHP 连接到 MySQL
2.增删改查
3.其他常用函数
主讲教师：zun
合作网站：http://www.cgdio.com
讲师博客：http://cgdio.com/zun



如果你已经具有了使用 PHP、SQL 和 MySQL 的丰富经验，现在就可以把所有这些技术
组合在一起。PHP 与 MySQL 之间稳固的集成只是众多程序员采纳它的一个原因，还有一个
原因就是，它如此的简单方便。


一．PHP 连接到 MySQL


这里，我们全面采用 UTF-8 编码。
设置 Zend Stduio 的编码：Window -> Preferences -> Workspace

标头设置，让火狐和 IE 保持编码统一：
<?php
header('Content-Type:text/html; charset=utf-8');
?>

连接 MySQL
<?php
$conn = @mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or
die('数据库连接失败！错误信息：'.mysql_error());
?>


数据库连接参数，可以用常量存储，这样就不能修改，更加安全。
<?php
define('DB_USER' ,'root');
define('DB_PASSWORD' ,'yangfan');
define('DB_HOST','localhost');
define('DB_NAME' ,'school');
?>

选择你所需要的数据库
<?php
@mysql_select_db(DB_NAME) or die('数据库找不到！错误信息：'.mysql_error());
?> 









设置字符集，如果是 GBK，直接设置 SET NAMES GBK 即可
<?php
@mysql_query('SET NAMES UTF8') or die('字符集设置错误');
?>

获取记录集
<?php
$query = "SELECT * FROM grade";
$result = @mysql_query($query) or die('SQL 语句有误！错误信息：
'.mysql_error());
?>


输出一条记录
<?php
print_r(mysql_fetch_array($result,MYSQL_ASSOC));
?>


释放结果集资源
<?php
mysql_free_result($result);
?>


关闭数据库
<?php
mysql_close($conn);
?>



二．增删改查


新增数据
<?php
$query = "INSERT INTO grade (name,email,point,regdate) VALUE
('李炎恢','yc60.com@gmail.com',,NOW())" ;
@mysql_query($query) or die('添加数据出错：'.mysql_error());
?>


修改数据
<?php
$query = "UPDATE grade SET name='小可爱' WHERE id=6";
@mysql_query($query) or die('修改出错：'.mysql_error());
?> 







删除数据
<?php
$query = "DELETE FROM grade WHERE id=6";
@mysql_query($query) or die('删除错误：'.mysql_error());
?>

显示数据
<?php
$query = "SELECT id,name,email,point FROM grade";
$result = @mysql_query($query) or die('查询语句出错：'.mysql_error());
while (!!$row = mysql_fetch_array($result)) {
echo $row['id'].'----'.$row['name'].'----'.$row['email'].'----'.$row['point'];
echo '<br />';
}
?>

三．其他常用函数


mysql_fetch_row()：从结果集中取得一行作为枚举数组
mysql_fetch_assoc()： 从结果集中取得一行作为关联数组
mysql_fetch_array()： 从结果集中取得一行作为关联数组，或数字数组，或二者兼有


mysql_fetch_lengths ()： 取得结果集中每个输出的长度
mysql_field_name()： 取得结果中指定字段的字段名

mysql_num_rows()： 取得结果集中行的数目
mysql_num_fields()：取得结果集中字段的数目


mysql_get_client_info()： 取得 MySQL 客户端信息
mysql_get_host_info()： 取得 MySQL 主机信息
mysql_get_proto_info()： 取得 MySQL 协议信息
mysql_get_server_info()： 取得 MySQL 服务器信息 


*/
?>