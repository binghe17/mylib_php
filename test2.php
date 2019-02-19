<?php 
/*
	echo '<pre>';
	echo  var_dump($GLOBALS);

	$iteminfo['uptype']='xxx|yyy|zzz';
	$iteminfo['uppoint']='1324|22|323';
	echo var_dump($iteminfo['uptype']);


	$uptype = explode("|", $iteminfo['uptype']); 
	$uppoint = explode("|", $iteminfo['uppoint']); 
	echo var_dump($uptype);
	echo var_dump($uptype['0']);


	for ($j=0;$j<count($uptype);$j++) { 
		echo $uptype[$j]; 
		echo $uppoint[$j]; 
		echo '<br/>';
	} 
$arr=array('name'=>'aaaa','age'=>'21');
print_r($arr);
$fun1 = function (){ echo 'aaa' ;};
var_dump($fun1());
	echo '</pre>';

*/

//遍历文件夹及子文件夹
//方法一
$arr=system("dir /a /b /s c://svn//*.*"); 

function my_ls($path){ 
 foreach (glob($path.DIRECTORY_SEPARATOR.'*') as $f) {
  echo is_dir($f) ? my_ls($f) : $f;
 }
}
//方法二
function get_all_files($path) { 
 $list = array(); 
 foreach( glob( $path .DIRECTORY_SEPARATOR.'*') as $item ) { 
  if( is_dir($item ) ) { 
   $list = array_merge( $list , get_all_files( $item ) );
  } else {
   $list[] = $item;
  } 
 } 
 return $list; 
}
//方法三
function rFile($p){
$dir_a=array();
$handle=opendir($p);
while ($file = readdir($handle)) {
 if($file!="." && $file!=".."){
  $tmp=$p.DIRECTORY_SEPARATOR.$file;
  if(is_dir($tmp)){
   $dir_a[count($dir_a)]=$tmp;
  }elseif(is_file($tmp)){
   echo $tmp;
  }
 }
}
closedir($handle);
foreach($dir_a as $v){
 rFile($v);
}
}


//获取相对路径
function getRelPath($a,$b){
 $a = explode('/',$a);
 $b = explode('/',$b);

 // $c = array_values(array_diff($a,$b));
 $c = count(array_diff($a,$b))-1;
 $d = array_diff($b,$a);
 return str_repeat("../", $c).implode('/',$d);

}

//二分法查询数组
$n = tuo($array,$searchValue);
echo $n==flase? 'no' : "$n : {$array[$n]}";

function tuo($array, 
$searchValue) {
  list($start, $end) = array(0, count($array));
 while($end-$start > 1) {
  $mid = floor(($end-$start)/2);
  if($array[$mid] == $searchValue) return $mid;
  if($array[$mid] < $searchValue) 
   list($start, $end) = array($start, $mid);
 else list($start, $end) = array($mid, $end);
  }
  if($array[$mid] == $searchValue) return $mid;
  return flase;
}


