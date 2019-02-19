<?php
function mkdirs($l1, $l2 = 0777){
	if(!is_dir($l1)){
		mkdirs(dirname($l1), $l2);		
		return @mkdir($l1, $l2);
	}
	return true;
}

function savefile($l1, $l2=''){		
	if(function_exists(file_put_contents)){
		file_put_contents($l1, $l2);
	} else{
		$fp = @fopen($l1, 'wb');
		@fwrite($fp, $l2);
		fclose($fp);
	}
}

function getfix($l1){
	return end(explode('.', $l1));
}

function checkfix($l1, $l2){
	if(!is_array($l2)){
		$l2 = explode(',', str_replace(' ', '', $l2));
	}
	return in_array($l1, $l2) ? 1 : 0;
}

class image{
	var $src;		
	var $newsrc;
	var $allowtype = array('.jpg','.gif','.png','.jpeg'); 	
	var $regif   = 0;
	var $keep = 0;
	var $over = 0;
	var $dir;	
	var $newdir;	


	function __construct($l1=null, $l2=null){
		$this->dir	  = $l1 ? $l1 : "./images/temp";
		$this->newdir = $l2 ? $l2 : "./images/s";
	}
	
	function image($l1=null, $l2=null){
		$this->__construct($l1, $l2);
	}
	
	function reName($src){
		$l1 = substr(md5($src),10,10).strrchr($src,".");	
		$l1  = $this->w.'_'.$this->h.'_'.$l1;	
		return $this->newdir.'/'.$l1;
	}
	
	function Mini($src,$w,$h, $q=80){	
		$this->src = $src;
		$this->w = $w;
		$this->h = $h;
		
		if(strrchr($src, ".") == ".gif" && $this->regif == 0){
			return $this->src;
		}	
		
		if(!$this->keep){
			$newsrc = $this->reName($src);
		} else {
			$src = str_replace('\\', '/', $src);
			$newsrc = $this->newdir.strrchr($src, "/");
		}
		
		if(file_exists($newsrc) && $this->over == 0){
			return $newsrc;
		}
		
		if(strstr($src, "http://") && !strstr($src, $_SERVER['HTTP_HOST'])){
			$src = $this->getimg($src);
		}	

		$arr = getimagesize($src);		
		$ow = $arr[0];
		$oh = $arr[1];
		$ot = $arr[2];		
		switch($ot){
			case 1:
				$im = imagecreatefromgif($src);
				break;
			case 2:
				$im = imagecreatefromjpeg($src);
				break;
			case 3:
				$im = imagecreatefrompng($src);
				break;
			default:
				return 0;
		}

		$nim = imagecreatetruecolor($w,$h);
		$k1 = round($h/$w,2);
		$k2 = round($oh/$ow,2);
		if ($k1<$k2){
			$oow = $ow;
			$ooh = round($ow*$k1);
			$sw = 0;
			$sh = ($oh-$ooh)/2;
		}
		else {
			$oow = $oh/$k1;
			$ooh = $oh;
			$sw = ($ow-$oow)/2;
			$sh = 0;
		}

		if(function_exists(imagecopyresampled)){
			imagecopyresampled($nim,$im,0,0,$sw,$sh,$w,$h,$oow,$ooh);			
		}
		else {
			imagecopyresized($nim,$im,0,0,$sw,$sh,$w,$h,$oow,$ooh);
		}

		if(!is_dir($this->newdir)){
			@mkdir($this->newdir);
		}	
			
		switch($ot){
			case 1:
				$rs = imagegif($nim,$newsrc);
				break;
			case 2:
				$rs = imagejpeg($nim,$newsrc,$q);
				break;
			case 3:
				$rs = imagepng($nim,$newsrc);
				break;
			default:
				return 0;
		}

		return $newsrc;		 	
	}
			
	function getimg($l1){
		$l2 = $this->dir.'/'.substr(md5($l1),10,10).strrchr($l1,".");
		if(file_exists($l2)){			
			return $l2;
		}

		$img = file_get_contents($l1);					
		if($img){
			if(!is_dir($this->dir)){
				@mkdir($this->dir);
			}	
			savefile($l2, $img);
			return $l2;
		}				
	}
	
	function reImg($src, $w, $h, $q=80){
		$this->keep = 1;
		return $this->Mini($src, $w, $h, $q);
	}	
}
