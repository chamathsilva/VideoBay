<?php 
include "lessonFolders.php";
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
$fo->createFolder('../../../data/uploaded_lessons/',$id,'videos');

$vh->do_upload($id,"videos");

?>

<?php
#include "../../views/uploadlessons/upload_slide.php";
?>

<html>
<head>
	<title>UCSC VideoBay</title>

<head>

	<link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../../public/css/ucscvideobay.css">
</head>



<body>

<body id="adminbody">
<div id="adminwrapper">

	<?php include '../../views/includes/admin_navbar.php' ?>

	<div class="wrapper" >

		<div class="container">
			<div class="row">
				<div class="col-sm-7 text ">

					<?php
					include "../../views/uploadlessons/upload_slide.php";
					?>

				</div>
			</div>
		</div>
	</div>
</div>





</body>
</html>