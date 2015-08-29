<?php
class Folder{
	public $path_name="C:/xampp/htdocs/series/VideoBay/application/controllers/savelessons/uploaded_lessons/";
	public $l_id;
	
	public function __construct(){

	}
	
	public function createFolder($l_id,$n){
	//	$path_name="C:/xampp/htdocs/series/ucsc_video_bay/uploaded_lessons/";
		if(!file_exists($this->path_name.$l_id.'/'.$n)){
			mkdir($this->path_name.$l_id.'/'.$n);
		}
	}
	public function setId($l_id){
 			$l_id=$l_id;
	}
	public function getId(){
		return $l_id;
	}
}

?>