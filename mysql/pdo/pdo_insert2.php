<?php
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
	 
	  
 /*
	//方法1:按名称参数指定
	$stmt=$pdo->prepare("insert into shops(name, price, num, desn) values(:name,:price, :num, :desn)"); 
	
	//1.直接从表单插入
	$stmt->execute($_POST);

	//2.直接绑定并执行
	$stmt->execute(array(":price"=>99, ":name"=>"kkk1", ":num"=>"451", ":desn"=>"aaaaaa1"));
	$stmt->execute(array(":price"=>88, ":name"=>"kkk2", ":num"=>"452", ":desn"=>"aaaaaa2"));
	$stmt->execute(array(":price"=>77, ":name"=>"kkk3", ":num"=>"453", ":desn"=>"aaaaaa3"));
 */
	
	
	
	//方法2:按 ?参数指定
	$stmt=$pdo->prepare("insert into shops(name, price, num, desn) values(?, ?, ?, ?)"); //所有SQL都可执行

	//连续插入
	$stmt->execute(array("myname1", 11.2, 55, "very good"));
	$stmt->execute(array("myname2", 11.2, 54, "very good"));
	$stmt->execute(array("myname3", 11.2, 56, "very good"));




