<?php





header("Content-Type: text/html; charset=utf-8");
function ajax_naver_search($text, $langFrom='ko', $langTo='zh-CN')
{
	$url = "http://translate.naver.com/#/".$langFrom.'/'.$langTo."/". urlencode($text);
	$utl2= 'http://translate.naver.com/nmt.dic';
	set_time_limit(0);
	require "Snoopy.class.php";
	$snoopy=new Snoopy();
	$snoopy->referer=$url2;
	$snoopy->agent="Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20100101 Firefox/22.0";
	$submit_vars['text'] =$text;
	$submit_vars['source'] ='ko';
	$submit_vars['target'] ='zh-CN';
	$submit_vars['svcCode'] ='';
	$submit_vars['passportKey'] ='c2f694bbbf5507a0c635c26d1647048d1b800b293675726050042397f41496dc';

	//$url='http://www.renren.com/PLogin.do';//登陆数据提交的URL地址
	$snoopy->submit($url2,$submit_vars);
	//$snoopy->fetch($url2);//希望获取的页面数据
	$html= $snoopy->results;//www.phpernote.com
	return $html;
}
if(!empty($_GET['q'])){
	$html=ajax_naver_search($_GET['q']);
	print  $html;
}


