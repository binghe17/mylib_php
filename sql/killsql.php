<title>����ɾ��MySql���ݿ�����ͬǰ׺�ı�</title>
<form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>?action=kill">
<table width="425" border="0" align="center">
  <tr>
    <td height="46" colspan="2" align="center"><p>����ɾ��MySQL���ݿ���ͬǰ׺�����ݱ�&nbsp;by <a href="http://www.sudu8.cn" target="_blank">sudu8</a></p></td>
    </tr>
  <tr>
    <td width="103">ip��ַ</td>
    <td width="306" height="26"><label>
      <input name="ip" type="text" id="ip" value="localhost" />
    </label></td>
  </tr>
  <tr>
    <td height="25">���ݿ��˺�</td>
    <td height="26"><label>
      <input type="text" name="user" id="user" />
    </label></td>
  </tr>
  <tr>
    <td>���ݿ�����</td>
    <td height="26"><label>
      <input type="text" name="pass" id="pass" />
    </label></td>
  </tr>
  <tr>
    <td>���ݿ�</td>
    <td height="26"><label>
      <input type="text" name="db" id="db" />
    </label></td>
  </tr>
  <tr>
    <td>Ҫɾ����ǰ׺</td>
    <td height="26">    <label>
      <input type="text" name="qz" id="qz" />
    </label>��&nbsp;���磺bbs_&nbsp;&nbsp;��</td>
  </tr>
    <tr>
    <td height="67" colspan="2" align="center">    <label>
      <input type="submit" name="tijiao" id="tijiao" value="��ʼɾ��" />
  </label></td>
    </tr>
</table>
</form>
<?php

if(@$_GET["action"]=="kill"){

if (empty($_POST['ip']))
echo "��û����дIP��ַ";
echo "<br>";
if (empty($_POST['user']))
echo "��û����д�û���";
echo "<br>";
if (empty($_POST['pass']))
echo "��û����д����";
echo "<br>";
if (empty($_POST['db']))
echo "��û����д���ݿ�";
echo "<br>";
if (empty($_POST['qz']))
echo "��û����дǰ׺";
echo "<br>";
 
 $ip=$_POST['ip'];
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 $db=$_POST['db'];
 $qz=$_POST['qz'];
 
$conn=mysql_connect($ip,$user,$pass);
 if (!$conn){
 	die ("���ݿ����ӳ���");
 }
mysql_connect($ip,$user,$pass);

mysql_select_db($db);

$rs=mysql_query('show tables');

while($arr=mysql_fetch_array($rs)){

    $TF=strpos($arr[0],$qz);

     if($TF===0){

        $FT=mysql_query("drop table $arr[0]");

         if($FT){

             echo "$arr[0] ɾ���ɹ���<br>";
			    }

              }

            }

}

?>

