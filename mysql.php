<?php
/**
 * mysql数据库操作
 *
 */
error_reporting(0);
exit();


$DBName='db1';
$tableName='users';

//其他
SET NAMES utf8;				//设置字符集（3种都修改）
SHOW TABLES;				//查看有多少张表
SHOW TABLES STATUS \G;		//检查这个表的信息
DESCIRBE $tableName			//显示表结构
OPTIMIZE TABLE $tableName;	//优化一张表

//数据库操作
SHOW DATABASES;		//显示所有数据库
USE $DBName;		//选择数据库
SELECT DATABASE();	//查看当前选择的数据库

CREATE DATABASE $DBName;	//创建数据库
DROP DATABASE $DBName;		//删除数据库

//表操作
CREATE TABLE $tableName (
	_name VARCHAR(20),
	_sex CHAR(1),
	_birth DATETIME
);							//创建一张表+字段
DROP TABLE $tableName;		//删除数据表


//增加数据
INSERT INTO $tableName (_name,_sex,_birth) VALUES ('Lee','x',NOW());
//删除数据
DELETE FROM $tableName WHERE _name='Lee'; //删除满足条件的数据
DELETE FROM $tableName WHERE id=4;		//删除编号为4的数据

//修改数据
UPDATE $tableName SET _sex='man' WHERE _name='Lee';//修改指定条件的哪个字段数据

//查看数据
SELECT * FROM $tableName;									//查看一张表的所有数据
SELECT * FROM $tableName WHERE _name='Lee';					//按条件筛选指定数据
SELECT * FROM $tableName WHERE _point>90;					// =, >，<, <=, >=, !=
SELECT * FROM $tableName WHERE _email IS NOT NULL;			//IS NOT NULL不为空，(IS NULL)
SELECT * FROM $tableName WHERE _point BETWEEN 70 AND 90;	//BETWEEN在范围内,(NOT BETWEEN)，AND两个条件语句都为真，(OR或)
SELECT * FROM $tableName WHERE _point IN (95,82,78); 		//IN特定的数据，

SELECT * FROM $tableName WHERE email LIKE '%163.com';		//LIKE包含 指定字符串的数据
SELECT * FROM $tableName WHERE email NOT LIKE '%yc60.com';	//NOT LIKE不包含

SELECT * FROM $tableName ORDER BY _birth DESC;	//DESC倒序排列，ASC正序排列

SELECT * FROM $tableName LIMIT 3;		//只显示前3条数据
SELECT * FROM $tableName LIMIT 2,2;		//从第3条数据开始显示2条

SELECT * FROM Persons WHERE (FirstName='Thomas' OR FirstName='William') AND LastName='Carter';


/* MYSQL分组函数
	AVG(); 		//返回列的平均值
	COUNT();	//统计行数
	MAX();		//求列中的最大值
	MIN();		//求列中的最小值
	SUM();		//求列中的和
 */


/*
1、查询第一行记录：
    select   *   from   table  limit   1

2、查询第n行到第m行记录
     select * from table1  limit n-1,m-n;
     SELECT * FROM table LIMIT 5,10; 	// 返回第6行到第15行的记录
     select * from employee limit 3,1;	// 返回第4行

3、查询前n行记录
    select * from table1 limit 0,n;
	或
    select * from table1 limit n;

4、查询后n行记录
     select * from table1 order by id desc dlimit n；//倒序排序，取前n行 id为自增形式

5、查询一条记录($id)的下一条记录
     select * from table1 where id>$id  order by id asc dlimit 1

6、查询一条记录($id)的上一条记录
    select * from table1 where id<$id  order by id desc dlimit 1

*/


//先查询当前的数据在数据库是否有相同的，如果有的话就提示
$title ='asdfghjkl';
$sql = "Select * from tablename where title='$title'";
$query = mysql_query( $sql );
if( mysql_num_rows( $query ) )
{
exit('不能重复插入相同的记录');
}
else
{
$sql ="insert tablename values('$title')";
mysql_query( $sql );
exit('保存记录成功');
}

/*
INSERT INTO table (a,b,c) VALUES (1,2,3)  ON DUPLICATE KEY UPDATE id=LAST_INSERT_ID(id), c=3;

insert ignore into menus(id,label,url) values(4,'Contact us','contactus.html');  
//当unique列在一个UNIQUE键上插入包含重复值的记录时，我们可以控制MySQL如何处理这种情况：
//使用IGNORE关键字或者ON DUPLICATE KEY UPDATE子句跳过INSERT、中断操作或者更新旧记录为新值。
当有很多的INSERT语句需要被顺序地执行时，IGNORE关键字就使操作变得很方便。
使用它可以保证不管哪一个INSERT包含了重复的键值，MySQL都回跳过它(而不是放弃全部操作)。

在这种情况下，我们还可以通过添加MySQL4.1新增加的ON DUPLICATE KEY UPDATE子句，
使MySQL自动把INSERT操作转换为UPDATE操作。这个子句必须具有需要更新的字段列表，
这个列表和UPDATE语句使用的列表相同。

insert into menus(id,label,url) values(4,'Contact us','contactus.html')   
on duplicate key update label='Contact us',url='contactus.html';   

在这种情况下，如果MySQL发现表已经包含具有相同唯一键的记录，
它会自动更新旧的记录为ON DUPLICATE KEY UPDATE从句中指定的新值：

INSERT INTO table (a,b,c) VALUES (1,2,3) 
ON DUPLICATE KEY UPDATE id=LAST_INSERT_ID(id), c=3;


INSERT INTO table (a,b,c) VALUES (1,2,3),(4,5,6) 
ON DUPLICATE KEY UPDATE c=VALUES(a)+VALUES(b); 
这个语句和下面两个是同效果的： 
INSERT INTO table (a,b,c) VALUES (1,2,3) 
ON DUPLICATE KEY UPDATE c=3; 
INSERT INTO table (a,b,c) VALUES (4,5,6) 
ON DUPLICATE KEY UPDATE c=9;


http://database.ctocio.com.cn/311/11566311.shtml

*/

