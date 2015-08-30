<?php 
include "/../controllers/savelessons/saveConfig.php";
require '/../configs/core/init.php';

//require "connectToDB.inc.php";
$ch=new ConfigHandler();
//$id=$ch->readFile();

$id=Session::get('lesson_id');
$ch->do_upload($id,'');

class ConfigReader{
	public $lineCount=0;
	public $newLine=0;
	public function readConfigFile($id){
		$name=$_FILES['files']['name'][0];	
		$myfile = fopen("../../data/uploaded_lessons/$id/$name", "r") or die("Unable to open file!");
       
	   
	while(!feof($myfile)){
    $currentLine = fgets($myfile);
    if(trim($currentLine) != ''){
         $currentLine = explode(' ',$currentLine) ;
	
		 if($this->newLine==0){
				
				$no_of_slides=DB::getInstance()->updateLessonTable('lesson',$id,array('no_of_slides'=>$currentLine[0]));
				if($no_of_slides){
					echo " no of slides added successfully";
					$this->newLine++;
				
				}
				else{
					echo " no of slides added not successed ";
				}
    } 
   else {
    $config_data=DB::getInstance()->insert('configdata',array(
				'lesson_id'=>$id,
				'slide_id'=>$currentLine[0],
				'start_time'=>$currentLine[1],
				'end_time'=>$currentLine[2]
				));
				if ($config_data) {
    				echo " config data added successfully";
				}
				else{
					echo " config data added not successed ";
				}
				
	}
	}
	else{
		echo "There was a blank line at line number <br />";
	}
	}

fclose($myfile); 

	}
}


$rd=new ConfigReader();
$rd->readConfigFile($id);
session::delete('lesson_id');
?>