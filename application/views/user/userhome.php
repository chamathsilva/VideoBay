<?php
require_once '../../configs/core/init.php';


?>
<p>Hello <a href="profile.php?user=<?php echo$_GET['name'] ; ?>"><?php echo$_GET['name'] ; ?></a>!</p>
    <u1>
    	<li><a href="logout.php">Log out</a></li>
        <li><a href="update.php"> Update details</a></li>
        <li><a href="changepassword.php">Change password</a></li>
    
    </u1>



<!-- new function -->
<h1> USER HOME PAGE</h1>

<?php
echo 'php';
$db = DB::getInstance();
$data = $db->getAll('lesson');



while($row = $data->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['lesson_id'];
    $name = $row['name'];



    echo "</br><a href ='user_lesson_play.php?id=$id'> $name </a> ";
}

echo '<br>'.'sorting testing';

$data = $db->getAllBySortOrder('lesson','name');

while($row = $data->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['lesson_id'];
    $name = $row['name'];



    echo "</br><a href ='user_lesson_play.php?id=$id'> $name </a> ";
}







?>