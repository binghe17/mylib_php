<?php
/**
 * PHP100���ݿⱸ��ϵͳ
 * www.php100.com
 */
//---��Ҫ���õı�����Ϣ
$user = "admin";//ϵͳ����Ա�û���
$pass = "e10adc3949ba59abbe56e057f20f883e";//��������md5����ֵ����ʼֵΪ123456,�����ʽҲ����д�ɣ�$pass = md5("123456");
$url = "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["REQUEST_URI"]).'/';//��ַ���ã��������úø���ַ������ϵͳ�ǻ������ޣ��ǵ������С�/��
$lang = "utf8";//�ù��������ݿ�Ҫ����ʱ�����MYSQL����4.0.x�汾ʱ����Ҫ���õ����Ա����ʽ���Ǻǡ�

//----�����￪ʼ�����Ͳ�Ҫȥ�������ޣ��������Ϣ����ν�ģ�
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbdata = "";

header("Content-type: text/html; charset=gbk");
error_reporting(E_ALL & ~E_NOTICE);
ob_start();
@set_time_limit(0);
function error($msg="",$url2="index.php")
{
	global $url;
	die("<script language=javascript>alert('������ʾ��\\n\\n\\t".$msg."\\n');location.href='".$url.$url2."'</script>");
	return true;
}

function set_sql_cookie($act="backup")
{
	global $url,$dbhost,$dbuser,$dbpass,$dbdata;
	echo "<title>�������ݿ���Ϣ - PHP100����ϵͳ</title>\n";
	echo "<style type='text/css'>\nbody\n{\tbody:normal 14px '����','Tahoma','Arial';\n}\n</style>\n";
	echo "�����ú����ݿ���������˺š����뼰���ݿ�����ƵȲ�����Ϣ��";
	echo "<form method='post' action='".$url."index.php?act=".$act."&set=cookie'>\n";
	echo "������ <input type='text' name='db_host' value='".$dbhost."' style='width:150px;height:20px;'><br />\n";
	echo "��&nbsp; �� <input type='text' name='db_user' value='".$dbuser."' style='width:150px;height:20px;'><br />\n";
	echo "��&nbsp; �� <input type='password' name='db_pass' value='".$dbpass."' style='width:150px;height:20px;'><br />\n";
	echo "��&nbsp; �� <input type='text' name='db_data' value='".$dbdata."' style='width:150px;height:20px;'><br /><br />\n";
	echo "<input type='submit' value='ȷ��'> <input type='reset' value='����'></form>\n";
	die();
	return true;
}

function chk_get_set($act="backup")
{
	global $url,$dbhost,$dbuser,$dbpass,$dbdata;
	$db_host = $_POST["db_host"];
	$db_user = $_POST["db_user"];
	$db_pass = $_POST["db_pass"];
	$db_data = $_POST["db_data"];
	if(empty($db_host) || empty($db_user) || empty($db_data)) error("���ݿ���������˺ż����ݿ������ǲ���Ϊ��","index.php?act=".$act);
	@mysql_connect($db_host,$db_user,$db_pass) or error("�޷����ӵ��������ϣ�����","index.php?act=".$act);
	@mysql_select_db($db_data) or error("�޷����ӵ����ݿ⣡���飡","index.php?act=".$act);
	$msg = $act == "recover" ? "�ָ�" : "����";
	if($act == "backup" && !file_exists($db_data)) mkdir($db_data);//�������ݿ����ƣ�
	if($act == "recover" && !file_exists($db_data)) error("�ļ��� ".$db_data." �����ڣ�","index.php?act=".$act);
	setcookie("qinggan_db",$db_host."___".$db_user."___".$db_pass."___".$db_data);//���÷�������COOKIE
	@mysql_close();//�ر����ݿ�����
	error("���ݿ���Ϣ�Ѿ�������ɣ���������һ��������\\n\\n\\t\\t".$msg."���ݣ�","index.php?act=".$act);
	return true;
}

function sql_connect($cookie_db)
{
	global $lang;
	$dbarray = explode("___",$cookie_db);
	mysql_connect($dbarray[0],$dbarray[1],$dbarray[2]);//������Ϣ
	if(mysql_get_server_info()>"4.1") mysql_query("SET NAMES '".$lang."'");
	if(mysql_get_server_info()>"5.0.1") mysql_query("SET sql_mode=''");
	mysql_select_db($dbarray[3]);
	return true;
}

function sql_query($sql="")
{
	if(empty($sql)) return false;
	$query = mysql_query($sql);
	return $query;
}

function sql_fetch_array($query)
{
	if(empty($query)) return false;
	$rows = mysql_fetch_array($query);
	return $rows;
}

function table2sql($table)
{
	$tabledump = "DROP TABLE IF EXISTS ".$table.";\n";
	$query = sql_query("SHOW CREATE TABLE ".$table);
	$rows = sql_fetch_array($query);
	$tabledump .= $rows[1].";\n\n";
	return $tabledump;
}

function errmsg($msg="",$url2="index.php")
{
	global $url;
	echo "<script language=\"JavaScript\">\nfunction moveNew(){\nlocation.href=\"".$url.$url2."\";\n}\nwindow.setTimeout('moveNew()','2000');\n</script>";
	echo $msg;
	echo "<br /><br />";
	echo "�������ϵͳ��֧����ת��ϵͳ��ʱ��δ��ת�����ֶ����������";
	echo "<input type='button' onclick=\"window.location='".$url.$url2."'\" value='�ֶ������ת'>";
	die();
	return true;
}

function read_msg($file)
{
	if($handle=@fopen($file,"rb"))
	{
		$file_data=fread($handle,filesize($file));
		fclose($handle);
	}
	return $file_data;
}

function recover_data($sql)
{
	$sql=str_replace("\r","\n",$sql);
	$sql_array=explode(";\n",$sql);
	foreach($sql_array as $key=>$value)
	{
		$value = trim($value);
		if($value == "#" || $value == "--")
		{
			$queryy = explode("\n",$value);
			$value = '';
			foreach($queryy as $v2)
			{
				if($v2[0]!='#') $value.=$v2;
			}
		}
		if($value)
		{
			$value=trim(str_replace("\n","",$value));
			if(get_cfg_var("magic_quotes_gpc")) stripslashes($value);
			sql_query($value);
		}
	}
	return true;
}

$cookie_chk = $_COOKIE["qinggan_userchk"];
$cookie_db = $_COOKIE["qinggan_db"];
if($cookie_chk)
{
	if($cookie_chk != $user."___".md5($pass)) header("Location:".$url."index.php");
}
$act = $_GET["act"] ? $_GET["act"] : $_POST["act"];
@$act_set = $_GET["set"];
if($act == "backup")
{
	echo "<title>��ǰ���ڱ�����Ϣ... - PHP100��վ����ϵͳ - www.PHP100.com</title>";
	if(empty($cookie_chk)) error("��Ҫ�û���֤�˺ź����룡");
	if($act_set == "cookie") chk_get_set($act);
	if(empty($cookie_db)) set_sql_cookie($act);
	sql_connect($cookie_db);//�������ݿ�
	$dbarray = explode("___",$cookie_db);
	$table_list = mysql_list_tables($dbarray[3]);//�г����б��
	$table_count = mysql_num_rows($table_list);//�Ǻǻ�ȡ�������
	if(!file_exists($dbarray[3]."/".$dbarray[3].".sql"))
	{
		//-----�������ݱ���Ϣ
		$array = array();
		for($i=0;$i<mysql_num_rows($table_list);$i++)
		{
			$table = mysql_tablename($table_list,$i);//
			$array[$i] = table2sql($table);
		}
		$msg = implode("\n",$array);
		$handle = fopen($dbarray[3]."/".$dbarray[3].".sql","wb");
		if(!get_cfg_var("magic_quotes_gpc")) addslashes($msg);
		fputs($handle,$msg);
		fclose($handle);
		unset($msg);
	}
	//-----���
	@$tableid = $_GET["tableid"] ? intval($_GET["tableid"]) : 0;
	@$startid = $_GET["startid"] ? intval($_GET["startid"]) : 0;
	@$pageid = $_GET["pageid"] ? intval($_GET["pageid"]) : 0;
	//-----��ʼ���ݱ���
	if(($tableid+1)<$table_count)
	{
		$table = mysql_tablename($table_list,$tableid);
		$query = sql_query("select count(*) as count from `".$table."`");
		$num = sql_fetch_array($query);
		$count = $num["count"];//��ȡ����
		$per_size = 1000;//�����������1000
		if($count<$per_size) $per_size = $count;
		if($count && $startid < $count)
		{
			$query = sql_query("select * from `".$table."` limit ".$startid.",".$per_size);//
			$numfields = mysql_num_fields($query);
			$tabledump = "";
			while($rows = mysql_fetch_row($query))
			{
				$tabledump .= "INSERT INTO $table VALUES (";
				$comma = '';
				for($i = 0; $i < $numfields; $i++)
				{
					$tabledump .= $comma.('\''.mysql_escape_string($rows[$i]).'\'');
					$comma = ',';
				}
				$tabledump .= ");\n";
				//---------------
				$startid++;
				if(strlen($tabledump)>(2048*1024))
				{
					$handle = fopen($dbarray[3]."/".$table."_".$pageid.".sql.","wb");
					if(!get_cfg_var("magic_quotes_gpc")) addslashes($tabledump);
					fputs($handle,$tabledump);
					fclose($handle);
					unset($tabledump);//������ݣ�
					errmsg("���ڱ������ݱ� ".$table." ��Ϣ����ǰ�Ѿ�д��� ".($pageid+1)." ҳ������д��� ".($pageid+2)." ҳ��Ϣ","index.php?act=backup&tableid=".$tableid."&startid=".($startid)."&pageid=".($pageid+1));
				}
			}
			//----
			if($tabledump)
			{
				if($pageid>0)
				{
					@$msg = file_get_contents($dbarray[3]."/".$table."_".($pageid-1).".sql");
					if(strlen($msg) < (2048*1024))
					{
						$handle = fopen($dbarray[3]."/".$table."_".($pageid-1).".sql","ab");
						if(!get_cfg_var("magic_quotes_gpc")) addslashes($tabledump);
						fputs($handle,$tabledump);
						fclose($handle);
						unset($tabledump,$msg);
						$newpageid = $pageid;
					}
					else
					{
						$handle = fopen($dbarray[3]."/".$table."_".$pageid.".sql","wb");
						if(!get_cfg_var("magic_quotes_gpc")) addslashes($tabledump);
						fputs($handle,$tabledump);
						fclose($handle);
						unset($tabledump);
						$newpageid = $pageid + 1;
					}
				}
				else
				{
					$handle = fopen($dbarray[3]."/".$table."_".$pageid.".sql","wb");
					if(!get_cfg_var("magic_quotes_gpc")) addslashes($tabledump);
					fputs($handle,$tabledump);
					fclose($handle);
					unset($tabledump);
					$newpageid = $pageid + 1;
				}
			}
			if($startid<$count)
			{
				errmsg("���ڱ������ݱ� ".$table." ��Ϣ��","index.php?act=backup&tableid=".$tableid."&startid=".($startid)."&pageid=".$newpageid);
			}
			else
			{
				//------
				errmsg("���ݱ� ".$table." ��Ϣ�Ѿ�������ϣ�����ʼ������һ�����ݱ�","index.php?act=backup&tableid=".($tableid+1));
			}
		}
		else
		{
			errmsg("���ݱ� ".$table." ��ϢΪ�գ�����ʼ��һ�����ݱ���Ϣ����","index.php?act=backup&tableid=".($tableid+1));
		}
	}
	else
	{
		setcookie("qinggan_db","");//������ݿ�COOKIE��Ϣ
		setcookie("qinggan_userchk","");//����û���֤��Ϣ
		error("�����Ѿ�������ϣ�","index.php");
	}
}
elseif($act == "recover")
{
	echo "<title>�ָ����ݱ���Ϣ - PHP100��վ����ϵͳ - www.PHP100.com</title>";
	if(empty($cookie_chk)) error("��Ҫ�û���֤�˺ź����룡");
	if($act_set == "cookie") chk_get_set($act);
	if(empty($cookie_db)) set_sql_cookie($act);
	sql_connect($cookie_db);//�������ݿ�
	$dbarray = explode("___",$cookie_db);
	$sql = read_msg($dbarray[3]."/".$dbarray[3].".sql");
	recover_data($sql);
	errmsg("���ݱ�ṹ�Ѿ��ָ������ڻָ�������Ϣ��","index.php?act=recover_data");
}
elseif($act == "recover_data")
{
	echo "<title>�ָ�������Ϣ - PHP100��վ����ϵͳ - www.PHP100.com</title>";
	if(empty($cookie_chk)) error("��Ҫ�û���֤�˺ź����룡");
	if($act_set == "cookie") chk_get_set($act);
	if(empty($cookie_db)) set_sql_cookie($act);
	sql_connect($cookie_db);//�������ݿ�
	$dbarray = explode("___",$cookie_db);
	//-----
	$table_list = mysql_list_tables($dbarray[3]);//�г����б�
	$table_count = mysql_num_rows($table_list);//�Ǻǻ�ȡ������
	$tableid = $_GET["tableid"] ? intval($_GET["tableid"]) : 0;
	$pageid = $_GET["pageid"] ? intval($_GET["pageid"]) : 0;
	$table = mysql_tablename($table_list,$tableid);
	if(($tableid+1)<$table_count)
	{
		if(!file_exists($dbarray[3]."/".$table."_".$pageid.".sql"))
		{
			errmsg("���ݱ� ".$table." ��Ϣ�����ڻ�δ�����ݣ�","index.php?act=recover_data&tableid=".($tableid+1));
		}
		$sql = read_msg($dbarray[3]."/".$table."_".$pageid.".sql");
		if($sql) recover_data($sql);
		if(file_exists($dbarray[3]."/".$table."_".($pageid+1).".sql"))
		{
			errmsg("���ڻָ����ݱ� ".$table." ��Ϣ","index.php?act=recover_data&tableid=".$tableid."&pageid=".($pageid+1));
		}
		else
		{
			errmsg("�Ѿ��ָ����ݱ� ".$table." ��Ϣ�����ָ���һ�����ݱ���Ϣ��","index.php?act=recover_data&tableid=".($tableid+1));
		}
	}
	else
	{
		setcookie("qinggan_userchk","");
		setcookie("qinggan_db","");
		error("������Ϣ���Ѿ��ָ���ϣ�","index.php");
	}
}
elseif($act == "check")
{
	$chk_user = $_POST["chk_user"];
	$chk_pass = $_POST["chk_pass"];
	if(empty($chk_user) || empty($chk_pass)) error("�˺Ż����벻��Ϊ��");
	if($chk_user != $user || md5($chk_pass) != $pass) error("�˺Ż����벻��ȷ��");
	setcookie("qinggan_userchk",$chk_user."___".md5($pass));//����cookie��Ϣ
?>
<title>ѡ�������Ŀ - PHP100��վ����ϵͳ - www.PHP100.com</title>
<style type="text/css">
body
{
	font:normal 14px '����','Tahoma','Arial';
}
</style>
��ѡ����Ҫ��������Ŀ��<br /><br />
<input type="button" onclick="window.location='index.php?act=backup'" value="��������"><br /><br />
<input type="button" onclick="window.location='index.php?act=recover&iftable=yes'" value="�ָ�����"><br />
<?php
}
else
{
	setcookie("qinggan_userchk","");
	setcookie("qinggan_db","");
?>
<title>��֤�˺� - PHP100��վ����ϵͳ - www.PHP100.com</title>
<style type="text/css">
body
{
	font:normal 14px '����','Tahoma','Arial';
}
</style>
�ڲ���֮ǰ����Ҫ�����˺ź�����������ȷ�ϣ�
<form method="post" action="index.php?act=check">
�˺ţ�<input type="text" name="chk_user" style="width:150px;height:20px;"><br />
���룺<input type="password" name="chk_pass" style="width:150px;height:20px;"><br /><br />
<input type="submit" value="ȷ��"> <input type="reset" value="����"></form>
<?php
}
ob_end_flush();
?>
<br /><br />
����ԭ��

<blockquote>
<li>һ��һ�ļ���<a href="http://www.php100.com">PHP100���ݿⱸ��ϵͳ</a>
<li>�����ļ�����2048Kʱ���Զ��������ļ���
<li>�״��������ݽṹ���ñ����ܸ����ã�
<li>ͬĿǰ�����ı��ݳ���һ������ϵͳ����sql�ļ������Ƿ����phpmyadmin�����ı�δ��֤��
</blockquote>
