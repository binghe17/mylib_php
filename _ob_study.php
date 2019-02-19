<?php

/*   ob_ 函数简介

//1、Flush()			：刷新缓冲区的内容，输出。
说明：这个函数经常使用，效率很高。  

//2、ob_start() 		：打开输出缓冲区   
说明：当缓冲区激活时，所有来自PHP程序的非文件头信息均不会发送，而是保存在内部缓冲区。  
      为了输出缓冲区的内容，可以使用ob_end_flush()或flush()输出缓冲区的内容。   

//3 、ob_get_contents() ：返回内部缓冲区的内容。  
说明：这个函数会返回当前缓冲区中的内容，如果输出缓冲区没有激活，则返回 FALSE 。   

//4、ob_get_length(void)：返回内部缓冲区的长度。   
说明：这个函数会返回当前缓冲区中的长度；和ob_get_contents一样，如果输出缓冲区没有激活。则返回 FALSE。   

//5、ob_end_flush(void) ：发送内部缓冲区的内容到浏览器，并且关闭输出缓冲区。  
说明：这个函数发送输出缓冲区的内容（如果有的话）。   
//ob_end_flush()（或程序执行完毕）之前不会被输出

//6、ob_end_clean(void)	：删除内部缓冲区的内容，并且关闭内部缓冲区   
说明：这个函数不会输出内部缓冲区的内容而是把它删除！   

//7、ob_implicit_flush([int flag])：打开或关闭绝对刷新   
说明：使用过Perl的人都知道$│=x的意义，这个字符串可以打开/关闭缓冲区，而ob_implicit_flush函数也和那个一样，
      默认为关闭缓冲区，打开绝对输出后，每个脚本输出都直接发送到浏览器，不再需要调用 flush()   

*/




/* ------------------------

for($i = 1; $i <= 255; $i++ ) print(' ');
// 这一句话非常关键，cache的结构使得它的内容只有达到一定的大小才能从浏览器里输出   
// 换言之，如果cache的内容不达到一定的大小，它是不会在程序执行完毕前输出的。经   
// 过测试，我发现这个大小的底限是256个字符长。这意味着cache以后接收的内容都会   
// 源源不断的被发送出去。   
for($j = 1; $j <= 20; $j++) {   
	echo $j.' ';   
	flush(); //这一部会使cache新增的内容被挤出去，显示到浏览器上   
	sleep(1); //让程序“睡”一秒钟，会让你把效果看得更清楚   
}
*/





/* save file ------------

ob_start(); //打开缓冲区   
phpinfo(); //使用phpinfo函数   
$info=ob_get_contents(); //得到缓冲区的内容并且赋值给$info   
$file=fopen('info.txt','w'); //打开文件info.txt   
fwrite($file,$info); //写入信息到info.txt   
fclose($file); //关闭文件info.txt   
*/







/* -------------------------

ob_start();//打开缓冲区   
echo '<b>aaaa</b>';
//php页面的全部输出   
$content = ob_get_contents();//取得php页面输出的全部内容   
$fp = fopen('output00001.html', 'w'); //创建一个文件，并打开，准备写入   
fwrite($fp, $content); //把php页面的内容全部写入output00001.html，然后……   
fclose($fp);   
*/





/* --------------------------

echo '<pre>';
ob_start();					// start output buffer 1
echo "a";					// fill ob1

	ob_start();					// start output buffer 2
	echo "b";					// fill ob2
	$s1 = ob_get_contents();	// read ob2 ("b")
	ob_end_flush();				// flush ob2 to ob1

echo "c";					// continue filling ob1

$s2 = ob_get_contents();	// read ob1 ("a" . "b" . "c")
//ob_end_clean();			//不显示到浏览器ob1 (包含在ob1里面的ob2)
ob_end_flush();				//显示到浏览器ob1 (包含在ob1里面的ob2)

echo "<hr>$s1<hr>$s2<hr>";
echo '</pre>';
*/

//---------------------------

//ob_start();//把所有输出的先放到缓冲区中，然后一次性输出。

// for($i=0;$i<10;$i++){
// 	echo str_pad(' ',8000);//到达一定量之后,开始输出.（按 8001 字节量输出）
// 	echo $i;
// 	//echo '1';
// 	sleep(1);
// }



//---------------------------
//第一次访问时一次性全输出的问题。
echo str_pad(' ',1007);//补丁：第一次一定要最少输出1007个字符。
for($i=0; $i<10; $i++){
	echo 'printing...<br />';
	ob_flush();//补丁：有些电脑不能分段输出，所以建议加上。
	flush();
	usleep(1000000); //sleep(1);
}


//-------------------------------

// 问题：
// 1.某些电脑，30秒超时断线问题。
// 2.内存容量报错。



// ob_end_flush(); 						//IE8下没起作用 
// ini_set('memory_limit','1024M');
echo ini_get('max_execution_time');
echo ini_get('memory_limit');



header("Content-type:text/html;charset=utf-8"); //补丁：mac下的浏览器。要加上这一句。
set_time_limit(0); //评测结果，这个函数在，my mac上无效。无法设置超时时间。（原因未知？）
	// ini_set("max_execution_time", "10"); //通过PHP的ini_set 函数设置。（或在php.ini里面设置max_execution_time = 10; ）
ob_end_clean(); //清除输出缓存并且关闭缓存
echo str_pad(' ',1024);//补丁：第一次mac最少要输出1007+17=1024个字符。winxp 239?+17=256
	//echo str_pad(' ',256);//输出256字节空格（//IE需要接受到256个字节之后才开始显示 ）
	//一些版本的 Microsoft Internet Explorer 只有当接受到的256个字节以后才开始显示该页面， 所以必须发送一些额外的空格来让这些浏览器显示页面内容。 
	//opera下该方法不可用，因为opera浏览器在不遇到一个html标签之前是不输出内容的
for($i=0; $i<1000; $i++){
	//echo 'printing...<br />';
	echo str_pad('-',1024);//补丁：第一次mac最少要输出1007+17=1024个字符。winxp 239?+17=256
	echo  $i.' ';
	@ob_flush();//补丁：有些电脑不能分段输出，所以建议加上。
	flush();
	usleep(1000000); //sleep(1);
}




//---------------------------

// header('Keep-Alive: timeout=5, max=200');	//无效。
// ini_set('max_execution_time', '1');			//超时时间为1

// echo '<pre>'; print_r(ini_get_all());
// set_time_limit(1);							//有些机器有效。？？？
// $a=array('type'=>'json');
// echo str_pad(' ',1024);
// for($i=0; $i < 505; $i++){
// 	$a['data']=$i;
// 	echo json_encode($a);
// 	ob_flush();
// 	flush();
// 	sleep(1);
// 	//clearstatcache();
// }



// ob_end_flush(); 						//IE8下没起作用 
// ini_set('memory_limit','1024M');



// echo ini_get('max_execution_time');
// echo ini_get('memory_limit');

// header("Content-type:text/html;charset=utf-8"); //补丁：mac下的浏览器。要加上这一句。
// set_time_limit(0); //评测结果，这个函数在，my mac上无效。无法设置超时时间。（原因未知？）
// 	// ini_set("max_execution_time", "10"); //通过PHP的ini_set 函数设置。（或在php.ini里面设置max_execution_time = 10; ）
// ob_end_clean(); //清除输出缓存并且关闭缓存
// echo str_pad(' ',1024);//补丁：第一次mac最少要输出1007+17=1024个字符。winxp 239?+17=256
// 	//echo str_pad(' ',256);//输出256字节空格（//IE需要接受到256个字节之后才开始显示 ）
// 	//一些版本的 Microsoft Internet Explorer 只有当接受到的256个字节以后才开始显示该页面， 所以必须发送一些额外的空格来让这些浏览器显示页面内容。 
// 	//opera下该方法不可用，因为opera浏览器在不遇到一个html标签之前是不输出内容的
// for($i=0; $i<1000; $i++){
// 	//echo 'printing...<br />';
// 	echo str_pad('-',1024);//补丁：第一次mac最少要输出1007+17=1024个字符。winxp 239?+17=256
// 	echo  $i.' ';
// 	@ob_flush();//补丁：有些电脑不能分段输出，所以建议加上。
// 	flush();
// 	usleep(1000000); //sleep(1);
// }




