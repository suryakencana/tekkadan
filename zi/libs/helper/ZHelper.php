<?php 

class ZHelper {
	
	public static function MkDirTree($path,$permissions = 0755, $compat_mode=true) {
		if (!$compat_mode) {
			$dirs = split("/",$path);
			$path = "";
			foreach ($dirs as $key=>$dir) {
				$path .= $dir."/";
				if ($dir!="" && !is_dir($path)) exec("mkdir -m ".$permissions." ".$path);
			}
		} else {
			$dirs = split("/",$path);
			$path = "";
			foreach ($dirs as $key=>$dir) {
				$path .= $dir."/";
				if ($dir!="" && !file_exists($path)) mkdir($path, $permissions);
			}
		}
		return file_exists($path);
	}

	public static function deleteDir($path) {
		$class_func = array(__CLASS__, __FUNCTION__);
		return is_file($path) ?
		@unlink($path) :
		array_map($class_func, glob($path.'/*')) == @rmdir($path);
	}

	public static function contentDir($id){
		
		$path = "data/";
		//images 
		$img = $path."i/".$id;
		ZHelper::deleteDir($img);
		//file
		$file = $path."f/".$id;
		ZHelper::deleteDir($file);
		//video
		$video = $path."v/".$id;
		ZHelper::deleteDir($video);
		return true;
	}
}