<?php

//-------------Directory

chdir("_w");				//改变当前的目录。改变为 images目录
echo getcwd();				//获得当前目录C:\testweb\main
chdir("..");				//改变当前的目录。改变为 images目录
echo getcwd();				//获得当前目录C:\testweb\main\images 
print_r($a=scandir('.'));	//把指定目录中的所有文件生成为数组,，第二个参数0为升序，1为降序

$dir = opendir("_w");	//打开目录句柄。打开 images 目录
while (($file = readdir($dir)) !== false) echo "filename: " . $file . "<br />";//返回目录句柄中的条目。列出 images 目录中的文件
rewinddir($dir);		//重置目录流 刷新 (提示：本函数重读目录，并可用于检查目录中的变化。)

$dir = dir('_w');	//打开一个目录句柄，并返回一个对象。打开 images 目录
while (($file = $dir->read()) !== false){echo "filename: " . $file . "<br />";}//列出 images 目录中的文件
$dir->close();			//关闭目录句柄。


//-------------FIlesystem

//----路径
move_uploaded_file($file,$newloc);//设置，将上传的文件移动到新位置
glob("*.*");//查找文件。返回一个包含匹配指定模式的文件名/目录的数组
filetype("test.txt");//获取文件类型。 结果：file， （images时返回文件类型dir）
pathinfo("/testweb/test.txt",PATHINFO_BASENAME);//返回关于文件路径的信息。
realpath("test.txt");//返回绝对路径名

basename($path);//返回路径中的文件名部分,(显示带有文件扩展名的文件名)
basename($path,'.php');//(显示不带有文件扩展名的文件名)
dirname("/testweb/home.php");//返回路径中的目录名称部分  /testweb
dirname("c:/testweb/home.php");//返回路径中的目录名称部分   c:/testweb


//-------判断
file_exists();//判断，检查文件或目录是否存在
is_dir();//判断指定的文件名是否是一个目录。
is_executable('test.exe');//	判断文件是否可执行。（exe文件？）
is_file();//判断指定文件是否为常规的文件
is_link();//判断指定的文件是否是连接

is_uploaded_file();//判断文件是否是通过 HTTP POST 上传的
is_readable();//判断文件是否可读
is_writable();//判断文件是否可写(is_writeable的别名)


//------文件操作

copy("source.txt","target.txt");//复制文件
ftruncate($file,100);//将文件截断到指定的长度
rename("images","pictures");//重名名

mkdir($path,$mode,$recursive,$context);//创建目录（mode默认是 0777 ， recursive规定是否设置递归模式）
rmdir($path);	//删除空的目录
if(!unlink($file))echo ("Error deleting $file");else echo ("Deleted $file");//删除文件




//-----读写操作
//读取全部
file_put_contents("test.txt","Hello World. Testing!");	//将字符串写入文件
file_get_contents("test.txt");							//将文件读入字符串
file("test.txt");				//段落行变数组。返回的数组中每一行都包括了行结束符，因此如果不需要行结束符时还需要使用 rtrim() 函数

//读取部分。
$file = fopen("http://www.example.com","r");
$file = fopen("test.txt", "a+");//---打开一个文件或 URL (r开头只读 r+开头读写 w新建只写 w+清空读写 a末尾只写 a+末尾读写)(x无文件只写 x无文件读写)
	//----位置
	fseek($file,0);		// 倒回文件的开头（在打开的文件中定位）
	fseek($file,"15");	// 改变当前位置
	rewind($file);		// 倒回文件指针的位置,把文件指针设定为 0
	ftell($file);		// 输出当前位置(返回文件指针的读/写位置)

	//----获取
	fread($file,filesize("test.txt"));	//读取打开的文件
	while(!feof($file)){				//判断文件结束位 检测是否已达到文件的末端 (EOF)。
		fgetc($file);					//获取一个字符（逐字符读取文件）
		fgets($file). "<br />";			//获取一行（逐行读取文件）
		fgetss($file);					//从打开的文件中读取一行并过滤掉 HTML 和 PHP 标记(结果This is a paragraph.)
		fgetss($file,1024,"<p>,<b>");	//(结果<p><b>This is a paragraph.</b></p>)
	}
	//---锁功能
	if (flock($file,LOCK_EX)){// 排它性的锁定
		// 要取得共享锁定（读取的程序），将 lock 设为 LOCK_SH（PHP 4.0.1 以前的版本设置为 1）。
		// 要取得独占锁定（写入的程序），将 lock 设为 LOCK_EX（PHP 4.0.1 以前的版本中设置为 2）。
		// 要释放锁定（无论共享或独占），将 lock 设为 LOCK_UN（PHP 4.0.1 以前的版本中设置为 3）。
		// 如果不希望 flock() 在锁定时堵塞，则给 lock 加上 LOCK_NB（PHP 4.0.1 以前的版本中设置为 4）。
		fwrite($file,"Write something");//（fputs别名）
		flock($file,LOCK_UN);// release lock
	}else echo "Error locking file!";
	//---缓冲
	readfile("test.txt");		//读入一个文件并写入到输出缓冲
	fpassthru($file);			//把文件的其余部分发送到输出缓存（指针位开始直到末尾EOF，写到缓冲中)
	fflush($file);				//向打开的文件输出缓冲内容
	set_file_buffer($file,0);	//设置已打开文件的缓冲大小

fclose($file);//-----关闭打开的文件 
//--进程
$file = popen("/bin/ls","r");	//打开一个进程r,w
pclose($file);					//关闭有 popen() 打开的进程
//返回一个和 fopen() 所返回的相同的文件指针，只不过它是单向的（只能用于读或写）并且必须用 pclose() 来关闭。




//----------------文件信息相关
//文件权限（可修改）
chgrp("test.txt","admin");		//改变文件组
chown("test.txt","charles");	//改变文件所有者。
chmod("test.txt",0755);			//改变文件模式,(所有者有所有权限，其他所有人可读和执行)
touch("test.txt",$mtime,$atime);//改变文件的访问和修改时间

////硬盘占用空间
disk_free_space("C:");//返回目录的可用空间(diskfreespace别名)
disk_total_space("C:");//返回一个目录的磁盘总容量

//文件信息（查看）
filesize("test.txt"); //获取文件大小
filectime("test.txt");//获取文件的上次创建时间
filemtime("test.txt");//获取文件的上次修改时间
fileatime("test.txt");//获取文件的上次访问时间

fileowner("test.txt");//获取文件的所有者user ID
filegroup("test.txt");//获取文件的组 ID
fileinode("test.txt");//获取文件的 inode 编号
substr(sprintf("%o",fileperms("test.txt")),-4);//获取文件的权限1777


//状态缓存
clearstatcache();	//清除文件状态缓存。清除缓存并再次检查文件大小
// 被clearstatcache受影响的函数。stat(),lstat(),file_exists(),is_writable(),is_readable(),
// is_executable(),is_file(),is_dir(),is_link(),filectime(),fileatime(),filemtime(),fileinode(),
// filegroup(),fileowner(),filesize(),filetype(),fileperms()


//获取所有信息
print_r(stat($file));//返回关于一个打开的文件的信息
print_r(fstat($file));//提示：lstat() 与 stat() 类似，不同的是，它会返回符号连接的状态。
print_r(lstat("test.txt"));//返回关于文件或符号连接的信息
//提示：本函数lstat()与stat()函数不同之处只有一点：如果 file 参数是符号连接的话，则该符号连接的状态被返回，而不是该符号连接所指向的文件的状态。
// 数字下标		关联键名			说明								//结果array();
// 0			dev				设备名							// 	[0] => 0			[dev] => 0
// 1			ino				号码								// 	[1] => 0			[ino] => 0
// 2			mode			inode 保护模式					// 	[2] => 33206		[mode] => 33206
// 3			nlink			被连接数目						// 	[3] => 1			[nlink] => 1
// 4			uid				所有者的用户 id 					// 	[4] => 0			[uid] => 0
// 5			gid				所有者的组 id 					// 	[5] => 0			[gid] => 0
// 6			rdev			设备类型，如果是 inode 设备的话		// 	[6] => 0			[rdev] => 0
// 7			size			文件大小的字节数					// 	[7] => 92			[size] => 92
// 8			atime			上次访问时间（Unix 时间戳）			// 	[8] => 1141633430	[atime] => 1141633430
// 9			mtime			上次修改时间（Unix 时间戳）			// 	[9] => 1141298003	[mtime] => 1141298003
// 10			ctime			上次改变时间（Unix 时间戳）			// 	[10] => 1138609592	[ctime] => 1138609592
// 11			blksize			文件系统 IO 的块大小				// 	[11] => -1			[blksize] => -1
// 12			blocks			所占据块的数目					// 	[12] => -1			[blocks] => -1


// link(target,link);//创建一个硬连接
// linkinfo(path);//返回有关一个硬连接的信息
// readlink("/user/testlink");//返回符号连接的目标
// symlink(target,link)	创建符号连接。linux




//------其他
//临时文件
// tempnam("C:\inetpub\testweb","TMP0");										//创建唯一的临时文件 C:\inetpub\testweb\TMP1.tmp
// $temp=tmpfile();fwrite($temp, "Testing,"); rewind($temp);fread($temp,1024);	//建立临时文件//倒回文件的开头//从文件中读取 1k

// if (fnmatch("*gr[ae]y",$txt)) echo "some form of gray ...";	//根据指定的模式来匹配文件名或字符串
// fscanf(file,format,mixed);									//根据指定的格式对输入进行解析

// fputcsv($file,split(',',$line));//将行格式化为 CSV 并写入一个打开的文件中
// fgetcsv($file);//从打开的文件中解析一行，校验 CSV 字段。(反馈数组)

// parse_ini_file("test.ini");//解析一个配置文件
//------------


//================================================glob GLOB_ONLYDIR
//查找文件
// function list_file1($p,$t=null){
// 	if($t){
// 		$tt=array(
// 			// 'mark'=>GLOB_MARK,				//- 在每个返回的项目中加一个斜线
// 			// 'nosort'=>GLOB_NOSORT,			//- 按照文件在目录中出现的原始顺序返回（不排序）
// 			// 'noescape'=>GLOB_NOESCAPE,		//- 反斜线不转义元字符
// 			// 'nocheck'=>GLOB_NOCHECK,		//- 如果没有文件匹配则返回用于搜索的模式
// 			// 'brace'=>GLOB_BRACE,			//- 扩充 {a,b,c} 来匹配 'a'，'b' 或 'c'
// 			// 'err'=>GLOB_ERR,				//- 停止并读取错误信息（比如说不可读的目录），默认的情况下忽略所有错误
// 			'dir'=>GLOB_ONLYDIR				//- 仅返回与模式匹配的目录项
// 		);
// 		return glob($p,$tt[$t]);
// 	}else return glob($p);
// }
// function list_file($p){ return glob($p); }
// function list_dir($p) { return glob($p,GLOB_ONLYDIR); }
