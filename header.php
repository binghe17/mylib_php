<?php


/*
header('Content-type: text/json');
var_dump(headers_list());
*/









//------------header.php

function show_header(){
	// setcookie("TestCookie","SomeValue");
	// header("Test: foo");
	// header('Content-type: text/plain');
	//header("Location: http://atompond.com";); exit;//重定向
	//header("refresh:2;url=http://atompond"); echo '正在加载，请稍等...<br>三秒后自动跳转至<a href="http://atompond.com">AtomPond.com</a>...';
	// 发送哪些报头？
	echo '<pre>[Header!!]';print_r(headers_list());echo '</pre>';
}
//show_header();






// Display the result
function printContent($content=null) {
	header("Content-Type: text/xml; charset=UTF-8");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	print $content;
	exit();
}
//printContent() ;//This XML file does not appear to have any style information associated with it. The document tree is shown below.











/*
说明： 
1，在服务器PHP页面缓存了压缩过的文件，再次访问减少再压缩时间，降低CPU占用率。 
2，通过设置客户端文件缓存时间，降低再次请求次数，可降低85%以上。 
3，图片因为已经是压缩格式，只是设置浏览器缓存时间，不做压缩处理。

使用方法： 
1，服务器必须支持gzip，Rewrite功能。

2，在.htacess文件的“RewriteBase /”下面一行添加下面的代码， 
RewriteRule (.*.css$|.*.js$|.*.jpg$|.*.gif$|.*.png$) gzip.php?$1 [L] 
3，上传gzip.php到根目录

4，在根目录建cache文件夹，保证可读写。


以下是实例代码：
*/

/**
 * @author Seraphim
 * @copyright 2012
 */
// <!-- 公共的返回header的子程序 -->


function sendheader($last_modified, $p_type, $content_length = 0) {
	// 设置客户端缓存有效时间
	header("Expires: ".gmdate("D, d M Y H:i:s", time() + 15360000)."GMT");
	header("Cache-Control: max-age=315360000");
	header("Pragma: ");
	// 设置最后修改时间
	header("Last-Modified: ".$last_modified);
	// 设置文件类型信息
	header($p_type);
	header("Content-Length: ".$content_length);
}
define('ABSPATH', dirname(__file__).'/');
$cache = true;
$cachedir = 'cache/'; //存放gz文件的目录，确保可写
if(empty($_SERVER['QUERY_STRING'])) exit();
$gzip = strstr($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip');
if(empty($gzip)) $cache = false;
$key = array_shift(explode('?', $_SERVER['QUERY_STRING']));
$key = str_replace('../', '', $key);
$filename = ABSPATH.$key;
$symbol = '_';
$rel_path = str_replace(ABSPATH, '', dirname($filename));
$namespace = str_replace('/', $symbol, $rel_path);
$cache_filename = ABSPATH.$cachedir.$namespace.$symbol.basename($filename).'.gz'; //生成gz文件路径
$ext = array_pop(explode('.', $filename)); //根据后缀判断文件类型信息
$type = "Content-type: text/html"; //默认的文件类型
switch($ext) {
case 'css':
	$type = "Content-type: text/css";
	break;
case 'js':
	$type = "Content-type: text/javascript";
	break;
case 'gif':
	$cache = false;
	$type = "Content-type: image/gif";
	break;
case 'jpg':
	$cache = false;
	$type = "Content-type: image/jpeg";
	break;
case 'png':
	$cache = false;
	$type = "Content-type: image/png";
	break;
default:
	exit();
}
if($cache) {
	if(file_exists($cache_filename)) { // 假如存在gz文件
		$mtime = filemtime($cache_filename);
		$gmt_mtime = gmdate('D, d M Y H:i:s', $mtime).' GMT';
		if((isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && array_shift(explode(';', $_SERVER['HTTP_IF_MODIFIED_SINCE'])) == $gmt_mtime)) {
			// 与浏览器cache中的文件修改日期一致，返回304
			header("HTTP/1.1 304 Not Modified");
			// 发送客户端header
			header("Content-Encoding :gzip");
			sendheader($gmt_mtime, $type);
		} else {
			// 读取gz文件输出
			$content = file_get_contents($cache_filename);
			// 发送客户端header
			sendheader($gmt_mtime, $type, strlen($content));
			header("Content-Encoding: gzip");
			// 发送数据
			echo $content;
		}
	} else if(file_exists($filename)) { // 没有对应的gz文件
		$mtime = mktime();
		$gmt_mtime = gmdate('D, d M Y H:i:s', $mtime).' GMT';
		// 读取文件
		$content = file_get_contents($filename);
		// 去掉空白的部分
		// $content = ltrim($content);
		// 压缩文件内容
		$content = gzencode($content, 9, $gzip ? FORCE_GZIP : FORCE_DEFLATE);
		// 发送客户端header
		sendheader($gmt_mtime, $type, strlen($content));
		header("Content-Encoding: gzip");
		// 发送数据
		echo $content;
		// 写入文件
		file_put_contents($cache_filename, $content);
	} else {
		header("HTTP/1.0 404 Not Found");
	}
} else { // 处理不使用Gzip模式下的输出。原理基本同上
	if(file_exists($filename)) {
		$mtime = filemtime($filename);
		$gmt_mtime = gmdate('D, d M Y H:i:s', $mtime).' GMT';
		if((isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && array_shift(explode(';', $_SERVER['HTTP_IF_MODIFIED_SINCE'])) == $gmt_mtime)) {
			// 与浏览器cache中的文件修改日期一致，返回304
			header("HTTP/1.1 304 Not Modified");
			// 发送客户端header
			sendheader($gmt_mtime, $type, strlen($content));
			header("Content-Encoding :gzip");
		} else {
			// 读取文件输出
			$content = file_get_contents($filename);
			// 发送客户端header
			sendheader($gmt_mtime, $type, strlen($content));
			// 发送数据
			echo $content;
		}
	} else {
		header("HTTP/1.0 404 Not Found");
	}
} 












/*
2009-12-24 10:56 PHP Header 缓存 --- Header 参数说明
(星斜杠星 的中间没有空格，因注释问题空格了)

1. Accept：告诉WEB服务器自己接受什么介质类型，* / * 表示任何类型，type/* 表示该类型下的所有子类型，type/sub-type。

2. Accept-Charset：   浏览器申明自己接收的字符集
Accept-Encoding：  浏览器申明自己接收的编码方法，通常指定压缩方法，是否支持压缩，支持什么压缩方法（gzip，deflate）
Accept-Language：：浏览器申明自己接收的语言
语言跟字符集的区别：中文是语言，中文有多种字符集，比如big5，gb2312，gbk等等。

3. Accept-Ranges：WEB服务器表明自己是否接受获取其某个实体的一部分（比如文件的一部分）的请求。
bytes：表示接受，none：表示不接受。

4. Age：当代理服务器用自己缓存的实体去响应请求时，用该头部表明该实体从产生到现在经过多长时间了。

5. Authorization：当客户端接收到来自WEB服务器的 WWW-Authenticate 响应时，用该头部来回应自己的身份验证信息给WEB服务器。

6. Cache-Control：请求：no-cache（不要缓存的实体，要求现在从WEB服务器去取）
max-age：（只接受 Age 值小于 max-age 值，并且没有过期的对象）
max-stale：（可以接受过去的对象，但是过期时间必须小于 max-stale 值）
min-fresh：（接受其新鲜生命期大于其当前 Age 跟 min-fresh 值之和的缓存对象）
响应：public(可以用 Cached 内容回应任何用户)
private（只能用缓存内容回应先前请求该内容的那个用户）
no-cache（可以缓存，但是只有在跟WEB服务器验证了其有效后，才能返回给客户端）
max-age：（本响应包含的对象的过期时间）
ALL:  no-store（不允许缓存）

7. Connection：请求：close（告诉WEB服务器或者代理服务器，在完成本次请求的响应后，断开连接，不要等待本次连接的后续请求了）。
keepalive（告诉WEB服务器或者代理服务器，在完成本次请求的响应后，保持连接，等待本次连接的后续请求）。
响应：close（连接已经关闭）。
keepalive（连接保持着，在等待本次连接的后续请求）。
Keep-Alive：如果浏览器请求保持连接，则该头部表明希望 WEB 服务器保持连接多长时间（秒）。
例如：Keep-Alive：300

8. Content-Encoding：WEB服务器表明自己使用了什么压缩方法（gzip，deflate）压缩响应中的对象。 
例如：Content-Encoding：gzip                   
Content-Language：WEB 服务器告诉浏览器自己响应的对象的语言。

Content-Length：  WEB 服务器告诉浏览器自己响应的对象的长度。
例如：Content-Length: 26012
Content-Range：   WEB 服务器表明该响应包含的部分对象为整个对象的哪个部分。
例如：Content-Range: bytes 21010-47021/47022
Content-Type：    WEB 服务器告诉浏览器自己响应的对象的类型。
例如：Content-Type：application/xml

9. ETag：就是一个对象（比如URL）的标志值，就一个对象而言，比如一个 html 文件，如果被修改了，其 Etag 也会别修改，
所以，ETag 的作用跟 Last-Modified 的作用差不多，主要供 WEB 服务器判断一个对象是否改变了。
比如前一次请求某个 html 文件时，获得了其 ETag，当这次又请求这个文件时，浏览器就会把先前获得的 ETag 值发送给
WEB 服务器，然后 WEB 服务器会把这个 ETag 跟该文件的当前 ETag 进行对比，然后就知道这个文件有没有改变了。


10. Expired：WEB服务器表明该实体将在什么时候过期，对于过期了的对象，只有在跟WEB服务器验证了其有效性后，才能用来响应客户请求。
是 HTTP/1.0 的头部。
例如：Expires：Sat, 23 May 2009 10:02:12 GMT

11. Host：客户端指定自己想访问的WEB服务器的域名/IP 地址和端口号。
例如：Host：rss.sina.com.cn

12. If-Match：如果对象的 ETag 没有改变，其实也就意味著对象没有改变，才执行请求的动作。
If-None-Match：如果对象的 ETag 改变了，其实也就意味著对象也改变了，才执行请求的动作。

13. If-Modified-Since：如果请求的对象在该头部指定的时间之后修改了，才执行请求的动作（比如返回对象），否则返回代码304，告诉浏览器该对象没有修改。
例如：If-Modified-Since：Thu, 10 Apr 2008 09:14:42 GMT
If-Unmodified-Since：如果请求的对象在该头部指定的时间之后没修改过，才执行请求的动作（比如返回对象）。

14. If-Range：浏览器告诉 WEB 服务器，如果我请求的对象没有改变，就把我缺少的部分给我，如果对象改变了，就把整个对象给我。
浏览器通过发送请求对象的 ETag 或者 自己所知道的最后修改时间给 WEB 服务器，让其判断对象是否改变了。
总是跟 Range 头部一起使用。

15. Last-Modified：WEB 服务器认为对象的最后修改时间，比如文件的最后修改时间，动态页面的最后产生时间等等。
例如：Last-Modified：Tue, 06 May 2008 02:42:43 GMT

16. Location：WEB 服务器告诉浏览器，试图访问的对象已经被移到别的位置了，到该头部指定的位置去取。
例如：Location：


17. Pramga：主要使用 Pramga: no-cache，相当于 Cache-Control： no-cache。
例如：Pragma：no-cache

18. Proxy-Authenticate： 代理服务器响应浏览器，要求其提供代理身份验证信息。
Proxy-Authorization：浏览器响应代理服务器的身份验证请求，提供自己的身份信息。

19. Range：浏览器（比如 Flashget 多线程下载时）告诉 WEB 服务器自己想取对象的哪部分。
例如：Range: bytes=1173546-

20. Referer：浏览器向 WEB 服务器表明自己是从哪个 网页/URL 获得/点击 当前请求中的网址/URL。
例如：Referer：http://www.sina.com/

21. Server: WEB 服务器表明自己是什么软件及版本等信息。
例如：Server：Apache/2.0.61 (Unix)

22. User-Agent: 浏览器表明自己的身份（是哪种浏览器）。
例如：User-Agent：Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.1.14) Gecko/20080404 Firefox/2.0.0.14

23. Transfer-Encoding: WEB 服务器表明自己对本响应消息体（不是消息体里面的对象）作了怎样的编码，比如是否分块（chunked）。
例如：Transfer-Encoding: chunked

24. Vary: WEB服务器用该头部的内容告诉 Cache 服务器，在什么条件下才能用本响应所返回的对象响应后续的请求。
假如源WEB服务器在接到第一个请求消息时，其响应消息的头部为：Content-Encoding: gzip; Vary: Content-Encoding
那么 Cache 服务器会分析后续请求消息的头部，检查其 Accept-Encoding，是否跟先前响应的 Vary 头部值一致，即是否使用
相同的内容编码方法，这样就可以防止 Cache 服务器用自己 Cache 里面压缩后的实体响应给不具备解压能力的浏览器。
例如：Vary：Accept-Encoding

25. Via： 列出从客户端到 OCS 或者相反方向的响应经过了哪些代理服务器，他们用什么协议（和版本）发送的请求。
当客户端请求到达第一个代理服务器时，该服务器会在自己发出的请求里面添加 Via 头部，并填上自己的相关信息，当下一个代理服务器
收到第一个代理服务器的请求时，会在自己发出的请求里面复制前一个代理服务器的请求的Via 头部，并把自己的相关信息加到后面，
以此类推，当 OCS 收到最后一个代理服务器的请求时，检查 Via 头部，就知道该请求所经过的路由。
例如：Via：1.0 236-81.D07071953.sina.com.cn:80 (squid/2.6.STABLE13)

============================================================================================================================
// HTTP 请求消息头部实例：
// Host：rss.sina.com.cn
// User-Agent：Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.1.14) Gecko/20080404 Firefox/2.0.0.14
// Accept：text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,* / *;q=0.5
// Accept-Language：zh-cn,zh;q=0.5
// Accept-Encoding：gzip,deflate
// Accept-Charset：gb2312,utf-8;q=0.7,*;q=0.7
// Keep-Alive：300
// Connection：keep-alive
// Cookie：userId=C5bYpXrimdmsiQmsBPnE1Vn8ZQmdWSm3WRlEB3vRwTnRtW   <-- Cookie 
// If-Modified-Since：Sun, 01 Jun 2008 12:05:30 GMT
// Cache-Control：max-age=0

// HTTP 响应消息头部实例：
// Status：OK - 200                                                <-- 响应状态码，表示 web 服务器处理的结果。 
// Date：Sun, 01 Jun 2008 12:35:47 GMT
// Server：Apache/2.0.61 (Unix)
// Last-Modified：Sun, 01 Jun 2008 12:35:30 GMT
// Accept-Ranges：bytes
// Content-Length：18616
// Cache-Control：max-age=120
// Expires：Sun, 01 Jun 2008 12:37:47 GMT
// Content-Type：application/xml
// Age：2
// X-Cache：HIT from 236-41.D07071951.sina.com.cn                  <-- 反向代理服务器使用的 HTTP 头部
// Via：1.0 236-41.D07071951.sina.com.cn:80 (squid/2.6.STABLE13)
// Connection：close  

*/



//---------------------------------------
// PHP使用header()输出图片缓存实例
// 很多开发中，我们试图使用header("Content-type: image/jpeg");来 输出图片，试图用一些php的图像处理技术，让输出图片更加智能和动感。但我们常常遇到新的问题，除非你规定不同的URL结构，并采用服务器技术将图片缓存，否则很有可能这些输出图片会消耗大量的流量。怎么把它们缓存起来，下次用户访问的时候调用缓存呢？（前提是你的这个图片希望保持不变）



// // 复制代码 代码如下:
// // put this above any php image generation code:
// session_start(); 
// header("Cache-Control: private, max-age=10800, pre-check=10800");
// header("Pragma: private");
// header("Expires: " . date(DATE_RFC822,strtotime(" 2 day")));

// 在header("Content-type: image/jpeg");上方添加上面这段代码，它将规定当前页面缓存的时间（两天），并在下一次访问中使用这个缓存时间节点。
// // 接下来判断是否已经有缓存，如果有，就使用缓存。
// // 情况一：如果浏览器对当前页面已经有缓存，那么就直接使用它。
// // 复制代码 代码如下:
// // the browser will send a $_SERVER['HTTP_IF_MODIFIED_SINCE'] if it has a cached copy 
// if(isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])){
//   // if the browser has a cached version of this image, send 304
//   header('Last-Modified: '.$_SERVER['HTTP_IF_MODIFIED_SINCE'],true,304);
//   exit;
// }

// // 情况二：浏览器缓存了当前页，虽然我们更新了某些图片信息，但来源图片本身没有变化，而且我们希望使用之前的缓存，那么也使用缓存。
// // 复制代码 代码如下:
// $img = "some_image.png";
// if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && (strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == filemtime($img))) {
//   // send the last mod time of the file back
//   header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($img)).' GMT',true, 304);
//   exit;
// }

// // 当然，有些特殊的情况我们还必须考虑，但上面的代码基本上能够带领我们的思路。对了，记得把它们都放在header("Content-type: image/jpeg")的上面。
// // 接着我们来看个例子吧
// // 复制代码 代码如下:


// //调整图片大小
// /**
//  *图片按比例调整大小的原理：
//  *1、比较原图大小是否小于等于目标大小，如果是则直接采用原图宽高
//  *2、如果原图大小超过目标大小，则对比原图宽高大小
//  *3、如：宽>高，则宽=目标宽, 高=目标宽的比例 * 原高
//  *4、如：高>宽，则高=目标高，宽=目标高的比例 * 原宽   
// **/
 
// $image = "test.jpg";
// $max_width = 200;
// $max_height = 200;
 
// $size = getimagesize($image);   //得到图像的大小
// $width = $size[0];             
// $height = $size[1];
 
// $x_ratio = $max_width / $width;
// $y_ratio = $max_height / $height;
 
// if (($width <= $max_width) && ($height <= $max_height)){
//     $tn_width = $width;
//     $tn_height = $height;
// }elseif (($x_ratio * $height) < $max_height){
//     $tn_height = ceil($x_ratio * $height);
//     $tn_width = $max_width;
// }else{
//     $tn_width = ceil($y_ratio * $width);
//     $tn_height = $max_height;
// }
 
// $src = imagecreatefromjpeg($image);
// $dst = imagecreatetruecolor($tn_width, $tn_height); //新建一个真彩色图像
// imagecopyresampled($dst, $src, 0, 0, 0, 0,$tn_width, $tn_height, $width, $height);        //重采样拷贝部分图像并调整大小
// header('Content-Type: image/jpeg');
// imagejpeg($dst,null,100);
// imagedestroy($src);
// imagedestroy($dst);


//---------------------------------------


// // 范例一: 
// Header("Location: http://www.jb51.net";); 
// exit;//在每个重定向之后都必须加上“exit",避免发生错误后，继续执行。


// header("refresh:2;url=http://www.jb51.net");
// echo "正在加载，请稍等...<br>三秒后自动跳转至<a href="http://www.jb51.net" mce_href="http://www.jb51.net">百度</a>...";

// // --------------------------------------------------------------------------------
// // 范例二:禁止页面在IE中缓存 
// // 使浏览者每次都能得到最新的资料，而不是 Proxy 或 cache 中的资料：
// // 复制代码 代码如下:


// header( 'Expires: Fri, 4 Dec 2009 09:00:00 GMT' );
// header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
// header( 'Cache-Control: no-store, no-cache, must-revalidate' );
// header( 'Cache-Control: post-check=0, pre-check=0', false );
// header( 'Pragma: no-cache' ); //兼容http1.0和https



// // CacheControl = no-cache  Pragma=no-cache  Expires = -1
// // 如果服务器上的网页经常变化，就把Expires设置为-1，表示立即过期。如果一个网页每天凌晨1点更新，可以把Expires设置为第二天的凌晨1点。当HTTP1.1服务器指定CacheControl = no-cache时，浏览器就不会缓存该网页。
// // 旧式 HTTP 1.0 服务器不能使用 Cache-Control 标题。所以为了向后兼容 HTTP 1.0 服务器，IE使用Pragma:no-cache 标题对 HTTP 提供特殊支持。如果客户端通过安全连接 (https://) 与服务器通讯，且服务器在响应中返回 Pragma:no-cache 标题，则 Internet Explorer 不会缓存此响应。
// // 注意：Pragma:no-cache 仅当在安全连接中使用时才防止缓存，如果在非安全页中使用，处理方式与 Expires:-1 相同，该页将被缓存，但被标记为立即过期。
// // http-equiv meta标记：
// // 在html页面中可以用http-equiv meta来标记指定的http消息头部。老版本的IE可能不支持html meta标记，所以最好使用http消息头部来禁用缓存。
// // --------------------------------------------------------------------------------
// // 范例三: 让使用者的浏览器出现找不到档案的信息。 
// // 网上很多资料这样写：php的函数header()可以向浏览器发送Status标头，
// // 如　header(”Status: 404 Not Found”)。但实际上浏览器返回的响应却是：
// // 复制代码 代码如下:

// // HTTP/1.x 200 OK
// // Date: Thu, 03 Aug 2006 07:49:11 GMT
// // Server: Apache/2.0.55 (Win32) PHP/5.0.5
// // X-Powered-By: PHP/5.0.5
// // Status: 404 Not Found
// // Content-Length: 0
// // Keep-Alive: timeout=15, max=98
// // Connection: Keep-Alive
// // Content-Type: text/html

// // 查了一些资料，正确的写法是：
// // header(”http/1.1 404 Not Found”);
// // 第一部分为HTTP协议的版本(HTTP-Version)；第二部分为状态代码(Status)；第三部分为原因短语(Reason-Phrase)。
// // --------------------------------------------------------------------------------
// // 范例四:让使用者下载档案( 隐藏文件的位置 )
// // html标签 就可以实现普通文件下载。如果为了保密文件，就不能把文件链接告诉别人，可以用header函数实现文件下载。
// // 复制代码 代码如下:


// header("Content-type: application/x-gzip"); 
// header("Content-Disposition: attachment; filename=文件名/"); 
// header("Content-Description: PHP3 Generated Data"); 


// // 范例四:header函数前输入内容
// // 一般来说在header函数前不能输出html内容，类似的还有setcookie() 和 session 函数，这些函数需要在输出流中增加消息头部信息。如果在header()执行之前有echo等语句，当后面遇到header()时，就会报出 “Warning: Cannot modify header information - headers already sent by ….”错误。就是说在这些函数的前面不能有任何文字、空行、回车等，而且最好在header()函数后加上exit()函数。例如下面的错误写法，在两个php代码段之间有一个空行：


// //这里应该是一个空行
// header(”http/1.1 403 Forbidden”);
// exit();


// // 原因是：PHP脚本开始执行 时,它可以同时发送http消息头部(标题)信息和主体信息. http消息头部(来自 header() 或 SetCookie() 函数)并不会立即发送,相反,它被保存到一个列表中. 这样就可以允许你修改标题信息,包括缺省的标题(例如 Content-Type 标题）.但是,一旦脚本发送了任何非标题的输出（例如,使用 HTML 或 print() 调用),那么PHP就必须先发送完所有的Header,然后终止 HTTP header.而后继续发送主体数据.从这时开始,任何添加或修改Header信息的试图都是不允许的,并会发送上述的错误消息之一。
// // 解决办法：
// // 修改php.ini打开缓存(output_buffering),或者在程序中使用缓存函数ob_start()，ob_end_flush()等。原理是：output_buffering被启用时,在脚本发送输出时，PHP并不发送HTTP header。相反，它将此输出通过管道（pipe）输入到动态增加的缓存中（只能在PHP 4.0中使用，它具有中央化的输出机制）。你仍然可以修改/添加header，或者设置cookie，因为header实际上并没有发送。当全部脚本终止时，PHP将自动发送HTTP header到浏览器，然后再发送输出缓冲中的内容。
// // =================================================================
// // PHP 手册实例应用
// // 1：您可以使用heder命令，强制使浏览器使用新鲜的内容（无缓存） 。
// // 也可以给网址增加了一个唯一的编号，使其每次都读取新的内容，避免缓存。
// // example:
// // 复制代码 代码如下:


// print "<img src="cs.jpg" mce_src="cs.jpg">";   //通常读取的是缓存文件


// print "<img src="cs.jpg?".time()."" mce_src="cs.jpg?".time()."">";   //增加了唯一的编号，使浏览器重新请求
// //print "<img src="cs.jpg?".rand(100,999)."" mce_src="cs.jpg?".rand(100,999)."">"; 

// // 2: 下面是个很好的函数，将图片传送给浏览器显示。
// // 复制代码 代码如下:

// function PE_img_by_path($PE_imgpath = "")
// {
//     if (file_exists($PE_imgpath)) {
//         $PE_imgarray = pathinfo($PE_imgpath);
//         $iconcontent = file_get_contents($PE_imgpath);
//         header("Content-type: image/" . $PE_imgarray["extension"]);
//         header('Content-length: ' . strlen($iconcontent));
//         echo $iconcontent;
//         die(0);
//     }
//     return false;
// } 


// // 更多的实例：
// // 复制代码 代码如下:
// // ok
// header('HTTP/1.1 200 OK');
// //设置一个404头:
// header('HTTP/1.1 404 Not Found');
// //设置地址被永久的重定向
// header('HTTP/1.1 301 Moved Permanently');
// //转到一个新地址
// header('Location: http://www.baidu.com');
// //文件延迟转向:
// header('Refresh: 10; url=http://www.example.org/');
// print 'You will be redirected in 10 seconds';
// //当然，也可以使用html语法实现
// // <meta http-equiv="refresh" content="10;http://www.example.org/ />
// // override X-Powered-By: PHP:
// header('X-Powered-By: PHP/4.4.0');
// header('X-Powered-By: Brain/0.6b');
// //文档语言
// header('Content-language: en');
// //告诉浏览器最后一次修改时间
// $time = time() - 60; // or filemtime($fn), etc
// header('Last-Modified: '.gmdate('D, d M Y H:i:s', $time).' GMT');
// //告诉浏览器文档内容没有发生改变
// header('HTTP/1.1 304 Not Modified');
// //设置内容长度
// header('Content-Length: 1234');
// //设置为一个下载类型
// header('Content-Type: application/octet-stream');
// header('Content-Disposition: attachment; filename="example.zip"'); 
// header('Content-Transfer-Encoding: binary');
// // load the file to send:
// readfile('example.zip');
// // 对当前文档禁用缓存
// header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
// header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
// header('Pragma: no-cache');
// //设置内容类型:
// header('Content-Type: text/html; charset=iso-8859-1');
// header('Content-Type: text/html; charset=utf-8');
// header('Content-Type: text/plain'); //纯文本格式
// header('Content-Type: image/jpeg'); //JPG图片
// header('Content-Type: application/zip'); // ZIP文件
// header('Content-Type: application/pdf'); // PDF文件
// header('Content-Type: audio/mpeg'); // 音频文件
// header('Content-Type: application/x-shockwave-flash'); //Flash动画
// //显示登陆对话框
// header('HTTP/1.1 401 Unauthorized');
// header('WWW-Authenticate: Basic realm="Top Secret"');
// print 'Text that will be displayed if the user hits cancel or ';
// print 'enters wrong login data';
