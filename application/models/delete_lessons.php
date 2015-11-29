<?php
require("Db.class.php");
$db = new Db();



if (isset($_GET['id'])){

    $temp =  $_GET['id'];
    $lessons = $db->query("DELETE FROM lesson WHERE lesson_id = :lid ",array("lid"=>$temp));
    header('location: ../views/adminPanal/Deletelessons.php');
}
?>
