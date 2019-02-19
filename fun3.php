<?php 
/*
function array_prefix_values($prefix, $array)
{
  $callback = create_function('$str','return "'.$prefix.'".$str;');
  return array_map($callback,$array);
}



//usage:
$dir = "./css/";
$files = scandir($dir);
$files = array_prefix_values($dir,$files);
print_r($files);

/*
//output:
	(
		[0] => ./css/.
		[1] => ./css/..
		[2] => ./css/default.css
		[4] => ./css/helper.css
		[6] => ./css/page_layout.css
	)
 */





/*
error_reporting(E_ALL);
function increment(&$var)
{
    $var++;
}

$a = 0;
call_user_func('increment', $a);
echo $a."\n";

call_user_func_array('increment', array(&$a)); // You can use this instead before PHP 5.3
echo $a."\n";

 */



	$method_name = "AMethodName";
	$obj = new ClassName();
	$obj->{$method_name}();



?>

<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

$obj  = new MyClass1();
$obj2 = new MyClass2(); 
?>


?> 