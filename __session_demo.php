<?php
header("Content-type:text/html;charset=utf-8");
//参考 http://dev.yesky.com/web/281/7584781.shtml
//sess_4c83638b3b0dbf65583181c2f89168ec，后面是 32 位编码后的随机字符串
/*用编辑器打开它，看一下它的内容：
admin|N;
　　一般该内容是这样的结构：
　　变量名|类型:长度:值;
*/

//--------------------------------
//$lifeTime = -1334;					// 删除COOKIE, 把当前使用的ie浏览器，正在打开的所有窗口都关闭才生效。
//$lifeTime = 24 * 3600;				// 保存一天 
//session_set_cookie_params($lifeTime); //（session_start() 函数调用之前调用）
//setcookie(session_name(), session_id(), time() + $lifeTime, "/");  //（同上）手动设置 Session 的生存期（COOKIE没有开启关闭函数直接使用）

//$savePath = "./session_save_dir/"; // 设置一个存放目录
//session_save_path($savePath);		//（session_start() 函数调用之前调用）



//禁用cookie时，使用GET方式接收sid
if(isset($_COOKIE[session_name()])) $this_sid=$_COOKIE[session_name()];
else $this_sid = $_GET['sid'];		// 取得 Session ID （关闭cookie后的，跳转页时不能识别用户的解决方案）


if(isset($_GET['sid'])) {
	session_id($this_sid); 			// 使用 session_id() 设置获得的 Session ID 
	session_start();				// 启动会话，这步必不可少 
	echo '<pre>';print_r($_SESSION);echo '</pre>';
	echo session_name().'='.session_id();//获取当前使用中的SESSIONID
	session_write_close();//关闭SESSION
	echo '<a href="?type=logout" >logout(delete file)</a>';

}

if($_GET['new']=='sid') {
	$this_sid='user'.time();		// 新建SID
	session_id($this_sid); 			// 使用 session_id() 设置获得的 Session ID 
	session_start();				// 启动会话，这步必不可少 

	$_SESSION['admin'] = 1;	//第一次登录成功时写入并生成权限变量
	$_SESSION['key1']='val1';
	$_SESSION['key2']='val2';

	echo '新生成SESSION文件了'.session_id();
	echo '<a href="?sid='.$this_sid.'" >view</a>';	
}
if( $_SESSION['admin']==0) echo '<a href="?new=sid" >login(new sid)</a>';



	if($_GET['type']=='logout') {
		session_id($this_sid); 			// 使用 session_id() 设置获得的 Session ID 
		$file=$savePath.'sess_'.session_id();
		unlink($file);
		echo '删除SESSION文件了';
	}//类型为退出。


//unset($_SESSION["admin"]); 	// 这种方法是将原来注册的某个变量销毁
//session_destroy(); 			// 这种方法是销毁整个 Session 文件


//--------------登录页--------------------

/*
$posts = $_POST; 				// 表单提交后... 
foreach ($posts as $k => $v){
	$posts[$k] = trim($v); 		// 清除一些空白符号 
} 
$password = md5($posts["password"]); 
$username = $posts["username"]; 
$sql = "SELECT `username` FROM `user` WHERE `password` = '$password'"; 
$db_userdata = $DB->getRow($sql); 		// 取得sql查询结果 (数据库语句不全，只说明思路)

if (!empty($db_userdata)) { 
	if ($db_userdata["username"] == $username) { 
		session_start(); 				// 当验证通过后，启动 Session 
		$_SESSION["admin"] = true; 		// 注册登陆成功的 admin 变量，并赋值 true 
	} else die("用户名密码错误");
}else die("用户名密码错误"); 



//------------使用页---------------------

// 判断是否登陆 
if (isset($_SESSION["admin"]) && $_SESSION["admin"] === true) echo "您已经成功登陆";
else {
	$_SESSION["admin"] = false; // 验证失败，将 $_SESSION["admin"] 置为 false
	die("您无权访问"); 
} 

*/




//-----------对象数据保存到SESSION中---------------------

/* 例子
//person.php
class person 
{ 
var $age; 
function output() { 
echo $this->age; 
} 

function setAge($age) { 
$this->age = $age; 
} 
} 

//setage.php
session_start(); 
require_once "person.php"; 
$person = new person(); 
$person->etAge(21);
$_SESSION['person'] = $person; 
echo "<a href='output'>check here to output age</a>"; 

//output.php
// 设置回调函数，确保重新构建对象。 
ini_set('unserialize_callback_func', 'mycallback'); 
function mycallback($classname) { 
	$classname . ".php"; 
}
session_start();
$person = $_SESSION["person"]; 
// 输出 21 
$person->output(); 
*/

//----------------------------------------------


echo '<pre>';
print_r($GLOBALS);
echo '</pre>';
