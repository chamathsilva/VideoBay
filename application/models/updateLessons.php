<?php
require("Db.class.php");
$db = new Db();

if($_POST)

{
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    }



    //Sanitize input data using PHP filter_var().
    $id	        = filter_var($_POST["id"], FILTER_SANITIZE_STRING);
    $Name	    = filter_var($_POST["Name"], FILTER_SANITIZE_STRING);
    $Lecture	= filter_var($_POST["Lecture"], FILTER_SANITIZE_STRING);
    $Category	= filter_var($_POST["Category"], FILTER_SANITIZE_STRING);
    $Type		= filter_var($_POST["Type"], FILTER_SANITIZE_STRING);

    $result=  $db->query("UPDATE lesson SET name = :namee,lecture = :lec,category = :cat,type = :typ WHERE lesson_id = :lid",array("namee"=>$Name,"lec"=>$Lecture,"cat"=>$Category,"typ"=>$Type,"lid"=> $id));


    if ($result == 1){
        $output = json_encode(array( //create JSON data
            'type'=>'text',
            'text' => '<div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Change Happened
                        </div>'
        ));
    }else{
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' =>  '<div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning!</strong> Not Any Change Happened
                        </div>'
        ));
    }


    die($output);


}
?>