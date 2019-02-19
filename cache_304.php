<?php

//缓存时间
function cache_304($cachetime=10){
	if(isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && (time()-strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) < $cachetime)) {
		header('HTTP/1.1 304 Not Modified'); exit();
	}
	header('Last-Modified: ' . date('r', time()) );
}
cache_304();
//echo file_get_contents('');




//不缓存
function nocache_headers() {
	//@header( 'Expires: Wed, 11 Jan 1984 05:00:00 GMT' );
	//@header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
	@header( 'Expires: -1' );
	@header( 'Cache-Control: no-cache, must-revalidate, max-age=0' );
	@header( 'Pragma: no-cache' );
}
//nocache_headers();






//-------------------------------------------------------
/*

	网页的缓存是由HTTP消息头中的“Cache-control”来控制的，常见的取值有private、no-cache、max-age、must-revalidate等，默认为private。其作用根据不同的重新浏览方式分为以下几种情况：

（1） 打开新窗口
	值为private、no-cache、must-revalidate，那么打开新窗口访问时都会重新访问服务器。
而如果指定了max-age值，那么在此值内的时间里就不会重新访问服务器，例如：
Cache-control: max-age=5(表示当访问此网页后的5秒内再次访问不会去服务器)

（2） 在地址栏回车
	值为private或must-revalidate则只有第一次访问时会访问服务器，以后就不再访问。
	值为no-cache，那么每次都会访问。
	值为max-age，则在过期之前不会重复访问。

（3） 按后退按扭
	值为private、must-revalidate、max-age，则不会重访问，
	值为no-cache，则每次都重复访问

（4） 按刷新按扭
	无论为何值，都会重复访问

Cache-control值为“no-cache”时，访问此页面不会在Internet临时文章夹留下页面备份。

另外，通过指定“Expires”值也会影响到缓存。例如，指定Expires值为一个早已过去的时间，那么访问此网时若重复在地址栏按回车，那么每次都会重复访问： Expires: Fri, 31 Dec 1999 16:00:00 GMT

比如：禁止页面在IE中缓存

http响应消息头部设置：

CacheControl = no-cache
Pragma=no-cache
Expires = -1

Expires是个好东东，如果服务器上的网页经常变化，就把它设置为-1，表示立即过期。如果一个网页每天凌晨1点更新，可以把Expires设置为第二天的凌晨1点。

当HTTP1.1服务器指定CacheControl = no-cache时，浏览器就不会缓存该网页。

旧式 HTTP 1.0 服务器不能使用 Cache-Control 标题。
所以为了向后兼容 HTTP 1.0 服务器，IE使用Pragma:no-cache 标题对 HTTP 提供特殊支持。
如果客户端通过安全连接 (https://)与服务器通讯，且服务器在响应中返回 Pragma:no-cache 标题，
则 Internet Explorer不会缓存此响应。注意：Pragma:no-cache 仅当在安全连接中使用时才防止缓存，如果在非安全页中使用，处理方式与 Expires:-1相同，该页将被缓存，但被标记为立即过期。
本文转载自<这一客> http://www.geekso.com

 */


