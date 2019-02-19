<?php 

//------------------------------fun_chengji.php

function fun1($type=1){
	function fun2(){
		echo 'eeeee';
		//fun1();//出错
		//fun2();//自己调用自己，陷入无限循环。
		fun3(4);
		fun4();//fun3运行后可以执行fun4
	}//位置放到地下也不能运行。程序执行顺序是从上之下。（先定义后使用）

	if($type==1){	//[私用]
		//多态
		function fun1_1(){
			echo '1111111';
		}
		fun1_1();
		//fun2_1();//出错，他人方法

		fun2();//没有加锁的同辈方法

	}
	if($type==2){
		//多态
		function fun1_1(){
			echo '2222222';

			function fun5(){
				echo '5555555';

				function fun6(){
					echo '6666666';

					function fun7(){
						echo '777777777';
					}
					fun7();
					function fun8(){
						echo '88888888';
					}
					fun8();
				}
				fun6();
				//fun1_1();//不能往上跨级调用。
				//fun5();//自己调用自己是可以的，但小心无限循环
			}
			fun5();
			//fun6();//fun5调用过一次。所有fun5子方法fun6也可以使用,但还有孙子方法那就报错。
			fun7();//孙子有的时候可以用
		}
		fun1_1();

		function fun2_1(){
			echo '2222222---11';
		}
	}
}

fun1(2);


function fun3(){	//[公用]
	echo '333333';
		function fun4(){
			echo '44444';
		}
}

/*总结：
	1.私用方法，此层的方法，此层间使用。尽量不要跳层使用。（先定义，后使用原则）。（if下可同名）
	2.公用方法，在最外层设，没有层级关系的方法。大家一起使用。
*/




//---------------------------fun1.php


//----------1. 函数的任意数目的参数--------------
//你可能知道PHP允许你定义一个默认参数的函数。
//但你可能并不知道PHP还允许你定义一个完全任意的参数的函数

function foo($arg1 = '', $arg2 = '') {
	echo "arg1: $arg1\n";
	echo "arg2: $arg2\n";
}
foo('hello', 'world');
/* 输出:
arg1: hello
arg2: world
*/
foo();
/* 输出:
arg1:
arg2:
*/



//不定参数的函数，其使用到了?func_get_args()方法：
function foo() {
	// 取得所有的传入参数的数组
	$args = func_get_args();
	print_r($args);
}
foo(); /* 什么也不会输出 */
foo('hello');
/* 输出
arg1: hello
*/
foo('hello', 'world', 'again');
/* 输出
arg1: hello
arg2: world
arg3: again
*/


//func_nums_args——统计传入函数参数的个数
//func_get_arg——根据索引取得某一个参数，这里的索引数传入函数的参数

function foo() {
	$numargs = func_num_args(); //得到参数的个数
	echo "Number of arguments: $numargs<br />\n";
	if ($numargs >= 2) {
		echo "Second argument is: ".func_get_arg(1)."<br />\n";
	}
	$arg_list = func_get_args();
	for ($i = 0; $i < $numargs; $i++) {
		echo "Argument $i is: ".$arg_list[$i]."<br />\n";
	}
}
foo(1, "two", 3,'aaa','bbb');
/* 输出:
		Number of arguments: 5
		Second argument is: two
		Argument 0 is: 1
		Argument 1 is: two
		Argument 2 is: 3
		Argument 3 is: aaa
		Argument 4 is: bbb
		*/





//-------2. 使用 Glob() 查找文件---------------
//很多PHP的函数都有一个比较长的自解释的函数名，
//你可以认为这个函数就好?scandir() 一样，其可以用来查找文件。
// 取得所有的后缀为PHP的文件
$files = glob('*.php');
print_r($files);
/* 输出:
		Array(
		[0] => phptest.php
		[1] => pi.php
		[2] => post_output.php
		[3] => test.php
		)
		*/

//你还可以查找多种后缀名
// 取PHP文件和TXT文件
$files = glob('*.{php,txt}', GLOB_BRACE);
print_r($files);
/* 输出:
		Array(
		[0] => phptest.php
		[1] => pi.php
		[2] => post_output.php
		[3] => test.php
		[4] => log.txt
		[5] => test.txt
		)
		*/
//你还可以加上路径：
$files = glob('../images/a*.jpg');
print_r($files);
/* 输出:
		Array(
		[0] => ../images/apple.jpg
		[1] => ../images/art.jpg
		)
		*/

//如果你想得到绝对路径，你可以调用?realpath() 函数：
$files = glob('../images/a*.jpg');
// applies the function to each array element
$files = array_map('realpath', $files);
print_r($files);
/* output looks like:
		Array(
		[0] => C:\wamp\www\images\apple.jpg
		[1] => C:\wamp\www\images\art.jpg
		)
		*/


//-----------------fun2.php


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



//-------------------------------------------fun3.php


/*
function array_prefix_values($prefix, $array)
{
  $callback = create_function('$str','return "'.$prefix.'".$str;');
  return array_map($callback,$array);
}



//usage:
$dir = "./css/";
$files = scandir($dir);
$files = array_prefix_values($dir,$files);
print_r($files);

/*
//output:
	(
		[0] => ./css/.
		[1] => ./css/..
		[2] => ./css/default.css
		[4] => ./css/helper.css
		[6] => ./css/page_layout.css
	)
 */





/*
error_reporting(E_ALL);
function increment(&$var)
{
    $var++;
}

$a = 0;
call_user_func('increment', $a);
echo $a."\n";

call_user_func_array('increment', array(&$a)); // You can use this instead before PHP 5.3
echo $a."\n";

 */



	$method_name = "AMethodName";
	$obj = new ClassName();
	$obj->{$method_name}();




function __autoload($class_name) {
    include $class_name . '.php';
}

$obj  = new MyClass1();
$obj2 = new MyClass2(); 


//----------------------------------fun4.php


//在前一篇文章 深入 Drupal 引导流程 (3) - session_set_save_handler 中，提及到一种 callback 类型，在 PHP 原生类型里面并没有一种类型叫做 callback，按照官方文档的说法，callback 仅仅是在文档里面提及到的虚构类型 (伪类型)。callback 就是回调的意思，顾名思义它常被以参数的方式传递给其他函数，让别人来调用自己。PHP 的 callback 可以包括全局函数和类方法。
//callback 的有效表示方法有以下几种

//全局函数
function bar($string)
{
  echo $string;
}
call_user_func('bar', 'Hello world.');
// 输出 Hello world.

//对象方法
class foo
{
  function bar($string)
  {
    echo $string;
  }
}
$obj = new foo;
call_user_func(array($obj, 'bar'), 'Hello world.');
// 输出 Hello world.
// PHP4 下 $obj 需要写成 &$obj，解析在文章最后


//静态类方法
class foo
{
  static function bar($string)
  {
    echo $string;
  }
}
call_user_func(array('foo', 'bar'), 'Hello world.');
// 输出 Hello world.
call_user_func('foo::bar', 'Hello world.');
// 同样也是输出 Hello world. 这种语法只适用于 PHP 5.2.3 以上


//类内部调用
class foo
{
  function bar($string)
  {
    echo $string;
  }
  function callback()
  {
    call_user_func(array('self', 'bar'), 'Hello world.');
    // 输出 Hello world.
  }
}
foo::callback();

//以上是静态调用，如果是对象的内部调用，只需要改成
call_user_func(array($this, 'bar'), 'Hello world.');

//注意 : 如果是 PHP 4，那么 $this 需要写成 &$this 来显式的传递引用，否则 PHP 会传递一个对象的拷贝过去的，而 PHP 5 后对象的传递默认就已经是引用了




