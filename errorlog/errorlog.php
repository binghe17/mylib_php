<?php
/* PHP错误处理方式
http://www.w3school.com.cn/php/php_ref_error.asp

值 		常量 					描述 PHP
1 		E_ERROR 				致命的运行时错误。错误无法恢复。脚本的执行被中断。
2 		E_WARNING 				非致命的运行时错误。脚本的执行不会中断。
4 		E_PARSE 				编译时语法解析错误。解析错误只应该由解析器生成。
8 		E_NOTICE 				运行时提示。可能是错误，也可能在正常运行脚本时发生。
16 		E_CORE_ERROR 			由 PHP 内部生成的错误。 4
32 		E_CORE_WARNING 			由 PHP 内部生成的警告。 4
64 		E_COMPILE_ERROR 		由 Zend 脚本引擎内部生成的错误。 4
128 	E_COMPILE_WARNING 		由 Zend 脚本引擎内部生成的警告。 4
256 	E_USER_ERROR 			由于调用 trigger_error() 函数生成的运行时错误。 4
512 	E_USER_WARNING 			由于调用 trigger_error() 函数生成的运行时警告。 4
1024 	E_USER_NOTICE 			由于调用 trigger_error() 函数生成的运行时提示。 4
2048 	E_STRICT 				运行时提示。对增强代码的互用性和兼容性有益。 5
4096 	E_RECOVERABLE_ERROR 	可捕获的致命错误。（参阅 set_error_handler()） 5
8191 	E_ALL 					所有的错误和警告，除了 E_STRICT。 5


	错误处理
		1.语法错误
		2.运行时的错误
		3.逻辑错误

	错误报告:
		错误:E_ERROR
		警告:E_WARNING
		注意:E_NOTICE

	建议:
		开发阶段:开发是输出所有的错误报告,有利于调试程序
		运行阶段:不要让程序输出任何一种错误报告

	将错误报告写入日志中
		一,指定错误报告 error_reportlog =E_ALL
		二,关闭错误输出 display_errors = Off
		三,开启错误日志功能 log_errors = On

		1.默认如果不指定错误日志位置,则默认写WEB服务器的日志中
		2.为error_log选项指定 一个文件名(可写)
		3.写入到操作系统日志中 error_log=syslog
*/
function err_log(){
														//1.指定错误报告,错误类型为全部
	//error_reporting(E_ALL);							//报告所有错误
	//error_reporting(0);								//禁用错误报告
	//error_reporting(E_ERROR | E_WARNING | E_PARSE);	//报告运行时错误


	//ini_set("error_reporting",E_ALL);					//临时改变配置文件的值
	echo ini_get("upload_max_filesize");				//获取配置文件的值

	 ini_set("display_errors","off");					//2.关闭配置文件中的显示错误
	 ini_set("log_errors","on");						//3.开启错误日志功能
	 ini_set("error_log","errorlog.txt");				//4.指定错误文件(可写)

	//error_log("this is a error message!!!!",3,'./error.log');		//向服务器错误记录、文件或远程目标发送一个错误
}
//err_log();
	// gettype($var);	//注意
	// gettype();		//警告
	// getTpe();		//错误,会终止程序运行
	// echo '#######################';


 //ini_set("error_log","errorlog.txt");			//4.指定错误文件(可写)

//-------------------------------

	function fun(){
		echo 'fun';
	}

//custom error handler function
function customError($errno, $errstr, $errfile, $errline)
{
	echo "<b>Custom error:</b> [$errno] $errstr<br />";
	echo " Error on line $errline in $errfile<br />";
	echo "Ending Script";
	//fun();//修复函数
	//die();//终止
}
$test=2;


//设置用户自定义的错误处理函数。
set_error_handler("customError");
//创建用户自定义的错误消息。
if($test>1) trigger_error("自定义的错误信息");//参数2 •E_USER_ERROR •E_USER_WARNING •E_USER_NOTICE（默认Notice错误）


//恢复之前的错误处理程序。
restore_error_handler();
//创建用户自定义的错误消息。重试
if($test>1) trigger_error("A custom error has been triggered");//坡出错误。


echo '####';



//-------------------------------

echo $test;
echo '<pre>';print_r(error_get_last());echo '</pre>';





//--------------------------------

function one($str1, $str2){
	two("Glenn", "Quagmire");
}
function two($str1, $str2){
	three("Cleveland", "Brown");
}
function three($str1, $str2){
	debug_print_backtrace();//输出 backtrace
	echo '<pre>';
	print_r(debug_backtrace());//生成 backtrace
	echo '</pre>';
}
one("Peter", "Griffin");



