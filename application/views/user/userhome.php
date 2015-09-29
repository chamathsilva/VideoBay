<?php
require_once '../../configs/core/init.php';


?>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UCSC VideoBay</title>


        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../public/css/form-elements.css">
        <link rel="stylesheet" href="../../../public/css/ucscvideobay.css">

        <!-- Color Box -->
        <link rel="stylesheet" href="../../../public/css/colorbox.css" />





    </head>

<body>

<?php
include '../../views/includes/navbar_user.php'
?>
<div class="container">
    <div class="mid">
        <!--
<p>Hello <a href="profile.php?user=<?php echo$_GET['name'] ; ?>"><?php echo$_GET['name'] ; ?></a>!</p>
    <u1>
    	<li><a href="logout.php">Log out</a></li>
        <li><a href="update.php"> Update details</a></li>
        <li><a href="changepassword.php">Change password</a></li>
    
    </u1>

-->

<!-- new function -->
<h1> USER HOME PAGE</h1>

<?php
echo 'php';
$db = DB::getInstance();
$data = $db->getAll('lesson');



while($row = $data->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['lesson_id'];
    $name = $row['name'];



    echo "</br><a href ='../lessonsplay/lessonPalyPanal.php?id=$id'> $name </a> ";
}

/*
echo '<br>'.'sorting testing';

$data = $db->getAllBySortOrder('lesson','name');

while($row = $data->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['lesson_id'];
    $name = $row['name'];



    echo "</br><a href ='user_lesson_play.php?id=$id'> $name </a> ";
}

*/





?>
</div>
    </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!--<script src="../../../library/Jquery/jquery.js"></script>-->
<script src="../../../public/js/ucscvideobay.js"></script>
</body>
</html>
