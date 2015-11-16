<<<<<<< HEAD
<?php 
include "lessonFolders.php";
=======
<?php include "lessonFolders.php";
>>>>>>> master
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
<<<<<<< HEAD
$fo->createFolder('../../../data/uploaded_lessons/',$id,'videos');
=======
$fo->createFolder($id,'videos');
>>>>>>> master

$vh->do_upload($id,"videos");

?>

<?php
<<<<<<< HEAD
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

	<div class="container-fluid">
	<?php include '../../views/includes/admin_navbar.php' ?>

	<div class="wrapper" >


			<div class="row">
				<!--
				<div class="col-sm-7 text ">
					<form action="saveSlides.php" method="POST" enctype="multipart/form-data">
						<label for="fileselect">upload slides  </label>
						<input type="file" name="files[]" id="file" multiple="multiple">
						<input type="submit" value="upload" name="upload"><br><br>
					</form>
				</div>
				-->



				<div class="col-lg-6">
					<div class="form-top">
						<div class="form-top-left">
							<h3>Upload slides</h3>
							<p>Select the slides </p>
						</div>
						<div class="form-top-right">
							<i class="fa fa-sign-in"></i>
						</div>
					</div>
					<div id = "sign-up-form"class="form-bottom">
						<form action="saveSlides.php" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-xs-12">
									<input type="file" name="files[]" id="file" multiple="multiple">
								</div>
								<br><br>

								<div class="col-xs-6">
									<button id = "Cancel"type="submit" class="btn full">Cancel</button>
								</div>

								<div class="col-xs-6 ">
									<button id = "" onclick='this.form.action = "saveSlides.php"' class="btn full ">Next</button>
								</div>
							</div>
						</form>
					</div>
				</div>





			</div>
		</div>
	</div>
</div>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!--<script src="../../../library/Jquery/jquery.js"></script>-->
<script src="../../../public/js/ucscvideobay.js"></script>

</body>
</html>
=======
include "../../views/uploadlessons/upload_slide.php";
?>
>>>>>>> master
