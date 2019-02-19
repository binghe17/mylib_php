<?php
	//链接数据库
	try {
		$pdo=new PDO("mysql:host=localhost;dbname=xsphpdb", "root", "123456");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	
	
	
	/* pdo中有两种占位符号
	 *  
	 *  ? 参数             --- 索引数组， 按索引顺序使用
	 *  名子参数           ----关联数组， 按名称使用，和顺序无关
	 */ 
	
	
	//方法1:按名称参数指定
	$stmt=$pdo->prepare("update shops set name=:name, num=:num, price=:price, desn=:desn where id=:id"); 
	
	//绑定参数
	$stmt->bindParam(":name", $name);
	$stmt->bindParam(":num", $num);
	$stmt->bindParam(":desn", $desn);
	$stmt->bindParam(":price", $p);

 /*
	//方法2:按 ?参数指定
	$stmt=$pdo->prepare("insert into shops(name, price, num, desn) values(?, ?, ?, ?)"); //所有SQL都可执行
	
	//绑定参数
	$stmt->bindParam(1, $name, PDO::PARAM_STR);
	$stmt->bindParam(3, $num, PDO::PARAM_INT);
	$stmt->bindParam(4, $desn, PDO::PARAM_STR);
	$stmt->bindParam(2, $p, PDO::PARAM_STR);
 */


	//赋值,并执行第一次
	$name="wwww1";
	$num=101;
	$desn="hello1";
	$p=34.51;


	//执行代码
	if($stmt->execute()){
		echo "执行成功";
		echo "最后插入的ID：".$pdo->lastInsertId();
	}else{
		echo "执行失败！";
	}

	//赋值,并执行第二次
	$name="wwww1";
	$num=101;
	$desn="hello1";
	$p=34.51;

	//执行代码
	if($stmt->execute()){
		echo "执行成功";
		echo "最后插入的ID：".$pdo->lastInsertId();
	}else{
		echo "执行失败！";
	}


