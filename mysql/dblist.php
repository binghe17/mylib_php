<?php
echo '<pre>';
mysql_connect("localhost", "root", "");
//----------------------

function db_list(){
	$rs = mysql_query('SHOW DATABASES'); 
	while($row = mysql_fetch_row($rs)) { 
		$db_list[]=$row[0];
	} 
	return $db_list;
}
$db_list=db_list();

//---------------------------
function tb_list($tb_str=null){ //可放入，字符串或数组参数
	if(!$tb_str) $tb_arr=db_list();//默认值
	if(is_array($tb_str)){
		$tb_arr=$tb_str;
		foreach ($tb_arr as $k => $v) {
			mysql_select_db($v);
			$sql = mysql_query('SHOW TABLES'); 
			while ($row_data = mysql_fetch_row($sql)) {
				$tb_list[$v][]=$row_data[0];
			}
		}
	}else {
		mysql_select_db($tb_str);
		$sql = mysql_query('SHOW TABLES'); 
		while ($row_data = mysql_fetch_row($sql)) {
			$tb_list[]=$row_data[0];
		}
	}
	return $tb_list;
}
print_r(tb_list(array('amina2','g5_write_4010')));


//-------------------------------------





//mysql_select_db('game');
// while ($row_data = mysql_fetch_row($sql_list)) {
// 	echo get_table_fd($row_data[0], "sql");
// 	//  $fp=fopen("sql/$tablename.sql","w+");
// 	//  fwrite($fp,$field);
// 	//  fclose($fp);
// }

function get_table_fd($tablename) {
	$field = "CREATE TABLE `$tablename`(\n";
	$result = mysql_query("select * from $tablename");
	while ($meta = mysql_fetch_field($result)) {
		if ($meta->not_null) $not_null = "not_null";
		$field .= "`$meta->name` $meta->type($meta->max_length) $not_null; \n";
	}
	$field .= ")\n";
	return $field;
}

echo '<pre>';
print_r($GLOBALS);
