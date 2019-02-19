<?php 
/*
2009-05-15 13:23 PHP页面缓存技术 1.功能实现页面缓存 
   
a.       自动生成缓存文件夹且能保存缓存文件 
b.       清除缓存文件 
c.       根据页面文件动态生成缓存文件名 
d.       记录缓存文件建立时间 
e.       读取缓存 

2.   具体实现 

理论偶不多讲啊，看代码，下面是一个简单的缓存类，可以关注ob_start, ob_get_contents等这些方法，我这里用的是前面的几个函数，手册中讲缓存函数的一般为ob开头的自己看了，当然也有一些非常有意思的问题，如并发访问时对文件的读写是否会引起锁定问题，涉及到的数据文件太多时，性能如何，等等都是值得我们研究的，呵呵。 
*/



ob_start(); 
/** 
* @author 何名慧
* @copyright 2009-3-13 
* @param string $cache_folder 缓文件夹
* @param int $cache_create_time 文件缓存时间
* @example $cache=new Esj_Cache('./_cache',100)
* @example $cache->read_cache() 读取缓存并输出
* @example $cache->creatre_cache() 创建缓存文件(放在文件未尾)
* @example $cache->list_file() 返回所有缓存文件列表
* @example $cache->del_file() 删除所有缓存文件
*/

class Esj_Cache{
private $cache_folder=null;//cacher文件夹
private $wroot_dir=null;//站点目录
private $cacher_create_time=null;//cacher文件的建立时间
  
public function __construct($cache_foldername,$cacher_time=100)
{
   ob_start();
   $this->wroot_dir=$_SERVER['DOCUMENT_ROOT'];
   $this->cache_folder=$cache_foldername;
   $this->cacher_create_time=$cacher_time;
}

public function read_cache()
{
   try {   
    if(self::create_folder($this->cache_folder))
    {
     self::get_cache();//输出缓存文件信息
    }else 
    {
     echo "缓存文件夹创建失败!";
     return false;
    }
        
   }catch(Exception $e){
    echo $e;
    return false;
   }
}

//测试缓存文件夹是否存在 
private function exist_folder($foler)
{
   if(file_exists($this->wroot_dir."/".$foler)){
    return true;
   }else {
    return false;
   }    
}

//建立一个新的文件夹
private function create_folder($foler)
{
   if(!self::exist_folder($foler))
   {
    try{
     mkdir($this->wroot_dir."/".$foler,0777);
     chmod($this->wroot_dir."/".$foler,0777);
     return true;
    }catch (Exception $e)
    {
     self::get_cache();//输出缓存
     return false;
    }
    return false;
   }
   else 
   {
    return true;
   }
}

//读取缓存文件
private function get_cache()
{  
   $file_name=self::get_filename();  
   if (file_exists($file_name)&&((filemtime($file_name)+$this->cacher_create_time) > time()))
   {
    $content=file_get_contents($file_name);
       if($content)
       { 
        echo $content;  
        ob_end_flush();
        exit;
       }else 
       {
        echo "文件读取失败";
        exit;
       
       }
      
   }
}

//返回文件的名字
private function get_filename()
{
   $filename=$file_name=$this->wroot_dir.'/'.$this->cache_folder.'/'.md5($_SERVER['QUERY_STRING']).".html"; 
   return $filename;
}
   
//建立缓存文件
    public function create_cache()
    {
    $filename=self::get_filename();
    if($filename!="")
    {
       try{
       file_put_contents($filename,ob_get_contents()); 
        return true;
       }catch (Exception $e)
       {
        echo "写缓存失败:".$e;
        exit();
       }
       return true;
    } 
    }
    
    // 取得缓存中的所有文件
public function list_file()
{
   $path=$this->cache_folder;
   if ($handle = opendir($path)) { 
       while (false !== ($file = readdir($handle))) {
        if($file!="." && $file!="..") {
         $path1=$path."/".$file;        
         if(file_exists($path1))
         {       
          $result[]=$file;
         }                 
        }
       }    
       closedir($handle);
   }
   return $result; 
}

//删除缓存中的所有文件
public function del_file()
{
   $path=$this->cache_folder;
   if ($handle = opendir($path)) { 
       while (false !== ($file = readdir($handle))) {
        if($file!="." && $file!="..") {
         $path1=$path."/".$file;        
         if(file_exists($path1))
         {         
          unlink($path1);         
         }                 
        }
       }    
       closedir($handle);
   }
   return true;  
}

}


/*
3,处理输出缓冲的相关资函数介绍函数主要有这么几个: 

ob_start() 开始输出缓冲, 这时PHP停止输出, 在这以后的输出都被转到一个内部的缓冲里. 
ob_get_contents() 这个函数返回内部缓冲的内容. 这就等于把这些输出都变成了字符串. 
ob_get_ length() 返回内部缓冲的长度. 
ob_end_flush() 结束输出缓冲, 并输出缓冲里的内容. 在这以后的输出都是正常输出. 
ob_end_clean() 结束输出缓冲, 并扔掉缓冲里的内容.
*/


//-------------------------------------------------------------
/* 注意：这种做法与双引号效果相同，变量会被处理
ob_start();         //-------------ob.start
print <<<USEOBVAR
模版输出
USEOBVAR;
$tpl = ob_get_contents(); //-------------ob.read (指定变量)
ob_clean();         //-------------ob.end
*/
//-------------------------------------------------------------


?>