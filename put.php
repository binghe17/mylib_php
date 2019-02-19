<?php

/* php接收post的json数据

	由于PHP默认只识别application/x-www.form-urlencoded标准的数据类型，
	因此，对型如text/xml的内容无法解析为$_POST数组，故保留原型，
	交给$GLOBALS['HTTP_RAW_POST_DATA'] 来接收。
	另外还有一项 php://input 也可以实现此这个功能
	php://input 允许读取 POST 的原始数据。和 $HTTP_RAW_POST_DATA 比起来，
	它给内存带来的压力较小，并且不需要任何特殊的 php.ini 设置。
	php://input 不能用于 enctype="multipart/form-data"。

	来源 http://blog.csdn.net/china_skag/article/details/7676788
*/


//echo file_get_contents("php://input");


/* post.html 测试页

	<form action="post.php" method="post">
	<input type="text" name="user">
	<input type="password" name="password">
	<input type="submit">
	</form>
*/



//---------------------------------------------------------------------

/*
	//通过php://input得到的数据是raw data，所以需要用parse_str解析一下

	不过需要说明的是，当表单是enctype="multipart/form-data"类型的时候
	（就是上传文件那种类型），这种方法是无效的（此时 php://input为空），
	一旦PHP发现请求的Content-Type是multipart/form-data，就会无条件的代
	你处理表单数据，然后保存到$_FILES里，此时无法得到raw data
*/

if ('PUT' == $_SERVER['REQUEST_METHOD']) {
	$_PUT = array();
	parse_str(file_get_contents('php://input'), $_PUT);
}

//etc1
parse_str("id=23&name=John%20Adams",$myArray);
echo '<pre>';
print_r($myArray);
echo '</pre>';

//etc2
$str = "first=value&second[]=this+wo%rks&second[]=another";//bug:  加号变成空格问题。
//if ($char == '%2B') return '+'; 	//解决url加号问题bug
parse_str($str);
echo $first;      // 显示出 "value" 字符串
echo $second[0];  // 显示 "this works" 字符串
echo $second[1];  // 显示 "another" 字符串

echo '<br>';



/*

parse_str就是将一个url ?后面的参数转换成一个数组
array parse_str(url,arr)

parse_url是将一个完整的url解析成数组
array parse_url(string url)

http_build_query就是将一个数组转换成url ?后面的参数字符串，会自动进行urlencode处理
string http_build_query ( array formdata [, string numeric_prefix])
 */
parse_str('aaa%5B%5D=1&aaa%5B%5D=2&aaa%5B%5D=3&aaa%5B%5D=4&bbb=&ccc=on&ccc=c1&ccc=c2&eee%5B%5D=on',$bb); print_r($bb); //urlvar2arr
print_r(parse_url('http://192.168.1.107/0906/DevSystem/preg/html/form1.php?aaa%5B%5D=1&aaa%5B%5D=2&aaa%5B%5D=3&aaa%5B%5D=4&bbb=&ccc=on&ccc=c1&ccc=c2&eee%5B%5D=on'));//url2arr
echo http_build_query($_GET, 'myvar_');//urlvar2str



/*
function encode_url($val){ //代替urlencode函数
	if(is_string($val)) $arr=explode('=',$val);
	elseif(is_array($val)) $arr=$val;
	else return false;
	$str=http_build_query( $arr, 'myvar_' ); // one=1&two=2
	$str = str_replace('+','%20',$str);
	return $str;
}
	$params = array( 'one' => 'asd?f as洪文df+asd f', 'two' => 2 );
	echo $params=encode_url($params);echo '<br>';


function decode_url($str){ //代替urldecode函数
	parse_str($str,$val);
	return $val;
}

	$a=decode_url($params);
	echo '<pre>';print_r($a);
	print_r($GLOBALS);
	echo '</pre>';
*/
