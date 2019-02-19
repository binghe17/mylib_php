<?php



function fun1(){
	echo 'fun1';
	function fun2(){
		echo 'fun2';
		function fun3(){
			echo 'fun3';
		}
	}
}
fun3();//没定义的情况下运行会出错。不往下执行程序了。
fun1();
fun2();//在函数fun1的运行基础上可以运行fun2，表示fun1使用的时候定义了里面的函数。


//------------------------------------------
//自定义函数时，参数多了不会报错。（系统函数，多写参数会报错）
	function ft_basename($str){		//ft_过滤型，fn_自定义函数
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



$from['a']='indata';

//系统配置->默认配置->用户配置（为主）。
$cfg['run1']=1;
$cfg['run2']=1;



//制作线
function fun(&$from,$cfg,&$to=1){
	$run=$from;	//输入头

	//按函数配置依次执行
	if($cfg['run1']==1){
		$run=$run.'aaaa';
	}
	if($cfg['run2']==1){
		$run=$run.'bbb';
	}

	$rs=$run;	//输出头
	return ($to==1) ? $from=$rs : $to=$rs ;
}
fun($from['a'],$cfg);



/*
//对字符串过滤的类。
class data{
	//把什么数据
	public $rs;
	function im(&$val){
		$this->rs=$val;
		return $this;
	}

	//按什么规则处理或操作
	function run(){
		$this->rs='['.$this->rs.']';
		return $this;
	}

	//保存到哪里
	function save(&$val=1){	//过滤器
		if($val==1){ return $this; }
		$val=$this->rs;
		return $this;
	}
}
$_run['a']=new data();
$_run['a']->im($from['a'])->run()->run()->save($from['a']);	//代码书写层面上好多了。

//使用后感：动态类在流程控制上还是不太自由。只在操作资源的时候使用动态类吧。（如 数据库连接，文件操作等。）
//我做的是无代码时代，用前台操作和生成，不接触源代码部分。所以上面动态类的形式只是把简单的问题复杂化罢了。
//还是用function的方式制作流程控制，理解层面更好些，然后也不会在内存中生成不必要的new对象的空间。
//尽量少用类。不用类能完成的事，就不要特意用类。只在安全操作资源上下功夫吧。
*/

echo '<pre>';
print_r($GLOBALS);
echo '</pre>';






//-----------------------------

//把函数定义放到全局变量中来运行。
$fun['a']=create_function('$a', 'return $a;');
//function fun($a){ return $a; }
for ($i=0; $i < 100000 ; $i++) { 
	$fun['a']('bbbbbb');		//MEM: 620.03 KB  CPU: 0.049567937851
	//fun('bbbbbb');				//MEM: 618.5 KB  CPU: 0.0311808586121
}
//print_r($fun);	//页面刷新会自动递增函数名。lambda_41  （内存占用也不变）
//print_r( get_defined_functions() );


//-----------------------
echo '<pre>';
print_r(get_defined_functions());//查看所有定义过的函数名（包含系统函数定义名和自定义的函数名）
print_r(get_declared_classes());//查看所有定义过的类名（包含系统类名和自定义类名）
//print_r($GLOBALS);


//--------------------------------


//真时运行真函数，假时运行假函数
function if_run($t=false,$f=false){
	if($t) return t($t);//第一个条件满足才放入参数
	if($f) return f($f);//第二个条件妈祖才放入参数
	return false;
}
//第一个方法没有满足时执行第二个函数来补救
function if_run2($t=false,$f=false){
	if($t) return $t();
	if($f) return $f();
	return false;
}

	function t($t){
		return "t($t)";
	}
	function f($f){
		return "f($f)";
	}

	echo if_run('gjhghjgjhg','hjghjghg');


//-----------------------------





//函数别名，用变量名来运行函数
// function fun2var($funName) {
// 	$arr=get_defined_functions();//可以放入n个函数参数,格式没定
// 	foreach($arr['user'] as $k=>$v){
// 		if($v==$funName) return $arr['user'][$k];
// 	}
// }
// function db($json){return json_encode($json);}
// $fun_a=fun2var('db'); echo $fun_a(array(1,2,3));//方式1
// $bb=db; echo $bb('aaaaaa');//方式2


