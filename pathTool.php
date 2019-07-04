<?php
// DB는 웹서비스를 제공하기 위해 존재함. 직접 툴을 통해 DB에 연결하지는 않는다.
// DB는 웹프로그램에 중개 해줘서 사용자들이 데이터를 저장 조회하게한다.
// Restfull방식은 사용자가 직접 URL방식으로 DB의 데이터를 달라고 할수 있기에 많은 URL리소스를 잡아먹는다. 대신 알고리즘으로 자유롭다.
// 링크하나에 내가 찾으려는 정보가 다 담겨져있다. post데이터없이 원하는 정보를 링크하나만으로 가져올수 있다.
// 여러행의 함수 실행으로 데이터를 가져오고 그 데이터를 처리 했었는데 그럴필요없다. cmd명령처럼 한줄로 가져오는 것이 좋다. SQL명령이 아니라. 

// 웹프로그램에 코드방식으로 하드 코딩해버리면 프로그램이 죽은 코드가 된다. 한번밖에 쓸수 있수없는 죽은코드가 된다.

// config: connect_mysql1 info -> mysqlname1


// pathTool('GET','/mysql/[mysqlname1]/어느tb/어느행?fields=필터&limit=출력수&offset=', $data);
// pathTool('GET','/cpu/array/add/' , $data);//뭘하겠다, 무엇을 . -> 결과 
// // flowRun()

// function pathTool($action, $path, $data=null){
    
// }
function urldata($url){
    $urldata = parse_url($url);
    if(isset($urldata['query'])) parse_str($urldata['query'], $urldata['param']);
    if(isset($urldata['path'])) $urldata['pathinfo'] = pathinfo($urldata['path']);
    return $urldata;
}
function phprun($url){
    $rs = null;
    $urldata = urldata($url);
    // print_r($urldata);
    if($urldata['scheme'] == 'php'){
        if($urldata['host'] == 'run'){
            if($urldata['path']){
                $path = trim($urldata['path'], '/');
                $arr = explode('/', $path);
                if($arr[0] == 'exec') return 'exec함수를 사용할수 없음';//취약점함수exec, eval ...
                $length = count($arr);
                $fun = $arr[0];
                array_shift($arr);
                $rs = run_fun(array('fun'=>$fun, 'opt'=>$arr));
            }

            if(isset($urldata['param'])){
                if($urldata['param']['fun'] == 'exec') return 'exec함수를 사용할수 없음';//취약점함수exec, eval ...
                $rs= run_fun($urldata['param']);
            }
            
        }
    }
    return $rs;
}



echo '<pre>'; 
// $data = urldata('mysql://root:@localhost:3306/dbname/tbname?&action=get&fields=필터,필터2,필터3&limit=출력수&offset=&arr[]=1&arr[]=2&arr2[dd dd][xxx]=33');
// print_r($data);
$rs = phprun('php://run/'. $_SERVER['PATH_INFO']);//http://localhost/test/pathTool.php/_echo/11111111
// $rs = phprun($_SERVER['REQUEST_SCHEME'].'://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);//http://localhost/test/pathTool.php/_echo/11111111
print_r($rs);
echo '<br>';


$rs = phprun('php://run/_Gdata/a/aafgadfjkaa');
$rs = phprun('php://run/_Gdata/b:b:b/aafgadfjkaa/:');
$rs = phprun('php://run/var_show/a');
$rs = phprun('php://run/var_show/b');
// $rs = phprun('php://run/exec/ipconfig');
print_r($rs);
print_r($_SERVER['PATH_INFO']);
print_r($GLOBALS);


// $data2 = urldata('php://run/array_push/aa?opt[]=옵션1&opt[]=옵션2&opt[]=옵션3&out=bb');
// print_r($data2);
// $rs = phprun('php://run?fun=str_replace&opt[]=a&opt[]=*&opt[]=aaabbbcccaaabbb');
// $a = '11111111';
// $rs = phprun('php://run?fun=_Gdata&opt[]=a/a&opt[]=3452');
// $rs = phprun('php://run?fun=var_show&opt[]=a');
// print_r($rs);
// echo ($a);


// $data3 = urldata('https://cdn2.iconfinder.com/dat0a/icons/random-set-1/404/Asset_81-128.png');
// print_r($data3);
// // $data3 = urldata('https://cdn2.iconfinder.com');
// // print_r($data3);
// // $data3 = urldata('');
// // print_r($data3);


// $data4 = urldata('php://flow/?opt[]=aaaaa&opt[]=bbbb&opt[]=ccc');
// print_r($data4);




//-----------------------------
//存取数据。用路径变量来获取值，写入值（手写函数结构用）//注意：最多可添加四级。
function _Gdata($key,$val=null,$fu='/'){
	$f=explode($fu, trim($key)); // 斜杠来分割
	$n=count($f);
	if(!isset($val)) {
		if($n==1) {return $GLOBALS[$f[0]];}//获取值
		elseif($n==2) {return $GLOBALS[$f[0]][$f[1]];}
		elseif($n==3) {return $GLOBALS[$f[0]][$f[1]][$f[2]];}
		elseif($n==4) {return $GLOBALS[$f[0]][$f[1]][$f[2]][$f[3]];}
		elseif($n==5) {return $GLOBALS[$f[0]][$f[1]][$f[2]][$f[3]][$f[4]];}//够用了
	}elseif($val==='*DEL*') {//写 *DEL* 概率很少，所以用这个定义
		if($n==1) {unset($GLOBALS[$f[0]]);return ;}//删除值，删除只能用全路径方式
		elseif($n==2) {unset($GLOBALS[$f[0]][$f[1]]);return ;}
		elseif($n==3) {unset($GLOBALS[$f[0]][$f[1]][$f[2]]);return ;}
		elseif($n==4) {unset($GLOBALS[$f[0]][$f[1]][$f[2]][$f[3]]);return ;}
		elseif($n==5) {unset($GLOBALS[$f[0]][$f[1]][$f[2]][$f[3]][$f[4]]);return ;}//够用了
	}else{//增加，修改值
		$i=1; $tmp=&$GLOBALS;
		foreach ($f as $k => $v) {//可无限制多维增加数据
			$v=trim($v);
			if(isset($tmp[$v])&&is_string($tmp[$v])) unset($tmp[$v]);//不是字符串类型时删除
			$tmp=&$tmp[$v];//没有定义的时候
			if($n==$i) $tmp=$val;	//最后一步，赋值（模拟return值）
			$i++; //计数，为了知道最后一步。
		}
	}
}
// _Gdata('data/custom/k1','aaa');//添加或修改值
// echo _Gdata('data/custom/k1');//获取值
// _Gdata('dd/dt/c','ccc');
// _Gdata('dd/dt/d','ddd');
// _Gdata('dd/aa','bbb');
// _Gdata('dd/aa','*DEL*');//删除值
// _Gdata('val:data:a','aabbbccc');//$val['data']=array('a'=>'aabbbccc','b'=>'dddeeefff');
// _Gdata('val:data:b','dddeeefff');
// _Gdata('html:data_a','111111');//$a['data']=array('a'=>'111','b'=>'22222');
// _Gdata('html:data_b','22222');
// _Gdata('json:a','{"a":"aaa","b":"bbbbb"}');//直接保存为字符串。

//输出结果
function var_show($vp){
	$rs=_Gdata($vp); if(is_array($rs)) print_r($rs); else echo $rs;//var_dump,print_r
}
function _echo($str){
	if(is_array($str)) print_r($str); else echo $str;
}


//运行函数
function run_fun($fn){
	$fun=&$fn['fun'];
	$o=&$fn['opt'];
	if($fun){
		if(!$o) return $fun();
		$num=count($o);
		switch ($num) {//参数写多了，1系统函数会出错，2自定义函数会影响性能。（可能是条件语句的关系）
			case 1: if(is_array($o)) $rs=$fun($o[0]);else $rs=$fun($o);break;
			case 2: $rs=$fun($o[0],$o[1]);break;
			case 3: $rs=$fun($o[0],$o[1],$o[2]);break;
			case 4: $rs=$fun($o[0],$o[1],$o[2],$o[3]);break;
			case 5: $rs=$fun($o[0],$o[1],$o[2],$o[3],$o[4]);break;
			default: break;
		}		
	}
	return $rs;
}
// $e['f']='-string-';
// $e['e']='eeeee';
// function fun4($a,$b){ return $a.'====='.$b; }
// function p_echo($str){echo $str;}
// $act[0]=array('fun'=>'fun4','opt'=>array('e/f','e/e'),'isvar'=>array(1,1),'save'=>'c/c');
// $act[1]=array('fun'=>'p_echo','opt'=>array('aaaaa'));
// $act[2]=array('fun'=>'str_replace','opt'=>array('a','*','aaabbbcccaaabbb'));
// echo run_fun($act[0]); 
// echo run_fun($act[1]);
// echo run_fun($act[2]);
