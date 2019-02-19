<?php

function img_fun1($img,$nx,$ny,$x,$y,$wc=1){
	$img_size = getimagesize($img); 
	//echo $img_size[0] .'x'. $img_size[1];
	//echo '<br>';
	$px=round($img_size[0]/$nx);
	$py=round($img_size[1]/$ny);
	//echo $px.'x'.$py;
	//print_r($img);
	echo '<div style="width:'.$px.'px;height:'.$py.'px;background:yellow;">';
	//echo '<div style="background:url('.$img.') no-repeat; background-position:-'.round(($x-1)*($px+$wc)).'  -'.round(($y-$wc)*$py).'px; position: relative; width:'.$px.'px;height:'.$py.'px;">';
	echo '<img src="icon.png">';
	//echo '</div>';
	echo '</div>';
}
//img_fun1('icon.png',20,7,2,2);
//这部分的代码不应该用PHP 来些。用JS来做成函数，将动态的选择。


$text = '学习中文PHP안녕';
//$text = iconv("euc-kr","utf-8",$text);//转码，避免乱码
$block = imagecreatetruecolor(300,300);//建立一个画板
$bg = imagecolorallocatealpha($block , 0 , 0 , 0 , 127);//拾取一个完全透明的颜色，不要用imagecolorallocate拾色
$color = imagecolorallocate($block,255,0,0); //字体拾色
imagealphablending($block , false);//关闭混合模式，以便透明颜色能覆盖原画板
imagefill($block , 0 , 0 , $bg);//填充
imagefttext($block,25,0,10,40,$color,'NanumGothic.ttf',$text);
imagesavealpha($block , true);//设置保存PNG时保留透明通道信息
imagepng($block,'a.png');//生成图片

//header("content-type:image/png");
//imagepng($block);//显示图片
imagedestroy($block);

echo '<div><img src="a.png" style="background:#ccc;"></div>';    

//-------------------
//解决PHP剪切缩略图生成png透明图时，黑色背景问题 
function img_thumb($src,$save){
	$img = imagecreatefrompng($src);
	imagesavealpha($img,true);//这里很重要;
	$thumb = imagecreatetruecolor(300,300);
	imagealphablending($thumb,false);//这里很重要,意思是不合并颜色,直接用$img图像颜色替换,包括透明色;
	imagesavealpha($thumb,true);//这里很重要,意思是不要丢了$thumb图像的透明色;
	imagecopyresampled($thumb,$img,0,0,0,0,200,200,300,300);
	imagepng($thumb,$save);
}
//img_thumb('a.png','temp.png');
echo '<div><img src="temp.png" style="background:#ccc;"></div>';    
