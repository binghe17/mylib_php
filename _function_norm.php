<?php

//原始函数定义方式
//缺点：函数属性N个（调换位置，增加减少都会在调用的地方出错。）

//--------例子1
$v1=1;
$v2=2;
$v3=3;

function fun1($a,$b=1,$c){
	return $a+$b+$c;
}

echo fun1($v1,$v2,$v3);	//page1
echo fun1($v1,'',$v2);	//page2
echo fun1($v3,$v1,$v2);	//page3
echo '<br>';

//---------例子2

$v4=array(1,2,3);

function fun2($v){
	return $v[0]+$v[1]+$v[2];
}
echo fun2($v4);
echo '<br>';

//================================

//function的规范定义
//1.关联数组的形式，赋一个属性值。函数它所需逻辑。
//2.函数体内都以return方式返回值。


/** 函数名（用途）
 * 参数1,2,3的说明
 */
function fun3($v){
	//$v=isset($v[0])?$v[0]:1;	//给参数 默认值 1
	if($v[0]){	//有此参数，干什么事
		$rs+=$v[0];
	}
	if($v[1]){	//有此参数，干什么事
		$rs+=$v[1];
	}
	if($v[2]){	//有此参数，干什么事
		$rs+=$v[2];
	}
	return $rs;	//返回值。
}
$v5=array(1,2,3); 	//配置参数方案
echo fun3($v5); 	//使用函数与，配置值



//=========================================






//---------函数方式的继承 （先运行的是子，最后运行的是父）
function funs(){
	if(!function_exists('a')){
		function a($v){
			return '11111'.$v;
		}		
	}
	if(!function_exists('b')){
		function b($v){
			return '11111'.$v;
		}
	}
}
function funs2(){
	if(!function_exists('b')){
		function b($v){
			return '222222'.$v;
		}
	}
}
function funs3(){
	if(!function_exists('b')){
		function b($v){
			return '333333'.$v;
		}
	}
}
//-------最先执行的是子
// funs3();	//孙
// funs2();	//子
// funs();	//父

//-------最后执行的时父
function ex($fun,$type=1){
	$GLOBALS['runfun'][$type][]=$fun;
}
ex('funs');		//父
ex('funs2');	//子
ex('funs3');	//孙
// ex('funs2',2);	//子
// ex('funs3',2);	//孙
// ex('funs',2);	//父

function run($type=1){
	$arr=array_reverse($GLOBALS['runfun'][$type]);
	foreach ($arr as $k => $v) {
		$v();
	}
}
run();	//使用函数前，一定要先引入定义，在运行。
// run(2);	//使用函数前，一定要先引入定义，在运行。
//----------------------------

echo b('bbbbbbb');








