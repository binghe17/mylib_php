<?php



//两个字符串的相识度		//!!!!!搜索引擎
function str_bijiao2pecent($str1,$str2){
	similar_text($str1, $str2,$percent);
	return $percent;
}
//echo str_bijiao2pecent('abcde', 'abcd');




//字符串转码
function str_zhuanma($str,$fromLang='gb2312',$toLang='utf-8'){//euc-kr 
	return iconv($fromLang, $toLang, $str);
}

//========================【string】============================================


//-------------------截取-------------------------------------

//定位
echo strpos("Hello world!","wo");//6   		查找 首次出现的位置(大小写 敏感)
echo stripos("Hello world!","WO");//6 		查找 首次出现的位置(大小写 不敏感)
echo strrpos("Hello world!","wo");//6    		查找 最后出现的位置(大小写 敏感)
echo strripos("Hello world!","WO"); //6   	查找 最后出现的位置(大小写 不敏感)

//定位(判断多个)
echo strpbrk("Hello world!","oe");//ello world!  在字符串中搜索指定字符中的任意一个。



//截取
echo substr("Hello world!",6);//world!     		返回字符串的一部分
echo substr("Hello world!",6,5);///world

//查找并向后截取
echo strstr("Hello world!","world");//world!   		查找 首次出现的位置(大小写 敏感)别名strchr
echo stristr("Hello world!","WORLD");//world!   	查找 首次出现的位置(大小写 不敏感)
echo strrchr("Hello world!","world");//world!  	查找 最后出现的位置




//---------------------替换-----------------------------------


//替换
echo str_replace('@','#','yc60.com@gmail.com' );//替换字符串中的一些字符。（对大小写敏感）
echo str_ireplace("world","John","Hello world!");//Hello John! 替换字符串中的一些字符。（对大小写不敏感） 

echo substr_replace('yc60.com@gmail.com' ,'###',0,5);//###com@gmail.com
echo substr_replace("Hello world","earth",6);//Hello earth

echo strtr("Hilla Warld","ia","eo");//Hello World     转换字符串中特定的字符
echo strtr("Hello world",array("Hello" => "Hi", "world" => "earth"););//Hi earth


//按字符分割
echo explode('@','yc60.com@gmail.com' );	//符号拆分
echo strtok("I,will.be#back",",.#");//字符串分割为更小的字符串(一个或多个分割字符)
//按个数分割
print_r(str_split("Hello"));	//array( 'H', 'e', 'l', 'l','o');   个数拆分
print_r(str_split("Hello",3));	//array('hel','lo');
//按空格分割
print_r(str_word_count("Hello world!",1));//[0] => Hello  [1] => world   返回包含字符串中的单词的数组
print_r(str_word_count("Hello world!",2));//[0] => Hello  [6] => world   返回键是单词在字符串中的位置
echo str_word_count("Hello world!");//2    计算字符串中的单词数 


//合并
echo implode(" ",array('Hello','World!','Beautiful','Day!'));//Hello World! Beautiful Day!   //合并



//--------------过滤----------------------------------------


//清理多余空格
trim('   PHP    ');	//删除两边空白
ltrim('   PHP    ');	//删除左边空白
rtrim('   PHP    ');	//删除右边空白


//大小写(全文)
echo strtolower("Hello WORLD!");///hello world!   		把字符串转换为小写
echo strtoupper("Hello WORLD!");///HELLO WORLD!   	把字符串转换为大写
//大小写(首字母)
echo ucfirst('abc deFghijk1234');//Abc deFghijk1234		将第一个字母转换为 大写
echo ucwords('AbcdeF ghijk1234');	//AbcdeF Ghijk1234		将每个单词第一个字母转换为 大写


//html标签过滤
echo strcspn("Hello world!","w");//6
echo strip_tags("Hello <b>world!</b>");//Hello world!    剥去 HTML、XML 以及 PHP 的标签。
echo strip_tags("Hello <b><i>world!</i></b>","<b>");//Hello <b>world!</b>


//html换行
echo nl2br("This is a Teacher!\nThis is a Student!"); //XHTML 中的<br />标记代替字符串中的换行符

$str = "An example on a long word is: Supercalifragulistic";
echo wordwrap($str,15);//源代码加\n
echo wordwrap($str,15,"<br />\n");//An example on a     long word is:       Supercalifragulistic
echo wordwrap($str,15,"<br />\n",TRUE);//An example on a      long word is:       Supercalifragul          istic

//html字符编码替换
$str = "John & 'Adams'";
echo htmlentities($str, ENT_COMPAT);//John &amp; 'Adams'<br />        //默认。仅编码双引号。
echo htmlentities($str, ENT_QUOTES);//John &amp; &#039;Adams&#039;<br />     //编码双引号和单引号
echo htmlentities($str, ENT_NOQUOTES);//John &amp; 'Adams'         //不编码任何引号
echo html_entity_decode($str, ENT_QUOTES);
echo htmlspecialchars($str, ENT_QUOTES);// •< （小于） 成为 &lt;	•> （大于） 成为 &gt;// •& （和号） 成为 &amp;	•" （双引号） 成为 &quot;	•' （单引号） 成为 &#039;
echo htmlspecialchars_decode($str, ENT_QUOTES);


//sql转义符
echo quotemeta("Hello world. (can you hear me?)");//Hello world\. \(can you hear me\?\)

echo addcslashes("Hello, my name is John Adams.",'m');//Hello, \my na\me is John Ada\ms.
echo addcslashes("Hello, my name is John Adams.",'J');//Hello, my name is \John Adams.
echo addcslashes("Hello, my name is John Adams.",'A..Z');//\Hello, my name is \John \Adams.
echo addcslashes("Hello, my name is John Adams.",'a..h');//H\ello, my n\am\e is Jo\hn A\d\ams.
echo stripcslashes("Hello, \my na\me is Kai Ji\m.");//Hello, my name is Kai Jim.

echo addslashes("Who's John Adams?");//Who\'s John Adams?        •单引号 (')•双引号 (")•反斜杠 (\)•NULL
echo stripslashes("Who\'s John Adams?");//Who's John Adams?






//------------处理---------------------------------

// 随机打乱（排序）
echo str_shuffle("Hello World");///H elooWlrdl  随机打乱字符串

//反转（排序）
echo strrev("Hello World!");//!dlroW olleH   反转字符串



//填充
str_pad($str,20,".");//Hello World.........
str_pad($str,20,".",STR_PAD_LEFT);//.........Hello World
str_pad($str,20,".:",STR_PAD_BOTH);//.:.:Hello World.:.:.

echo chunk_split($str,1,".");//H.e.l.l.o. .w.o.r.l.d.!.       把字符串分割为一连串更小的部分。 
echo chunk_split($str,6,"...");//Hello ...world!...
echo str_repeat(".",13);//.............


//------------------------比较------------------------------


//比较，出现字符数。
echo strspn("Hello world!","kHlleo");//5 返回在字符串中包含的特定字符的数目
echo strspn("abcdefand","abc");//3

//比较
echo substr_compare("Hello world","Hello world",0);///0  arg3何处开始比较     从指定的开始长度比较两个字符串
echo substr_compare("Hello world","world",6);//0     
echo substr_compare("Hello world","WORLD",6,TRUE);//0     arg4参与比较的字符数

echo strcmp('a','b');
echo strcmp("Hello world!","Hello world!");//0 			比较两个字符串（大小写 敏感）
echo strcasecmp("Hello world!","HELLO WORLD!");//0    	比较两个字符串（大小写 不敏感）

echo strnatcmp("2Hello world!","10Hello world!");//-1 		“自然”算法来比较两个字符串（大小写 敏感）
echo strnatcmp("10Hello world!","2Hello world!");//1
echo strnatcasecmp("2Hello world!","10Hello world!");//-1   	“自然”算法来比较两个字符串（大小写 不敏感）
echo strnatcasecmp("10Hello world!","2Hello world!");//1

echo strncmp("Hello world!","Hello earth!",6);//0   		前 n 个字符的字符串比较(大小写 敏感)
echo strncasecmp("Hello world!","Hello earth!",6);//0  		前 n 个字符的字符串比较(大小写 不敏感)




//----------------etc---------------------------


//字符
echo chr(52);//4     从指定的 ASCII 值返回字符。 
echo chr(052);//*
echo chr(0x52);//R


//编码
$str = "Hello world!";
echo bin2hex($str);//48656c6c6f20776f726c6421     把 ASCII 字符的字符串转换为十六进制值 
echo pack("H*",bin2hex($str));//Hello world!


//crc32
$str = crc32("Hello world.");
echo 'Without %u: '.$str."<br />"; //Without %u: -1959132156
echo 'With %u: '; printf("%u",$str); //With %u: 2335835140

//rot13
echo str_rot13("Hello World");//Uryyb Jbeyq
echo str_rot13("Uryyb Jbeyq");//Hello World

//md5
$str = "Hello";
echo md5($str);//8b1a9953c4611296a827abf8c47804d7      计算字符串的 MD5 散列
echo md5_file("test.txt");//5d41402abc4b2a76b9719d911017c592       计算文件的 MD5 散列

//sha1
echo sha1($str);//f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0        计算字符串的 SHA-1 散列
echo sha1_file("test.txt");//aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d      计算文件的 SHA-1 散列

//uucode
echo $str=convert_uuencode($str);//,2&5L;&\@=V]R;&0A `
echo convert_uudecode($str);//Hello world!


//-------------------------------

//长度
echo strlen("Hello world!");//12
//统计
echo substr_count("Hello world. The world is nice","world");//2  出现的次数


//格式化
setlocale(LC_MONETARY, "en_US");
echo money_format("The price is %i", 1234.56);//The price is USD 1,234.56
echo number_format("1000000",2);//1,000,000.00


//url 2 arr
parse_str("id=23&name=John%20Adams",$myArray);
print_r($myArray);







