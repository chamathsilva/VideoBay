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

	<?php include '../../views/includes/admin_navbar.php' ?>

	<div class="wrapper" >

		<div class="container">
			<div class="row">
				<div class="col-sm-7 text ">

					<?php
					include "../../views/uploadlessons/upload_config.php";
					?>
				</div>
			</div>
		</div>
	</div>
</div>





</body>
</html>