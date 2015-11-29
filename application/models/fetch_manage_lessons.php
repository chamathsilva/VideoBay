<?php
require("Db.class.php");
$db = new Db();
$lessons = $db->query("SELECT * FROM lesson");


$json=json_encode($lessons);

echo $json;



/*
foreach ($lessons as $row) {
    $name = $row['name'];
    $lecture = $row['lecture'];
    $no0fslid = $row['no_of_slides'];
    $category = $row['category'];
    $type = $row['type'];


    echo '<tr>';
        echo '<td>'.$name.'</td>';
        echo '<td>'.$lecture.'</td>';
        echo '<td>'.$no0fslid.'</td>';
        echo '<td>'.$category.'</td>';
        echo '<td>'.$type.'</td>';
    echo '</tr>';

}*/
?>
