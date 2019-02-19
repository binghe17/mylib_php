<?php
/*parse_ini_file();			//ini文件变量提取
 */

/**var_ini.ini文件
		; This is a sample configuration file
		; Comments start with ';', as in php.ini

		[first_section]
		one = 1
		five = 5
		animal = BIRD

		[second_section]
		path = "/usr/local/bin"
		URL = "http://www.example.com/~username"

		[third_section]
		phpversion[] = "5.0"
		phpversion[] = "5.1"
		phpversion[] = "5.2"
		phpversion[] = "5.3"
 */



define('BIRD', 'Dodo bird');
$a="bbb";

echo '<pre>';
//没有组（一维数组）
$ini_array = parse_ini_file("var_ini.ini");
print_r($ini_array);
/*输出
Array
	(
	    [one] => 1
	    [five] => 5
	    [animal] => Dodo bird
	    [path] => /usr/local/bin
	    [URL] => http://www.example.com/~username
	    [phpversion] => Array
	        (
	            [0] => 5.0
	            [1] => 5.1
	            [2] => 5.2
	            [3] => 5.3
	        )
	)
 */


//有组（二维数组）
$ini_array = parse_ini_file("var_ini.ini", true);
print_r($ini_array);

/*输出
Array
(
    [first_section] => Array
        (
            [one] => 1
            [five] => 5
            [animal] => Dodo bird
        )

    [second_section] => Array
        (
            [path] => /usr/local/bin
            [URL] => http://www.example.com/~username
        )

    [third_section] => Array
        (
            [phpversion] => Array
                (
                    [0] => 5.0
                    [1] => 5.1
                    [2] => 5.2
                    [3] => 5.3
                )
        )
)

 */








/*php.ini配置文件
 */
//print_r(ini_get_all());				//获取所有属性值				
if (!ini_get('display_errors')) 		//如果 没有设置值的话
ini_set('display_errors', '1');			//设置 属性值为1
echo ini_get('display_errors');			//获取 属性值并输出


//获取php.ini的完全路径
	$php_inipath = php_ini_loaded_file();
	if ($php_inipath) {
	    echo 'Loaded php.ini: ' . $php_inipath;
	} else {
	    echo 'A php.ini file is not loaded';
	}
/*输出
	Loaded php.ini: /Applications/MAMP/conf/php5.2/php.ini
 */




/*不行。搞不懂
$filelist = php_ini_scanned_files();
var_dump($filelist);
 */

echo '</pre>';






//--------------------------------------------------
/*
//php中修改php配置文件(php.ini)的函数主要有四个函数：ini_get、ini_set、ini_get_all、ini_restore
echo '<pre>';
print_r(ini_get('session.save_handler')); 	//单个显示php.ini的设置项 //files
//print_r(ini_get_all());					//全部显示php.ini的设置项
//ini_set('session.save_handler','use');	//单个设置php.ini的设置项 //有些不能修改（如这个就是）
//ini_restore(); //恢复配置文件默认的值，当你使用ini_set设置后可以使用它来恢复
echo '</pre>';


echo 'post_max_size = ' . ini_get('post_max_size') . "\n";//最多能提交的文件大小
echo 'post_max_size+1 = ' . (ini_get('post_max_size')+1) . "\n";
echo 'display_errors = ' . ini_get('display_errors') . "\n"; //显示错误是否打开
echo 'register_globals = ' . ini_get('register_globals') . "\n";//全局变量是否打开
//在执行函数后生效，脚本结束的时候，这个设置也失效。不是所有的选项都能被改函数设置的

//没有权限更改php.ini，那么你可以结合两个函数：
ini_set('include_path',ini_get('include_path').':/your_include_dir:');
*/


//-------------best---------------------------------------------
// //查出php.ini的配置。把默认都写空就可以了。
function ini_scan($key=null,$type=0){ //null时，输出所有数组。指定为session时，只输出键为session的数组
	$ini=ini_get_all();
	if($type==1) return $ini;
	if($key){
		foreach ($ini as $k => $v) {
			if(substr_count($k,$key) > 0 ) $rs[$k]=$v['local_value'];
		}
	}else {
		foreach ($ini as $k => $v) {
			$rs[$k]=$v['local_value'];
		}
	}
	return $rs;
}

	print_r(ini_scan('session'));






//-----------------------------------------
//遍历多维数组，速度慢，转换后生成JSON缓存文件，好下次快速生成数组。
function parse_ini_file_multi($file, $process_sections = false, $scanner_mode = INI_SCANNER_NORMAL) {
	$explode_str = '.';  $escape_char = "'";
	// $data = parse_ini_string($file, $process_sections);
	$data = parse_ini_file($file, $process_sections, $scanner_mode);
	if (!$process_sections) $data = array($data);
	foreach ($data as $section_key => $section) {
		foreach ($section as $key => $value) {
			if (strpos($key, $explode_str)) {
				if (substr($key, 0, 1) !== $escape_char) {
					$sub_keys = explode($explode_str, $key);
					$subs =& $data[$section_key];
					foreach ($sub_keys as $sub_key) {
						if (!isset($subs[$sub_key])) $subs[$sub_key] = '';
						$subs =& $subs[$sub_key];
					}
					$subs = $value;
					unset($data[$section_key][$key]);
				}else {
					$new_key = trim($key, $escape_char);
					$data[$section_key][$new_key] = $value;
					unset($data[$section_key][$key]);
				}
			}
		}
	}
	if (!$process_sections) $data = $data[0];
	return $data;
}



//-----转换前（数据）
$ss= <<<ss
[normal]
foo = bar
; use quotes to keep your key as it is
'foo.with.dots' = true

[array]
foo[] = 1
foo[] = 2

[dictionary]
foo[debug] = false
foo[path] = /some/path

[multi]
foo.data.config.debug = true
foo.data.password = 123456
ss;

//------运行数据
//print_r(parse_ini_file_multi($ss, true));
//print_r(parse_ini_file_multi('file.ini', true));
//print_r(parse_ini_string($ss));

/* ------转换后（结果）
Array(
	[normal] => Array(
		[foo] => bar
		[foo.with.dots] => 1
	)
	[array] => Array(
		[foo] => Array(
			[0] => 1
			[1] => 2
		)
	)
	[dictionary] => Array(
		[foo] => Array(
			[debug] =>
			[path] => /some/path
		)
	)
	[multi] => Array(
		[foo] => Array(
			[data] => Array(
			[config] => Array(
				[debug] => 1
			)
			[password] => 123456
			)
		)
	)
)

*/


?> 

