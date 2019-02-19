<?php
header("Content-type:text/html;charset=utf-8");
/*
使用别人的SID（指定的SID）里的变量值，共用他人SID
*/

$sid=@$_GET['sid'];
$type=@$_GET['type'];
$user=@$_GET['user'];

//$lifeTime = -1334;
//$lifeTime = 24 * 3600;				// 保存一天 
$savePath = "./session_save_dir/"; // 设置一个存放目录

//session_set_cookie_params($lifeTime); //（session_start() 函数调用之前调用）
session_save_path($savePath);		//（session_start() 函数调用之前调用）


if(@$sid){
	session_id(@$sid);//指定使用哪个SESSIONID(注意：一定要开启session之前指定)
	session_start();//开启并初始化SESSIOIN

	if(isset($_GET['user']) {//登录
		$_SESSION['login']=true; 
		$_SESSION['user']=@$_GET['user'];
	}


	if(@$_SESSION['login'] ) {//登录了之后，显示输出

		echo '登录名:'.@$_SESSION['user'];
		echo '<pre>';print_r($_SESSION);echo '</pre>';
		echo 'session id为：'.session_id();//获取当前使用中的SESSIONID

	} else {//没有登录返回
		echo '没有登录过';
	}

	if($type=="logout") {
		session_destroy();
		echo '已经清除SESSIONID,请刷新页面';
	}//类型为退出。

	session_write_close();//关闭SESSION
}
else{
echo '
空白页<br/>
?sid=SESSIONID(必写)<br/>
&type=login 或 &type=logout<br/>
&user=随便写名字<br/>
';}



/* PHP常用Session函数集 

session_cache_expire		函数：获取或者设置当前Session的过期时间　
session_cache_limiter		函数：获取或者设置当前的cache限制者　
session_commit				函数：存储Session中的数据并终止Session　
session_decode				函数：解密Session数据　
session_destroy				函数：结束所有已经注册的Session　
session_encode				函数：将当前Session会话值加密为一个字符串　
session_get_cookie_params	函数：获取Session Cookie的参数　
session_id					函数：获取或者设置当前的Session ID值　
session_is_registered		函数：检查变量是否被注册为Session　
session_module_name			函数：获取或者设置目前的Session模组　
session_name				函数：获取或者设置目前的Session名称　
session_regenerate_id		函数：用一个新值更新当前的Session ID　
session_register			函数：注册Session为新的全局变量　
session_save_path			函数：获取或者设置目前的Session保存路径　
session_set_cookie_params	函数：设置Cookie的参数　
session_set_save_handler	函数：设置用户级的Session存储函数　
session_start				函数：初始化Session数据　
session_unregister			函数：从当前Session中注销一个值　
session_unset				函数：释放所有的Session变量　
session_write_close			函数：向Session中写入数据并终止Session　

*/

