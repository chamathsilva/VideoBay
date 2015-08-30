<?php include "lessonFolders.php";
include "saveLesson.php";

include "../Session.php";
class VideoHandler extends FileHandler{
	
	public $valid_files=array("MP4","mp4");
 	public $max_size=100000000;
	public $column="video_path";
}

$vh=new VideoHandler();

session_start();
$id=Session::get('lesson_id');

$fo=new Folder();
$fo->createFolder($id,'videos');

$vh->do_upload($id,"videos");

?>

<?php
include "../../views/uploadlessons/upload_slide.php";
?>
