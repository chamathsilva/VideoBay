<?php include "saveLesson.php";

/*
include "../controllers/Session.php";

*/

include "../Session.php";



class ConfigHandler extends FileHandler{
	public $valid_files=array("txt","TXT");

	public $column="configuration";
}


?>
