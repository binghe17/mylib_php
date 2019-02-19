<?php 
function fntime() {
	list($msec, $sec) = explode(' ', microtime());
		return $msec +$sec;
}
$start_time = fntime();



//define('fun3','aaaaa');

$fun1=function ($v){
	echo"函数输出11"; 
	return $v;
};
$fun2=function ($v){
	echo"函数输出22"; 
	return $v;
};
function fun3($v='aa'){ 
	return $v;
	__FUNCTION__;
};
$arr = array($fun1 , $fun2,fun3);
//echo fun3;
echo '<pre>';
print_r($arr);
echo '</pre>';

echo $arr[2]('bbbbbb');












echo '<br>';
for($i=0;$i<1000000;$i++) {
	//
}
$end_time = fntime();
echo round($end_time - $start_time,4);
echo '<br>';
?>