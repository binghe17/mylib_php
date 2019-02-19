<?php
//专门处理数据库的类 db (data base)
class db
{
	static public $hots = 'localhost';
	static public $user = 'a0219131727';
	static public $pass = '5MvVAnSw95VzeR';
	static public $name = 'a0219131727';
	static public $table;
	static public $link;
	static public $charset = 'UTF8';
	static public $result;
	static public $sql;
	
	//连接数据库
	static public function open()
	{
		self::$result = self::$link = mysql_connect(self::$hots, self::$user, self::$pass);
		mysql_select_db(self::$name);
		mysql_set_charset(self::$charset);
		
	}
	
	//关闭数据库
	static public function close()
	{
		self::$result = mysql_close(self::$link);	
	}
	
	//执行sql语句，并反馈结果。	
	//0:默认执行结果	|1:索引数组	|	2:关联数组	|	3:索引+关联数组	|	4:json字符	
	static public function run()
	{
		return self::$result = mysql_query(self::$sql, self::$link);
	}
	
	static public function runtype($type = 2)
	{
		self::run();
		if(!self::$result) return NULL;
		switch($type)
		{
			case 1:
				return self::row();
				break;
			case 2:
				return self::assoc();
				break;
			case 3:
				return self::arr();
				break;
			case 4:
				return self::obj();
				break;
			case 5:
				return self::field();
				break;
			case 6:
				return self::length();
				break;
			default:
				return self::$result;
		}
	}
	
	static public function row()
	{
		if(!is_resource(self::$result)) return self::$result;
		$arr = array();
		$rs = mysql_fetch_row(self::$result);
		while($rs)
		{
			$arr[]=$rs;
			$rs = mysql_fetch_row(self::$result);
		}
		switch(count($arr))
		{
			case 0: return NULL;
			case 1: return $arr[0];
			default: return $arr;
		}
	}
	
	static public function assoc()
	{
		if(!is_resource(self::$result)) return self::$result;
		$arr = array();
		$rs = mysql_fetch_assoc(self::$result);
		while($rs)
		{
			$arr[]=$rs;
			$rs = mysql_fetch_assoc(self::$result);
		}
		switch(count($arr))
		{
			case 0: return NULL;
			case 1: return $arr[0];
			default: return $arr;
		}
	}
	
	static public function arr()
	{
		if(!is_resource(self::$result)) return self::$result;
		$arr = array();
		$rs = mysql_fetch_array(self::$result);
		while($rs)
		{
			$arr[]=$rs;
			$rs = mysql_fetch_array(self::$result);
		}
		switch(count($arr))
		{
			case 0: return NULL;
			case 1: return $arr[0];
			default: return $arr;
		}
	}

	static public function obj()
	{
		if(!is_resource(self::$result)) return self::$result;
		$arr = array();
		$rs = mysql_fetch_object(self::$result);
		while($rs)
		{
			$arr[]=$rs;
			$rs = mysql_fetch_object(self::$result);
		}
		switch(count($arr))
		{
			case 0: return NULL;
			case 1: return $arr[0];
			default: return $arr;
		}
	}

	static public function fieldInfo()
	{
		if(!is_resource(self::$result)) return self::$result;
		if(!self::$result) {return NULL;}
		$arr = array();
		$rs = mysql_fetch_field(self::$result);
		while($rs)
		{
			$arr[]=$rs;
			$rs = mysql_fetch_field(self::$result);
		}
		switch(count($arr))
		{
			case 0: return NULL;
			case 1: return $arr[0];
			default: return $arr;
		}
	}
	
	static public function field()
	{
		$rs = self::fieldInfo();
		if(!$rs) return NULL;
		
		switch(count($rs))
		{
			case 1:
				return $rs->name;
				break;
			default:
				$arr = array();
				foreach($rs as $v)
				{
					$arr[] = $v->name;
				}
				return $arr;
		}
	}
	
	static public function lengths()
	{
		if(!is_resource(self::$result)) return self::$result;
		return mysql_fetch_lengths(self::$result);
	}
	
	//设置密码
	static public function setPassword($str)
	{
		$str=trim($str);
		$str=base64_encode($str);
		$str=sha1($str);
		$str=md5($str);
		$str='*'.$str;
		return $str;
	}

	static public function k($key){return '`'.$key.'`';}
	static public function v($value){return '`'.$value.'`';}
	static public function ks($array){return implode(',', array_map(@self::k,$array));}
	static public function vs($array){return implode(',', array_map(@self::v,$array));}
	static public function kv($array){return array(array_keys($array),array_values($array));}
	static public function otoa($object){$rs=array();$o=&$object;foreach($o as $k=>$v){$rs[$k]=$v;}return $rs;}
	static public function kiv($array){$rs='';$a=$array;foreach($a as $k=>$v){$rs.='&'.$k.'='.$v;}$rs=substr($rs,1);return $rs;}
	static public function kiv_db($array){$rs='';$a=$array;foreach($a as $k=>$v){$rs.=',`'.$k.'`=\''.$v.'\'';}$rs=substr($rs,1);return $rs;}
	static public function kiv_db2($array){$rs='';$a=$array;foreach($a as $k=>$v){$rs.=',('.$k.'='.$v.')';}$rs=substr($rs,1);return $rs;}
	static public function kv_db($array)
	{
		$rs=self::kv($array);
		$rs0=array_map(@self::k,$rs[0]);
		$rs0='('.implode(',',$rs0).')';
		$rs1=array_map(@self::v,$rs[1]);
		$rs1='('.implode(',',$rs1).')';
		$rs=$rs0.' VALUES '.$rs1;
		return $rs;
	}

	//post接收的过滤处理
	static public function postjson($str)
	{
		return json_decode(stripcslashes(@$_POST[$str]));
	}
	static public function post($str)
	{
		return $_POST[$str];
	}
	
	
	//查询
	static public function select($field='*', $other=NULL, $type=2)
	{
		if($field==NULL || $field=='*')
		{
			$field = '*';
		}
		else if(is_string($field))
		{
			$field = '`'.str_replace(',','`,`',$field).'`';
		}
		else if(is_array($field))
		{
			$field = self::ks($field);
		}
		self::$sql = 'SELECT '.$field.' FROM `'.self::$table.'` '.$other;
		return self::runtype($type);
	}
	
	//插入
	static public function insert($arr_kvs = NULL, $other=NULL, $type = 2)
	{
		if(!empty($arr_kvs))
		{
			$ks = '';
			$vs = '';
			if(is_array($arr_kvs))
			{
				foreach($arr_kvs as $k=>$v)
				{
					$ks .= ',`'.$k.'`';
					$vs .= ',\''.$v.'\'';
				}
			}
			else if(is_string($arr_kvs) && $arr_kvs!='null')
			{
				//$arr_kvs = name=aonun&age=2012&type=reg
				$arr_kvs = explode('&', $arr_kvs);
				foreach($arr_kvs as $k=>$v)
				{
					$tmp = explode('=', $v);
					$ks .= ',`'.@$tmp[0].'`';
					$vs .= ',\''.@$tmp[1].'\'';
				}
			}
			$ks = substr($ks, 1);
			$vs = substr($vs, 1);
		}
		if(!empty($other))
		{
			$rs = ' WHERE (';
			$arr = array();
			$arr_k = explode(',', $other);
			foreach($arr_k as $v)
			{
				$arr[] = '`'.$v.'` IS NOT \''.$arr_kvs[$v].'\'';
			}
			$rs .= implode(' AND ', $arr).')';
			$other = $rs;
		}
		self::$sql = 'INSERT INTO `'.self::$table.'` ('.$ks.') VALUES ('.$vs.')'.$other;
		//INSERT INTO `test` (`name`,`time`) VALUES ('jinxidong','1352872938')
		return self::runtype($type);
	}
	
	//以后可以替换掉 insert
	static public function insertUnique($arrKeyValue, $strUnique=NULL)
	{
		$strWhere = $keys = $values = '';
		
		foreach($arrKeyValue as $k1=>$v1)
		{
			$keys .= ',`'.$k1.'`';//常常出错，一定要加上去，所以是'.='，而不是'='。
			$values .= ',\''.$v1.'\'';
		}
		$keys = substr($keys, 1);
		$values = substr($values, 1);
		
		if(!empty($strUnique))
		{
			//设定了唯一的字段名，则进行检验。

			$tmpArrUnique = explode(',', $strUnique);
			foreach($tmpArrUnique as $v2)
			{
				$strWhere .= ' AND `'.$v2.'`=\''.$arrKeyValue[$v2].'\'';
			}
			$strWhere = ' WHERE'.substr($strWhere, 5).' LIMIT 1';
			
			self::$sql = 'SELECT * FROM `'.self::$table.'`'.$strWhere;
			$rs = self::run();
			$row = self::assoc();
			//$row?"T":"F";
			if($row)
			{
				//如果已经有记录，就直接反馈旧记录。
				return $row;
			}
		}
		//不用判断唯一值，那么直接插入新记录。
		self::$sql = 'INSERT INTO `'.self::$table.'` ('.$keys.') VALUES ('.$values.');';
		return self::run();
	}
	
	//更新
	static public function update($arr_kvs,$ifother)
	{
		if(empty($ifother))
		{
			return ;
		}
		self::$sql = 'UPDATE `'.self::$table.'` SET '.self::kiv_db($arr_kvs).' WHERE '.$ifother.'';
		return self::run();
	}
	static public function updateall($table,$arr_kvs){self::$sql = 'UPDATE '.$table.' SET '.kiv_db($arr_kvs); return self::run();}

	//删除 n 条记录
	static public function delete($ifother)
	{
		if(trim($ifother)==false) {return ;}
		self::$sql = 'DELETE FROM `'.self::$table.'` WHERE '.$ifother;
		return self::run();
	}
	static public function deleteall($table){self::$sql = 'TRUNCATE TABLE `'.$table.'`;'; return self::run();}
	
	static public function toTable($arr_rs, $arr_keyname="")
	{
		$len=count($arr_rs);
		if(!$len) return ;
		
		$b = isset($arr_keyname);
		$collen = $b ? count($arr_keyname) : count($arr_rs[0]);
		$arr_keyname = $b ? $arr_keyname : array_keys($arr_rs[0]);
		if(!$collen) return ;
		//准备table内容
		$s='';
		foreach($arr_keyname as $v)
		{
			$s.='<th>'.$v.'</th>';
		}
		$s.='<tr>';
		foreach($arr_rs as $k=>$v)
		{
			foreach($arr_rs[$k] as $v2)
			{
				$s.='<td>'.$v2.'</td>';
			}
			$s.='<tr>';
		}
		$s='<table>'.$s.'</table>';
		return $s;
	}
	
	static public function keys($arr,$glue = ',')
	{
		//if(empty($arr)) return ;
		return implode($glue, array_keys($arr));
	}
	
	//查询记录数
	static public function numTotalRow()
	{
		self::$sql = 'SELECT COUNT(*) FROM '.self::$table;
		self::run();
		list($c) = mysql_fetch_row(self::$result);
		return $c;
	}
	
	static public function oneday($timestamp1,$timestamp2)
	{
		$rs = false;
		if(date('Ymd',$timestamp1) == date('Ymd',$timestamp2))
		{
			$rs = true;
		}
		return $rs;
	}
	
	static public function timearr()
	{
		return $timearr = explode(' ', microtime());
	}
	
	static public function timestr()
	{
		$timearr = explode(' ', microtime());
		return $timestr = $timearr[1].substr($timearr[0],2);
	}
	
	static public function timeflash()
	{
		$timearr = explode(' ', microtime());
		return $timestr = $timearr[1].substr($timearr[0],2,3);
	}
}
?>