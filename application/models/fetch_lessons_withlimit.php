<?php
require("Db.class.php");
$db = new Db();
$lessons = $db->query("SELECT * FROM lesson");

foreach ($lessons as $row) {
    $id = $row['lesson_id'];
    $name = $row['name'];
    $lecture = $row['lecture'];
    $src_path = '../../../data/uploaded_lessons/'.$id.'/slides/1.jpg';

    echo '<li class="media">';
    echo '<div class="col-xs-7">';
    echo '<a class="pull-left" href="../lessonsplay/lessonPlay2.php?id='."$id".'" >';
    echo '<img class="img-responsive" src='."$src_path".' alt="">';
    echo '</div>';

    echo '<p class="media-heading">'."$name".'</p>';
    echo '<p class="by-author">'."By "."$lecture".'</p>';
    echo'</a>';

    echo '<li>';
}
?>


