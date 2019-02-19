<?php
/*【数组 Array】 
 * 帮助手册：	http://www.5idev.com/p-php_array.shtml
 * 函数手册：	http://w3school.com.cn/php/php_ref_array.asp
*/

/*
* 数组 书写规范
*/
$arr1=array(
	'a'=>1,
	'b'=>2,
	'c'=>array(
		'a'=>1,
		'b'=>2,
		'c'=>array(
			'a'=>'aaaaa',
			'b'=>'bbbbb',
			'c'=>'ccccc'),
		'd'=>4),
	'd'=>4);

$arr2['a']=1;			//增加数组
$arr2['b']=2;
//$arr2['c']=3;			//出错，不能直接给子数组添加一个值
//$arr2['c']=array();	//修补方案，定义类型为数组后，可以添加
$arr2['c']['a']=1;
$arr2['c']['b']=2;
$arr2['c']['c']['a']='aaaaa';
$arr2['c']['c']['b']='bbbbb';
$arr2['c']['c']['c']='ccccc';
$arr2['c']['d']=4;
//$arr2['c']=3;			//修改数组，这里是覆盖掉上面定义的子数组中的所有数据。
$arr2['d']=4;

$arr2['e']['a']=1;
$arr2['e']['b']=2;
unset($arr2['e']); //删除数组





echo '<pre>';
print_r($GLOBALS);
echo '</pre>';

/* 美观写法

	$file_headers = array(
		'Name'        => 'Theme Name',
		'ThemeURI'    => 'Theme URI',
		'Description' => 'Description',
		'Author'      => 'Author',
		'AuthorURI'   => 'Author URI',
		'Version'     => 'Version',
		'Template'    => 'Template',
		'Status'      => 'Status',
		'Tags'        => 'Tags',
		'TextDomain'  => 'Text Domain',
		'DomainPath'  => 'Domain Path',
	);



$database = array
(
	"mysql" => array
	( 
		"default" => array
		(
			"host"     => "localhost",
			"user"     => "root",
			"password" => "",
			"dbname"   => ""
		),
		"session" => array
		(
			"host"     => "localhost",
			"user"     => "session",
			"password" => "session",
			"dbname"   => "sessions"
		)
	)
);





*/
?>