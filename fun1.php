<?php 
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