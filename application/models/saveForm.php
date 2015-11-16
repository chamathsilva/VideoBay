<?php 

<<<<<<< HEAD
require_once '../configs/core/init.php';
/*
require '/../configs/core/init.php';
include "/../controllers/Session.php";
require "/../controllers/Input.php"; */

=======
require '/../configs/core/init.php';
include "/../controllers/Session.php";
require "/../controllers/Input.php";
>>>>>>> master
class SendData{
	public $l_id;
	public $description;
	public $lecture;
	public $category;
	public $_data;
	public $_db;
	
public function setToDB(){
		
			
			$name=Input::get('name');
		    $description=Input::get('description');
			$lecture=Input::get('lecture');
			$category=Input::get('category');
			
			
			
			if(!empty($name) && !empty($description) && !empty($lecture) && !empty($category)){
			
				$lesson_d=DB::getInstance()->insert('lesson',array(
				'name'=>$name,
				'description'=>$description,
				'lecture'=>$lecture,
				'category'=>$category
				));
				
				if($lesson_d){
<<<<<<< HEAD
					#echo "lesson form added successfully";
				}
				else{
					#echo " lesson form added not successed ";
=======
					echo "lesson form added successfully";
				}
				else{
					echo " lesson form added not successed ";
>>>>>>> master
				}
			
			}
			else{
<<<<<<< HEAD
				#echo " all fields are required ";
=======
				echo " all fields are required ";
>>>>>>> master
			}
			
		
	
}
public function getData(){
	
	
	
	$name=Input::get('name');
		    $description=Input::get('description');
			$lecture=Input::get('lecture');
			$category=Input::get('category');
	
	//$connection=new CreateConnection('localhost','root','','videobay');
	//$c=$connection->__construct('localhost','root','','videobay');
	$this->_db=DB::getInstance();
	$lesson_ids=$this->_db->get('lesson', array('name','=',$name ));
	
	if($lesson_ids->count()){
			return $lesson_ids->first()->lesson_id;
			
				}

	
}
}



$send = new SendData();
$send->setToDB();
$l_id=$send->getData();

Session::put('lesson_id',$l_id);

<<<<<<< HEAD
require("../controllers/savelessons/lessonFolders.php"); // Recheck
$f=new Folder();
$f->createFolder('../../data/uploaded_lessons/',$l_id,'');
#require ("../views/uploadlessons/upload_video.php"); // Rechek
?>

<html>
<head>
	<title>UCSC VideoBay</title>

<head>

	<link rel="stylesheet" href="../../library/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../../library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../library/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../public/css/ucscvideobay.css">
</head>

	<body>

	<body id="adminbody">
	<div id="adminwrapper">
		<div class="container-fluid">
		<?php include '../views/includes/admin_navbar.php' ?>

		<div class="wrapper" >


				<div class="row">
					<!--
					<div class="col-sm-7 text ">

						<form action="../controllers/savelessons/saveVideo.php" method="POST" enctype="multipart/form-data">
							<label for="fileselect">upload video files </label>
							<input type="file" name="files[]" id="file" multiple="multiple">
							<input type="submit" value="upload" name="upload"><br><br>
						</form>




					</div> -->


					<div class="col-lg-6">
						<div class="form-top">
							<div class="form-top-left">
								<h3>upload video files</h3>
								<p>Select the video file </p>
							</div>
							<div class="form-top-right">
								<i class="fa fa-sign-in"></i>
							</div>
						</div>
						<div id = "sign-up-form"class="form-bottom">
							<form action="../controllers/savelessons/saveVideo.php" method="POST" enctype="multipart/form-data">
								<div class="row">
								<div class="col-xs-12">
									<input type="file" name="files[]" id="file" multiple="multiple">
								</div>
									<br><br>

										<div class="col-xs-6">
											<button id = "Cancel"type="submit" class="btn full">Cancel</button>
										</div>

										<div class="col-xs-6 ">
											<button id = "" onclick='this.form.action = "../controllers/savelessons/saveVideo.php"' class="btn full ">Next</button>
										</div>
								</div>
							</form>
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
	</body>
</html>
=======
require("/../controllers/savelessons/lessonFolders.php");
$f=new Folder();
$f->createFolder($l_id,'');
require ("/../views/uploadlessons/upload_video.php");
?>

>>>>>>> master
