<?php
//header('Content-Type: text/html; charset=utf-8');
/*
HTML5新增标签简介         类别: HTML5 百科
------------------区域------------------------------------------------

<section>  标记定义一个区域
<article>  标记定义一篇文章
<header>   标记定义一个页面或一个区域的头部
<footer>   标记定义一个页面或一个区域的底部
<aside>    标记定义页面内容部分的侧边栏
<nav>      标记定义导航链接

<hgroup>   标记定义文件中一个区块的相关信息
<details>  标记定义一个元素的详细内容
<dialog>   标记定义一个对话框(会话框)
<source>   标记定义媒体资源
<figure>   标记定义一组媒体内容以及它们的标题
------------------元素--------------------------------

<canvas>   标记定义图片
<audio>    标记定义音频内容
<video>    标记定义一个视频
<embed>    标记定义外部的可交互的内容或插件

<mark>     标记定义有标记的文本
<time>     标记定义一个日期/时间
<keygen>   标记定义表单里一个生成的键值
<datalist> 标记定义一个下拉列表 select option
<command>  标记定义一个命令按钮
<output>   标记定义一些输出类型
<progress> 标记定义任务的过程
------------------其他-------------------------------

<meter>    标记定义 measurement within a predefined range
<rp>       标记是用在ruby annotations 告诉那些不支持 Ruby元素的浏览器如何去显示
<rt>       标记定义对ruby annotations的解释
<ruby>     标记定义 ruby annotations.
*/

$html= <<< html
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<title></title>
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />

</head>
<body>
	<!-- #test start -->
	<div id="test">
		<p>101</p>
		<p class="a">110</p>
		<p>101</p>
	</div>
	<p>001</p>
	<p class="a">010</p>

	<script type="text/javascript">
		$(function(){
			$("p").css({ background:"#ddd" });//加入顺序相关。（不按照权限级别来导入，按JS执行顺序来改变样式）
			$(".a").css({ background:"#F0F" });//加入顺序相关。
			$("#test p").css({ background:"#333" });
			$("#test .a").css({ background:"#00F" });
			$("#test").css({ background:"#0F0" });

		});
	</script>
	<!-- #test end -->
</body>
</html>
html;

//echo $html;

//		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">


//css的优先顺序
//------------------------------------------------------------------------------------------
//0. 最高级别是 !important 》
//1. 行内标签（p标签上直接加style属性的方式）》
//2. head体内定义方式： a. id的级别为100  =>  b. class为010  =>  c. html标签为001 (~同级别都可以叠加~)
//
//p 					//(001)
//.test					//(010)
//#test 				//(100)
//#test p				//(101)
//#test .test1 			//(110)
//.test{!important} 	//(top)
//
//顺序是从后往前~   !important > 110 > 101 > 100 > 10 > 1
//
//-------------例子--------------------------------------------------------------------------
//1.用css来改变样式
// $css1 = <<< css1
// <style>
// 	p{background:#ddd;}				/*001*/
// 	.a {background:#F0F;} 			/*010*/ /*从小到大执行（权限越大，越最后执行。复写操作）*/
// 	#test p {background:#333;}		/*101*/
// 	#test .a {background:#00F;}		/*110*/
// 	#test {background:#0F0;}		/*100*/

// 	/*规范，有强制代码的写在CSS代码最下面。（为了理解上更容易，权限等级顺序来写CSS代码。）*/
//  	.a {background:#ccc !important;width:200px !important; } 			/*010*/ /*不推荐*/
//  	/*#test .a {background:#ccc !important;width:200px !important; }*/		/*110*/ /*推荐*/
// 	/*不要在类和标签上直接加强制符号，这样会给#test里面的也都会强制刷掉。(加上作用范围#id)*/
// </style>

// <div id="test">
// 	<p>101</p>
// 	<p class="a">110</p>
// 	<p>101</p>
// </div>
// <p>001</p>
// <p class="a">010</p>
// css1;

//2.用js来改变样式
// $css2 = <<< css2
// 	<!-- #test start -->
// 	<div id="test">
// 		<p>101</p>
// 		<p class="a">110</p>
// 		<p>101</p>
// 	</div>
// 	<p>001</p>
// 	<p class="a">010</p>

// 	<script type="text/javascript">

// 			$("p").css({ background:"#ddd" });//加入顺序相关。（不按照权限级别来导入，按JS执行顺序来改变样式）
// 			$(".a").css({ background:"#F0F" });//加入顺序相关。
// 			$("#test p").css({ background:"#333" });
// 			$("#test .a").css({ background:"#00F" });
// 			$("#test").css({ background:"#0F0" });

// 	</script>
// 	<!-- #test end -->
// css2;

//--------------------------------------------------------------------------------



