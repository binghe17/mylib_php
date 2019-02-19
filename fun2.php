<?php
/**
 * callback 函数(callback fun,val1,...vals)
 */


//函数选择器
function foo($fun)
{
	$args=func_get_args();
	array_shift($args);
	$fun($args);
}

//函数 - 1
function f1()
{
	$str='F1的参数为:';
	$args=func_get_args();
	$args=$args[0];
	$args=count($args).'个参数'.json_encode($args);
	echo $str.$args;
	
	/*foreach($args as $k=>$v)
	{
		$str+='';
	}*/
}

//函数 -2
function f2()
{
	$str='F1的参数为:';
	$args=func_get_args();
	$args=$args[0];
	$args=count($args).'个参数'.json_encode($args);
	echo $str.$args;
}


//测试----------------------------
foo(f1,1,2,3);
echo '<br />';
foo(f2,'a','b','c');






//----------------------------------------------------
//函数内使用全局变量的例子
function gtest(){
	$b=$GLOBALS['g1']['a']['b'];//不修改源数据，所以在内存中临时分配存储空间，让他处理
	//$b=&$GLOBALS['g1']['a']['b']['c'];//修改源数据时在GLOBALS变量前加 &地址引用，函数内的变量指向全局变量
	$b['c']='bbbb';
	return $b['c'];
}
	$g1['a']['b']['c']='aaaa';
	echo $g1['a']['b']['c'];
	echo gtest();
	echo $g1['a']['b']['c'];
//----------------------------------------------------


//------------------------------------------
//自定义函数时，参数多了不会报错。（系统函数，多写参数会报错）
	function ft_basename($str){
		return basename($str);
	}
	//..... 制作更多自定义函数

//把过滤的方法做成自定义函数。不要直接使用系统函数（系统函数会报错）
//用自定义方法来，对数组的值进行，过滤或替换
function fun($arr,$fun,$opt1=null,$opt2=null,$opt3=null){
	foreach ($arr as $k => $v) {
		$arr[$k]=$fun($v,$opt1,$opt2,$opt3);
	}
	return $arr;
}
//-------------------------------------------
