<?php 
/*
200 OK      //客户端请求成功
400 Bad Request  //客户端请求有语法错误，不能被服务器所理解
401 Unauthorized //请求未经授权，这个状态代码必须和WWW-Authenticate报头域一起使用 
403 Forbidden  //服务器收到请求，但是拒绝提供服务
404 Not Found  //请求资源不存在，eg：输入了错误的URL
500 Internal Server Error //服务器发生不可预期的错误
503 Server Unavailable  //服务器当前不能处理客户端的请求，一段时间后可能恢复正常

*/

//header("HTTP/1.1 403 Forbidden");//可以自行修改状态码。

header('Content-Type: text/html; charset=utf-8');





//-------------缓存
//通过header来禁用缓存(ajax)
header('Expires: -1');
header('Cache-Control: no_cache');
header('Pragma: no-cache');




//-------------下载
//文件下载（文件下载路径，保存的新名[可选]）
function file_down($file_path,$file_name=null){
	if($file_name==null) $file_name=basename($file_path);
	//$file_name=iconv('utf-8','gb2312',$file_name);//中文要转码
	if(!file_exists($file_path)){ echo '文件不存在'; return ; }
	$fp=fopen($file_path);
	$file_size=filesize($fp); //获取下载文件的大小
	if($file_size > ){echo '<script type="text/javascript">alert('文件太大');</script>'; return ;}
	//-----------
	header('Content-type: application/octet-stream'); 					//返回的文件(二进制流)
	header('Accept-Ranges: bytes'); 									//按照字节大小返回
	header('Accept-Length:'. $file_size);								//返回文件大小
	header('Content-Disposition: attachment; filename='.$file_name);	//文件名
	//-----------
	$buffer=1024;	//向客户端回送数据
	$file_count=0;	//为了下载安全,我们最好做一个文件字节读取计数器
	while(!feof($fp) && ($file_size - $file_count > 0)){ //这句话用于判断文件是否结束
		$file_data=fread($fp,$buffer);
		$file_count+=$buffer;	//统计读了多少个字节
		echo $file_data;		//把部分数据回送给浏览器;
	}
	fclose($fp);	//关闭文件
}
//file_down('down/oldname.jpg','newname.jpg');



//--------------------


// //------发送头
// GET /test/hello.html HTTP/1.1
// Accept: * / * 									//表示客户端可以接收任何数据
// Referer: http://localhost:80/test/abc.html 		//表示我是从哪里来
// Accept-Language:zh-cn 							//页面语言
// User-Agent: Mozilla/4.0 							//告诉服务 我的浏览器内核,操作系统
// Accept-Encoding:gzip,deflate 					//表示接收什么样的数据压缩格式
// Host: localhost:80 								//主机:80
// Connection: Keep-Alive 							//表示不要立即断掉我们的请求


// //------接收头

// HTTP/1.1 200 OK 									//200表示客户端请求成功
// Server:Microsoft-IIS/5.0 						//表示告诉浏览器 服务器的情况
// Date:Thu,13 Jul 2000 05:46:53 GMT 				//告诉浏览器 清流的页面更新事件
// Content-Encoding: gzip 							//内容编码支持gzip压缩算法
// Content-Length:80 								//返回数据大小(包括头信息长度)
// Content-Lanuage:zh-cn
// Content-Type: text/html; charset=utf-8
// Last-Modified: tue,11 Jul 2000 18:23:51 GMT 		//表示浏览器请求资源,最新时间
// Refresh: 1; url=http://baidu.com 				//表示一秒后自动跳转
// Set-Cookie:SS=Q0=5Lb_nQ;path=/search 			//设置cookie

// Expires:-1
// Cache-Control: no-cache
// Pragma:no-cache




//-------------------------------------------------------

// header的用法 

// header()函数的作用是：发送一个原始 HTTP 标头[Http Header]到客户端。
// 标头 (header) 是服务器以 HTTP 协义传 HTML 资料到浏览器前所送出的字串，在标头 
// 与 HTML 文件之间尚需空一行分隔。有关 HTTP 的详细说明，可以参 RFC 2068 官方文件 
// (http://www.w3.org/Protocols/rfc2068/rfc2068)。
// 在 PHP 中送回 HTML 资料前，需先 传完所有的标头。

// 使用范例 

// 范例一: 本例使浏览器重定向到 PHP 的官方网站。 

Header("Location: http://www.php.net";); 
exit;   //在每个重定向之后都必须加上“exit",避免发生错误后，继续执行。
 
 
/** 
 * @title:PHP定时跳转 
 * @功能:等待指定的时间，然后再跳转到指定页面（代替html meta方式） 
 */ 
header("refresh:3;url=http://axgle.za.net"); 
print('正在加载，请稍等...<br>三秒后自动跳转~~~'); 
/* 
补充说明： 
若等待时间为0，则与header("location:")等效。 
*/ 
//header重定向 就等价于替用户在地址栏输入url
   

// 范例二:禁止页面在IE中缓存
// 要使用者每次都能得到最新的资料，而不是 Proxy 或 cache 中的资料，可以使用下列的标头 


header( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );	
header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', false );
header( 'Pragma: no-cache' ); //兼容http1.0和https
/*
CacheControl = no-cache
Pragma=no-cache
Expires = -1

Expires是个好东东，如果服务器上的网页经常变化，就把它设置为-1，表示立即过期。如果一个网页每天凌晨1点更新，可以把Expires设置为第二天的凌晨1点。
当HTTP1.1服务器指定CacheControl = no-cache时，浏览器就不会缓存该网页。

旧式 HTTP 1.0 服务器不能使用 Cache-Control 标题。所以为了向后兼容 HTTP 1.0 服务器，IE使用Pragma:no-cache 标题对 HTTP 提供特殊支持。
如果客户端通过安全连接 (https://) 与服务器通讯，且服务器在响应中返回 Pragma:no-cache 标题，则 Internet Explorer 不会缓存此响应。
注意：Pragma:no-cache 仅当在安全连接中使用时才防止缓存，如果在非安全页中使用，处理方式与 Expires:-1 相同，该页将被缓存，但被标记为立即过期。

http-equiv meta标记：

在html页面中可以用http-equiv meta来标记指定的http消息头部。老版本的IE可能不支持html meta标记，所以最好使用http消息头部来禁用缓存。

范例三: 让使用者的浏览器出现找不到档案的信息。 

网上很多资料这样写：php的函数header()可以向浏览器发送Status标头，
如　header(”Status: 404 Not Found”)。

但是我发现实际上浏览器返回的响应却是：

HTTP/1.x 200 OK
Date: Thu, 03 Aug 2006 07:49:11 GMT
Server: Apache/2.0.55 (Win32) PHP/5.0.5
X-Powered-By: PHP/5.0.5
Status: 404 Not Found
Content-Length: 0
Keep-Alive: timeout=15, max=98
Connection: Keep-Alive
Content-Type: text/html

查了一些资料，正确的写法是：
header(”http/1.1 404 Not Found”);

第一部分为HTTP协议的版本(HTTP-Version)；第二部分为状态代码(Status)；第三部分为原因短语(Reason-Phrase)。

范例四:让使用者下载档案( 隐藏文件的位置 )

html标签 就可以实现普通文件下载。如果为了保密文件，就不能把文件链接告诉别人，可以用header函数实现文件下载。
*/
header("Content-type: application/x-gzip"); 
header("Content-Disposition: attachment; filename=文件名\ "); 
header("Content-Description: PHP3 Generated Data"); 

// header("X-Foo: Bar");
// header("X-Bar: Baz");
// header_remove("X-Foo"); 

// 范例四:header函数前输入内容

// 一般来说在header函数前不能输出html内容，类似的还有setcookie() 和 session 函数，这些函数需要在输出流中增加消息头部信息。如果在header()执行之前有echo等语句，当后面遇到header()时，就会报出 “Warning: Cannot modify header information - headers already sent by ….”错误。就是说在这些函数的前面不能有任何文字、空行、回车等，而且最好在header()函数后加上exit()函数。例如下面的错误写法，在两个php代码段之间有一个空行：


//这里应该是一个空行
header('http/1.1 403 Forbidden');
exit();


// 原因是：PHP脚本开始执行 时,它可以同时发送http消息头部(标题)信息和主体信息. http消息头部(来自 header() 或 SetCookie() 函数)并不会立即发送,相反,它被保存到一个列表中. 这样就可以允许你修改标题信息,包括缺省的标题(例如 Content-Type 标题）.但是,一旦脚本发送了任何非标题的输出（例如,使用 HTML 或 print() 调用),那么PHP就必须先发送完所有的Header,然后终止 HTTP header.而后继续发送主体数据.从这时开始,任何添加或修改Header信息的试图都是不允许的,并会发送上述的错误消息之一。

// 解决办法：

// 修改php.ini打开缓存(output_buffering),或者在程序中使用缓存函数ob_start()，ob_end_flush()等。原理是：output_buffering被启用时,在脚本发送输出时，PHP并不发送HTTP header。相反，它将此输出通过管道（pipe）输入到动态增加的缓存中（只能在PHP 4.0中使用，它具有中央化的输出机制）。你仍然可以修改/添加header，或者设置cookie，因为header实际上并没有发送。当全部脚本终止时，PHP将自动发送HTTP header到浏览器，然后再发送输出缓冲中的内容。

// =================================================================
// PHP 手册实例应用

// 1：您可以使用heder命令，强制使浏览器使用新鲜的内容（无缓存） 。
// 也可以给网址增加了一个唯一的编号，使其每次都读取新的内容，避免缓存。
// example:

print "<img src='yourfile.jpg'>";   //通常读取的是缓存文件

print "<img src='yourfile.jpg?".time()."'>";   //增加了唯一的编号，使浏览器重新请求

//print "<img src='yourfile.jpg?".rand(100,999)."'>"; 


// 2: 下面是个很好的函数，将图片传送给浏览器显示。

function PE_img_by_path($PE_imgpath = "")
{
    if (file_exists($PE_imgpath)) {
        $PE_imgarray = pathinfo($PE_imgpath);

        $iconcontent = file_get_contents($PE_imgpath);
        header("Content-type: image/" . $PE_imgarray["extension"]);
        header('Content-length: ' . strlen($iconcontent));
        echo $iconcontent;
        die(0);
    }
    return false;
} 

//更多的实例：

// ok
header('HTTP/1.1 200 OK');

//设置一个404头:
header('HTTP/1.1 404 Not Found');

//设置地址被永久的重定向
header('HTTP/1.1 301 Moved Permanently');

//转到一个新地址
header('Location: http://www.example.org/');

//文件延迟转向:
header('Refresh: 10; url=http://www.example.org/');
print 'You will be redirected in 10 seconds';

//当然，也可以使用html语法实现
// <meta http-equiv="refresh" content="10;http://www.example.org/ />

// override X-Powered-By: PHP:
header('X-Powered-By: PHP/4.4.0');
header('X-Powered-By: Brain/0.6b');

//文档语言
header('Content-language: en');

//告诉浏览器最后一次修改时间
$time = time() - 60; // or filemtime($fn), etc
header('Last-Modified: '.gmdate('D, d M Y H:i:s', $time).' GMT');

//告诉浏览器文档内容没有发生改变
header('HTTP/1.1 304 Not Modified');

//设置内容长度
header('Content-Length: 1234');

//设置为一个下载类型
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="example.zip"'); 
header('Content-Transfer-Encoding: binary');
// load the file to send:
readfile('example.zip');

// 对当前文档禁用缓存
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // //304用，缓存文件保存时间
header('Pragma: no-cache');

//设置内容类型:
header('Content-Type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=utf-8');
header('Content-Type: text/plain'); //纯文本格式
header('Content-Type: image/jpeg'); //JPG图片
header('Content-Type: application/zip'); // ZIP文件
header('Content-Type: application/pdf'); // PDF文件
header('Content-Type: audio/mpeg'); // 音频文件
header('Content-Type: application/x-shockwave-flash'); //Flash动画

//显示登陆对话框
header('HTTP/1.1 401 Unauthorized');
header('WWW-Authenticate: Basic realm="Top Secret"');
print 'Text that will be displayed if the user hits cancel or ';
print 'enters wrong login data';
?>
 