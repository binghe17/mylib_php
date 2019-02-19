<?php
	//使用异常类,没有异常只执行try内的数据;
	try{
		//调优,持久连接
		$driver_opts=array(PDO::ATTR_AUTOCOMMIT=>0, PDO::ATTR_PERSISTENT=>true);
		
		//连接数据库
		$pdo=new PDO("mysql:host=localhost;dbname=testdb", "root", "123456", $driver_opts);
		
		/*	//其他方法1 (用文件连接的方式)
				$pdo=new PDO("uri:dsnfile", "root", "123456", $driver_opts);
				//前提是在当前路径下有dsnfile文件,并里面有字符串
				//----
				mysql:host=localhost;dbname=testdb
				----//
		
		/*	//其他方法2 (改配置文件方式)
			$pdo=new PDO("mysqlpdo", "root", "123456", $driver_opts);
			//----
			改php.ini配置文件; 查找
				[PDO]
				podo.dsn.mysqlpdo=mysql:host=localhost;dbname=testdb
			----/
		*/	


		//设置; setAttribute()
		$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
		$pdo->setAttribute(PDO::ATTR_PERSISTENT, true);
	
	
	//有异常执行才执行catch内的数据,剖出异常用
	}catch(PDOException $e){
		echo "数据库连接失败：".$e->getMessage();	//输出错误提示
		exit;
	}



	//获取; getAttribute()
	echo $pdo->getAttribute(PDO::ATTR_PERSISTENT)."<br>";
	echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT)."<br>";		//是否自动提交
	echo $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION)."<br>";	//客户端的版本
	echo $pdo->getAttribute(PDO::ATTR_SERVER_INFO)."<br>";		//服务器的信息
	echo $pdo->getAttribute(PDO::ATTR_SERVER_VERSION)."<br>";	//服务器的版本
	echo $pdo->getAttribute(PDO::ATTR_DRIVER_NAME)."<br>";		//驱动名
