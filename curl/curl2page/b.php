<?php
ignore_user_abort();//连线中断后（例如关闭浏览器）仍然继续执行以下的脚本直到处理完毕。
set_time_limit(0);
$get_data = file_get_contents("php://input");
$explodedata = explode("&", $get_data);

foreach ($explodedata as $key => $value)//还原数组
{
    list($realkey, $realvalue) = explode("=", $value);
    $data[urldecode($realkey)] = urldecode($realvalue);
}
//现在$data数组已经和a.php中的一样了，接下来，就可以根据自己的需要对$data数组进行操作了。
//......


file_put_contents('a.txt',$data);//运行成功会生成一个文件




/*
　　备注：这两段代码需要php curl扩展库的支持，查看phpinfo()，如果cURL support  enabled则表示支持curl库。
　　1、Windows下的PHP开启curl库支持：
　　打开php.ini，将extension=php_curl.dll前的;号去掉。

　　2、Linux下的PHP开启curl库支持：
　　编译PHP时在./configure后加上 --with-curl
*/




?>