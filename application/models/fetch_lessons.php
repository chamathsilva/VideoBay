<?php
require("Db.class.php");
$db = new Db();
$lessons = $db->query("SELECT * FROM lesson");

foreach ($lessons as $row) {
    $id = $row['lesson_id'];
    $name = $row['name'];
    $src_path = '../../../data/uploaded_lessons/'.$id.'/slides/1.jpg';

    echo '<div class="col-lg-3 col-md-4 col-xs-6 text2">';
    echo '<a class="thumbnail" href="../lessonsplay/lessonPalyPanal.php?id='."$id".'" >';
    echo '<img class="img-responsive" src='."$src_path".' alt="">';
    echo '<h4>'."$name".'</h4>';
    echo'</a>';
    echo'</div>';
    }
?>



