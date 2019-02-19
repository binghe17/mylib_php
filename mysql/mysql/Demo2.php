<?php
	require 'config.php';
//	//新增数据
//	$query = "INSERT INTO grade (name,email,point,regdate) VALUES ('胡心鹏','bigbird@sina.com.cn',67,NOW())";
//	@mysql_query($query) or die('新增错误：'.mysql_error());

//	//修改数据
//	$query = 'UPDATE grade SET point=87 WHERE id=8';
//	@mysql_query($query) or die('修改错误：'.mysql_error());

	//删除数据
//	$query = "DELETE FROM grade WHERE id=8";
//	@mysql_query($query) or die('删除错误：'.mysql_error());

	//显示数据
	$query = "SELECT id,name,email,regdate FROM grade";
	$result = mysql_query($query) or die('SQL语句有误：'.mysql_error());
	
	//把结果集转换成的数组赋给$row,如果有数据，就为真
	while (!!$row = mysql_fetch_array($result)) {
		echo $row['id'].'----'.$row['name'].'----'.$row['email'];
		echo '<br />';
	}

	
	mysql_close();
?>