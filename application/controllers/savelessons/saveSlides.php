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
#include "../../views/uploadlessons/upload_config.php";

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

					<form action="../../controllers/savelessons/readConfig.php" method="POST" enctype="multipart/form-data">
						<label for="fileselect">upload configuration file </label>
						<input type="file" name="files[]" id="file" multiple="multiple" >
						<input type="submit" value="upload" name="upload"><br><br>

					</form>

				</div>

				-->

				<div class="col-lg-6">
					<div class="form-top">
						<div class="form-top-left">
							<h3>upload configuration file</h3>
							<p>Select configuration file  </p>
						</div>
						<div class="form-top-right">
							<i class="fa fa-sign-in"></i>
						</div>
					</div>
					<div id = "sign-up-form"class="form-bottom">
						<form action="../../controllers/savelessons/readConfig.php" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-xs-12">
									<input type="file" name="files[]" id="file" multiple="multiple">
								</div>
								<br><br>

								<div class="col-xs-6">
									<button id = "Cancel"type="submit" class="btn full">Cancel</button>
								</div>

								<div class="col-xs-6 ">
									<button id = "" onclick='this.form.action = "../../controllers/savelessons/readConfig.php"' class="btn full ">Next</button>
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