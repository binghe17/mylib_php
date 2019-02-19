<?php
	//连接数据库
	try {
		$pdo=new PDO("mysql:host=localhost;dbname=testdb", "root", "123456");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	
	//where id > :id	//说明:输出大于多少的,如:传100,输出大于100以上的所有行
	//order by id 		//说明:以id排序
	
	//查询语句
	$stmt=$pdo->prepare("select id, name, price, num, desn from shops where id > :id order by id");
	
	//执行,条件输出; 指定,只输出大于100的数据
	$stmt->execute(array(":id"=>100));
	
	
//输出数组
/*
	//只输出单条数据;一条一条输出
	$row=$stmt->fetch(PDO::FETCH_NUM);		//索引数组返回(PDO::FETCH_NUM); 
	print_r($row); echo '<br>';
	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);	//关联数组返回(PDO::FETCH_ASSOC);
	print_r($row); echo '<br>';
	
	$row=$stmt->fetch(PDO::FETCH_BOTH);		//默认方式,混合返回(索引+关联),一般不指定
	print_r($row); echo '<br>';
	
	$row=$stmt->fetch();					//默认,混合返回(PDO::FETCH_BOTH);同上;
	print_r($row); echo '<br>';
*/
// 索引方式 PDO::FETCH_NUM	// 关联方式 PDO::FETCH_ASSOC	// 混合方式 PDO::FETCH_BOTH
	
	
	
	//设置数组遍历方式
	$stmt->setFetchMode(PDO::FETCH_NUM);
	
	//输出全部数据 (方法1.一条一条循环的方式)
	while($row=$stmt->fetch()){
		print_r($row); echo '<br>'; 	//获取一条条数组,并打印结果(有换行)
	}
/*	
	//输出全部数据 (方法2.直接用函数的方式)
	$data=$stmt->fetchAll();			//获取所有数组
	echo '<pre>'; print_r($data); echo '</pre>';	//(原型方式输出)
 */
 
 
//其他
	//输出,总行数/字段数
	echo "总记录数：".$stmt->rowCount()."<br>";
	echo "总字段数：".$stmt->columnCount()."<br>";
	
	
	
	
