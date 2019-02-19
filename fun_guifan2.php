<?php
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

