<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
  <TITLE>生成缩略图</TITLE>
</HEAD>
 <BODY>
<?php
/* +-------------------------------------------------------------+
 * | Copyright (c) 2008-2009 Yese.In All rights reserved.        
 * +-------------------------------------------------------------+
 * | Author: wbsifan <wbsifan@163.com>   <QQ:29500196>           
 * +-------------------------------------------------------------+  
 * | Filename : index.php v0.1
 * | Update   : 2008-07-01
 * | Content  : 生成缩略图  
 * +-------------------------------------------------------------+
 */
 
//只处理文件名中含有small的文件,如果处理所有文件,请设置为 '.'
$only = '.';

//如果不希望覆盖已经存在的图片 将此行设为0;
$over = 1;

//是否处理GIF图,0为不处理
$regif = 1;


$c = require('config.php');
require('funs.php');
if($_GET['do']=='start'){
	$file = array();
	$dir = $_POST['dir'];
	$newdir = $_POST['newdir'];
	$w = intval($_POST['w']);
	$h = intval($_POST['h']);
	$d = @dir($dir) or die('目录不存在!');	
	$config = "<?php\nreturn array('dir'=>'".$dir."','newdir'=>'".$newdir."','w'=>'".$w."','h'=>'".$h."');\n?>";
	savefile("config.php", $config);	
	while ($a=$d->read()){
		$type = substr(strrchr($a,"."),1);
		if($a!=='.' && $a!=='..'){
			if(is_dir($dir.'/'.$a)){
				$zdir[]=$a;
			} elseif($type=='jpg' || $type=='gif' || $type=='bmp' || $type=='png') {
				if(strstr($a, $only)){
					$file[]=$dir.'/'.$a;
				}
			}			
		}
	}
	$rand = rand(100,999);
	$img = new image($dir, $newdir);
	$img->over = $over;
	$img->regif= $regif;
	echo "<div style='width:800px'>";
	foreach ($file as $key){
		$src = $img->reImg($key, $w, $h);
		echo "<div style='float:left;border:#666666 1px dotted; width:$w px; height:$h px; padding: 5px; margin:5px;'><img src=$src?$rand></div>";
	}
	echo "</div>";
	die("<br><br><label> <input name=\"go\" type=\"button\" id=\"go\" onClick=\"location='index.php'\" value=\" 继 续 处 理 新 的 图 片 \"></label><br><br>");
}
?>
 <div style="clear:both; width:250px; height:110px; border:#006633 1px dashed; padding:5px; font-size:12px; color:#009933">
 <form name="form1" method="post" action="?do=start">
   <label>源目录:
   <input name="dir" type="text" id="dir" value="<?=$c['dir']?>">
</label>
<br><br>
<label>保存到:
<input name="newdir" type="text" id="newdir" value="<?=$c['newdir']?>">
</label>
<br><br>
<label>宽 &nbsp;高:
<input name="w" type="text" id="w" value="<?=$c['w']?>" size="7" maxlength="3"> 
X
<input name="h" type="text" id="h" value="<?=$c['h']?>" size="7" maxlength="3">
</label>
  <br>
  <br>   
   <label>   
   <input type="submit" name="search" id="search" value="生 成">
   </label>   
 </form>
 
</div>
&copy;2008 <a href="http://www.diqiye.com" target=_blank>wbsifan</a></BODY>
</HTML>