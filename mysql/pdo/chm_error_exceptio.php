<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=xsphpdb", "root", "123456");
		$pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_WARNING);
		
	}catch(PDOException $e){
		echo "数据库连接失败：".$e->getMessage();
		exit;
	}



	//执行SQL语句 exec() query()  prepare()
	//一是有结果集的query()， 执行select语句
	//exec()用来执行有影响行数的，update, delete insert, other ; 返回的是影响的行数
	try{
		$affected_rows=$pdo->exec("insert into shops(name1, price, num, desn) values('aa', '12.1', '10', 'good')");
		
		echo "最后插入的自动增长的ID：".$pdo->lastInsertId();
		
	}catch(PDOException $e){
		echo $e->getMessage();
	}




	try{
		$stmt=$pdo->query("select * from shops");

		foreach($stmt as $row){
			print_r($row);
			echo '<br>';
		}

	}catch(PDOException $e){
		echo $e->getMessage();
	}




	//设置错误报告模式 ERRMODE_SILENT    ERRMODE_WARNING

	print_r($pdo->errorInfo());



	//设置错误报告模式 ERRMODE_SILENT    ERRMODE_WARNING
	if(!$affected_rows){
		echo $pdo->errorCode()."<br>";
		print_r($pdo->errorInfo());	
	}else{
		echo "执行成功！";
	}
	
	
