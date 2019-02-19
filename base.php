<?php 
//------杂项-----------------
highlight_file('test.php');								//对文件进行语法高亮显示
highlight_string('Hello world! <?php phpinfo(); ?>');	//对字符串进行语法高亮显示
echo php_strip_whitespace ('test.php'); //min代码文件 （删除所有PHP注释以及空白字符的源代码文件）


//大小转换
function int_size($size){
	$unit=array('B','KB','MB','GB','TB','PB');
	return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}
//内存使用大小 memory_get_usage
echo int_size(memory_get_usage()); // 639.08 kb
$a = str_repeat("Hello", 42420);
echo int_size(memory_get_usage()); // 846.95 kb
unset($a);
echo int_size(memory_get_usage()); // 639.66 kb


echo __DIR__;
echo __FILE__;

//echo 'php version: '.PHP_VERSION; 		//php版本号		//phpversion() 等同于 PHP_VERSION 
//print_r(get_loaded_extensions());			//获取扩展列表
//print_r(glob('*.*'));						//获取某目录的指定文件列表
//print_r(get_defined_functions());			//获取所有函数名（内置+自定义）

//匿名函数
// $av = array("the ", "a ", "that ", "this ");
// array_walk($av, create_function('&$v,$k', '$v = $v . "mango";'));
// print_r($av);


//获取全局变量列表
//print_r(array_keys($GLOBALS));
//print_r(get_defined_vars()); // get_defined_vars() 等同于 $GLOBALS;


//查看所有引入文件
//print_r(get_included_files());//获取include，include_once，require，require_once引入的文件列表


//格式化输出数组（输出类型为字符串）保存文件用
// $a = array (1, 2, array ("a", "b", "c"));
// echo var_export($a,1);//参数2为 真时反馈值（假时直接输出）


//字符串编码格式
// $string = '\x00\xE3';
// echo mb_detect_encoding($string , 'UTF-8, ASCII, ISO-8859-1, GBK, BIG5, EUC-KR, EUC-JP');








//----------------------------------------------------------------

/* php数据类型8种

强制转换 http://blog.sina.com.cn/s/blog_632fb1250100tn8z.html

$a=1;			//integer
$a='';			//string
$a='asdf';		//string
$a=array();		//array
$a=null;		//NULL
$a=false;		//boolean 真假true,false
function fun1(){return 1;}
$b=fun1();		//没有函数类型，以函数return的值来算。
class c{ function a(){return 1;} }
$c=new c();		//object
$c=c::a();		//没有函数类型，以函数return的值来算。
echo gettype($c);	//判断类型
//还有一个资源类型,不测试了。（图片，影音文件之类的）


*/





//-------------------- 高精度计算-------------------------------------

/*
bccomp — 比较($a,$b,4)

bcadd — 加法($a,$b,4)
bcsub — 减法($a,$b,4)
bcmul — 乘法($a,$b,4)
bcdiv — 相除($a,$b,4)

bcmod — 求余数($a,$x)
bcpow — 次方($a,$b,4)
bcpowmod — 先次方然后求余数($a,$b,$x,4)
bcsqrt — 求平方根($a,4)
bcscale — 给所有函数设置小数位精度(4)

*/


// PHP 为任意精度数学计算提供了二进制计算器（Binary Calculator），它支持任意大小和精度的数字，以字符串形式描述
// 注: 可选参数 [, int scale] 为 小数位精度




//-------知识点--------------------------------

//全局常量 区分大小写，规范圈大写 BIG
define('aaa', "aaa");
define('aAa', "aAa");
define('AAA', "AAAstr"); //规范
echo aaa;
echo aAa;
echo AAA;

//全局变量 函数内直接使用
$GLOBALS['cName']='cNameString';	//定义全局变量


//变量区分大小写，规范全小写$small
$Name=1;
$name=2;	//规范(第一位必须字母，然后数字或下划线)
$nAme=3;
echo $Name;
echo $name;
echo $nAme;

/*函数不区分大小写。规范骆驼式oneTwoThree()
fun();		//规范(第一位必须字母，然后数字或下划线)
Fun();
fUn(); 都一样。*/


//文件包含（区别在于调用失败时，include给出一个警告，require给出一个致命错误）
include 'a.php';		//复制到这里是一样的效果。包含到所在位置
include_once 'b.php';	//首先验证一下是否包含过，包含一次就不在包含
require 'c.php';		//（调用失败，给出致命错误）
require_once 'd.php';	//（调用失败，给出致命错误）




/*魔术常量
__FILE__		当前文件名
__LINE__		当前行号
__FUNCTION__	当前函数名
__CLASS__		当前类名
__METHOD__		当前方法名
 */

/*超级全局变量
$GLOBALS		所有全局变量数组（超全局变量，内置变量）
$_SERVER		服务器环境变量数组（apache内置变量）
$_ENV 			环境变量数组（服务端命令）

$_GET			通过GET方法传递给该脚本的变量数组（客服端）
$_POST			通过POST方法传递给该脚本的变量数组（客服端）
$_REQUEST		所有用户输入的变量数组（客服端）
$_FILES			文件上传相关的变量数组（客服端）

$_COOKIE		cookie变量数组（客服端）
$_SESSION		会话变量数组（服务端）
 */


/*常用转义符号
\n 		换行符
\r 		回车
\t 		水平指标图
\\ 		反斜杠
\$ 		美元符
\" 		双引号
*/



//逻辑运算符
! 				非 
&& 		and 	与
|| 		or 		或


//条件，三元操作符
$tiaojian ? true : false; 		//例子 $url = $url ? $url : "home.php";

if (condition) {
	# code...
	//break;		//退出循环
	//exit;			//退出程序
	//continue;		//退出当前循环
}elseif (condition) {
	# code...
}else{
	# code...
}

//条件
switch ($str) {
	case 'value':
		# code...
		break;

	case 'value2':
		# code...
		break;

	default:
		# code...
		break;
}

//循环
while ( $i <= 10) {
	# code...
}

//循环
for ($i=0; $i < ; $i++) { 
	# code...
}

//循环
do {
	# code...
} while ($i <= 10);



/*
//判断类型

gettype();		//获取变量类型
settype();		//设置变量类型

isset();		//设置了变量的时候 true
unset();		//没有设置变量的时候 true

empty();		//变量值为 空的时候 true
				//"";   0;  "0";  NULL;  FALSE;  array();  var $var;


is_float();		//浮点数
is_double();	//浮点数，双精度
is_int();		//整数
is_integer();	//整数
is_numeric();	//数字
is_string();	//字符串
is_array();		//数组
is_object();	//对象
is_resource();	//资源
is_null();		//NULL
is_real();
is_long();



//转换变量
intval();
floatval();
strval();

$total=(float)$sum;



//格式化数字
echo number_format(10000);		// 输出：10,000
echo number_format(10000,2);		// 输出：10,000.00
echo number_format(10000,2,'.',' ');	// 输出：10 000.00
echo number_format(10000,2,'.','');	// 输出：10000.00



//数学函数
abs();		绝对值
floor();	舍去法取整
ceil();		进一法取整
round();	四舍五入
min();		求最小值、取数组中最小值
max();		求最大值、取数组中最大值


 */

/*


//-----------------------------------
//'.' 是字符串連接符，用于把两个字符串值连接起来。
$str = '连接' . '符';
echo $str;//将输出 "连接符"。



//-----------------------------------
//'->' 是用于对象执行方法或者取属性。
class test{
    public $username;
    public function get_name(){
        $this->username = 'username';//取属性，并赋值
        echo $this->username;//取属性，并输出
    }
}
$t = new test();
$t->get_name();//执行对象方法 输出'username'



//-----------------------------------
//'=>' 是数组中用于 键=>值，对应关系。
$arr = array('a'=>'a111', 'b'=>'b111');
echo $arr['a'];//输出 'a111'



//------------------------------------
//'::' 是用于 类::静态变量/函数/结构体/类型。
class tt{
    public function e_sth(){
        echo 'sth';
    }
}
tt::e_sth()->t; //输出 'sth' 


//---------------------------------------------------------
//PHP中$_SERVER的详细参数与说明

$_SERVER['PHP_SELF'] #当前正在执行脚本的文件名，与 document root相关。
$_SERVER['argv'] #传递给该脚本的参数。
$_SERVER['argc'] #包含传递给程序的命令行参数的个数（如果运行在命令行模式）。
$_SERVER['GATEWAY_INTERFACE'] #服务器使用的 CGI 规范的版本。例如，“CGI/1.1”。
$_SERVER['SERVER_NAME'] #当前运行脚本所在服务器主机的名称。
$_SERVER['SERVER_SOFTWARE'] #服务器标识的字串，在响应请求时的头部中给出。
$_SERVER['SERVER_PROTOCOL'] #请求页面时通信协议的名称和版本。例如，“HTTP/1.0”。
$_SERVER['REQUEST_METHOD'] #访问页面时的请求方法。例如：“GET”、“HEAD”，“POST”，“PUT”。
$_SERVER['QUERY_STRING'] #查询(query)的字符串。
$_SERVER['DOCUMENT_ROOT'] #当前运行脚本所在的文档根目录。在服务器配置文件中定义。
$_SERVER['HTTP_ACCEPT'] #当前请求的 Accept: 头部的内容。
$_SERVER['HTTP_ACCEPT_CHARSET'] #当前请求的 Accept-Charset: 头部的内容。例如：“iso-8859-1,*,utf-8”。
$_SERVER['HTTP_ACCEPT_ENCODING'] #当前请求的 Accept-Encoding: 头部的内容。例如：“gzip”。
$_SERVER['HTTP_ACCEPT_LANGUAGE']#当前请求的 Accept-Language: 头部的内容。例如：“en”。
$_SERVER['HTTP_CONNECTION'] #当前请求的 Connection: 头部的内容。例如：“Keep-Alive”。
$_SERVER['HTTP_HOST'] #当前请求的 Host: 头部的内容。
$_SERVER['HTTP_REFERER'] #链接到当前页面的前一页面的 URL 地址。
$_SERVER['HTTP_USER_AGENT'] #当前请求的 User_Agent: 头部的内容。
$_SERVER['HTTPS'] — 如果通过https访问,则被设为一个非空的值(on)，否则返回off
$_SERVER['REMOTE_ADDR'] #正在浏览当前页面用户的 IP 地址。
$_SERVER['REMOTE_HOST'] #正在浏览当前页面用户的主机名。
$_SERVER['REMOTE_PORT'] #用户连接到服务器时所使用的端口。
$_SERVER['SCRIPT_FILENAME'] #当前执行脚本的绝对路径名。
$_SERVER['SERVER_ADMIN'] #管理员信息
$_SERVER['SERVER_PORT'] #服务器所使用的端口
$_SERVER['SERVER_SIGNATURE'] #包含服务器版本和虚拟主机名的字符串。
$_SERVER['PATH_TRANSLATED'] #当前脚本所在文件系统（不是文档根目录）的基本路径。
$_SERVER['SCRIPT_NAME'] #包含当前脚本的路径。这在页面需要指向自己时非常有用。
$_SERVER['REQUEST_URI'] #访问此页面所需的 URI。例如，“/index.html”。
$_SERVER['PHP_AUTH_USER'] #当 PHP 运行在 Apache 模块方式下，并且正在使用 HTTP 认证功能，这个变量便是用户输入的用户名。
$_SERVER['PHP_AUTH_PW'] #当 PHP 运行在 Apache 模块方式下，并且正在使用 HTTP 认证功能，这个变量便是用户输入的密码。
$_SERVER['AUTH_TYPE'] #当 PHP 运行在 Apache 模块方式下，并且正在使用 HTTP 认证功能，这个变量便是认证的类型。 


//----------etc-----------------------

/*
$a='c';
$b=&$a;		//表示$b 和 $a 引用了同一个变量
$a='asdf';	//重新设置$a
echo $b;echo '<br>';
unset($a);	//删除$a (函数内不能使用)
echo $b;echo '<br>';
$a='1111';
echo $b;echo '<br>';

function setValue(&$k,$v=null){
	$k=$v;
}
setValue($c,'aaa');
*/



// function getValue($k){
// 	return $k;
// }
// echo getValue($cfg);









 */