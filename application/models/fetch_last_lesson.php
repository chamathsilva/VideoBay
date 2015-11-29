<?php
require("Db.class.php");
$db = new Db();
$lessons = $db->query("SELECT * FROM lesson LIMIT 1;");

foreach ($lessons as $row) {
    $id = $row['lesson_id'];
    $name = $row['name'];
    $src_path = '../../../data/uploaded_lessons/'.$id.'/slides/1.jpg';

    echo '<div class="col-md-5 col-xs-8 col-md-offset-3 text2">';
    echo '<a onclick="myFunction('.$id.')" class="thumbnail" href="../lessonsplay/lessonPlay2.php?id='."$id".'" >';
    echo '<img class="img-responsive" src='."$src_path".' alt="">';
    echo '<h4>'."$name".'</h4>';
    echo'</a>';
    echo'</div>';
}
?>



