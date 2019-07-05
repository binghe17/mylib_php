<?php
// DB는 웹서비스를 제공하기 위해 존재함. 직접 툴을 통해 DB에 연결하지는 않는다.
// DB는 웹프로그램에 중개 해줘서 사용자들이 데이터를 저장 조회하게한다.
// Restfull방식은 사용자가 직접 URL방식으로 DB의 데이터를 달라고 할수 있기에 많은 URL리소스를 잡아먹는다. 대신 알고리즘으로 자유롭다.
// 링크하나에 내가 찾으려는 정보가 다 담겨져있다. post데이터없이 원하는 정보를 링크하나만으로 가져올수 있다.
// 여러행의 함수 실행으로 데이터를 가져오고 그 데이터를 처리 했었는데 그럴필요없다. cmd명령처럼 한줄로 가져오는 것이 좋다. SQL명령이 아니라. 

// 웹프로그램에 코드방식으로 하드 코딩해버리면 프로그램이 죽은 코드가 된다. 한번밖에 쓸수 있수없는 죽은코드가 된다.

// config: connect_mysql1 info -> mysqlname1


// pathTool('mysql://ddd/[mysqlname1]/어느tb/어느행?action=GET&fields=필터&limit=출력수&offset=', $data);//action안써도 GET으로 봄.
// pathTool('php://file/array/add/' , $data);//뭘하겠다, 무엇을 . -> 결과 
// // flowRun()
// function pathTool($action, $path, $data=null){}

//-----클리이언테에서 서버에 저장할 데이터주고 또 조회할 데이터를 달라고함.(서버코드를 쓸필요없이 클라이언트에서 직접 서버자원을 관리하고 씀)
//아래의 결과는 API처럼 모두 JSON데이터형식으로 보내줌. UI구조를 신경쓰지 않음.
//[]URL방식으로 데이터를 받아보고,쓰고 생성한다. 
//[]URL방식으로 데이터베이스를 생성하고 테이블속성을 정의하고 삭제한다.
//[]URL방식으로 파일의 내용 데이터를 달라고 하고 쓰고 삭제함.
//[]URL방식으로 폴더의 파일목록조회 복사 이동 업로드를 함.
//[]URL방식으로 서버에 데이터 주고 어떻게 처리할지를 알려주고 그 결과를 달라고함. (서버의 CPU자원을 사용)
//[]URL방식으로 직접 서버에서 실행할 소스를 보내주고 최종 생생할 파일내용을 보내준다. (코드조립만 하고 파일은 생성 실행하지 않는다.)
//[]URL방식으로 클라이언트에서 직접할수 없는 수열로 Excel파일만든다든가 PDF파일 만든다든가 하는 작업을 수행한다.
//[]어떤데이터를 넣으면 자동분석 처리해서 새로운 데이터로 전환해준다. (SQL문을 URLparse문으로 만든다든가.)
//잡업내용이 담긴 실행순서데이터를 넘기고 서버는 그내용에 따라 작업한다.

//뭘(물건) 출력한다(행위) -> 어떨때 출력한다(조건). what-do-if. 무엇()을 어떻게 구체적으로  

//print_r(array('a'=>11111,'b'=>222));//데이터 한번 처리할때마다 양파를 까듯이 한층한층 추가한다. (기본적으로 제공한 함수는 직선적으로 데이터 처리가 안된다. class는 가능하다.)
//프로그램이 생각대로 말하는 순서대로 뒤에 이어 붙여 지는대로 실행되지 않는다. 그래서 클래스를 만들어 비순차적인것들을 순차적으로 만들어야 한다. 
//데이터 -> 행위를 통한 변화된 데이터 -> 또 행위를 통해 변화된 데이터
//새 데이터를 만들겠다. 
//$d('a/b/a')->do('set','11111');//$d()함수는 미래에 있을 데이터 경로를 지정.
//$d('a/b/a')->do('add','aaabbbccc','left')->do('replace','val','b','*');//여기까지 변화된 데이터 보기
//$d('a/b')->do('push','c','333')->do('del','a/b/a')//수열을 받았으니.
//$d('a/b/b')->do('add','22222','right')->do('set','b');
//$d('b')->do('copy','c/c')->do('echo');
//$d('c/c')->do('run','plus','1+1')
//do('loop','name1')->do('set','_tmp/i','0')->do('set','_tmp/leng','5')->do('if','_tmp/i','<','5')->do('echo','b')->do('ifEnd')->do('num','_tmp/i','++')->do('loopEnd','name1');//指针
//if,for/ 위에는 프로그램 흘러가는데로 코딩하는 방식이다. 구조화가 되지 않아서 읽기 어렵지만 실행순서대로 나열되서 선을 짜르기에는 좋다. 
//코딩으로 쓰기엔 나쁘다. UI가 있어 블록열차를 연결하는 방식으로는 편집하기는 괜찮으나 그래도 뭔가 맘에 안드는 구석이있다.
//프로그램을 아는 자로서는 필요한 custom함수를 만들고 include하는편이 낫다. 더이상 수정이 필요없는 정의는 include가 낫고, 실행에관여되는 코딩은 블록식으로 조립하는편이 낫다.
//기본기능에 부가설정을 통해 데이터를 처리하게 하는 식이 최소한의 데이터로 하고자 하는 기능을 정의하는것이다. 데이터가 함수실행이 되고, 그데이터가 코드text를 생성한다. (함수정의는 원래 text방식이 낫다)
//fun: opt:       //함수명, 입력값.(데이터와, 설정. 혼합되 있음) 함수의 용도 설명. 

// 몇개의 함수정의 text파일을 하나의 파일로 생성하고, include 한다. 
//URL페이지는 함수정의파일을 include하는 text부분과 실행과정을 담긴 autotext를 가져온다. autotext는 함수실행 데이터(집합)에서 자동으로 수동코딩한것과 같은 코딩text가 생성된 파일을 말한다.
//그러면 직접 코딩을 하지 않고 알고리즘을 이어붙이는 식으로 코딩을 진행할수 있다.
// 클라이언트에서 UI를 조립해서 데이터를 생성하고, 중점은 출력할 데이터를 생각하면서 UI설계도 해야 한다는 것이다. 
//[]즉 알고리즘변수를 만드는 화면이 필요하다. 
// 저장한 부분코드를 가져오는 기능이 필요. //주석설명으로 조립. 또는 직접 코드를 보면서 조립.
//[]먼저는 부분코드를 저장하고 검색하고 조회하는 기능이 필요하다
//예)이미지와 링크데이터의 집할와 슬라이드분리, 슬라이드 개성설정. 이렇게 3가지 요소가 필요하다. 그리고 설명과 슬라이드모듈의 ID, 제작한날자, 버전정보가 있다.
// 똑같은 구성으로 이미지와 클릭링크만 바꾸면 다른 페이지에서도 똑같이 이 기능을 쓸수 있게 코드그룹화 시킨다. (여러줄의 코딩을 또 한줄 코딩으로 해결하게 된다.) 알고리즘층에서의 모듈조합.-> 사상층에서의 모듈조합
// 함수실행리스트가 또 다른 함수정의가 된다. 모듈저장그룹이 또 달라진다. 새로운 층과 새로운층에서 쓰는 모듈을 만든다. 모듈의 연관성, (이 모듈을 쓰려면 연관모듈을 먼저 불러와서 써야 한다.)
//[]프로그램실행리스트변수 만드는 화면


//----화면에서 필요한 기능은 
//[]무엇을 드래그해서 데이터만드는 박스에 담는 기능. (커서를 기억하고 있다가 툴을 눌러서 순차적으로 삽입할수 있다.)
//[]해당 박스에 담겼으면 그것을 순서대로 데이터화 할수 있는 기능.
//화면에서 쓰이는 모든 데이터를 불러온다.
//json에서 보면서 어느데이터는 어떤형태로 출력할지 만든다. (이 text는 버튼으로, 이 데이터들은 checkbox로, 이 데이터들은 또 뭘로 등등)
//공간만들기 =tpl ,   공간명과 바꿀변수자리를 미리 세팅해논 text다. 공간명과 바꿀 데이터를 연결지어 원하는 장소에 출력만 하면 된다.
//이박스는 공용css를 쓸지, 개인 css(한번만 이페이지URL에서 쓰고 버리는)를 쓸지 정한다. 공동css를 쓰면 전체사이트 테마 바꿀때 용이하다.(해당 공간안에 있는 버튼 텍스트 간격 스타일을 정의한다.)
//위에서 말하는 변수->css, 화면변화->변수데이터.    공용css는 모듈처럼 분류 저장되고, 개인css는 공용css외에 URL규칙이 더 들어있는 모듈이다, URL에 따라 판단해서 (어떤 테마를) 보여줄지 정한다. 

//[]입력한 변수를 자유자재로 수정할수 있는 기능. (자유자재란 replace기능, csv->json, xml->json, excel->json->db->json->excel)
//[ok]코딩하지 않고 데이터로 함수실행할수 있는 함수정의는 완성됬음. 
//[]화면에서 위에서 말한 데이터를 생성하는 기능.

//사용자의 이벤트 (드래그)를 더 쉽게 사용할수있는 함수정의.(쉽게 id에 이벤트기능을 줬다 뺏다 할수 있게)





function phprun($url){
    $rs = null;
    $urldata = _urldata($url);
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
		else if($urldata['host'] == 'flow'){
			$list= json_decode($urldata['param']['actlist'], 1);
			if(is_array($list)){
				for($i=0,$leng=count($list); $i<$leng; $i++){
					$rs = run_fun($list[$i]);
				}
			}
		}

	}
	else if($urldata['scheme'] == 'mysql'){

	}
    return $rs;
}

		function _urldata($url){
			$urldata = parse_url($url);
			if(isset($urldata['query'])) parse_str($urldata['query'], $urldata['param']);
			if(isset($urldata['path'])) $urldata['pathinfo'] = pathinfo($urldata['path']);
			return $urldata;
		}


echo '<pre>'; 
if(isset($_SERVER['PATH_INFO'] )){
	$rs = phprun('php://run/'. $_SERVER['PATH_INFO']);//http://localhost/test/pathTool.php/_echo/11111111	
	print_r($rs);
	echo '<br>';
}  
//----test
// $data = _urldata('mysql://root:@localhost:3306/dbname/tbname?&action=get&fields=필터,필터2,필터3&limit=출력수&offset=&arr[]=1&arr[]=2&arr2[dd dd][xxx]=33');
// $data = _urldata($_SERVER['REQUEST_SCHEME'].'://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);//http://localhost/test/pathTool.php/_echo/11111111
// $data = _urldata('php://run/array_push/aa?opt[]=옵션1&opt[]=옵션2&opt[]=옵션3&out=bb');
// $data = _urldata('https://cdn2.iconfinder.com/dat0a/icons/random-set-1/404/Asset_81-128.png');
// $data = _urldata('https://cdn2.iconfinder.com');
// $data = _urldata('');
// $data = _urldata('php://flow/?act[0][fun]=aaaaa&act[0][opt][]=bbbb&act[0][opt][]=ccc');
$data = phprun('php://flow?actlist=[{"fun":"_Gdata", "opt":["aaa","=========="]}, {"fun":"var_show", "opt":["aaa"]}]');
print_r($data);
//----test
// $rs = phprun('php://run?fun=str_replace&opt[]=a&opt[]=*&opt[]=aaabbbcccaaabbb');
// $a = '11111111';
// $rs = phprun('php://run?fun=_Gdata&opt[]=a/a&opt[]=3452');
// $rs = phprun('php://run?fun=var_show&opt[]=a');
// print_r($rs);
// echo ($a);

//-----
$rs = phprun('php://run/_Gdata/a/aafgadfjkaa');//定义变量
$rs = phprun('php://run/_Gdata/b:b:b/aafgadfjkaa/:');
$rs = phprun('php://run/var_show/a');//输出变量
$rs = phprun('php://run/var_show/b');
$rs = phprun('php://run/test_args/111/222/333/444/555//77/88/99');//可变参数测试
// $rs = phprun('php://run/exec/ipconfig');//安全隐患， 只输出一行并且是乱码
print_r($rs);
// print_r($GLOBALS);













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
function run_fun($fn){//php5.6支持可变参数
	$fun=&$fn['fun'];
	$opt=&$fn['opt'];
	if($fun){
		if(!$opt) return $fun();
		if(is_array($opt)) $rs=$fun(...$opt);
		else $rs=$fun($opt);
	}
	return $rs;
}
		// function run_fun($fn){//废弃
		// 	$fun=&$fn['fun'];
		// 	$o=&$fn['opt'];
		// 	if($fun){
		// 		if(!$o) return $fun();
		// 		$num=count($o);
		// 		switch ($num) {//参数写多了，1系统函数会出错，2自定义函数会影响性能。（可能是条件语句的关系）
		// 			case 1: if(is_array($o)) $rs=$fun($o[0]);else $rs=$fun($o);break;
		// 			case 2: $rs=$fun($o[0],$o[1]);break;
		// 			case 3: $rs=$fun($o[0],$o[1],$o[2]);break;
		// 			case 4: $rs=$fun($o[0],$o[1],$o[2],$o[3]);break;
		// 			case 5: $rs=$fun($o[0],$o[1],$o[2],$o[3],$o[4]);break;
		// 			default: break;
		// 		}		
		// 	}
		// 	return $rs;
		// }
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


	function test_args(...$args){//可变参数测试
		return implode(',', $args);
	}
