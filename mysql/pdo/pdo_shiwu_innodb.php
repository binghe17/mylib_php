<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=testdb", "root", "123456", array(PDO::ATTR_AUTOCOMMIT=>0));
		$pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "数据库连接失败：".$e->getMessage();
		exit;
	}

	//执行SQL语句 exec() query()  prepare()
	//一是有结果集的query()， 执行select语句
	//exec()用来执行有影响行数的，update, delete insert, other
	//exec()返回的是影响的行数
	/*
	 *
	 * 事务处理
	 *
	 *   张三从李四那里买了一台 2000 元的电脑
	 *
	 *     从张三帐号中扣出 2000元
	 *
	 *     向李四账号中加入 2000元
	 *
	 *     从商品表中减少一台电脑
	 *
	 *     MyIsAM  InnoDB
	 *
	 */

	try{
		$pdo->beginTransaction();
		
		$price=500;

		$sql="update zhanghao set price=price-{$price} where id=1";

		$affected_rows=$pdo->exec($sql);

		if(!$affected_rows)
			throw new PDOException("张三转出失败");

		$sql="update zhanghao set price=price+{$price} where id=3";

		$affected_rows=$pdo->exec($sql);
			
		if(!$affected_rows)
			throw new PDOException("向李四转入失败");

		echo "交易成功！";
		$pdo->commit();
	}catch(PDOException $e){
		echo $e->getMessage();
		$pdo->rollback();
	}
	
	$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 1);
	
	
	
	//End



