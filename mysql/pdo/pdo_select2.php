<?php
	//连接数据库
	try {
		$pdo=new PDO("mysql:host=localhost;dbname=testdb", "root", "123456");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	
	//查询语句
	$stmt=$pdo->prepare("select id, name, price, num, desn from shops where id > :id order by id");
	$stmt->execute(array(":id"=>100));
	
	
	
//赋值变量
	$stmt->bindColumn("id", $id, PDO::PARAM_INT);		//以INT类型赋值
	$stmt->bindColumn("price", $price);
	$stmt->bindColumn("name", $name, PDO::PARAM_STR);	//以STRING类型赋值
	$stmt->bindColumn(4, $num);
	$stmt->bindColumn(5, $desn);


//输出变量
/*	//范例1,以横杠为间隔输出
	while($stmt->fetch()){
		echo "$id---$name---$price----$num------$desn<br>";
	}
*/
		
	//范例2,以表格输出
	echo '<table border=1 width=800 align="center">';
	echo '<tr>';
	for($i=0; $i<$stmt->columnCount(); $i++){
		$field=$stmt->getColumnMeta($i);
		echo '<th>'.$field["name"].'</th>'; 			//输出列名; $field["name"]
	}
	echo '</tr>';
	while($stmt->fetch()){
		echo '<tr>';
		echo '<td>'.$id.'</td>';
		echo '<td>'.$name.'</td>';
		echo '<td>'.$price.'</td>';
		echo '<td>'.$num.'</td>';
		echo '<td>'.$desn.'</td>';
		echo '</tr>';
	}
	echo '</table>';

//其他
	//输出,总行数/字段数
	echo "总记录数：".$stmt->rowCount()."<br>";
	echo "总字段数：".$stmt->columnCount()."<br>";
