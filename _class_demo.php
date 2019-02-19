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
echo $t->memory_usage();//631.21 KB（默认使用情况，什么都没开辟时）
echo '<br>';
echo '<pre>';
//---------------------------------------------









//类规范

//对象实例化时自动引入文件__autoload
class Path {
	public function inc(){
		function __autoload($classname){
			include $classname . '.php';
		}
	}
}
// $path= new Path();
// $path->inc();

//-----------------------------------------------

class a{
	static function get_class(){
		return get_class(); //返回当前对象名
	}

	public $a='aaaaaa';
	function myclass(){
	   return get_class_vars(__CLASS__);
	}
}
class b extends a{
	function get_parent_class(){
		return get_parent_class(); //返回父类名
	}
}

$a = new b();
echo $a->get_class();
print_r( get_class_methods('myclass') );				//返回类里的所有函数名
print_r( get_class_vars( get_class(new myclass()) ) );	//返回类里的所有变量名




//类别名 class_alias()
class_alias('Path', 'Path2');
$a = new Path;
$b = new Path2;
var_dump($a == $b, $a === $b);
var_dump($a instanceof $b);
var_dump($a instanceof Path);
var_dump($a instanceof Path2);
var_dump($b instanceof Path);
var_dump($b instanceof Path2);
var_dump(is_A('Path','Path2'));//同上 instanceof用法一样，判断用


//如果对象属于该类或该类是此对象的父类则返回 TRUE
if(is_A('A','B'))$a=new A;
if(is_A('A','C'))$a=new A;
//如果此对象是该类的子类，则返回 TRUE
if (is_subclass_of('b', 'a')) echo 'b是a的子类';
else echo 'b不是a的子类';


$directory = new Directory('.');
if(method_exists($directory,'read'));	//判断类的方法是否存在
if(class_exists('path')) ; 				//判断类是否存在
//print_r(get_declared_classes()); 		//查看所有可用的类（系统类与自定义类）
//print_r(get_declared_interfaces());	//返回一个数组包含所有已声明的接口



//返回由对象属性组成的关联数组
class Point2D {
	var $x, $y;
	var $label;

	function Point2D($x, $y){
		$this->x = $x;
		$this->y = $y;
	}
	function setLabel($label){
		$this->label = $label;
	}
	function getPoint(){
		return array(
			"x" => $this->x,
			"y" => $this->y,
			"label" => $this->label
		);
	}
}

$p1 = new Point2D(1.233, 3.445);
$p1->setLabel("point #1");
print_r(get_object_vars($p1));



class foo {
	private $a;
	public $b = 1;
	public $c;
	private $d;
	static $e;
   
	public function test() {
		var_dump(get_object_vars($this));
	}
}
$foo = new foo;
$foo->test();//var_dump(get_object_vars($foo));



interface_exists('MyInterface');	//检查接口是否已被定义
property_exists('myclass', 'a');	//判断类中的变量a是否存在。存在时为真


//------------------------------------------






//函数定义引入用include，使用用file_get_contents，并截取部分数据
//所有定义不能用变量来命名。类名或函数名不能重复定义。
//定义的重名问题。只能用按条件引入结构体。
//所有函数都放到一个文件夹。以下划线来分类，如package_class_funname

//只引入一次函数定义。
function inc_funfile($file){
	$fn=explode('.', basename($file));
	file_exists(!$fn[0]) include($file);//没有引入过，才引入定义
}


//使用的时候，引入过一次的就不会再引入定义。
//如果使用的时候是这样使用一个函数的话。

//定位（指定函数和配置变量）后，自动引入这两个文件（定义文件和使用文件），并执行。
//usefun('com_class_fun1','site_fen_div_canshu');



class a{
	static $a='1111';
	public $b='222222';
	function b($c){
		return $c;
	}
	function staticval($n,$v){
		self::$$n=$v;
	}
}

$a='a';
$b='b';
$c='ccc';
// echo a::$a='bbb';
// echo a::$a;
// echo $a::$b($c);
$o=new $a();
//echo $o->$b='3333';//变量可以直接写入。不用函数来写入。
echo $o->$a;
echo $o->$b($c);


class objb{
	function fun($val){
		$this->tmp=$val;
		return $this;
	}
}
$obj['a']=new objb();
$obj['a']->fun('ccccc');

echo '<pre>';
print_r($obj);





//函数体转变量
class fun{
	function __construct($canshu){
		return $this->{get_class()}=$canshu;
	}
}
$obj['a']=new fun('aaaaaaaaa');
$obj['b']=new fun('bbbbbb');



class use1{
	function __construct($val,$class,$opt){
		$GLOBALS['obj'][$val] = new $class($opt);
	}
}
new use1('c','fun','aaaaaaaaa');
//$a->use();

echo '<pre>';
print_r($obj);






//-----------------------------------------

//类里用include,eval方式引入定义文件，都会在全局GLOBALS上作用。不能在类体里作用（引入）。

class image{
	function fun1(){
		echo '11111';
	}
	function fun2(){
		echo '2222222';
	}	
}


class rooms{
	//制作空的空间 
	function set($name,$value){
		return $this->$name=$value;
	}
	function get($name){
		return $this->$name;
	}
	function creat($room,$cls='rooms'){
		return  $this->$room=new $cls();
	}

}
$room= new rooms();
$room->creat('game')->creat('next','image');

$man=$room->game;
$man2= clone $man;
$man->set('a','aaaaa');
echo $man->get('a');
echo $man2->get('a');





//---------------------------------------------
echo '<pre>';
print_r($GLOBALS);
echo '</pre>';
echo serialize($room);



echo '<br>';
echo '<br>';
echo $t->memory_usage(); // 631.8 KB（开辟之后的情况）
echo '<br>';
echo $t->cpu_runtime(1);
echo '<br>';


//==================================================



//----------修改后给自身

function fun2($str){
	return $GLOBALS[$str]='['.$GLOBALS[$str].']';
}
echo '<pre>';
$str='aaaaaaa';  //echo eval('return $GLOBALS["str"];');
fun2('str');fun2('str');
echo $str;  //[[aaaaaaa]]



class str{
	function fun($v){
		return '['.$v.']';
	}
}
$b='bbbbb';
$str=new str();
echo $str->fun($b);
echo $str->fun($b);



//---------变量空间
function p1($obj,$v=null){
	echo '<pre>';
	print_r( $GLOBALS{$obj}->getvar($v) );
	echo '</pre>';
}


function newobj($obj,$var=null){
	if($var==null) $GLOBALS[$obj] = new $obj();
	else $GLOBALS[$var] = new $obj();
}
function useobj($obj,$fun,$opt){
	$arr=json_decode($opt,1);
	return $GLOBALS[$obj]->$fun($arr);
}
class val{
	var $value=array();
	function setvar($arr){
		//$this->value = array_merge_recursive($this->value,$arr);//合并数组。
		$this->value = array_merge($this->value,$arr);//合并数组。
	}
	function getvar($k=null){
		if($k==null) return $this->value;
		return $this->value[$k];
	}
}
newobj('val');									//$val=new val();
useobj('val','setvar','{"a":{"a":"bbbb"}}');	//$val->setvar('a','aaaaaa');
useobj('val','setvar','{"b":"bbbbbb"}');		//$val->setvar('b','bbbbbb');
echo  useobj('val','getvar','a');
p1('val');	

newobj('val','cfg');					//cfg 配置变量空间
useobj('cfg','setvar','{"a":{"a":"aaaa"}}');	//给cfg空间赋一个a变量
useobj('cfg','setvar','{"a":{"b":"bbbbb"}}');	//给cfg空间赋一个a变量
useobj('cfg','setvar','{"a":{"a":"aaaa"}}');	//给cfg空间赋一个a变量
useobj('cfg','setvar','{"a":"aaa"}');	//给cfg空间赋一个a变量
p1('cfg');								//从cfg空间中取出所有变量


//-----------变量空间


function setvar($room,$name,$value,$type=0){
	if($type==0) $GLOBALS[$room][$name] = $value;
	if($type==1) $GLOBALS[$room][$name] = json_decode($value,1);
}
function getvar($room,$name=null){
	if($name==null) return $GLOBALS[$room];
	else return $GLOBALS[$room][$name];
}
setvar('val1','aa','{"a":"aaaaaaa"}',1);
setvar('val1','bb','{"b":"bbbbbbb"}',1);
print_r(getvar('val1','aa'));


//-------------------------------------var_class.php

//变量空间
class val2{
	function set($k,$v){
		return $this->$k=$v;
	}
	function get($k){
		return $this->$k;
	}
}
$val=new val2();
$val->set('a','aaaa');
//echo $val->get('a');
print_r($val);


//定位，执行，保存
class fn{
	function who($obj,$k){
		$this->obj=$obj;
		$this->k=$k;
		$this->v=$GLOBALS[$this->obj]->get($k);
		return $this;
	}
	function fun(){
		$this->v='['.$this->v.']';
		return $this;
	}
	function save($obj=null,$k=null){
		if($obj and $k) {
			if(!$GLOBALS[$obj]) $GLOBALS[$obj]=new val2();	//初始化对象（判断之前有没有创建过）
			$GLOBALS[$obj]->set($k,$this->v);				//新的对象中保存变量
		}
		else $GLOBALS[$this->obj]->set($this->k,$this->v);	//原始对象中保存
		return $this;
	}

}
$fn= new fn();
$fn->who('val','a')->fun()->fun()->save('cfg','b')->fun();
print_r($fn);
print_r($cfg);


