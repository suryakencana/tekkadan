<?php
/*
 * Copyright (C) 2014 surya || nanang.ask@gmail.com
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the NGNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/**
 * User: surya
 * Date: 3/15/14
 * Time: 1:30 AM
 */

class Resthttp_Controller
{
	public function uploadfile(){
		$req = App::request();
		$jsonData = array();
		if($req->isPost()){
			$post = $req->post();
			
			$file = $_FILES['files'];
			$path = "data".$post['path'];
			$filepath = $path.$file['name'];
			//$raw = file_get_contents("php://input");
			if(ZHelper::MkDirTree($path)){
				if(move_uploaded_file($file['tmp_name'], $filepath)) {
					$jsonData["msg"] = "The file ". basename( $file['name']).
					" has been uploaded";
				} else{
					$jsonData["msg"] = "There was an error uploading the file, please try again!";
				}
				$jsonData["path"] = $path;
				$jsonData["file"] = $file;
			//file_put_contents($file,$_FILES['param3']['tmp_name']);
				echo json_encode($jsonData);
			}
		}		
	}

	public function deletefile(){
		$req = App::request();
		$jsonData = array();
		$jsonData["result"] = null;
		if($req->isPost()){
			try {
				$post = $req->post();
				$jsonData["fileid"] = $post['fileid'];

				if(ZHelper::contentDir($post['fileid'])){
					$jsonData["msg"] = "The file ".$post['fileid'].
					" has been delete";
					$jsonData["result"] = "ok";
				} else $jsonData["msg"] = "failed remove directory";
			}  catch (Exception $e) {
				$jsonData["msg"] = $e->getMessage();
			}
			echo json_encode($jsonData);
		}
	}
}