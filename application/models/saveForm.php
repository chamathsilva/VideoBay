<?php 

require_once '../configs/core/init.php';
/*
require '/../configs/core/init.php';
include "/../controllers/Session.php";
require "/../controllers/Input.php"; */

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
					echo "lesson form added successfully";
				}
				else{
					echo " lesson form added not successed ";
				}
			
			}
			else{
				echo " all fields are required ";
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

		<?php include '../views/includes/admin_navbar.php' ?>

		<div class="wrapper" >

			<div class="container">
				<div class="row">
					<div class="col-sm-7 text ">

		<?php
		require ("../views/uploadlessons/upload_video.php");
		?>

						</div>
					</div>
				</div>
			</div>
		</div>





	</body>
</html>