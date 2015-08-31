<?php
class Folder{
	//public $path_name='../../data/uploaded_lessons/';
	public $l_id;
	
	public function __construct(){

	}
	
	public function createFolder($path_name,$l_id,$n){
	//	$path_name="C:/xampp/htdocs/series/ucsc_video_bay/uploaded_lessons/";
		//echo $this->path_name;
		
		if(!file_exists($path_name.$l_id.'/'.$n)){
			mkdir($path_name.$l_id.'/'.$n);
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