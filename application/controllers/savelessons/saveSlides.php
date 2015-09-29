<?php include "saveLesson.php";
include "lessonFolders.php";
include "../Session.php";

class SlidesHandler extends FileHandler{
	public $valid_files=array("jpg","JPG");
 	public $max_size=10240000;
	public $column="slides_path";
}
$sh=new SlidesHandler();
//$id=$sh->readFile();
session_start();
$id=Session::get('lesson_id');
$fol=new Folder();
$fol->createFolder('../../../data/uploaded_lessons/',$id,'slides');
$sh->do_upload($id,"slides");
include "../../views/uploadlessons/upload_config.php";

?>
