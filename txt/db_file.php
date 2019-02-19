<form method="post">
<input type="text" name="user" />
<input type="text" name="pass" />
<input type="submit" name="Submit" value="提交" />
</form>

<style>

</style>


<?php
class tag {
	function a($arr,$name=null,$type=0){
		$href='?'.core::url($arr);
		$rs='<a href="'.$href.'" >';
		if($name) $rs.=$name;
		$rs.='</a>';
		return $rs;
	}
}
class core {
	function url($arr){
		foreach ($arr as $k => $v) {
			if($rs) $rs.='&';
			$rs.=$k.'='.$v;
		}
		return $rs;
	}
	function location($url){
		if($url) echo '<script>location.href="'.$url.'";</script>';
		else echo '<script>location.href="'.basename(__FILE__).'";</script>';
	}
}
//echo core::url(array('a'=>'aaaa','b'=>'bbb'));
//tag::a(array('act'=>'del','time'=>$line[2]), '[del]');




/*读取*/
$lines=file("db.txt");
foreach ($lines as $value) {
	$line=explode("[#]",$value);
	echo '('.date('m/d H:i:s',$line[2]).') '.$line[0].': '.$line[1].' ';
	echo tag::a(array('act'=>'del','time'=>$line[2]), '[del]');
	echo tag::a(array('act'=>'mod','time'=>$line[2]), '[edit]').'<br>';
}

/*写入*/
if ($_POST[Submit]) {
	$fp=fopen("db.txt","a");
	fwrite($fp,$_POST[user]."[#]".$_POST[pass]."[#]".time()."\r\n"); //写入数据，中间用|隔开
	fclose($fp);
	core::location();
}

/*删除*/
if ($_GET[act]=="del") {
	$time=trim($_GET[time]);
	foreach ($lines as $key=>$value) {
		$line=explode("[#]",$value);
		if (trim($line[2])==$time) { //遍历数组，定位符合条件的key，并删除改行
			unset($lines[$key]);
			break;
		}
	}
	unlink("db.txt");
	$fp=fopen("db.txt","w");
	foreach ($lines as $value) {
		fwrite($fp,$value); //写入删除后的新数组
	}
	fclose($fp);
	core::location();
}

/*修改*/
if ($_GET[act]=="mod") {
	$m1="1111111";
	$m2="2222222";
	$m3=time();//修改时间
	$time=trim($_GET[time]);
	foreach ($lines as $key=>$value) {
		$line=explode("[#]",$value);
		if (trim($line[2])==$time) { //遍历数组，定位符合条件的key，并修改改行
			$lines[$key]=$m1."[#]".$m2."[#]".$m3."\r\n";
			break;
		}
	}
	unlink("db.txt");
	$fp=fopen("db.txt","w");
	foreach ($lines as $value) {
		fwrite($fp,$value); //写入修改后的新数组
	}
	fclose($fp);
	core::location();
}
//print_r("<pre>");
//print_r($lines);
