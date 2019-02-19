<?php 
/*	字符串

学习要点：
	1.字符串格式化
	2.操作子字符串
	3.字符串比较
	4.查找替换字符串
	5.处理中文字符

在每天的编程工作中，处理、调整以至最后控制字符串是很重要的一部分，一般也认为
这是所有编程语言的基础。不同与其他语言，PHP 没有那么麻烦地使用数据类型来处理字
符串。这样一来，PHP 中的字符串处理就再容易不过了。

 */



/* 一．字符串格式化

整理字符串的第一步是清理字符串中多余的空格。虽然这一部操作不是必需的，但如果
要将字符串存入一个文件或数据库中，或者将它和别的字符串进行比较，这就是非常有用的 。
chop()函数移除字符串后面多余的空白，包括新行。
ltrim()函数移除字符串起始处多余空白。
rtrim()函数移除字符串后面多余的空白，包括新行，此函数是 chop()的别名。
trim()函数移除字符串两边多余的空白。
 */
echo trim('   PHP    ');
echo '<br>';

//PHP 具有一系列可供使用的函数来重新格式化字符串，这些函数的工作方式是各不相同的。
//nl2br()函数将字符串作为输入参数，用 XHTML 中的<br />标记代替字符串中的换行符。
echo nl2br("This is a Teacher!\nThis is a Student!");
echo '<br>';


echo htmlentities('<strong>我是吴祁！</strong>'); 		//将特殊字符转换为 HTML 等价形式
echo htmlspecialchars('<strong>我是吴祁！</strong>');	//将特殊字符转换为 HTML 等价形式
echo strip_tags('<strong>我是吴祁！</strong>');			//去掉字符串中的 HTML 去掉

echo strtoupper('AbcdeFghijk1234');		//将字符串转换为 大写(格式化字符串)
echo strtolower('AbcdeFghijk1234');		//将字符串转换成 小写
echo ucfirst('abc deFghijk1234');		//将第一个字母转换为 大写
echo ucwords('AbcdeF ghijk1234');		//将每个单词第一个字母转换为 大写
echo '<br>';

//填充字符串函数：str_pad()将字符串用指定个数的字符填充字符串。
echo str_pad('Salad',10).'is good.';
echo '<br>';
echo addslashes('This is \a" Teacher! ');//（单引号和双引）、反斜杠（\）和 NULL 字符。
echo '<br>';






/* 二．操作子字符串

通常，我们想查看字符串的各个部分。例如，查看句子中的单词，或者将一个域名或电
子邮件地址分割成一个个的组件部分。PHP 提供了几个字符串函数来实现此功能。

使用函数 explode()、implode()和 join()
为了实现这个功能，我们将使用的第一个函数是 explode()。
使用 implode()或 join()函数来实现与函数 explode()相反的效果，这两个函数的效果是一致的。
*/
$email = 'yc60.com@gmail.com' ;
$email_array = explode('@',$email);

//使用 strtok()函数
//strtok()函数一次只从字符串取出一些片段（称为令牌）。对于一次从字符串中取出一个单词的处理来说，strtok()函数比 explode()函数的效果更好。 
$str = "I,will.be#back" ;
$tok = strtok($str,",.#");
while ($tok) {
	echo "$tok <br \>";
	$tok = strtok(",.#");
}
echo '<br>';

//使用 substr()函数
//函数 substr()允许我们访问一个字符串给定起点和终点的子字符串。这个函数并不适用于我们的例子中，但是，当需要得到某个固定格式字符串中的一部分时，它会非常有用。
echo substr("abcdef", 1, 3);
echo '<br>';

//分解字符串：str_split()返回一个数组，其中各数组元素分别是字符串参数中的一个字符串。
print_r(str_split('This is a Teacher!'));
echo '<br>';

//逆置字符串：strrev()可以将一个字符串逆反过来。
echo strrev('This is a Teacher!');
echo '<br>';






/* 三．字符串比较

到目前为止，我们已经用过"= ="号来比较两个字符串是否相等。使用 PHP 可以进行一
些更复杂的比较。这些比较分为两类：部分匹配和其他情况。

字符串的排序：strcmp()、strcasecmp()和 strnatcmp()
该函数需要两个进行比较的参数字符串。如果这两个字符串相等，该函数返回 0，如果
按字典顺序 str1 和 str2 后面（大于 str2）就返回一个正数，如果 str1 小于 str2 就返回一个负
数。这个函数是区分大小写的。

函数 strcasecmp()除了不区分大小写之外，其他和 strcmp()一样。
函数 strnatcmp()及与之对应的不区分大小写的 strnatcasecmp()函数是在 PHP4 中新增的。
这两个函数按“自然排序”比较字符串，所谓自然排序是按人们习惯的顺序进行排序。
 */
echo strcmp('a','b');
echo '<br>';

//使用 strspn()函数返回一个字符串中包含有另一个字符串中字符的第一部分的长度。也就是求两个字符串之间相同的部分。
echo strspn('gmail','yc60.com@gmail.com');
echo '<br>';

//使用 strlen()函数测试字符串的长度
//可以使用函数 strlen()来检查字符串的长度。如果传给它一个字符串，这个函数将返回字符串的长度。例如, strlen("hello") 将返回 5.
echo strlen('This is a Teacher!');
echo '<br>';


//确定字符串出现的频率：substr_count()返回一个字符串在另一个字符串中出现的次数。
echo substr_count('yc60.com@gmail.com' ,'c');
echo '<br>';






/* 四．查找替换字符串

通常，我们需要检查一个更长的字符串中是否含有一个特定的子字符串。这种部分匹配
通常比测试字符串的完全等价更有用处。

在字符串中查找字符串：strstr()、strchr()、strrchr()和 stristr()
函数 strstr()是最常见的，它可以用于在一个较长的字符串专供查找匹配的字符串或字
符。请注意，函数 strchr()和 strstr()完全一样。
*/
echo strstr('yc60.com@gmail.com' ,'@');
echo '<br>';

/*
函数 strstr()有两个变体。第一个变体是 stristr()，它几乎和 strstr()一样，
其区别在于不区分字符大小。对于我们的只能表单应用程序来说，这个函数非常有用，
因为用户可以输入"delivery"、"Delivery"和"DELIVERY"。

第二个变体是 strrchr()，它也几乎和 strstr()一样，只不过是 strstr()的别名。

查找字符串的位置：strpos()、strrpos()。
函数 strpos()和 strrpos()的操作和 strstr()类似，但它不是返回一个子字符串，而返回子字
符串 needle 在字符串 haystack 中的位置。更有趣的是，现在的 PHP 手册建议使用 strpos()
函数代替 strstr()函数来查看一个子字符串在一个字符串中出现的位置，因为前者的运行速度更快。
*/
echo strrpos('yc60.com@gmail.com' ,'c');
echo '<br>';

//替换字符串：str_replace()、str_ireplace()、substr_replace()
echo str_replace('@','#','yc60.com@gmail.com' );
echo '<br>';
echo substr_replace('yc60.com@gmail.com' ,'###',0,5);
echo '<br>';





/* 五. 处理中文字符

对于以上的字符串函数，有些可以用于中文，但有些却不适用中文。所以，PHP 提供
了专门的函数来解决这样的问题。
中文字符可以是 gbk,utf8,gb2312
 

mb_strlen() 对应的函数为 strlen()
mb_strstr() 对应的函数为 strstr()


求字符串的长度
求某字符串到结尾的字符
 
mb_strpos() 对应的函数为 strpos() 求出字符最先出现处
mb_substr() 对应的函数为 substr() 取出指定的字符串
mb_substr_count() 对应函数为 substr_str() 返回字符串出现的次数

 */


?>