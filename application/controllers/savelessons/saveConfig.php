<?php include "saveLesson.php";
<<<<<<< HEAD

/*
include "../controllers/Session.php";

*/

include "../Session.php";


=======
include "/../controllers/Session.php";
>>>>>>> master

class ConfigHandler extends FileHandler{
	public $valid_files=array("txt","TXT");
 	public $max_size=10240000;
	public $column="configuration";
}


?>
