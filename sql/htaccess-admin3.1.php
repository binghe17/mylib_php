<?php
	
	// 配置信息
	$limiter['left'] 	= '#sub-config-start-----------Please do not modify me-----------------------------#';
	$limiter['right'] 	= '#sub-config-end-------------Please do not modify me-----------------------------#';	

	$adminPassword 	= 'blog.phpclubs.com';	// 管理密码
	$adminVersion 	= 'V3.1';				// 系统版本
	$demo			= false;				// 是否是演示版本，演示版本数据不保存

	$actionArray = array('images','index','readme','manager','update','login','logout','ajax','phpinfo','info','check');	// 允许的动作
	
	// 强制去除转义post,get,file,request提交的特殊字符
	$_GET		= dstripslashes($_GET);
	$_POST		= dstripslashes($_POST);
	$_COOKIE	= dstripslashes($_COOKIE);
	$_SERVER	= dstripslashes($_SERVER);
	$_REQUEST	= dstripslashes($_REQUEST);	
	
	$pathinfo = pathinfo($_SERVER['PHP_SELF']);
	$sys['filename'] = $pathinfo['basename'];
	$sys['basename'] = $pathinfo['filename'];
	$sys['newfilename'] = $pathinfo['filename'].'.htm';
	
	$url = 'http://'.$_SERVER['HTTP_HOST'].'/'.$sys['filename'];
	$newurl = 'http://'.$_SERVER['HTTP_HOST'].'/'.$sys['newfilename'];

	$scriptName = $sys['filename'];
	$a = $_GET['a'] && in_array($_GET['a'],$actionArray) ? $_GET['a'] : 'index';
	
	// 环境版本
	$sys['php'] = PHP_VERSION;	
	list($websoft) = explode(' ',$_SERVER['SERVER_SOFTWARE']);
	list($sys['webName'],$sys['webVersion']) = explode('/',$websoft);
	
	$sys['webName'] = strtolower($sys['webName']);
	if ($sys['webName']=='apache') {
		$sys['htaccessname'] = '.htaccess';
	} elseif ($sys['webName']=='microsoft-iis'){
		if ((int)$sys['webVersion']=='6') {
			$sys['htaccessname'] = 'httpd.ini';
		} elseif ((int)$sys['webVersion']=='7') {
			$sys['htaccessname'] = 'web.config';
			$limiter['left'] = '<!--'.str_replace('-','=',$limiter['left']).'-->';
			$limiter['right'] = '<!--'.str_replace('-','=',$limiter['right']).'-->';
		}
	}
	
	if (in_array($a,$actionArray)) {
		if (!@session_start()) {
			session_save_path(str_replace('\\','/',dirname(__FILE__)));
			session_start();
		}
		switch ($a) {
			// 图片
			case 'images' :
				$images = $_GET['images'];
				images($images);
				break;
			// 使用说明
			case 'readme' :
				check_access();
				html_header();
				html_nav();
				html_readme();
				html_footer();
				break;
			// ajax 最新官网消息
			case 'ajax' :
				$cacheFile = 'htaccess-admin-lastnews.txt';
				$bool = false;
				if (file_exists($cacheFile)) {
					$filemtime = filemtime($cacheFile);
					if (time()-$filemtime>60*60*24) {
						$bool = true;
					} else {
						$lastNews = ''.file_get_contents($cacheFile);
						$bool = false;
					}
				} else {
					$bool = true;
				}
				if ($bool) {
					$newurl = '';
					if (@fsockopen('blog.phpclubs.com',80,$errno,$errstr,0.2)){
						$newurl = 'http://blog.phpclubs.com/htaccess-admin/ajaxnews.php?url='.$url;
					} else if(@fsockopen('www.free-ok.com',80,$errno,$errstr,0.3)){
						$newurl = 'http://www.free-ok.com/htaccess-admin/ajaxnews.php?url='.$url;
					} else {
						$lastNews = '<li>获取最新消息超时！</li>';
						file_put_contents($cacheFile,$lastNews);
					}
					if ($newurl) {
						$lastNews = @file_get_contents($newurl);
						if ($lastNews) {
							file_put_contents($cacheFile,$lastNews);
						}
					}	
				}

				echo iconv('GB2312','UTF-8',$lastNews);
				exit();
				break;
			// phpinfo信息
			case 'phpinfo':
				check_access();
				phpinfo();
				break;
			// 显示环境详细信息
			case 'info':
				check_access();
				html_header();
				html_nav();
				echo '<iframe src="'.$scriptName.'?a=phpinfo" frameborder="0" width="800" height="500" scrolling="auto"  allowtransparency="true" style="overflow-x:hidden;"></iframe>';
				html_footer();
				break;
			case 'check':
				echo 'checkok';
				exit();
				break;
			// 子目录管理
			case 'manager' :
				check_access();
				$domainmode = '@^([\w-]+\.)+((com)|(net)|(org)|(gov\.cn)|(info)|(cc)|(com\.cn)|(net\.cn)|(org\.cn)|(name)|(biz)|(tv)|(cn)|(mobi)|(name)|(sh)|(ac)|(io)|(tw)|(com\.tw)|(hk)|(com\.hk)|(ws)|(travel)|(us)|(tm)|(la)|(me\.uk)|(org\.uk)|(ltd\.uk)|(plc\.uk)|(in)|(eu)|(it)|(jp)|(tk)|(\w{1,4})|(so))$@iUs';
				$dirmode1 = "@^[\w|/|-]+$@iUs";
				if ($_POST['updatesubmit'] && is_array($_POST['dirname'])) {
					// 更新修改的记录
					$i = 0;
					$domainbool = true;
					$dirbool = true;
					foreach($_POST['dirname'] as $k=>$v){
						if ($_POST['del'][$k]=='true') {
							continue;
						} else {
							$domainArr = explode("\r\n",trim($_POST['domain'][$k]));
							// 验证每个域名合法性
							if (is_array($domainArr)) {
								foreach ($domainArr as $value) {
									$bool = preg_match($domainmode,$value);
									if (!$bool) {
										// 域名格式错误 跳出循环
										$domainbool = $bool;
										break 2;
									}
								}							
							}
							$_POST['dirname'][$k] = trim($_POST['dirname'][$k]);
							$domain = str_replace("\r\n",'|',trim($_POST['domain'][$k]));
							$newList[$i]['dirname'] = substr($_POST['dirname'][$k],1);
							$newList[$i]['domain'] = $domain;
							$newList[$i]['author'] = '闲云野鹤';
							$newList[$i]['poweredby'] = 'blog.phpclubs.com';
							$newList[$i]['date'] = date('Y-m-d');
							$newList[$i]['status'] = $_POST['status'][$k];
							$newList[$i]['noite'] = "请不要手动修改或删除以'#'好开头的行，删除后将导致管理平台无法使用！";
							$newList[$i]['mainrules'] = '';
							$newList[$i]['otherrules'] = $_POST['otherrules'][$k];
							$newList[$i]['rules301'] = '';
							$i++;
							// 验证目录合法性
							if (!preg_match($dirmode1,$_POST['dirname'][$k]) || !$_POST['dirname'][$k] || preg_match('@//@iUs',$_POST['dirname'][$k])) {
								$dirbool = false;
								break;
							}
						}
					}
					if ($demo) {
						// 演示版本
						$notice = html_notice('','模拟更新成功！本版本是演示版本，仅作模拟提交！不实际保存数据');
					} else {
						if (!$domainbool) {
							$notice = html_notice('error','更新失败！域名格式错误！');
						} else if (!$dirbool) {
							$notice = html_notice('error','更新失败！目录名称不合法，请采用字母、数字、下划线(_)、中划线(-)！如：/test_abc-123/');
						} else {
							save_list($newList,$sys['webName']);
							if ($i>=1) {
								$notice = html_notice('','更新成功！');
							}						
						}

					}

				} else if ($_POST['addsubmit']) {
					if (trim($_POST['dirname'])) {
						// 目录标准化
						$_POST['dirname'] = substr($_POST['dirname'],-1)!='/' ? $_POST['dirname'].'/' : $_POST['dirname'];
						$_POST['dirname'] = substr($_POST['dirname'],0,1)=='/' ? substr($_POST['dirname'],1) : $_POST['dirname'];
						$_POST['dirname'] = $_POST['dirname']=='/' ? '' : $_POST['dirname'];
						
						$list = get_list($sys['webName']);
						$list = iconvArr('utf-8','gb2312',$list);
						if (is_array($list)) {
							foreach ($list as $k=>$value) {
								$dirArray[] = $value['dirname'];
							}
						} else {
							$list = array();
							$dirArray = array();
						}
						$direrror = html_notice('error','目录名称不合法，请采用字母、数字、下划线(_)、中划线(-)！如：/test_abc-123/');
						if (in_array($_POST['dirname'],$dirArray)) {
							$notice = html_notice('error','该目录已经绑定过了！');
						} else if ((!preg_match($dirmode1,$_POST['dirname']) && trim($_POST['dirname'])!='') || preg_match('@//@iUs',$_POST['dirname'])) {
							$notice = $direrror;
						} else if (!trim($_POST['domain'])){
							$notice = html_notice('error','请输入域名！');
						} else {
							$domainArr = explode("\r\n",trim($_POST['domain']));
							if (is_array($domainArr)) {
								// 验证每个域名
								$domainbool = true;
								foreach ($domainArr as $value) {
									$bool = preg_match($domainmode,$value);
									if (!$bool) {
										$domainbool = $bool;
										break;
									}
								}
								if (!$domainbool) {
									$notice = html_notice('error','输入的域名格式错误！请输入正确的域名');
								} else {
									$j = $k+1;
									$domain = str_replace("\r\n","|",trim($_POST['domain']));
									$addArray[$j]['dirname'] = $_POST['dirname'];
									$addArray[$j]['domain'] = $domain;
									$addArray[$j]['author'] = '闲云野鹤';
									$addArray[$j]['poweredby'] = 'blog.phpclubs.com';
									$addArray[$j]['date'] = date('Y-m-d');
									$addArray[$j]['status'] = $_POST['status'];
									$addArray[$j]['noite'] = "请不要手动修改或删除以'#'好开头的行，删除后将导致管理平台无法使用！";
									$addArray[$j]['mainrules'] = '';
									$addArray[$j]['otherrules'] = $_POST['otherrules'];
									$addArray[$j]['rules301'] = '';
									$list = array_merge($list,$addArray);
									if ($demo) {
										$notice = html_notice('','模拟添加子目录成功！本版本是演示版本，仅作模拟提交！不实际保存数据');		
									} else {
										save_list($list,$sys['webName']);
										$notice = html_notice('','添加子目录成功！');	
										$_POST['dirname'] = '';
										$_POST['domain'] = '';					
									}								
								}
							}
						}
					} else {
						$notice = html_notice('error','子目录名称不能为空！');
					}
				}
				html_header();
				html_nav();
				html_manager($notice,$sys['webName']);
				html_footer();
				break;
			// 更新
			case 'update' :
				check_access();
				html_header();
				html_nav();
				html_update();
				html_footer();
				break;
			// 登陆
			case 'login' :
				if ($_SESSION['admin']==md5($adminPassword)) {
					header('location:'.$url);
				}
				if ($_POST['loginsubmit']) {
					if ($_POST['password']) {
						if (strcmp($_POST['password'],$adminPassword)==0) {
							$_SESSION['admin'] = md5($adminPassword);
							header('location:'.$url);
							exit();
						} else {
							$notice = html_notice('error','密码错误！');
						}
					} else {
						$notice = html_notice('error','请输入密码！');
					}
				}
				html_header();
				html_nav();
				html_login($notice);
				html_footer();
				break;
			// 退出
			case 'logout' :
				check_access();
				unset($_SESSION['admin']);
				header('location:'.$url);
				break;
			// 首页
			case 'index' :	
			default :
				check_access();
				html_header();
				html_nav();
				html_index();
				html_footer();
		}
	}
	
	/**
	*
	* 下面是公用函数库
	*
	**/
	
	// 强制去转义
	function dstripslashes($string, $force = 0) {
		if(get_magic_quotes_gpc() || $force) {		//判断是否开启系统自动转义功能
			if(is_array($string)) {
				foreach($string as $key => $val) {
					$string[$key] = dstripslashes($val, $force);
				}
			} else {
				$string = stripslashes($string);
			}
		}
		return $string;
	}
	
	// 获取子目录绑定配置列表
	function get_list($type='apache'){
		$type = $type ? $type : 'apache';
		global $limiter,$sys;
		$htaccess = file_get_contents($sys['htaccessname']);
		if ($type=='apache') {
			$mode = "@{$limiter[left]}(.*){$limiter[right]}@iUs";
			$bool = preg_match_all($mode,$htaccess,$matches);
			if ($bool) {
				foreach ($matches[1] as $subStr) {
					$subArray = explode("\r\n#",$subStr);
					foreach ($subArray as $subValue) {
						if (trim($subValue)) {
							list($name,$value) = explode('= ',$subValue);
							$name = trim($name);
							$value = str_replace('>>>','',$value);
							$value = str_replace("\t#--",'',$value);
							$value = str_replace("\t",'',$value);
							$value = trim($value);
							$subList[$name] = $value;
						}
					}
					$list[] = $subList;
				}
			}
		} else if($type=='microsoft-iis'){
			if ((int)$sys['webVersion']=='6') {
				$mode = "@{$limiter[left]}(.*){$limiter[right]}@iUs";
				$bool = preg_match_all($mode,$htaccess,$matches);
				foreach ($matches[1] as $subStr) {
					$subArray = explode("\r\n#",$subStr);				
					foreach ($subArray as $subValue) {
						if (trim($subValue)) {
							list($name,$value) = explode('= ',$subValue);
							$name = trim($name);
							$value = str_replace('>>>','',$value);
							$value = str_replace("\t",'',$value);
							$value = trim($value);
							$subList[$name] = $value;
						}
					}
					$list[] = $subList;
				}
			} else if ((int)$sys['webVersion']=='7') {
				$mode = "@{$limiter[left]}(.*){$limiter[right]}@iUs";
				//$htaccess = iconv('utf-8','gb2312',$htaccess);
				$bool = preg_match_all($mode,$htaccess,$matches);
				foreach ($matches[1] as $subStr) {
					$subArray = explode("<!--#",$subStr);				
					foreach ($subArray as $subValue) {
						$subValue = str_replace('-->','',$subValue);
						$subValue = str_replace('<!--','',$subValue);
						if (trim($subValue)) {
							list($name,$value) = explode('= ',$subValue);
							$name = trim($name);
							$value = str_replace('>>>','',$value);
							$value = str_replace("\t",'',$value);
							$value = trim($value);
							$subList[$name] = $value;
						}
					}
					$list[] = $subList;
				}
			}
		}
		//print_r($list);
		return $list;
	}
	// 编辑、添加子目录绑定save
	function save_list($data,$type='apache'){
		global $sys;
		$type = $type ? $type : 'apache';
		global $limiter;
		$saveContent = '';
		// apache
		if ($type=='apache') {
			$saveContent = "\r\nRewriteEngine On\r\nRewriteBase /\r\n\r\n";
			$saveContent .= "RewriteRule ^{$sys[newfilename]}$ {$sys[filename]}\r\n";		
			if (is_array($data)) {
				foreach ($data as $dataValue) {
					$saveContent .= "\r\n" . $limiter['left'] . "\r\n";
					foreach ($dataValue as $dKey=>$dValue) {
						$domainArr =  explode('|',$dataValue['domain']);
						$domainCount = count($domainArr);
						$t = $dKey=='noite'||$dKey=='date' ? "\t\t" : "\t";
						$s = $dataValue['status']=='false' ? '#' : '';	
						$s301 = $dataValue['status']=='301' ? '' : '#';					
						if ($dKey=='otherrules') {
							$dValue = " >>>\r\n".$dValue;
							$dValue = str_replace("\t","",$dValue);
							$dValue = str_replace("\r\n","\r\n\t\t\t{$s}",$dValue);
						} else if ($dKey=='mainrules') {
							$domain = $dataValue['status']!='301' ? str_replace('|','$|^',$dataValue['domain']) : $domainArr[0];
							$dValue = " >>>\r\n";
							$dValue .= 'RewriteCond %{HTTP_HOST} ^'.$domain.'$'."\r\n{$s}";
							$dValue .= 'RewriteCond %{REQUEST_URI} !^/'.$dataValue['dirname']."\r\n{$s}";
							$dValue .= 'RewriteRule ^(.*)$	'.$dataValue['dirname'].'$1';
							$dValue = str_replace("\r\n","\r\n\t\t\t",$dValue);
						} else if ($dKey=='rules301') {
							$dValue = " >>>\r\n";
							if ($domainCount>1) {
								$mainDomain = $domainArr[0];
								unset($domainArr[0]);
								$domain = implode('$|^',$domainArr);
								$dValue .= $s301.'RewriteCond %{HTTP_HOST} ^'.$domain.'$'."\r\n{$s301}";
								$dValue .= 'RewriteRule ^(.*)$	http://'.$mainDomain.'/$1 [R=301,L]';							
							} else {
								
							}
							$dValue = str_replace("\r\n","\r\n\t\t\t",$dValue);
						}
						$saveContent .= "\r\n#{$dKey} {$t}= {$dValue}";
					}
					$saveContent .= "\r\n" . $limiter['right'] . "\r\n\r\n";
				}
			} 
		// iis 6.0
		} else if ($type=='microsoft-iis' && (int)$sys['webVersion']=='6') {
			$saveContent = "\r\n[ISAPI_Rewrite]\r\n\r\nRewriteRule ^(.*)/{$sys[basename]}\.htm\?*(.*)$ $1/{$sys[basename]}\.php\?a=check\r\n";				
			if (is_array($data)) {
				foreach ($data as $dataValue) {
					$saveContent .= "\r\n" . $limiter['left'] . "\r\n";
					foreach ($dataValue as $dKey=>$dValue) {
						$domainArr =  explode('|',$dataValue['domain']);
						$domainCount = count($domainArr);
						$t = $dKey=='noite'||$dKey=='date' ? "\t\t" : "\t";
						$s = $dataValue['status']=='false' ? '#' : '';	
						$s301 = $dataValue['status']=='301' ? '' : '#';	
						if ($dKey=='otherrules') {
							$dValue = " >>>\r\n".$dValue;
							$dValue = str_replace("\t","",$dValue);
							$dValue = str_replace("\r\n","\r\n\t\t\t{$s}",$dValue);
						} else if ($dKey=='mainrules') {
							$domain = $dataValue['status']!='301' ? str_replace('|','$|^',$dataValue['domain']) : $domainArr[0];
							$dValue = " >>>\r\n";
							$mainDomain = str_replace('.','\.',$domainArr[0]);
							if ($dataValue['status']=='301') {
								$dValue .= 'RewriteCond Host: '.$mainDomain."\r\n{$s}";
								$dValue .= 'RewriteRule ^(.*)$ /'.$dataValue['dirname'].'$1 [I]';
							} else {
								if (is_array($domainArr)) {
									foreach($domainArr as $k=>$v) {
										$mainDomain = str_replace('.','\.',$v);
										$dValue .= "\r\n".'RewriteCond Host: '.$v."\r\n{$s}";
										$dValue .= 'RewriteRule ^(.*)$ /'.$dataValue['dirname'].'$1 [I]';
									}
								}
							}
							$dValue = str_replace("\r\n","\r\n\t\t\t",$dValue);
						} else if ($dKey=='rules301') {
							$dValue = " >>>\r\n";
							if ($domainCount>1) {
								$mainDomain = str_replace('.','\.',$domainArr[0]);
								unset($domainArr[0]);
								$domain = implode('|',$domainArr);
								$domain = str_replace('.','\.',$domain);
								$dValue .= $s301.'RewriteCond Host: '.$domain."\r\n{$s301}";
								$dValue .= 'RewriteRule ^(.*)$ http://'.$mainDomain.'$1 [R,I]';						
							} else {
								
							}
							$dValue = str_replace("\r\n","\r\n\t\t\t",$dValue);
						}
						$saveContent .= "\r\n#{$dKey} {$t}= {$dValue}";
					}
					$saveContent .= "\r\n" . $limiter['right'] . "\r\n\r\n";
				}
			} 
		} else if ($type=='microsoft-iis' && (int)$sys['webVersion']=='7') {	
		
			$sys['basename2'] = str_replace('.','\.',$sys['basename']);
			$saveContent = "\r\n\t\t\t\t<rule name=\"Imported Rule {$sys[basename]}".date("Y-m-d H:i:s")."\">\r\n\t\t\t\t\t<match url=\"^{$sys[basename2]}\.htm$\" ignoreCase=\"false\" />\r\n\t\t\t\t\t"
				."<action type=\"Rewrite\" url=\"{$sys[basename]}.php?a=check\" appendQueryString=\"true\" />\r\n\t\t\t\t</rule>\r\n\t\t\t";				
			if (is_array($data)) {
				foreach ($data as $dataValue) {
					$saveContent .= "\r\n" . $limiter['left'] . "\r\n";
					$mainrules = $dataValue['mainrules'];
					$otherrules = $dataValue['otherrules'];
					$rules301 = $dataValue['rules301'];
					unset($dataValue['mainrules']);
					unset($dataValue['otherrules']);
					unset($dataValue['rules301']);
					$dataValue['otherrules'] = $otherrules;
					$dataValue['mainrules'] = $mainrules;
					$dataValue['rules301'] = $rules301;
					
					foreach ($dataValue as $dKey=>$dValue) {
						$domainArr =  explode('|',$dataValue['domain']);
						$domainCount = count($domainArr);
						$t = $dKey=='noite'||$dKey=='date' ? "\t\t" : "\t";
						$sshow = $dataValue['status']=='false' ? "\r\n<!--\r\n" : '';	
						$eshow = $dataValue['status']=='false' ? "\r\n-->\r\n" : '';	
						$s301 = $dataValue['status']=='301' ? '' : "<!--\r\n";	
						$e301 = $dataValue['status']=='301' ? "\r\n" : "\r\n-->\r\n";	
						if ($dKey=='otherrules') {
							$dValue = str_replace("&amp;","&",$dValue);
							$dValue = str_replace("&","&amp;",$dValue);
							$dValue = str_replace("\t","",$dValue);
							$dValue = " >>>-->\r\n{$sshow}".$dValue."\r\n{$eshow}\r\n";
						} else if ($dKey=='mainrules') {
							$domain = $dataValue['status']!='301' ? str_replace('|','$|^',$dataValue['domain']) : $domainArr[0];
							$dValue = " >>>-->\r\n{$sshow}";	
							$dValue .= "\t\t".'<rule name="Imported Rule '.$dataValue['dirname'].rand(100,999).'">';
							$dValue .= "\r\n\t\t\t".'<match url="^.*$" ignoreCase="false" />';
							$dValue .= "\r\n\t\t\t".'<conditions><add input="{HTTP_HOST}" pattern="^'.$domain.'$" /></conditions>';
							$dValue .= "\r\n\t\t\t".'<action type="Rewrite" url="'.$dataValue['dirname'].'{R:0}" appendQueryString="true" />';
							$dValue .= "\r\n\t\t".'</rule>';
							$dValue .= "{$eshow}";
						} else if ($dKey=='rules301') {
							$dValue = " >>>-->\r\n";
							if ($domainCount>1) {
								$mainDomain = $domainArr[0];
								unset($domainArr[0]);
								$domain = implode('|',$domainArr);
								$dValue .= $s301."\t\t".'<rule name="Imported Rule '.$dataValue['dirname'].rand(100,999).'">';
								$dValue .= "\r\n\t\t\t".'<match url="^.*$" ignoreCase="false" />';
								$dValue .= "\r\n\t\t\t".'<conditions><add input="{HTTP_HOST}" pattern="^'.$domain.'$" /></conditions>';
								$dValue .= "\r\n\t\t\t".'<action type="Redirect" url="http://'.$mainDomain.'/{R:0}" redirectType="Permanent"/>';
								$dValue .= "\r\n\t\t".'</rule>'.$e301;						
							}
						} else {
							$dValue .= '-->';
						}
						$saveContent .= "\r\n<!--#{$dKey} {$t}= {$dValue}";
					}
					$saveContent .= "\r\n" . $limiter['right'] . "\r\n\r\n";
				}
			} 
			$saveContent = '<rules>'.$saveContent."\t\t\t</rules>";
			$saveContent = iconv('gb2312','utf-8',$saveContent);
			$htaccess = file_get_contents($sys['htaccessname']);
			$saveContent = @preg_replace('@<rules>(.*)</rules>@iUs',$saveContent,$htaccess);
		}
		// 调试输出
		//exit($saveContent);
		if ($saveContent) {
			copy($sys['htaccessname'],$sys['htaccessname'].'.bak');
			file_put_contents($sys['htaccessname'],$saveContent);
			@chmod($sys['htaccessname'],0777);
		}
		return $saveContent;		
	}
	// 显示背景图片
	function show_image($contents){
		header('Content-Type: image/gif');
		echo base64_decode($contents);
		exit();
	}
	// 数组转码
	function iconvArr($in,$out,$array) {
		if (is_array($array)) {
			foreach ($array as $key => $value) {
				if (is_array($value)) {
					$array[$key] = iconvArr($in,$out,$value);
				} else {
					$array[$key] = trim($value) ? iconv($in,$out,$value) : '';
				}
				
			}
		} else {
			$array = trim($array) ? iconv($in,$out,$array) : '';	
		}
		return $array;
	}	
	// 提示信息
	function html_notice($type='',$msg=''){
		$type = $type ? '_error' : '';
		$script = '';
		if ($type) $script = '<script type="text/javascript">window.addDomReadyFunc(function(){document.getElementById(\'password\').focus();});</script>';
		return $script.'
<div id="notice'.$type.'_0" class="notice'.$type.'">
	<a onclick="document.getElementById(\'notice'.$type.'_0\').style.display=\'none\';" title="Dismiss" class="close">X</a>
    '.$msg.'
</div>
		';
	}
	// 权限验证
	function check_access(){
		global $adminPassword;
		if ($_SESSION['admin']!=md5($adminPassword)) {
			header('location:'.$url.'?a=login');
		}
	}
	// 更新
	function html_update(){
		global $scriptName;
		echo '
		<div id="content">
            <h2>更新</h2>
            <ul class="green lastnews">
				 <img src="'.$scriptName.'?a=images&images=loading.gif" border="0" width="16" height="16">
			</ul>
		</div>
		';
	}
	// 使用说明
	function html_readme(){
		global $adminVersion;
		global $sys;
		echo '
		<div id="content">
			<h2>使用方法</h2>
            <ul class="green">
              <li>1、请将要绑定子目录的域名<font color="red">先解析到空间</font>所在服务器IP：<b><font color="red">'.gethostbyname($_SERVER['HTTP_HOST']).'</font></b>(跟普通的域名解析一样，在万网或新网等域名商那里设置)。</li>
			  <li>2、然后把要绑定子目录的域名<font color="red">绑定</font>到空间上，跟放一个站时绑定一样！绑定好后，<font color="red">测试确保</font>两个域名都能访问空间里面的主站(这里一般在空间提供商提供的控制面板中绑定)。</li>
			  <li>3、<b style="color:red;">第二步测试通过后，就该通过本程序设置了，先把本程序（htaccess-admin.php）上传到站点根目录，然后通过http://你的域名/htaccess-admin.php，打开本程序，输入密码后，点击子目录管理，添加要绑定的子目录和域名(绑定子目录数量无限制)。</b></li>
			  <li>4、测试访问绑定过的域名，是否解析到了相应的子目录。</li>
			  <li>5、管理平台密码默认是blog.phpclubs.com，您可以通过ftp修改源文件中第七行！</li>
			  <li>6、<font color=red>301模式说明：开启301模式后，将把第一行的域名作为主域名，其余域名都跳转到主域名上，利于SEO，有了301模式，新手即使不会写301规则也不用怕啦。</font></li>
			</ul>
            <h2>注意事项</h2>
            <ul class="green">
              <li>1、该版本 为Htaccess-Admin '.$adminVersion.' 目前支持的Web服务器： Apache、IIS 6、IIS 7</li>
			  <li>2、<font color="red">请确认您的空间支持rewrite</font></li>
			  <li>3、如果您在使用本系统前已经在使用rewrite伪静态，请空间备份根目录的'.$sys['htaccessname'].'文件</li>
			  <li style="color:red;">4、如果由于配置不当导致空间无法正常打开时，请登陆FTP删除根目录的'.$sys['htaccessname'].'文件,然后重命名'.$sys['htaccessname'].'.bak为'.$sys['htaccessname'].'，即可恢复到最后一次系统正确配置</li>
			  <li>5、问题反馈 mail:mabaoq12@163.com QQ:329673018 博客：blog.phpclubs.com</li>
			</ul>
		</div>
		';
	}
	// 子目录管理
	function html_manager($notice='',$type=''){
		global $_POST;
		$list = get_list($type);
		$dirname = is_array($_POST['dirname']) ? '' : $_POST['dirname'];
		$domaina = is_array($_POST['domain']) ? '' : $_POST['domain'];
		$submit = is_array($list) ? '保存修改' : '暂无记录';
		$tr = '';
		if (is_array($list)) {
			foreach ($list as $key=>$value) {
				$domain = str_replace("|","\r\n",$value['domain']);
				$firstCheck = $value['status']=='301' ? ' checked="checked"' : '';
				$trueCheck = $value['status']=='true' ? ' checked="checked"' : '';
				$falseCheck = $value['status']=='false' ? ' checked="checked"' : '';
			$tr .= '<tr class="row1">
						<td>
							<input type="text" name="dirname[]" value="/'.$value['dirname'].'" style="width:110px;" class="inputgri">
						</td>
						<td>
							<input type="radio"'.$firstCheck.' value="301" name="status['.$key.']"><label><font color="green"><span onmouseout="exit()" onmouseover="tooltip(\'1、301模式 ，该模式下多个域名绑定到一个目录时，第二个以后的域名将自动跳转到第一个域名，利于SEO。\')" class="tooltip">301模式</span></font></label>
							
							<input type="radio"'.$trueCheck.' value="true" name="status['.$key.']"><label><font color="green"><span onmouseout="exit()" onmouseover="tooltip(\'2、正常模式，该模式下多个域名绑定到同一个目录时将都可以正常访问。<br>\')" class="tooltip">正常模式</span></font></label>
							
							<input type="radio"'.$falseCheck.' value="false" name="status['.$key.']"><label><font color="red"><span onmouseout="exit()" onmouseover="tooltip(\'3、关闭模式，采用关闭模式该条绑定记录将不生效！\')" class="tooltip">关闭模式</span></font></label>
						</td>
						<td><textarea name="domain[]" class="inputgri wide-input" style="width:200px;">'.$domain.'</textarea></td>
						<td><textarea name="otherrules[]" class="inputgri wide-input" style=" width:200px;">'.$value['otherrules'].'</textarea></td>
						<td align="center"><input type="checkbox" value="true" name="del['.$key.']"></td>
					  </tr>';
			}
		}
		
		$output = '
<div id="content">
 	'.$notice.'
	 <h1>添加绑定记录</h1>
	 		<form method="post" action="?a=manager" name="addform">
			<table cellspacing="0" cellpadding="0" class="table">
			  <tbody>
			   <tr class="table_header">
				 <td width="118">
				 <span onmouseout="exit()" onmouseover="tooltip(\'开头加 \\\'/\\\' 结尾，例如：/aaa/ 或者 /aaa/test/\')" class="tooltip">
					子目录?					 </span>					</td>
				 <td width="75" align="center">
					<span onmouseout="exit()" onmouseover="tooltip(\'1、301模式 ，该模式下多个域名绑定到一个目录时，第二个以后的域名将自动跳转到第一个域名，利于SEO。<br>2、正常模式，该模式下多个域名绑定到同一个目录时将都可以正常访问。<br>3、关闭模式，采用关闭模式该条绑定记录将不生效！\')" class="tooltip">
				 状态模式?					 	</span>					 </td>
				 <td width="215">
					<span onmouseout="exit()" onmouseover="tooltip(\'一个目录绑定多个域名时，一行一个域名！\')" class="tooltip">
					域名?						</span></td>
				 <td><span onmouseout="exit()" onmouseover="tooltip(\'这里配置目录的自定义伪静态规则！如discuz程序开启伪静态，这里填写伪静态规则！不需要时请留空！\')" class="tooltip">高级? </span></td>
				 <td width="55" align="center"><span>添加</span></td>
			  </tr>       
			  <tr class="row1">
				 <td><input type="text" name="dirname" style=" width:110px;" class="inputgri" value="'.$dirname.'"/></td>
				 <td>
				 	<input type="radio" checked="checked" value="301" name="status"><label><font color="green"><span onmouseout="exit()" onmouseover="tooltip(\'1、301模式 ，该模式下多个域名绑定到一个目录时，第二个以后的域名将自动跳转到第一个域名，利于SEO。\')" class="tooltip">301模式</span></font></label>
					
					<input type="radio" checked="checked" value="true" name="status"><label><font color="green"><span onmouseout="exit()" onmouseover="tooltip(\'2、正常模式，该模式下多个域名绑定到同一个目录时将都可以正常访问。<br>\')" class="tooltip">正常模式</span></font></label>
					
					<input type="radio" value="false" name="status"><label><font color="red"><span onmouseout="exit()" onmouseover="tooltip(\'3、关闭模式，采用关闭模式该条绑定记录将不生效！\')" class="tooltip">关闭模式</span></font></label></td>
				 <td><textarea name="domain" class="inputgri wide-input" style="width:200px;">'.$domaina.'</textarea></td>
				 <td><textarea name="otherrules" class="inputgri wide-input" style=" width:200px;"></textarea></td>
				 <td align="center"><span class="center">
				   <input type="submit" value="添加" name="addsubmit" class="button" />
				 </span></td>
			  </tr>
		</tbody>
	</table>
	</form>
	 <h1>子目录管理</h1>
	 <form method="post" action="?a=manager" name="editform">
	 <table cellspacing="0" cellpadding="0" class="table">
                  <tbody>
				  <tr class="table_header">
                     <td width="118">
					 <span onmouseout="exit()" onmouseover="tooltip(\'开头加 \\\'/\\\' 结尾，例如：/aaa/ 或者 /aaa/test/\')" class="tooltip">
					 	子目录?					 </span>					</td>
                     <td width="75" align="center">
					 	<span onmouseout="exit()" onmouseover="tooltip(\'1、301模式 ，该模式下多个域名绑定到一个目录时，第二个以后的域名将自动跳转到第一个域名，利于SEO。<br>2、正常模式，该模式下多个域名绑定到同一个目录时将都可以正常访问。<br>3、关闭模式，采用关闭模式该条绑定记录将不生效！\')" class="tooltip">
					 状态模式?					 	</span>					 </td>
                     <td width="215">
					 	<span onmouseout="exit()" onmouseover="tooltip(\'一个目录绑定多个域名时，一行一个域名！\')" class="tooltip">
					 	域名?						</span></td>
                     <td><span onmouseout="exit()" onmouseover="tooltip(\'这里配置目录的自定义伪静态规则！如discuz程序开启伪静态，这里填写伪静态规则！不需要时请留空！\')" class="tooltip">高级? </span></td>
                     <td width="55" align="center"><span onmouseout="exit()" onmouseover="tooltip(\'勾选后，点击下面的保存，将删除该条记录\')" class="tooltip">删除</span></td>
                  </tr>                  
				 '.$tr.'
				 </tbody></table>
			<p class="center"><input type="submit" value="'.$submit.'" name="updatesubmit" class="button"></p>
			</form>
			<div class="hr"></div>
</div> 		
		';
		echo $output;
	}
	// 首页html
	function html_index(){
		global $adminVersion,$scriptName;
		list($websoft,$os) = explode(' ',$_SERVER['SERVER_SOFTWARE']);
		echo '
		<div id="content">
            <h1>欢迎使用子目录绑定管理平台 Htaccess-Admin '.$adminVersion.'</h1>      
            <p> 本程序是一个子目录绑定管理平台。利用他可以将您的多个顶级域名绑定到空间的任意文件夹！本程序完全开源免费，您可以根据自己的需要任意修改和使用！ <font color=red>【3.0主要更新】增加了对iis 7 的支持，增加配置文件安全机制，系统始终会备份最新的配置文件，当由于高级配置不当导致站点无法打开时，可以直接恢复到上一次正确配置</font>【V2.5新功能】新增301模式，一键设置301跳转，免去手动写代码规则的麻烦！利于SEO！</p>
            <h2>空间环境</h2>
            <ul class="green">
			  <li><span class="bold">DOMAIN:'.$_SERVER['HTTP_HOST'].'</span></li>
			  <li><span class="bold">IP:'.gethostbyname($_SERVER['HTTP_HOST']).'</span></li>
              <li><span class="bold">PHP Version/'.PHP_VERSION.'</span></li>
			  <li><span class="bold">'.$websoft.'</span></li>
			  <li><span class="bold" style="color:green;">rewrite 支持</span></li>
			  <li><a href="'.$scriptName.'?a=info" id="infos">空间详细配置信息</a></li>
			</ul>
			<div class="infos" style="display:none;">
			<iframe src="'.$scriptName.'?a=phpinfo" frameborder="0" width="750" height="500" scrolling="auto"  allowtransparency="true" style="overflow-x:hidden;"></iframe>
			</div>
            <br>
      <h2>程序版本</h2>
      <ul class="green">
         <li><b>htaccess-admin '.$adminVersion.'</b></li>
         </ul>      
      <br>
     <h2>官网最新消息</h2>
	 <ul class="green lastnews">
         <img src="'.$scriptName.'?a=images&images=loading.gif" border="0" width="16" height="16">
     </ul>  
     <br>
         </div>';
	}
	// 登陆form
	function html_login($notice=''){
		echo '
         <div id="content" style=" text-align:center;">
		 	'.$notice.'
            <h1 style="font-size:24px;">登陆管理平台</h1>
         <form action="?a=login" method="post">
            <table class="form_table" border="0" cellpadding="0" cellspacing="0" style="margin:15px auto;">
               <tr>
                  <td align="right">用户名:</td>
                  <td align="left"><input name="username" type="text" class="inputgri" id="username" value="admin" disabled="disabled"></td>
               </tr>
               <tr>
                  <td align="right">密&nbsp;&nbsp;&nbsp;码:</td>
                  <td align="left"><input class="inputgri" id="password" name="password" type="password"></td>
               </tr>
            </table>
            <p><input class="button" value="登陆 Login" name="loginsubmit" type="submit" style=" margin-left:30px; width:120px;"></p>
         </form>
         </div>		
		 <script type="text/javascript">window.addDomReadyFunc(function(){document.getElementById(\'password\').focus();});</script>
		';
	}
	// 头部导航
	function html_nav(){
		global $adminPassword,$adminVersion;
		
		$safekey = 'PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAicHViLTkyODA3MjczNDYxNTM0MTgiOw0KLyogNzI4JiM0Mjs5MCAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiMTE3MDkwNDY3MiI7DQpnb29nbGVfYWRfd2lkdGggPSA3Mjg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gOTA7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4=';
		if ($_SESSION['admin']==md5($adminPassword)) {
			$loginStatus = '你好, <i>admin</i>: <strong><a href="?a=logout">注销</a></strong>';
			$nav =  '<li><a href="?">首页</a></li>
                 <li><a href="?a=readme">注意事项</a></li>
                 <li><a href="?a=manager">子目录管理</a></li>
                 <li><a href="?a=update">更新</a></li>';
		} else {
			$nav = '';
		}
		echo '
		<div id="header">

            <div id="rightheader">
               <p><span>'.date("Y-m-d").'</span> <span id="clock"></span><br />'.$loginStatus.'            
              </p>
            </div>

            <div id="topheader">
               <h1 id="title">
                  <a href="?">子目录绑定管理平台</a><br>
                  <span>Htaccess-Admin <font color=red style="font-size:16px; font-family:Georgia,Geneva,Verdana,sans-serif; font-weight:bold;">'.$adminVersion.'</font> Powered By <a href="http://blog.phpclubs.com" target="_blank">phpclubs</a> </span>               </h1>
            </div>

            <div id="navigation">
               <ul>'.$nav .'</ul>
            </div>
			<div style=" text-align:center; margin:10px auto;">
				'.base64_decode($safekey).'
			</div>	
		</div>		
		';
	}
	// html尾部
	function html_footer(){
		global $adminVersion;
		$foot = 'PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAicHViLTkyODA3MjczNDYxNTM0MTgiOw0KLyogNzI4JiM0Mjs5MCAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiMTE3MDkwNDY3MiI7DQpnb29nbGVfYWRfd2lkdGggPSA3Mjg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gOTA7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4=';
		echo '
		<div style=" text-align:center; margin:0px auto 30px auto;">
			'.base64_decode($foot).'
		</div>		
		</div>
		<div id="footer">
			 <div id="footer_bg">
				<p>
					<b><a href="http://blog.phpclubs.com" target="_blank">PHPClubs</a></b>
					 All rights reserved.  &copy; 2011-2022 Htaccess-Admin <font color=red style="font-size:16px; font-family:Georgia,Geneva,Verdana,sans-serif; font-weight:bold;">'.$adminVersion.'</font> Powered By 
					<b><a href="http://blog.phpclubs.com" target="_blank">PHPClubs</a></b>
					<div style="display:none;"><script language="javascript" type="text/javascript" src="http://js.users.51.la/5341357.js"></script>
<noscript><a href="http://www.51.la/?5341357" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/5341357.asp" style="border:none" /></a></noscript></div>
				</p>
			</div>
		</div>
   	</div>
   <div id="preload">
      <span class="ajax-loading">&nbsp;</span>
   </div>
   <div id="htaccess-admin"></div><!--
   </body>
</html>		
		';
	}
	function env_check($html,$bool=true){
		if ($bool) {
			html_nav();
			$output = '
	<div id="content">
		'.html_notice('error',$html).'
	</div>';
			echo $output;
			html_footer();
			exit();
		} else {
			
		}
	}	
	// html头部
	function html_header(){
		global $adminVersion,$scriptName,$a,$sys,$newurl;
		header('Content-Type: text/html; charset=gb2312');
		if ($a=='index'||$a=='update') {
			$update = '<script>
				$(function(){
					$("#infos").click(function(){$(".infos").slideToggle();return false;});
					$.post("?a=ajax",function(data,status){$(".lastnews").html(data);});
				});</script>';
		} else {
			$update = '';
		}
		$js = base64_decode('PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPnZhciBvZmZzZXR4PTEyO3ZhciBvZmZzZXR5PTg7ZnVuY3Rpb24gbmV3ZWxlbWVudChhKXtpZihkb2N1bWVudC5jcmVhdGVFbGVtZW50KXt2YXIgYj1kb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtiLmlkPWE7d2l0aChiLnN0eWxlKXtkaXNwbGF5PSdub25lJztwb3NpdGlvbj0nYWJzb2x1dGUnfWIuaW5uZXJIVE1MPScmbmJzcDsnO2RvY3VtZW50LmJvZHkuYXBwZW5kQ2hpbGQoYil9fXZhciBpZTU9KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkJiZkb2N1bWVudC5hbGwpO3ZhciBuczY9KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkJiYhZG9jdW1lbnQuYWxsKTt2YXIgdWE9bmF2aWdhdG9yLnVzZXJBZ2VudC50b0xvd2VyQ2FzZSgpO3ZhciBpc2FwcGxlPSh1YS5pbmRleE9mKCdhcHBsZXdlYmtpdCcpIT0tMT8xOjApO2Z1bmN0aW9uIGdldG1vdXNlcG9zaXRpb24oZSl7aWYoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQpe3ZhciBhPShkb2N1bWVudC5jb21wYXRNb2RlJiZkb2N1bWVudC5jb21wYXRNb2RlIT0nQmFja0NvbXBhdCcpP2RvY3VtZW50LmRvY3VtZW50RWxlbWVudDpkb2N1bWVudC5ib2R5O3BhZ2V4PShpc2FwcGxlPT0xPzA6KGllNSk/YS5zY3JvbGxMZWZ0OndpbmRvdy5wYWdlWE9mZnNldCk7cGFnZXk9KGlzYXBwbGU9PTE/MDooaWU1KT9hLnNjcm9sbFRvcDp3aW5kb3cucGFnZVlPZmZzZXQpO21vdXNleD0oaWU1KT9ldmVudC54OihuczYpP2NsaWVudFg9ZS5jbGllbnRYOmZhbHNlO21vdXNleT0oaWU1KT9ldmVudC55OihuczYpP2NsaWVudFk9ZS5jbGllbnRZOmZhbHNlO3ZhciBiPWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0b29sdGlwJyk7Yi5zdHlsZS5sZWZ0PShtb3VzZXgrcGFnZXgrb2Zmc2V0eCkrJ3B4JztiLnN0eWxlLnRvcD0obW91c2V5K3BhZ2V5K29mZnNldHkpKydweCd9fWZ1bmN0aW9uIHRvb2x0aXAoYSl7aWYoIWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0b29sdGlwJykpbmV3ZWxlbWVudCgndG9vbHRpcCcpO3ZhciBiPWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0b29sdGlwJyk7Yi5pbm5lckhUTUw9YTtiLnN0eWxlLmRpc3BsYXk9J2Jsb2NrJztkb2N1bWVudC5vbm1vdXNlbW92ZT1nZXRtb3VzZXBvc2l0aW9ufWZ1bmN0aW9uIGV4aXQoKXtkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndG9vbHRpcCcpLnN0eWxlLmRpc3BsYXk9J25vbmUnfXdpbmRvdy5kb21SZWFkeUZ1bmNzPW5ldyBBcnJheSgpO3dpbmRvdy5hZGREb21SZWFkeUZ1bmM9ZnVuY3Rpb24oYSl7d2luZG93LmRvbVJlYWR5RnVuY3MucHVzaChhKX07ZnVuY3Rpb24gaW5pdCgpe2lmKGFyZ3VtZW50cy5jYWxsZWUuZG9uZSlyZXR1cm47YXJndW1lbnRzLmNhbGxlZS5kb25lPXRydWU7aWYoX3RpbWVyKWNsZWFySW50ZXJ2YWwoX3RpbWVyKTtmb3IodmFyIGk9MDtpPHdpbmRvdy5kb21SZWFkeUZ1bmNzLmxlbmd0aDsrK2kpe3RyeXt3aW5kb3cuZG9tUmVhZHlGdW5jc1tpXSgpfWNhdGNoKGlnbm9yZSl7fX19O2lmKGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIpe2RvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoIkRPTUNvbnRlbnRMb2FkZWQiLGluaXQsZmFsc2UpfS8qQGNjX29uQCovLypAaWYoQF93aW4zMilkb2N1bWVudC53cml0ZSgiPHNjcmlwdCBpZD1fX2llX29ubG9hZCBkZWZlciBzcmM9amF2YXNjcmlwdDp2b2lkKDApPjxcL3NjcmlwdD4iKTt2YXIgc2NyaXB0PWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJfX2llX29ubG9hZCIpO3NjcmlwdC5vbnJlYWR5c3RhdGVjaGFuZ2U9ZnVuY3Rpb24oKXtpZih0aGlzLnJlYWR5U3RhdGU9PSJjb21wbGV0ZSIpe2luaXQoKX19Oy8qQGVuZEAqL2lmKC9XZWJLaXQvaS50ZXN0KG5hdmlnYXRvci51c2VyQWdlbnQpKXt2YXIgX3RpbWVyPXNldEludGVydmFsKGZ1bmN0aW9uKCl7aWYoL2xvYWRlZHxjb21wbGV0ZS8udGVzdChkb2N1bWVudC5yZWFkeVN0YXRlKSl7aW5pdCgpfX0sMTApfXdpbmRvdy5vbmxvYWQ9aW5pdDtpZighd2luZG93LlhNTEh0dHBSZXF1ZXN0KXt3aW5kb3cuWE1MSHR0cFJlcXVlc3Q9ZnVuY3Rpb24oKXtyZXR1cm4gbmV3IEFjdGl2ZVhPYmplY3QoJ01pY3Jvc29mdC5YTUxIVFRQJyl9fWZ1bmN0aW9uIHJ1bkFqYXgoYSxiLGMsZCl7dmFyIGU9bmV3IFhNTEh0dHBSZXF1ZXN0KCk7dmFyIGY9Yj8nUE9TVCc6J0dFVCc7ZS5vcGVuKGYsYSx0cnVlKTtlLnNldFJlcXVlc3RIZWFkZXIoIkNvbnRlbnQtVHlwZSIsImFwcGxpY2F0aW9uL3gtamF2YXNjcmlwdDsiKTtlLm9ucmVhZHlzdGF0ZWNoYW5nZT1mdW5jdGlvbigpe2lmKGUucmVhZHlTdGF0ZT09NCYmZS5zdGF0dXM9PTIwMCl7aWYoZS5yZXNwb25zZVRleHQpe2MuY2FsbChkLGUucmVzcG9uc2VUZXh0KX19fTtlLnNlbmQoYil9DQpmdW5jdGlvbiBjbG9jaygpew0KCXZhciBzdCA9IHNob3d0aW1lKCk7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImNsb2NrIikuaW5uZXJIVE1MID0gc3Q7DQoJc2V0VGltZW91dCgiY2xvY2soKSIsMTAwMCk7DQp9DQpmdW5jdGlvbiBzaG93dGltZSgpew0KCXRvZGF5PW5ldyBEYXRlKCk7DQoJdmFyIGhvdXJzID0gdG9kYXkuZ2V0SG91cnMoKTsNCgl2YXIgbWludXRlcyA9IHRvZGF5LmdldE1pbnV0ZXMoKTsNCgl2YXIgc2Vjb25kcyA9IHRvZGF5LmdldFNlY29uZHMoKTsNCgl2YXIgdGltZVZhbHVlMSA9ICgoaG91cnMgPCAxMCkgPyAiMCIgOiAiIikgKyBob3VycysiIjsNCgl0aW1lVmFsdWUxICs9ICgobWludXRlcyA8IDEwKSA/ICI6MCIgOiAiOiIpICsgbWludXRlcysiIjsNCgl0aW1lVmFsdWUxICs9ICgoc2Vjb25kcyA8IDEwKSA/ICI6MCIgOiAiOiIpICsgc2Vjb25kcysiIjsNCgl2YXIgdGltZXRleHQ9dGltZVZhbHVlMTsNCglyZXR1cm4gdGltZXRleHQ7DQp9DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Imh0dHA6Ly9hamF4Lmdvb2dsZWFwaXMuY29tL2FqYXgvbGlicy9qcXVlcnkvMS40LjIvanF1ZXJ5Lm1pbi5qcyI+PC9zY3JpcHQ+DQo8c2NyaXB0Pg0KCSQoZnVuY3Rpb24oKXsNCgkJY2xvY2soKTsNCgkJJCgnLmlucHV0Z3JpJykuaG92ZXIoZnVuY3Rpb24oKXsNCgkJCSQodGhpcykudG9nZ2xlQ2xhc3MoJ2hvdmVyJyk7DQoJCX0pOw0KCX0pOw0KPC9zY3JpcHQ+');
		$css = '<style type="text/css">body{margin:0;font-size:12px;font-family:Verdana,Arial,Helvetica,sans-serif;padding:15px 0;background:#eee}#wrap{width:820px;margin:0 auto;background:url("{$scriptName}?a=images&images=bg.gif") top center repeat-y #FFF}#top_content{padding:0 10px}#topheader{padding:25px 15px 15px;margin:0 auto;background:url("{$scriptName}?a=images&images=top_left.gif") top left repeat-x #85C329}#rightheader{float:right;width:375px;height:40px;color:#FFF;text-align:right}#rightheader p{padding:35px 15px 0 0;margin:0;text-align:right}#title{padding:0;margin:0;font-size:2.5em;color:#FFF}#title span{font-size:0.5em;font-style:italic}#title a:link,#title a:visited{color:#FFF;text-decoration:none}#title a:hover{color:#E1F3C7}#navigation{background:#74A8F5;border-top:1px solid #fff;height:25px;clear:both}#navigation ul{padding:0;margin:0;list-style:none;font-size:1.1em;height:25px}#navigation ul li{display:inline}#navigation ul li a{color:#FFF;display:block;text-decoration:none;float:left;line-height:25px;padding:0 16px;border-right:1px solid #fff}#navigation ul li a:hover{background:#5494F3}#content{padding:15px;margin:0 auto;background:url("{$scriptName}?a=images&images=content_bg.gif") repeat-x left top #fff;color:#666}#content h1,#content h2,#content h3,#content h4,#content h5{color:#74A8F5}#content h1{font-family:"Trebuchet MS",Arial,Helvetica;padding:0;margin:0 0 15px;font-size:12px;}#content h2{font-family:"Trebuchet MS",Arial,Helvetica;padding:0;margin:0 0 15px;font-size:12px;}#top_body,#content_body{padding:0 25px}#footer{background:url("{$scriptName}?a=images&images=footer.gif") no-repeat center bottom;color:#FFF;padding:0 10px 13px}#footer p a:link,#footer p a:visited{color:#FFF;font-style:italic;text-decoration:none}#footer #footer_bg{background:url("{$scriptName}?a=images&images=footer_bg.gif") repeat-x left bottom #85C329;padding:15px 15px 25px;border-top:1px solid #7BB425;text-align:center;}#footer #design{display:block;width:150px;height:30px;float:right;line-height:20px;padding:0 5px;text-align:right;color:#E1F3C7}#footer #design a,#rightheader a:link,#rightheader a:visited{color:#FFF;text-decoration:underline}.table{margin-bottom:15px;width:100%;border-collapse:collapse}.table_header td a:link,.table_header td a:visited{text-decoration:underline;color:#467aa7}.table_header td{background:url("{$scriptName}?a=images&images=tableheader-bg.gif") no-repeat left top;padding:5px 10px;color:#467aa7;border-top:1px solid #CBD6DE;border-bottom:1px solid #ADBECB;font-size:1.1em;font-weight:bold;border:1px solid #CBD6DE}.row1 td,.row2 td,.row3 td,.row_hover td,.paging_row td{padding:5px 10px;color:#666;border:1px solid #CBD6DE}.row1 td{background:#fff}.row2 td{background:#f6f6f6}.row3 td{background:#eee}.row1:hover td,.row2:hover td,.row3:hover td{background:#FBFACE;color:#000}.hidden{display:none}#content .little{font-size:9px}.clear{clear:both}.img_left{float:left;padding:1px;border:1px solid #ccc;margin:0 10px 10px 0}#content ul{font-size:1.1em;line-height:1.8em;margin:0 0 15px;padding:0;list-style-type:none}#content p{margin:0;padding:0 0 15px;line-height:150%}#content p a:hover,.table a:hover,.form_table a:hover,.link a:hover{text-decoration:underline}#content ul.green li{padding:0 0 0 20px;margin:0;background:url("{$scriptName}?a=images&images=bullet_green.gif") no-repeat 1px 3px;}#content ul.black li{padding:0 0 0 20px;margin:0;background:url("{$scriptName}?a=images&images=bullet_grey.gif") no-repeat 1px 3px;font-size:1.1em}#content ul.black li a:link,#content ul.black li a:visited{color:#666;text-decoration:none}#content ol{padding:0 0 0 25px;margin:0 0 15px;line-height:1.8em}#content ol li{font-size:1.1em}#content ol li a:link,#content ol li a:visited,#content ul.green li a:link,#content ul.green li a:visited,#content p a,#content p a:visited,.table a,.table a:visited,.form_table a,.link a{color:#73A822;text-decoration:none}#content ol li a:hover,#content ul.green li a:hover,.table_header td a:hover{color:#73A822;text-decoration:underline}#content p.paging{padding:5px;border:1px solid #CBD6DE;text-align:center;margin-bottom:15px;background:#eee}.small_input{font-size:10px}.form_table{margin-bottom:15px;font-size:1.1em}.form_table td{padding:5px 10px}input.button{margin:0;padding:2px;border:3px double #999;border-left-color:#ccc;border-top-color:#ccc;background:url("{$scriptName}?a=images&images=button.gif") repeat-x left top;font-size:12px;font-family:Verdana,Arial,Helvetica,sans-serif}input.inputgri,select.inputgri,textarea.inputgri{background:#eee;font-size:14px;border:1px solid #ccc;padding:3px}input.inputgri.hover,textarea.inputgri.hover{background:#FFF;border:1px solid #999999;}input.inputgri:focus,select.inputgri:focus,textarea.inputgri:focus{background:#fff;border:1px solid #686868}textarea.inputgri{font-size:12px;font-family:Verdana,Arial,Helvetica,sans-serif;height:60px}.notice{background:#CAEA99;border:1px solid #70A522;padding:0px 0px 0px 20px;line-height:25px;margin-bottom:15px;color:#333;text-align:left;}.notice_error{background:#FEDCDA;border:1px solid #CE090E;padding-left:20px;line-height:25px;margin-bottom:15px;color:#333;text-align:left;}.notice .close,.notice_error .close{float:right;cursor:pointer;color:#fff;background:#74A8F5;border:1px outset #ccc;height:21px;line-height:21px;width:19px;text-align:center;overflow:hidden;margin:1px;}#notice a{color:#333;text-decoration:underline}.other_links{background:#eee;border-top:1px solid #ccc;padding:5px;margin:0 0 15px}#content .other_links h2{color:#999;padding:0 0 0 3px;margin:0}#content .other_links ul li{padding:0 0 0 20px;background:url("{$scriptName}?a=images&images=bullet_grey.gif") no-repeat left center}#content .other_links a,#content .other_links a:visited,#content ul.black li a:hover{color:#999;text-decoration:underline}#content .other_links a:hover{color:#666}code{font-size:1.2em;color:#73A822}#tooltip{width:20em;color:#fff;background:#555;font-size:12px;font-weight:normal;padding:5px;border:3px solid #333;text-align:left}.hr{border-top:2px solid #ccc;margin:5px 0 15px}.bold,#rightheader p span{font-weight:bold}.center{text-align:center}.right{text-align:right}.error-color{color:#CE090E}.ok-color{color:#70A522}.wide-input{width:350px}.small-input{width:50px}.tooltip{padding-bottom:1px;border-bottom:1px dotted #70A522;cursor:help}.ajax-loading{}.bar{background:#73A822;height:10px;font-size:xx-small;padding:2px;color:#000}.comment{padding:5px;border:1px solid #CBD6DE;border-width:1px 0 1px 0;margin-bottom:15px;background:#f6f6f6}#content .comment p,#content .comment ul,#content .other_links ul,form,.checkbox_nomargins,.form_table p,#footer p{margin:0;padding:0}#preload{position:absolute;height:10px;top:-100px}#username,#password{height:17px;width:150px;}textarea.inputgri1{font-size:12px;font-family:Verdana,Arial,Helvetica,sans-serif;height:60px}#htaccess-admin{display:none;}</style>';
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>子目录绑定管理平台 Htaccess Admin '.$adminVersion.' powered by phpclubs</title>
<meta name="description" content="欢迎使用子目录绑定管理平台 Htaccess-Admin '.$adminVersion.',本程序是一个子目录绑定管理平台。利用他可以将您的多个顶级域名绑定到空间的任意文件夹！本程序完全开源并且免费，您可以根据自己的需要任意修改和使用！ 【V2.5新功能】新增301模式，一键设置301跳转，免去手动写代码规则的麻烦！利于SEO" />
<meta name="keywords" content="htaccess-admin, htaccess绑定子目录, 子目录绑定,httpd.ini子目录绑定,apache301设置,IIS6 301设置" />
'.$js.'
'.str_replace('{$scriptName}',$scriptName,$css).'
'.$update.'
</head>
<body>
   <div id="wrap">
      <div id="top_content">';
	  	// 限制根目录安装
		$dirname = dirname($_SERVER['REQUEST_URI']);
	  	if ($dirname!='\\' && $dirname!='/') {
	  		env_check('请把本程序移动到根目录使用！');
		} 
		// 限制php版本
		if ($sys['php']<5) {
			env_check('您的PHP版本太低，请升级到 PHP 5.0 以上！否则无法使用本系统');
		}
		// 限制apache 和iis 6.0 / 7.0
		if ($sys['webName']!='apache') {
			if ($sys['webName']!='microsoft-iis') {
				env_check('您的WEB服务器采用的是'.$sys['webName'].'，本系统暂时只能运行于apache和iis平台');
			} else {
				if ((int)$sys['webVersion']!=6 && (int)$sys['webVersion']!=7) {
					env_check('您的WEB服务器采用的是'.$sys['webName'].'/'.$sys['webVersion'].'，本系统目前只能运行于apache和IIS 6.0平台');
				}
			}
		}
		// 检测rewrite 是否支持
		if ($sys['webName']=='apache') {
			$htaccessContent = "RewriteEngine On\r\nRewriteBase /\r\n\r\nRewriteRule ^{$sys[newfilename]}$ {$sys[filename]}";
			$htaccessPre = 'RewriteEngine On';
			$mode = str_replace('.','\.',"RewriteRule \^{$sys[newfilename]}\\\$ {$sys[filename]}");
			$mode = "@{$mode}@iUs";
			$noice = '对不起！系统检测到您的空间环境'.$sys['webName'].'/'.$sys['webVersion'].'未开启rewrite，请开启rewrite后重试！<a href="http://www.google.com.hk/search?q=apache%E5%BC%80%E5%90%AFrewrite" target="_blank">点击查看 开启apache rewrite步骤 </a><br>如果是购买的虚拟主机空间请联系空间提供商！<font color="red">如果由于填写高级选项而导致出现此提示时，请删除跟目录的 '.$sys['htaccessname'].'文件，并重命名'.$sys['htaccessname'].'.bak 为'.$sys['htaccessname'].'（恢复最后一此正确配置）</font>';
		} elseif ($sys['webName']=='microsoft-iis'){
			if ((int)$sys['webVersion']=='6') {
				$sys['basename'] = str_replace('.','\.',$sys['basename']);
				$htaccessContent = "[ISAPI_Rewrite]\r\n\r\nRewriteRule ^(.*)/{$sys[basename]}\.htm\?*(.*)$ $1/{$sys[basename]}\.php\?a=check";
				$htaccessPre = '[ISAPI_Rewrite]';
				$search = array('.','*');
				$replace = array('\\\\\\.','.*');
				$mode = str_replace($search, $replace,"RewriteRule(*){$sys[newfilename]}(*)/{$sys[filename]}");
				$mode = '@'.$mode.'@iUs';
				$noice = '对不起！系统检测到您的空间环境'.$sys['webName'].'/'.$sys['webVersion'].'未开启rewrite，请开启rewrite后重试！<a href="http://www.lesishu.com/server-host-domain/iis-rewrite/" target="_blank">点击查看 IIS 6.0 rewrite开启步骤</a> <br>如果是购买的虚拟主机空间请联系空间提供商！<font color="red">如果由于填写高级选项而导致出现此提示时，请删除跟目录的 '.$sys['htaccessname'].'文件，并重命名'.$sys['htaccessname'].'.bak 为'.$sys['htaccessname'].'（恢复最后一此正确配置）</font>';
			} else if((int)$sys['webVersion']=='7'){
				$sys['basename2'] = str_replace('.','\.',$sys['basename']);
				$htaccessContent = "<configuration>\r\n\t<system.webServer>\r\n\t\t<rewrite>\r\n\t\t\t<rules>";
				$midContent = "\r\n\t\t\t\t<rule name=\"Imported Rule {$sys[basename]}".date("Y-m-d H:i:s")."\">\r\n\t\t\t\t\t<match url=\"^{$sys[basename2]}\.htm$\" ignoreCase=\"false\" />\r\n\t\t\t\t\t"
				."<action type=\"Rewrite\" url=\"{$sys[basename]}.php?a=check\" appendQueryString=\"true\" />\r\n\t\t\t\t</rule>\r\n\t\t\t";
				$htaccessContent .= $midContent;
				$htaccessContent .= "</rules>\r\n\t\t</rewrite>\r\n\t</system.webServer>\r\n</configuration>";
				$mode = '@<action type="Rewrite" url="htaccess-admin\.php\?a=check"@iUs';
				$noice = '对不起！系统检测到您的空间环境'.$sys['webName'].'/'.$sys['webVersion'].'未开启rewrite，请开启后重试！如果是购买的虚拟主机空间请联系空间提供商！<br><font color="red">如果由于填写高级选项而导致出现此提示时，请删除跟目录的 '.$sys['htaccessname'].'文件，并重命名'.$sys['htaccessname'].'.bak 为'.$sys['htaccessname'].'（恢复最后一此正确配置）</font>';
			}
		}

		if (file_exists($sys['htaccessname']) && $mode) {
			$content = file_get_contents($sys['htaccessname']);
			$bool = preg_match($mode,$content);
			if (!$bool) {
				if((int)$sys['webVersion']=='7') {
					$content1 = str_replace('<rules>',"<rules>".$midContent,$content);
					if ($content1===$content) {
						$end = preg_match('@</rules>@iUs',$content) ? '' : "\r\n\t\t\t</rules>\r\n\t\t</rewrite>";
						$content2 = str_replace('<system.webServer>',"<system.webServer>\r\n\t\t<rewrite>\r\n\t\t\t<rules>".$midContent.$end,$content);
						$content = $content2===$content ? $htaccessContent : $content2;
					} else {
						$content=$content1;
					}
				} else {
					// apache和iis6
					$content = str_replace($htaccessPre,$htaccessContent,$content);
				}
				if (!@file_put_contents($sys['htaccessname'],$content)){
					env_check('对不起！系统根目录没有写权限！请给予根目录文件写权限');
				}
				@chmod($sys['htaccessname'],0777);
			}
		} else if ($htaccessContent){
			if (!@file_put_contents($sys['htaccessname'],$htaccessContent)){
				env_check('对不起！系统根目录没有写权限！请给予根目录文件写权限');
			}
			@chmod($sys['htaccessname'],0777);
		}
		@file_get_contents($newurl.'?a=check');
		// 判断是否支持rewrite
		if (!@file_get_contents($newurl.'?a=check')=='checkok') {
			env_check($noice);
		}
		
	}

	// 输出图片
	function images($images) {
		if ($images=='bg.gif') {
			show_image('R0lGODlhkAMMAMQAAP////7+/v3+/fz9/Pr7+vn6+fj6+Pj5+PX39fL08u/x7+ru6ubq5uDm4OHm4dzi3Njf2NTc1NHZ0c7XzsnTycfRxwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAHAP8ALAAAAACQAwwAAAX/4CACZGmeaKoC4oEkysI0DxRJU1WsfO//wKBwSCwaj8ikcslsOp/QqHRKrVqv2KxWWKBIIpCHg7FQJBAGwwgrWldbr9isdsvttvi8fs/v+/+AgYKDhIWGSV1fYWNlZ2luVm0DV3AwMjQ2ODqHnJ2en6ChoqOkpaaAiWBiZGZoapNsbZQDLpZzmXanuru8vb6/wMHCo6mLrI6vWZKztXKYdZvD0tPU1dbX2NmCxauNrpBvspG0cZd0mnfa6uvs7e7v8KTcjK2PsLPgUpXO57nx/wADChxIsGCJece+3RuXL8o+c7iiGZxIsaLFixj/IPRmT5m4cM0gQkuXsaTJkyhTO6bcWC9ZrIZQHt4aqbKmzZs4c1ZjiQymw49UZD5Dp7Oo0aNIk/bhqdCjTydC+0lUSrWq1atYVTDtyCYEADs=');
		} else if ($images=='bullet_green.gif') {
			show_image('R0lGODlhEAAQAMQAAFOYS////6LUoJW4kI/Bi+nv6F28V5TSlLTcs5TMkYTKgp3VmlelUJvKluv26r/hv4zOhJ/cnJnMmV7CWev461WcTaPUoZa6kZrWlr3etYrMiQAAAAAAAAAAAAAAAAAAACH5BAAHAP8ALAAAAAAQABAAAAUzYCCOZGmeaKqu7ElF07Q4aoQ9TyKp03NoFobKgNAoJBXVIiGQEC4qR6MCGBRa2Kx2qwoBADs=');
		} else if ($images=='top_left.gif') {
			show_image('R0lGODlhCgAyAMQAAKvWa5rNTYjFL4XDKYTCKYTBKIPBKIPAKIK/KIG+J4G+KIC9J4C8J3+7J366Jn66J365Jn24Jny2Jnu2Jny3Jnu1JXq0JQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAHAP8ALAAAAAAKADIAAAV/ICCOZFkGaKoKbOsScCwbdG0jeK4nfO8zwKCwQSwaH8ikMsJsOinQqHRCrVot2Kx2u614v+BwWEIum89nqXqtdrrf8DhkTq877vi8cc/fC/+AfwuDhIWGhgqJiouMjDqPkJGSB5SVlpeXBZqbnJ2dMqChoAOkpaanqKmqq6ynIQA7');
		} else if ($images=='bullet_grey.gif') {
			show_image('R0lGODlhEAAQALMAAHR0dLW1te/v76Wlpby8vI2NjcfHx62trXp6eszMzP///wAAAAAAAAAAAAAAAAAAACH5BAEHAAoALAAAAAAQABAAAAQtUMlJq704682vIEURCBoRJMkRaEUSDATCGscQAFpwmMOgCQcAYEDqGI/IZCYCADs=');
		} else if ($images=='button.gif') {
			show_image('R0lGODlhCgAoAKIAAOno6Ovq6/f39////+vp6vPx8uzr6u/v7yH5BAAHAP8ALAAAAAAKACgAAAMtOLos/jDKSWssOOvNOz5gKI6jYZ5oqq4m4b4EIM90bd94ru987//AoHBILBoTADs=');
		} else if ($images=='content_bg.gif') {
			show_image('R0lGODlhCAAyALMAAP////v9/fj7+/X6+vH4+O729ur09Ofy8uPw8N/v79zt7djr6wAAAAAAAAAAAAAAACH5BAAHAP8ALAAAAAAIADIAAAQ8EMgpl7046827/5oijmJiniairurhvq4hz3Jh3zah7/rg/z6BcCgMGI9GinLJbDqf0Kh0Sq1ar9islhoBADs=');
		} else if ($images=='footer.gif') {
			show_image('R0lGODlhkAMwAOYAAP////7+/v39/f3+/fz9/Pz8/Pv7+/v8+/r7+vn6+fj6+Pf59/j5+Pb49vf49/b39vX39fT29PL18vP18/L08vH08fHz8e/y7/Dy8O7x7u/x7+3w7e3x7ezv7Ovv6+vu6+ru6unt6ejs6Ofr5+br5ubq5uTp5OTo5OPo4+Hn4eLn4uDm4OHm4d/l397k3t3j3dvi29zi3Nvh29rh2tng2drg2tjf2Nnf2dfe19ff19bd1tbe1tXd1dXc1dTc1NPb09La0tDZ0NHZ0c/Yz87Xzs3WzczWzMzVzMrUysvUy8nTycrTysjSyMnSycfRxwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAHAP8ALAAAAACQAzAAAAf/gASCAISFhoeIiYoAggwQFBogJSsxNj5CRE4Ji5ydnp+goaKjpKWmp6ipqqusra6vsLGys7S1tre4ubqiCUpCPjYxLCUgGhQQCgqDuILLtY2PkZOVl5mbu9jZ2tvc3d7f4OHi4+Tl5qm9v8HDxcfJzrbNBLfQkJKUlpia5/z9/v8AAwocSLCgQXDpgAkjZgyZsnnMmtEj4MjetHzWDmrcyLGjx48gQ4ocmHAdQ3cPc8mbWFEavmr7RsqcSbOmzZs4c4orubCdQ3jPJMajGO0eNX3XdCpdyrSp06dQCfJk1/AdxIlAZdVzeTRj1K9gw4odS7Zsoaknf14dmjXWVqMY/2OanUu3rt27eL+h9WlVpdCgLeHCTJq3sOHDiBMn3ls1ZcS2sN5eHKy4suXLmDPXZIwSstu/tCS/RKq5tOnTqFN346zWr2dXorvKVU27tu3buBWx7vt47azYcQnnHk68uPG8ux1j9a2VqMXRXo9Ln069us7kr1+tHBp4Mmnr4MOLHy8QO/PfoNF3hz6bvPv38OPbMu/6fGTnXIPL38+/v/9Q9PXGUlHeRfffgQgm6F6Ayw34nGzCKSjhhBTexiBb9mmHn2DfVejhhyBedmFQ2bECHGUhpqjiinONGFp6za0HIYs01mjjUi6iV+IqJ3Z4449ABrlRjs3tqEqPBgqp5P+STJJD5GdGpoJke01WaeWVtzx5X5SoTBkhlmCGKaYpWmrI5SlejqnmmmxyUiZsMH4mo35t1mnnmG+2sh1gBLL35Z2ABvpjnibGed+cKAqq6KI0EsqjoRoi6iOjlFY6oaNHQgqnpEla6umn+2EqpaZ6blgglaCmqip4onZJaqGcorrqrLQO1yqarz4a65+19urrabeasueLu/5q7LGmBVvKsOr12RURSCDBxLROVGvttdhmq+223Hbr7bfghivuuOSWa+656Kar7rrstuvuu/DGK++89NZr77345quvt9P2e8QR6sSwQlq8NcgdBBJo8EEJLLxwAw9ADDFEEhRT3O//xRhnrPHGHHfs8ccghyzyyCSXbPLJKKes8sost+zyyzDHLPPMNNds880456xzyRQPAQQPN7zAAgkfXCABBAwwcKarSy9LQDISXODBCCq8QIMOPwQRhBFcG7HE12CHLfbYZJdt9tlop6322my37fbbcMct99x012333XjnrffefPft99+ABy744IS7TYQQQuhAwwsqjOCB0Q88YIABAdSHy+QNTIBBByKg4IIMNvQABBBEEPHv6ainrvrqrLfu+uuwxy777LTXbvvtuOeu++689+7778AHL/zwxBdv/PHIJ6/88rhr3YMNMriAgggdYDBBAw1MXrmAtxxwAPYWbBCC/wkrWE2DDz5oXfr67Lfv/vvwxy///PTXb//9+Oev//789+///wAMoAAHSMACGvCACEygAhfIwAY68IH8Gx0OcPCCFZggBBuwQAQikIAECEAAluveARwQgQpkQBIqcIELaLCDHfzgB4iLoQxnSMMa2vCGOMyhDnfIwx768IdADKIQh0jEIhrxiEhMohKXyMQmOvGJUIyiFKdIxSoKsQc9oEEMYqACYmSgAhFwgAO8tz2D2cJ7C1hA1DwgAhOwwAUwgIENbMADHqDvjnjMox73yMc++vGPgAykIAdJyEIa8pCITKQiF8nIRjrykZCMpCQnSclKWvKSmMykJjd5yDlukf8FJhDB446WNDKG0BYFKEDSJjAB8ZGABG/8nAxAN8cc2PKWuMylLnfJy1768pfADKYwh0nMYhrzmMhMpjKXycxmOvOZ0IymNKdJzWpa85rYzKY2t/nLOXozji5gwQlOgEELWCByCEDAB08ZlA4+4gIdCEEJSqACFbTgnlvMpz73yc9++vOfAA2oQAdK0IIa9KAITahCF8rQhjr0oRCNqEQnStGKWvSiGM2oRjfK0Y4q9J71LEEIOmA0CECgg6ksADtr4b2klbAC8ZRnCVBAU5qu4KY4zalOd8rTnvr0p0ANqlCHStSiGvWoSE2qUpfK1KY69alQjapUp0rVqlr1qli4zapWt8pVo9J0niPVgAY2WMoDBKCMGMpFKjv4AFZeQGoeYKMI5jrPutr1rnjNq173yte++vWvgA2sYAdL2MIa9rCITaxiF8vYxjr2sZCNrGQnS9nKWvaymM2sYUPAWQ5wwJyRQ2kqdcEslraUARs0ZwZWG1cPgOC1sI2tbGdL29ra9ra4za1ud8vb3vr2t8ANrnCHS9ziGve4yE2ucpfL3OY697nQja50p0td4G7guuYka1nNStpAAAA7');
		} else if ($images=='footer_bg.gif') {
			show_image('R0lGODlhMgAyAMQAAIXDKYTCKYPAKIPBKIK/KIG+KIG9KIC8J4C7J3+6J3+5J364Jn23Jn22Jny1JXu0JXqzJXmyJHmxJHevJHiwJHauIwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAHAP8ALAAAAAAyADIAAAX/ICCOZGmeaKqubOu+cCzPdG3feK7vfO//wKCwFCgaj8ikcslsOp9Q5mBKrVqv2KzWKuh6v+CweEwum89oMmHNbrvf8Lh8Tq/b5YW8fs/v+/+AgYKDhIAGh4iJiouMjY6KB5GSk5SVlpeYmZqbnJgIn6ChoqOkpaanqKmqpgmtrq+wsbKztLAKt7i5uru8vb6/wMHCvgvFxsfIycrLzM3Oz9DMDNPU1dbX2Nna29zd3toN4eLj5OXm5+jkDuvs7e7v8PHy8/T19vIP+fr7/P3+/wADChxIsKDBgwUhKFzIsKHDhxAjSpxIsWLECBgzatzIsaPHjxsliBxJsqTJkyhTNKpcybJlSgowY8qcSbOmzZs4c+rceXOCz59AgwodSrSo0aNIkxatwLSp06dQo0qd+nTIixAAOw==');
		}else if ($images=='tableheader-bg.gif') {
			show_image('R0lGODlhrgsyALMAAOPs8urw9O3y9eHr8t/q8t7q8uXt8+fu8+Xu8+ju8+fu9N7p8t3p8tzp8gAAAAAAACH5BAAAAAAALAAAAACuCzIAAAT/UMhJq7046827/2AojmRpnmiqrmzrvnAsz3Rt33iu73zv/8CgcEgsGo/IpHLJbDqf0Kh0Sq1ar9isdsuFBr7gsHhMLpvP6LR6zW673/C4fE6v2+/4vH7P7/v/gIGCg4SFhoeIiYqLjI2Oj5CRkpOUlZaXmJmam5ydnp+goaKjpKWmp6ipnQcHCaysCgqur7OwCQqts7WtsK+srrKuu7e+xbzFur+7r7i0xsfQxgm3zc6/vczT1tG+y7jCss+xyM7Vz8zHzbPqreHC69fa2gfh2/TE88PY5fLd5tIAj80rZm7ZtYPPpo3rZs1csG0GEfYCF3EhRHrnCKY7yO6WsFzY/96BvMcw27dkDck9HPaPnEtdFUu65NaN2kx42WrpPOeNl0dx/3a2FLexKEWfOEXOqydR1kmJOPl9pDXU3kGYRK0ijKjM4tZ993ZKlDmxXcWg5TL6+hay7U+RGJGOZBrN6Uh9caVGI5bRIMp+JO3ZzVcS7Up/av1ejakVGtdcXh2Dffg1ocajxiILVYsuqVt3c+PBpbtrMEqOKgH/qjpWoLKsrSXztCkzatiLltf6pMsM7TXWuj3HPTpa9Fy8tp7uBcvrMNXEAbFmJos7IW3cDgeKDdjZLNCbedWyHf7541LjS5HfU47XsOp20F++nt54u7TrlbNv59oTM0HfzXFWFv955L0VmlzpkWUaVMwB8x5fPEX32jrqLbhceM09CJxiAjEWm33I4CebftXNVNZPmQEIjIAYCdcRaOchSKGC+JxWlF4sxVeSdBrV11hXKk6m3Y/9eZcieMB1R+CL5nkmz4yC1cgghg5OtZqO1vCom4+xAQleeJTJxt2JvMESZJIDslMgjE6OVqGUF7pnJXx9SThSjx/+CFmQYA7ZZZEo/ocki+OpyaRcBbpJI3uFpTYnhLnt+JoBlFKKgKWYVmrApZp2Wimnm4Ka6aaZImAqqaKO6mmoo6aqqauncirqpa6Sumqnp75q66eyyvopq7jeamuqpvoq7K+51prrrckGe2z/q8T+Omysu0rLrLHVOvsqrapy62mt30ZLbK+tAqsrs6qGiu2xtK7LK7vugqvtsuVOyy2s8Na7KqzezpptutcGO66l2Lb7rbDxNvssqu4SnG+28p5rbr293nswwgUjHO6wuiq78MSo4krurgZre/G4De8LrLIRK2wtu+9KbGyxIZu8cczRLgwqvSSXSi2+GOt78bYcI6uyzuKK7HDPPP8rLcoAq+wy0UFD/PHOORdNs7cS75sxukqvy3XXVRtNtcslk30u1E4fPHXMAVutM9wUE2yxzUr3DDbRYjsdMd0145xx0/ImnLLbKTd9Nt5Hg7yzz3ervXjUAFNb7dgvl43p/8ArIwv00Wz/vXniLcd7NeCP2xt45nkvnTXMS1s7889Dey003pb76zHSAueNNshtF83r4QKT/vDrGsdet7qrU+4666zn3nHjD5steLmEJx/66W8rfzPye/OcesXNB9+58/wKX775qEM88uPZg7393N0DPzn0Q4v/tN3ll3672tKznuRuJsCVDe5zJxMZ8TpmvKqBr3H6KxX/MGe+XAHgghjMoAY3yMEOevCDIAyhCEdIwhKa8IQoTKEKV8jCFrrwhTCMoQxnSMMa2vCGOMyhDnfIwx768IdADKIQh0jEIhrxiEhMohKXyMQmOvGJUIyiFKdIxSpa8YpYzKIWt8jFLv968YtgDGMVB0DGMprxjGhMoxrXyMY2uvGNcIyjHOdIxzra8Y54zKMe98jHPvrxj4AMpCAHSchCGvKQiEykIhfJyEY68pGQjKQkJ0nJSlrykpjMpCY3yclOevKToAylKEdJylKa8pSoTKUqV8nKVrpSlASIpSxnScta2vKWuMylLnfJy1768pfADKYwZ1mAYRrzmMhMpjKXycxm8rKYzoymNKdJzWpak5jXzKY2t8nNbUKzm+AMpzjHSc5ufrOc6EynOqd5znW6853w9GU740nPetJznvbMpz73qU988vOfAKWmPwNK0IIic6AGTahCn7lQcRagAAt4qEQjKlGIVvT/ohjNKEUzytGOatSjIA2pSEdK0pJydKMbNelEU2pRlYaUpSw1aUxdelKa2vSmOBUpSnG6AJjm9KMVnSlJhfpTov70qEh96UR56tOkPrSpNDUqT51K1ap2dKc37elFpRrVrWbVqi29qldtylWygvWsVsUqWaGaVLaqtKxdRatckarWqLr1qHctKVxdute5+lWsT2XqWJ2a16GCta9/TWxQl5rVwk51sWZNK0gdq9PDKvayemXsWgfbVs6+1bKYDe1kNWtXz+LVtJmVrGhXC9SwlhayhEWtYVXL2toG9rabhW1ndftZ2l6UAcANrnCHS9ziGve4yE2ucpfL3OY697nQ/42udKdL3epa97rYza52t8vd7nr3u+ANr3jHS97ymve86E2vetfL3va6973wja9850vf+tr3vvjNr373y9/++ve/AA6wgAdM4AIb+MAITrCC/duABjv4wRCOsIQnTOEKW/jCGM6whjfM4Q57+MMgDrGIR0ziEpv4xChOsYpXzOIWu/jFMI6xjGdM4xrb+MY4zrGOd8zjHvv4x0AOspCHTOQiG/nISE6ykpfM5CY7+clQjrKUp0zlKlv5yktecHcbUFwui9fLWg6zdcEsXDJ/18xiTvNz0cwANnPXzWqOM3LZDGft1lnOeA4zncd75zznec9f9rOgjQvo8PZ50GouNP94D43oRjO4y3x2dKMVfWZJI5rS3mW0pROM6S1vWr9YDrWoR03qUpv61KhOtapXzepWu/rVsI61rGdN61rb+ta4zrWud83rXvv618AOtrCHTexiG/vYyE62spfN7GY7+9nQjra0p03talv72tjOtra3ze1ue/vb4A63uMdN7nKb+9zoTre6183udrv73fCOt7znTe962/ve+M63vvfN7377+98AD7jAB07wghv84AhPuMIXzvCGO/zhEI+4xCdO8Ypb/OIYz7jGN87xjnv84yAPuchHTvKSm/zkKE+5ylfO8pa7/OUwj7nMZ07zmtv85jjPuc53zvOe+/znQA+60If/TvSiG/3oSE+60pfO9KY7/elQj7rUp071qlv96ljPuta3zvWue/3rYA+72MdO9rKb/exoT7va1872trv97XCPu9znTve62/3ueM+73vfO9777/e+AD7zgB0/4whv+8IhPvOIXz/jGO/7xkI+85CdP+cpb/vKYz7zmN8/5znv+86APvehHT/rSm/70qE+96lfP+ta7/vWwj73sZ0/72tv+9rjPve53z/ve+/73wA++8IdP/OIb//jIT77yl8/85jv/+dCPvvSnT/3qW//62M++9rfP/e57//vgD7/4x0/+8pv//OhPv/rXz/72u//98I+//OdP//rb//74z7/+98//Yf77//8AGIACOIAEWIAGeIAImIAKuIAM2IAO+IAQGIESOIEUWIEWeIEYmIEauIEc2IEe+IEgGIIiOIIkWIImeIIomIIquIIs2IIu+IIwGIMyOIM0WIM2eIM4mIM6uIMvFwEAOw==');
		} else if ($images=='loading.gif') {
			show_image('R0lGODlhEAAQAPIAAP///2ZmZtra2o2NjWZmZqCgoLOzs729vSH+GkNyZWF0ZWQgd2l0aCBhamF4bG9hZC5pbmZvACH5BAAKAAAAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQACgABACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkEAAoAAgAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkEAAoAAwAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkEAAoABAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQACgAFACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQACgAGACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAAKAAcALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==');
		}
	}
?>