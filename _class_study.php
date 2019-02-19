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

//-----------------------------------------------------------------------------------------------

/**
* 静态类的规范
*/

//final 在类名前修饰，表示该类或方法为最终版本，即该类不能被继承，或该方法在子类中不能被重载（覆盖）。 
Class Person{
	const constant = 777777; 					//定义常量(类常量前不能修饰static)

	public static $country = "aaaa"; 			// 定义静态成员属性
	public static function myCountry() {		// 定义静态成员方法
		echo '('.self::$country.')';			// 本类内部访问静态成员属性self::$var or fun()
	}
}
//extends 类的继承，（子类继承父类，只能单一继承）
class Student extends Person {
	static function study() {
		echo '['.parent::$country.']';			// 获取父级类的静态成员属性parent::$var or fun()
	}
}

echo Person::constant   .'<br />';			//静态常量
echo Person::$country   ."<br />";			// 特指类名的静态成员属性和方法Class::$var or fun()
$p1 = new Person();							//实例化
$p1->myCountry()        .'<br />';			//动态方法

echo Student::$country  ."<br />";
$t1 = new Student();
$t1->study()            ."<br />";


//--------------------------------------------------------------------------------------------------


/* 动态类 自动引入类文件
	function __autoload($class_name) {
		include $class_name . '.php';
	}
	$obj  = new MyClass1(); //new对象时自动执行上面函数，引入文件。
	$obj2 = new MyClass2(); //(同上)
*/

/**
* 动态类的规范
*/

class A
{
	public    $str1;	//公有的	属性（类外直接访问及读写，可继承）（所有成员属性和方法）
	protected $str2;	//受保护的	属性（类外不能访问和读写，但能继承）
	private   $str3;	//私有的	属性（类外不能访问和读写，也不能继承）

	//自定义公开函数块，连续处理型函数，都以return $this;结束
	function fun($k,$v){
		$this->$k.=$v;
		return $this;	//指向实例化对象本身,可连续调用函数
	}
	function fun1(){
		$this->str1.='eeeee';
		return $this;	//指向实例化对象本身,可连续调用函数
	}

	//----------以下是魔术方法---------------------------------

	//构造方法 初始化赋值（实例化时的参数）
	function __construct($str1, $str2, $str3) {
		$this->str1=$str1;
		$this->str2=$str2;
		$this->str3=$str3;
	}
	//析构方法 在内存中自动删除对象，所有程序结束的时候执行。
	function __destruct(){
		echo "再见".$this->str1;
	}
	//重载方法 遇到没有定义的方法时自动调用此函数
	function __call($function_name, $args){
		echo "你所调用的函数：$function_name 参数不存在！<br />";
		print_r($args);
	}
	//克隆后改变原对象的内容时添加这段
	function __clone() {
		$this->str1 = '我是假的'.$this->str1;
		$this->str2 = '我是假的'.$this->str2;
	}


	//设置私有属性值
	public function __set($k,$v){
		$this->$k=$v;
	}
	//获取私有属性值
	public function __get($k){
		return isset($this->$k) ? $this->$k : null;
	}
	//检测私有属性值 是否被设定
	public function __isset($k){
		return isset($this->$k);
	}
	//删除私有属性
	public function __unset($k){
		unset($this->$k);
	}

}

$a=new A('aaa','bbb','ccc');		//实例化对象__construct
$a->fun('str1','1111')->fun('str2','2222')->fun('str3','3333');	//自定义函数fun


$a->str3='ssssss';			//设置私有属性__set
echo $a->str3;				//获取私有属性__get
//echo isset($a->str3);		//检测私有属性（返回真假）__isset
//unset($a->str3);			//删除私有属性__unset

$a->fun2('asdf',222);		//没有定义的函数，执行__call
$a->fun1();		//析构函数执行后？调用？

$b = clone $a;				//克隆一个现有对象__clone


//-----------------------------------------------------------------------------------------------------

/**
 * 抽象类
 */

//abstract 只要一个类里面有一个方法是抽象方法，那么这个类就要定义为抽象类。
abstract class C {
	abstract protected function fun1();		// 定义抽象方法 abstract
	public function fun2(){					// 普通方法
		print $this->fun1()."<br />";
	}
}
class D extends C {
	protected function fun1(){				// 定义父类的抽象方法的实体函数
		return "抽象方法的实现";
	}
}

$d = new D;
$d->fun2();		//抽象方法的使用。


//-------------------------------------------------

/*
 * 接口 interface （又称，特殊抽象类）（看做是一个模型的规范）[做API接口]
 */

// [接口与抽象类区别]大致如下：
// 1.一个子类如果 implements 一个接口，就必须实现接口中的所有方法（不管是否需要）；
//   如果是继承一个抽象类，只需要实现需要的方法即可。
// 2.如果一个接口中定义的方法名改变了，那么所有实现此接口的子类需要同步更新方法名；
//   而抽象类中如果方法名改变了，其子类对应的方法名将不受影响，只是变成了一个新的方法而已。
// 3.抽象类只能单继承，当一个子类需要实现的功能需要继承自多个父类时，就必须使用接口。

		//---------------------
		//interface是规范，不按规范写代码，直接出错。（不灵活，不推荐）
		// interface a{}
		// class b implements a{
		// 	public $a='2222';
		// 	function fun(){
		// 		echo 'bbbbbb';
		// 	}
		// }
		// $b = new b();
		// $b->fun();
		//---------------------

//interface 定义接口
interface User{
	function getDiscount();
	function getUserType();
}

//implements 来实现接口中的方法，且必须完全实现。
//class 子类 extends 父类 implemtns 接口1, 接口2, ...
class VipUser implements User{
	private $discount = 0.8;	// VIP 用户折扣系数
	function getDiscount() {
		return $this->discount;
	}
	function getUserType() {
		return "VIP用户";
	}
}
class Goods{
	var $price = 100;
	var $vc;
	function run(User $vc){		//定义 User 接口类型参数，这时并不知道是什么用户
		$this->vc = $vc;
		$discount = $this->vc->getDiscount();
		$usertype = $this->vc->getUserType();
		echo $usertype."商品价格：".$this->price*$discount;
	}
}

$display = new Goods();
$display ->run(new VipUser);	//可以是更多其他用户类型		//输出： VIP用户商品价格：80 元 



//-------------------------------------------------------------------------------------------------

//echo $b=serialize($a); 		//对象序列化（对象的存储与传输）（如：保存成文件或SESSION当中，前提类先引入后使用）
//var_dump(unserialize($b)) ;	//对象反序列化




//-------其他--------
// PHP: class_exists()
// PHP: method_exists()
// http://php.net/manual/en/function.class-exists.php


//----------------------------------------------------------------------------------------------


//继承可以重写变量和方法，但用类重写是没有意义的，不如，在别的类中使用。
//把重复的代码分离出去，才是继承的核心。include一样。
//代码合并类，只能用单一继承方式，把两个类合并起来。
//空间作用域不同，所以函数名和变量名相同也没问题。

// class a{
// 	public $a='11111';
// 	function fun(){
// 		echo 'aaa';
// 	}
// 	function fun2(){
// 		echo 'aaaa222';
// 	}
// }

// class b{
// 	function fun(){
// 		echo 'bbbb';
// 	}
// 	function runobj($a){
// 		$this->$a = new $a();
// 		return $this->$a; 
// 	}
// }

// $b = new b();
// $b->runobj('a')->fun2(); //指定了某个对象后，操作这个对象。

// $b->fun();
// $b->fun2();



//-------------------------//函数执行完成后就结束了。不能一直指向变量。

//给这个变量。按什么函数执行，然后保存为什么
// function run($from,$fun,$to=null){
// 	$str=$GLOBALS['a'][$from];
// 	$rs=$fun($str);//从外部某个文件中获取$str的信息也可以。
// 	if($to==null) $GLOBALS['a'][$from]=$rs;
// 	else $GLOBALS['a'][$to]=$rs;
// }

// function fun($auto){
// 	return '['.$auto.']';
// }
// function fun2($auto){
// 	return '-'.$auto.'-';
// }

// $a['a_b_c']='aaaaa';
// run('a_b_c','fun','a_b_d');//把什么变量，按什么配置执行函数
// run('a_b_c','fun2');
// run('a_b_c','fun');
// echo $a['a_b_c'];
// echo $a['a_b_d'];



//-------------------------------------------------------------------------------------------------

echo '<pre>';
print_r($GLOBALS);
echo '</pre>';

echo '<br>';
echo '<br>';
echo $t->memory_usage(); // 631.8 KB（开辟之后的情况）
echo '<br>';
echo $t->cpu_runtime(1);
echo '<br>';


