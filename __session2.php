<?php
header("Content-type:text/html;charset=utf-8");

class sid_file{
	static $fix='sid_';
	static $session_path;
	static $session_file;

	//start开启和read读取之前，不能有each输出函数。
	static function start($path,$session_name){
		//echo 'start<br>';
		self::$session_path=$path;
	}
	static function read($sid){
		//echo 'read<br>';
		self::$session_file = self::$session_path .DIRECTORY_SEPARATOR .self::$fix .$sid;
		if(file_exists(self::$session_file)) return file_get_contents(self::$session_file);
		//return后 存储在内存当中,（写的时候最佳写入）
	}

	//destroy时不会执行写操作。
	static function write($sid,$data){
		//echo 'write<br>';
		return file_put_contents(self::$session_file, $data) ? true : false;
	}
	//触发session_destroy()函数时，删除服务端里的session文件和删除客户端里的cookie文件。
	static function destroy($sid){
		//echo 'destroy<br>';
		if(file_exists(self::$session_file)) unlink(self::$session_file);
		@setcookie(session_name(),'',-1,'/');
	}
	//垃圾回收比例，达到时才运行一下（1/100）。
	static function gc($max_time){
		//echo 'gc<br>';
		foreach (glob(self::$session_path.'/*') as $file){
			if(filemtime($file)+$max_time < time()) unlink($file);
		}
		return true;
	}
	//触发session_write_close()时关闭 或 不写时脚本结束后自动关闭。
	static function close(){
		//echo 'close<br>';
		return true;
	}
}



function is_cookie(){
	setcookie('is_cookie','yes',time()+1000000000,'/');//永不过期
	if(!$_COOKIE['is_cookie']) return false;//echo '首次访问网站或关闭了cookie';
	else return true;
}
if(!is_cookie()) { //修改ini配置文件( a,form,header上自动加sessionid )
	ini_set('session.use_trans_sid','1');//url方式的session//用get方式获取sid后。（盗用别人的sid，这一步待未解决）
	ini_set("session.use_only_cookies",0);
	ini_set("session.use_cookies",0);
}

ini_set('session.name','SID');
ini_set('session.gc_divisor','10');			//刷新概率，所有访客来记。PV几次就垃圾回收（删除SESSION文件）同时在线人数来定。
ini_set('session.gc_maxlifetime','3600');	//删除服务端中的session文件（1440 访问页面刷新页面开始计时）
session_set_cookie_params(3600);			//删除客户端中的cookie文件（默认0,关闭浏览器就删除，逻辑同上）		

ini_set('session.save_handler','user');
session_set_save_handler('sid_file::start','sid_file::close','sid_file::read',
						'sid_file::write','sid_file::destroy','sid_file::gc');
//session_save_path(__DIR__.'/session_save_dir'); 		//设置存放目录（session_start() 函数调用之前调用）
session_start();
if(!is_cookie()){
	if(!$_GET[session_name()]) header('Location: '.$_SERVER['REQUEST_URI'].($_GET ? '&' : '?').session_name().'='.session_id());
	//echo $_SERVER['REQUEST_URI'].($_GET ? '&' : '?').session_name().'='.session_id();
}

//---------安全session

//1.登陆(用户名,密码)   2.保存SESSION信息 IP+浏览器信息
$_SESSION['chk']=$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']; //IP+浏览器信息  +登陆的用户名+随机码（= 唯一用户）
if(isset($_SESSION['chk']) && $_SESSION['chk']!=$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']){
	echo 'Unauthorized Users';exit(); 			//非法用户，并终止脚本运行。
}





echo '<a href="?go=login" >[login]</a> ';
echo '<a href="?go=logout" >[logout]</a> ';
echo '<a href="?go=play" >[play]</a> ';
echo '<br><br><br>';
echo '<pre>';

if($_GET['go']=='login'){
	echo '登陆成功'.session_id().'<br>';
	$_SESSION['a']='aaa';
	$_SESSION['b']='bbb';
	$_SESSION['c']='ccccc';	

	print_r($_SESSION);
	$file=ini_get('session.save_path') .'/' .sid_file::$fix .session_id();
	echo '</pre><p>文件内容是（慢一拍）：<br>'.file_get_contents($file).'</p><pre>';//慢一拍，脚本结束后才真正写入（保存起来）
	if($_COOKIE) print_r($_COOKIE);
}
if($_GET['go']=='logout'){
	if(session_destroy()) echo '删除成功（用户登出）';
}
if($_GET['go']=='play'){
	echo 'play页内容';
	$_SESSION['a']='asdasdfasdfasdf';
	print_r($_SESSION);

	$file=ini_get('session.save_path') .'/' .sid_file::$fix .session_id();
	echo '</pre><p>文件内容是（慢一拍）：<br>'.file_get_contents($file).'</p><pre>';
}


echo '<style> p { border:1px solid #777; } </style>';




function ini_scan($key=null,$type=0){ //null时，输出所有数组。指定为session时，只输出键为session的数组
	$ini=ini_get_all();
	if($type==1) return $ini;
	if($key){
		foreach ($ini as $k => $v) {
			if(substr_count($k,$key) > 0 ) $rs[$k]=$v['local_value'];
		}
	}else {
		foreach ($ini as $k => $v) {
			$rs[$k]=$v['local_value'];
		}
	}
	return $rs;
}

// print_r(ini_scan('session'));
// print_r($_SERVER);
