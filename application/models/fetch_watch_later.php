<?php
require("Db.class.php");
$db = new Db();
session_start();


$user_id =  $_SESSION["user"];

$lessons = $db->query("SELECT * FROM `watchlater` WHERE `user_id` =".$user_id);





foreach ($lessons as $row) {
    $id = $row['lesson_id'];
    $time = $row['timestamp'];
    $name = $row['lessonname'];
    $src_path = '../../../data/uploaded_lessons/'.$id.'/slides/1.jpg';

    echo '<li class="media">';
    echo '<div class="col-lg-7 col-md-7 col-xs-7">';
    echo '<a class="pull-left" href="../lessonsplay/lessonPlayLater.php?id='."$id".'&time='.$time.'" >';
    echo '<img class="img-responsive" src='."$src_path".' alt="">';
    echo '</div>';

    echo '<p class="media-heading">'."$name".'</p>';
    //echo '<p class="by-author">'."By "."$lecture".'</p>';
    echo'</a>';

    echo '<li>';
}
?>


