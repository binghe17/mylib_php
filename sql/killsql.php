<title>批量删除MySql数据库中相同前缀的表</title>
<form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>?action=kill">
<table width="425" border="0" align="center">
  <tr>
    <td height="46" colspan="2" align="center"><p>批量删除MySQL数据库相同前缀的数据表&nbsp;by <a href="http://www.sudu8.cn" target="_blank">sudu8</a></p></td>
    </tr>
  <tr>
    <td width="103">ip地址</td>
    <td width="306" height="26"><label>
      <input name="ip" type="text" id="ip" value="localhost" />
    </label></td>
  </tr>
  <tr>
    <td height="25">数据库账号</td>
    <td height="26"><label>
      <input type="text" name="user" id="user" />
    </label></td>
  </tr>
  <tr>
    <td>数据库密码</td>
    <td height="26"><label>
      <input type="text" name="pass" id="pass" />
    </label></td>
  </tr>
  <tr>
    <td>数据库</td>
    <td height="26"><label>
      <input type="text" name="db" id="db" />
    </label></td>
  </tr>
  <tr>
    <td>要删除的前缀</td>
    <td height="26">    <label>
      <input type="text" name="qz" id="qz" />
    </label>（&nbsp;例如：bbs_&nbsp;&nbsp;）</td>
  </tr>
    <tr>
    <td height="67" colspan="2" align="center">    <label>
      <input type="submit" name="tijiao" id="tijiao" value="开始删除" />
  </label></td>
    </tr>
</table>
</form>
<?php

if(@$_GET["action"]=="kill"){

if (empty($_POST['ip']))
echo "您没有填写IP地址";
echo "<br>";
if (empty($_POST['user']))
echo "您没有填写用户名";
echo "<br>";
if (empty($_POST['pass']))
echo "您没有填写密码";
echo "<br>";
if (empty($_POST['db']))
echo "您没有填写数据库";
echo "<br>";
if (empty($_POST['qz']))
echo "您没有填写前缀";
echo "<br>";
 
 $ip=$_POST['ip'];
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 $db=$_POST['db'];
 $qz=$_POST['qz'];
 
$conn=mysql_connect($ip,$user,$pass);
 if (!$conn){
 	die ("数据库连接出错！");
 }
mysql_connect($ip,$user,$pass);

mysql_select_db($db);

$rs=mysql_query('show tables');

while($arr=mysql_fetch_array($rs)){

    $TF=strpos($arr[0],$qz);

     if($TF===0){

        $FT=mysql_query("drop table $arr[0]");

         if($FT){

             echo "$arr[0] 删除成功！<br>";
			    }

              }

            }

}

?>

