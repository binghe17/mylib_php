<?php 
//【高级技巧】自定义变量名
//${"result".$i}代表的是一个变量,变量名是根据$i变化的.

	/*
	
	设定：
		self::静态属性或方法		//同一个类进行调用（以后类名可改一处即可）
		parent::静态属性或方法		//子类中想调用父类的静态属性和方法
	
	使用：
		类名::静态属性或方法

	注意：
		php中静态方法不能调用非静态的属性和非静态方法，
		也不能使用 类名:: 或者 self:: 调用非静态属性。
		更不能使用 $this->属性名来调用，
		总之在静态方法中只能调用静态属性或方法，非静态的无法调用。
	 */


function test() {
	$n = 1;
	echo "The number is:$n<br />";
	$n++;
}
test();
test();
test();
/*输出
The number is:1
The number is:1
The number is:1
 */



function test2() {    
	static $n = 1;    //静态
	echo "The number is:$n<br />";
	$n++;
}    
test2();
test2();
test2();
/*输出
The number is:1
The number is:2
The number is:3
 */


class test
{
  const constvar='this is constvar';		//const函数内常量
  static $staticvar='this is staticvar';
  static function getStaticvar(){
     return self::$staticvar;
  }
}
$obj=new test();
echo test::constvar .'<br>';		//使用静态常量
echo test::$staticvar .'<br>';		//使用静态变量
echo test::getStaticvar() .'<br>';	//使用静态方法
$str='test';
//echo $str::$staticvar; 	//出错，类名在这不能用变量动态化
//echo $str::constvar; 		//出错原因同上

//在类名称存在一个变量中处于不确定（动态）状态时，只能以以下方式访问类变量
$obj2=new $str();
echo $obj2->getStaticvar();
//如同静态类方法和类实例方法一样，静态类属性和实例属性不能重定义(同名)，但静态属性可以和类常量同名
echo '<br>';



//--------基础-------------------------------

function fun1(){
	echo 'fun1aaaaaaaaaaaa';
}
fun1();	//执行fun1函数，输出结果 fun1aaaaaaaaaaaa
echo '<br>';


//指定默认值
function funArea($radius=10){
	return $radius * $radius * pi();
}
echo funArea();		//不写以默认值为准
echo '<br>';
echo funArea(8);	//以写入的值为准
echo '<br>';





//----------函数内外---------------------------

//引用传参符号 &
$prices=50;
$tax=0.5;
function funPrices(&$prices,$tax){
	$prices=$prices+($prices*$tax);
	$tax=$tax*2;
}
funPrices($prices,$tax);
echo $prices;	//输出 75
echo '<br>';
echo $tax;		//输出 0.5
echo '<br>';

//全局变量（函数内）
$a=5;
function fun2(){
	global $a;		//全局变量
	$a=20;
}
fun2();
echo $a;			//输出 20
echo '<br>';


//全局变量（函数外）
$GLOBALS['a']=5;	//超级全局变量
function fun3(){
	$GLOBALS['a']=20;
}
fun3();
echo $GLOBALS['a'];	//输出 20
echo '<br>';






//-------技巧性使用-----------------------------

function funInfo($name,$age,$job){
	$userInfo=array($name,$age,$job);	//可以用追加的方式比较常用
	return $userInfo;
}
list($name,$age,$job)=funInfo('张三',20,'学生');
echo $name.'今年'.$age.'岁了，目前还是个'.$job;
echo '<br>';







