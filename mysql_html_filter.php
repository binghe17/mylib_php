<?php 
/*
htmlentities()	把字符转换为 HTML 实体。	3
html_entity_decode()	把 HTML 实体转换为字符。	4

htmlspecialchars()	把一些预定义的字符转换为 HTML 实体。
htmlspecialchars_decode()	把一些预定义的 HTML 实体转换为字符。	5
*/
/*
//strip_tags() 函数剥去 HTML、XML 以及 PHP 的标签。
	echo strip_tags("Hello <b>world!</b>");
	输出：
		Hello world!
	echo strip_tags("Hello <b><i>world!</i></b>","<b>");
	输出：
		<b>Hello world!</b>
 */




//一般过滤
//trim() 函数从字符串的两端删除空白字符和其他预定义字符(tab键 \r \n 等)。
function input_html($str){
	$str = trim($str);	//删除两端 空白字符和其他预定义字符
	$str = htmlentities($str,ENT_QUOTES); //字符转换为 HTML实体 编码双引号和单引号(&amp; &#039;) 
	return $str;
}





//评论专用过滤
//hebrevc() 它也会把新行 (\n) 转换为 <br />。
function input_comment($str){
	$str = trim($str);	//删除两端 空白字符和其他预定义字符


	return $str;
}

