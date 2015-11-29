<?php
require("Db.class.php");
$db = new Db();
$lessons = $db->query("SELECT * FROM lesson");

$temp = 1;
foreach ($lessons as $row) {
    $id = $row['lesson_id'];
    $name = $row['name'];
    $lecture = $row['lecture'];
    $no0fslid = $row['no_of_slides'];
    $category = $row['category'];
    $type = $row['type'];
    $deleteButton = '<button type="submit" onclick="myFunction('.$id.')" class="btn  buttonmargin">Delete</button>';


    echo '<tr>';
        echo '<td>'.$temp.'</td>';
        echo '<td>'.$name.'</td>';
        echo '<td>'.$lecture.'</td>';
        echo '<td>'.$category.'</td>';
        echo '<td>'.$type.'</td>';
        echo '<td>'.$deleteButton.'</td>';
    $temp += 1;
    echo '</tr>';

}
?>

