<?php
		/*
		 *[ mysql数据库 命令 ]
		 *
		 */
		 
/* 开启服务	 
	//window下
		//补充说明: 系统属性>环境变量>PATH变量,修改用户变量,添加mysql,apache路径
		net start mysql	//开启服务
		net stop mysql 	//关闭服务
	
	//linux下
		service mysqld start	//开启服务
		service mysqld stop		//关闭服务
		service mysqld restart	//重启服务
*/


//进入数据库
		//连接数据库
		mysql -h localhost -u root -p123456 dbname	//连接数据库(全命令)
		mysql -h localhost -u root -p	//命令行进入数据库,然后输入密码进入
		
		
		//创建数据库
		create database testdb;					//创建数据库testdb
		create database  if not exists testdb;	//如果不存在 创建
		
		//删除数据库
		drop database testdb;				//删除数据库testdb
		drop database  if exists testdb;	//如果存在 删除
		
		
		
		
		//2.查找命令
		select * from shops order by id; //以ID查询
		
		//3.
		 
		
		//4.
		
/*	
// DML 部分：(SQL 结构化查询语言)

•SELECT - 从数据库表中获取数据
•UPDATE - 更新数据库表中的数据
•DELETE - 从数据库表中删除数据
•INSERT INTO - 向数据库表中插入数据


// DDL 语句: (SQL 数据定义语言)

•CREATE DATABASE - 创建新数据库
•ALTER DATABASE - 修改数据库
•CREATE TABLE - 创建新表
•ALTER TABLE - 变更（改变）数据库表
•DROP TABLE - 删除表
•CREATE INDEX - 创建索引（搜索键）
•DROP INDEX - 删除索引

*/
	
		//End