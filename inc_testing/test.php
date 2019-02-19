<?php

header("Content-type:text/html;charset=utf-8");

class tool{
	//大小转换
	function int_size($size){
		$unit=array('B','KB','MB','GB','TB','PB');
		return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
	}
	//CPU运行时间 cpu_runtime
	function cpu_runtime($type=0){
		if($type==0) define('RUNTIME',microtime(1));
		if($type==1) {$tm=microtime(1)-RUNTIME; return 'CPU: '.$tm;}
	}
	//内存使用大小 memory_usage
	function memory_usage(){
		return 'MEM: '. $this->int_size(memory_get_usage());//631.21 KB（只开辟工具类的CPU占用大小）
		//使用前的占用也会变，因为预先读取，类或函数定义。
	}
}
$t=new tool();
$t->cpu_runtime();
// echo $t->memory_usage();//631.21 KB（默认使用情况，什么都没开辟时）
// if(isset($t)){ //-------End-----------
// 	echo $t->memory_usage(); // 631.8 KB（开辟之后的情况）
// 	echo '<br>';
// 	echo $t->cpu_runtime(1); //结束计时
// 	echo '<pre>';
// 	print_r($GLOBALS );	
// 	print_r($_SERVER );	
// }
//---------------------include与include_once的速度调试------------------





//错误调试工具
function debug_customError($errno, $errstr, $errfile, $errline){
	echo '<br><br>';
	echo '<fieldset style="width:800px;"><legend style="padding:2px 0 2px 5px;">错误调试工具</legend>';
	echo '<div style="padding:10px;">';

		$file = fopen($errfile,'r');
		//fseek($file,98);	//设置指针位置。第几个字符位置
		//ftell($file);		//当前指针位置。第几个字符位置
		//feof($file);		//判断指针位置。
		$num=6;						//设置，显示几行代码
		$num2=$num-2;				//设置，错误行代码在，输出行的第2行位置（从下面开始数）
		$line=$errline-1-$num2;		//预先跳过几行代码
		for($i=0; $i < $line; $i++) fgets($file);
		for ($i=0; $i < $num ; $i++) { 
			$errline2=$line+$i;
			echo '[第'.($errline2+1).'行]';
			if($i==$num2) echo '<span style="color:red;font-weight:bold;">';
			echo fgets($file);
			if($i==$num2) echo '</span>';
		}
		fclose($file);

	echo '</div><hr><div style="color:#999;">[错误类型]['.$errno.'] '. $errstr .'<br>';
	echo '[错误路径] ' .str_replace($_SERVER['DOCUMENT_ROOT'], '',  $errfile);
	echo '</div></fieldset><br>';
}

	set_error_handler("debug_customError"); //使用自定义错误样式
	//trigger_error('自定义报错'); //坡出错误。


	// function myException($exception){ //修改自定义异常样式
	// 	echo "<b>错误标题:</b> " ;
	// 	echo $exception->getMessage();
	// 	echo 'aaa';
	// }
	// set_exception_handler('myException'); //使用自定义异常
	// throw new Exception('错误内容'); //坡出异常。





	//自动引入一次并执行函数
	// function run_fun($fn){
	// 	//没有此函数定义时只引入文件一次。（不稳定有死机问题）
	// 	if(!function_exists($fn)) include('a.fun.php');		//0.231596231461//只引入文件一次，比include_once，快8-9倍【优化】
	// 	//if($fn=='b') include_once('a.fun.php');			//2.11500501633
	// 	$fn(); //执行函数
	// }


//引入10000次文件
// for ($i=0; $i < 10000 ; $i++) {
// 	//include_once('kong.txt');		//10000次 0.161253929138 （include_once）
// 	//include('kong.txt');			//10000次 0.426324129105 （include）
// 	//
// 	//include_once('a.fun.php');	//10000次 0.162393808365 （include_once）
// 	//include('a.fun.php');			//10000次 0.426324129105 （include）函数定义文件,不能引入多次（出错）
// 	if(!function_exists('a')) include('a.fun.php');	//10000次 0.00496196746826 （include_once代替品。优化版）
// 	//没有函数定义的话，引入此文件。然后执行。（include运行就会变慢，所以加个判断尽量过滤include的执行）
// }


// if(!function_exists('a')) include('a.fun.php');	//10000次 0.00496196746826 （include_once代替品。优化版）


// 		//运行100000次函数
// 		for ($i=0; $i < 100000 ; $i++) {
// 			a();							//运行100000次函数 0.106399059296
// 			//run_fun('b');					//运行100000次函数 0.13583612442
// 		}




// echo 'aaaaaaa';

// print_r($arr);
// echo '11111';


//-----------------------------------------------

//$b=parse_ini_file("var_ini.ini", true);
//echo json_encode($b);//{"a":"aaaaaaaaa","b":"bbbbbbb","c":["1111111","22222222","333333"]}
//echo serialize($b);echo '<br>';
//for ($i=0; $i < 10000 ; $i++) {
	//$str=file_get_contents('kong.txt');			//10000次时0.343954086304（file_get_contents的速度）
	//$arr=include('kong.txt');						//10000次时0.422472953796（include文件速度）

	//$arr=eval(str_replace('<?php','',file_get_contents('array.php')));			//10000次时0.656419038773（仿include）（安全）
	//$arr=include('array.php');													//10000次时0.71845秒（include）（安全）
	//$arr=parse_ini_file('ini.txt', 1);											//10000次时0.72233秒（ini 慢些）
	//$arr=json_decode(file_get_contents('json.txt'), 1);							//10000次时0.55496秒（json更快）(推荐)
	//$arr=json_decode(str_replace('<?php','',file_get_contents('json2.txt')), 1);	//10000次时0.55496秒（json更快）(加安全)
	//$arr=unserialize(file_get_contents('serialize.txt'));							//10000次时0.50686秒（serialize）
	//$arr=simplexml_load_file('xml.txt');											//10000次时1.01983秒（simplexml）输出为对象
//}



// function arr2str($arr){
// 	print_r($arr);
// 	$str=var_export($arr,1);
// 	$str=str_replace('array (','array(',$str);
// 	$str=str_replace('  ','	',$str);
// 	$str=str_replace("=> \n",'=> ',$str);
// 	$str=preg_replace('/=>(\s*)array/iu','=> array',$str);
// 	print_r($str);
// }
// $arr=array('aaa',2,'bb'=>'bbbb',3);
// arr2str($arr);//输出array( 0 => 'aaa', 1 => 2, 'bb' => 'bbbb', 2 => 3, )
//---------------------------------------------------


