<?php

/* 超全局变量 */
//[_POST]		//接收	表单变量						等同于[HTTP_POST_VARS]
//[_GET]		//接收	地址变量						等同于[HTTP_GET_VARS]
//[_FILES]		//接收	资源文件						等同于[HTTP_POST_FILES]

//[_COOKIE]		//存储	在客户端做会话（页面间传值）	等同于[HTTP_COOKIE_VARS]
//[_SESSION]	//存储	在服务端做会话（页面间传值）	没开启时没有这个超全局变量

//[_REQUEST]	//接收	表单+地址数据（一般不用）		等同于get值 和 put值
//[_ENV]		//系统	配置信息（用不到）				等同于[HTTP_ENV_VARS]
//[_SERVER]		//系统	配置信息（用不到）				等同于[HTTP_SERVER_VARS]

//print_r($GLOBALS['GLOBALS']['_POST']);	//等同于 $_POST

print '<pre>';

//include 'common/inc.php';
echo $_SERVER['SCRIPT_FILENAME'];	//当前执行程序的绝对路径及文件名 	//输出 	E:/web/html/php/test.php
echo '<br>';
echo __FILE__; 						//被包含文件的绝对路径及文件名 		//输出 	E:\web\html\php\common\test.php



echo '<br>';
echo dirname(__FILE__).'/';
echo '<br>';
echo dirname(dirname(__FILE__)).'/';
echo '<br>';


echo $_SERVER['SCRIPT_NAME'];	//得到：/php/index.php
echo '<br>';
echo $_SERVER['PHP_SELF'];		//得到：/php/index.php/test/foo
echo '<br>';
echo $_SERVER['REQUEST_URI'];	//得到：/php/index.php/test/foo?username=hbolive
echo '<br>';
echo $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
echo '<br>';

$x=5;
echo $x = isset($x) ? $x : 1;



/*
ThinkPHP系统常量
THINK_PATH // ThinkPHP系统目录
APP_PATH // 当前项目目录
APP_NAME // 当前项目名称
MODULE_NAME //当前模块名称
ACTION_NAME // 当前操作名称
TMPL_PATH // 项目模版目录
LIB_PATH // 项目类库目录
CACHE_PATH // 项目模版缓存目录
CONFIG_PATH //项目配置文件目录
LOG_PATH // 项目日志文件目录
LANG_PATH // 项目语言文件目录
TEMP_PATH  //项目临时文件目录
PLUGIN_PATH // 项目插件文件目录
IS_APACHE // 是否属于Apache
IS_IIS //是否属于IIS
IS_WIN //是否属于Windows环境
IS_LINUX //是否属于Linux环境
IS_FREEBSD //是否属于FreeBsd环境
NOW_TIME // 当前时间戳
THINK_VERSION //ThinkPHP版本号
LANG_SET // 浏览器语言
TEMPLATE_NAME //当前模版名称
TEMPLATE_PATH //当前模版路径
__ROOT__  // 网站根目录地址
__APP__  // 当前项目（入口文件）地址
__URL__  // 当前模块地址
__ACTION__ // 当前操作地址
__SELF__  // 当前URL地址
TMPL_FILE_NAME //当前操作的默认模版名（含路径）
WEB_PUBLIC_URL //网站公共目录
APP_PUBLIC_URL //项目公共模版目录
 */






/*

//全局常量
define('AAA','aaabbbcccdddeee');	//定义自定义常量	//函数体内 直接使用常量
print_r(get_defined_constants());	//输出所有 系统常量
//补充： 检查是否定义了常量defined();


//全局变量
$aaa=1111;				//定义自定义变量
echo $aaa;				//等同于 $GLOBALS['aaa'];		//函数体内 不能直接使用，用global 来定义，（属性前加连接符 &$变量名）
print_r($GLOBALS);		//输出所有 全局变量
//补充： 检查是否定义了变量isset(); 变量值是否为空empty(); 销毁变量unset();

 */


echo '</pre>';






/*	魔术方法：

	PHP把类中所有以__（两个下划线）开头的方法当成魔术方法，一般建议用户不要将自定义的方法前面加上__作为前缀。


1. __construct()
类的默认构造方法，如果__construct()和与类同名的方法共同出现时，默认调用__construct()而不是同类名方法。
一般情况下用户自定义构造方法也会使用__construct()。

2. __destruct()
类的析构函数，当该对象的所有引用都被删除，或者对象被显式销毁时执行。

3. __get($name)
可以简单归纳为：用$object->a的方式读取对象的属性时，如果属性a存在且是public型，那么直接返回该属性的值；
如果属性a不存在或者是protected/private这样的不可直接访问的类型，就会调用__get($name)方法并以返回值为准。
一般可以使用该方法使外部可限制性地访问内部属性，或者完成类似java中的反射操作。

4. __set($name, $value)
与__get($name)类似，用$object->a = 17的方式给属性赋值时，如果属性a存在且是public型，那么直接给属性a赋值皆可；
如果属性a不存在或者是protected/private型，就会调用__set($name, $value)方法。

5. __call($name, $arguments) / __callStatic($name, $arguments)
当调用不存在或者不可访问的方法时，会调用__call($name, $arguments)方法。
而当在静态方法中调用不存在或者不可访问的方法时，会调用__callStatic($name, $arguments)方法。

6. __toString()
当打印对象时会被直接调用。如echo $object;

7. __clone()
当对象被拷贝时直接调用。如$a = new Action(); $a = $object;

8. __isset($name) / __unset($name)
对不存在或者不可访问的属性使用isset()或者empty()时，__isset()会被调用；
当unset一个不存在或者不可访问的属性时，__unset()会被调用，否则直接unset该属性皆可。

9. __set_state()
用var_export()输出一个对象时，__set_state()会被调用，输出内容以该魔术方法的返回值为准。
注：var_export()和var_dump()类似，只是var_export()输出的内容符合php语法。注意使用方法：

$test = new Test();
$b = var_export($test, true);
var_dump($b);

class Test {

    public $a;
    public static function __set_state($array) {
        $ab = new Test();
        $ab->a = 10;
        return $ab;
    }
}


10. __autoload($name)
实例化一个对象时，如果对应的类不存在，则该方法被调用。注意：该方法是全局函数，参数是类的名称。

11. __sleep() / __wakup()
 */




/* 魔术常量：

__LINE__ 		返回文件中的当前行号。
__FILE__ 		返回所在文件的完整路径。
__FUNCTION__ 	返回所在函数名称。
__CLASS__ 		返回所在类的名称。
__METHOD__ 		返回所在类方法的名称。

需要注意__METHOD__返回的是"class::function"的形式，而__FUNCTION__则返回"function"的形式。

 */
?>