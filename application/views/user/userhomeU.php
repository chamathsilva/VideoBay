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
        <link rel="stylesheet" href="../../../public/css/navbaruser.css">
        <!--<link rel="stylesheet" type="text/css" href="../../../public/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="../../../public/slick/slick-theme.css"/>

        <!-- Color Box -->
        <link rel="stylesheet" href="../../../public/css/colorbox.css" />





    </head>

<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-right">


            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

            <!-- side bar -->
            <?php
            include '../../views/includes/sidebarU.php'
            ?>
            </div>
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                <?php
                include '../../views/includes/navbaruser_new.php'
                ?>

        <!--
<p>Hello <a href="profile.php?user=<?php #echo$_GET['name'] ; ?>"><?php #echo$_GET['name'] ; ?></a>!</p>
    <u1>
    	<li><a href="logout.php">Log out</a></li>
        <li><a href="update.php"> Update details</a></li>
        <li><a href="changepassword.php">Change password</a></li>
    
    </u1>

-->

<!-- new function -->



                    <div class="full ">


                        <div class="col-sm-12 text">

                            <h3>Current lessons</h3>



<?php

$db = DB::getInstance();
$data = $db->getAll('lesson');



while($row = $data->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['lesson_id'];
    $name = $row['name'];



    #echo "</br><a href ='../lessonsplay/lessonPalyPanal.php?id=$id'> $name </a> ";
    ?>

    <div class="col-lg-3 col-md-4 col-xs-6 text2">
        <a class="thumbnail" href="../lessonsplay/lessonPalyPanal.php?id=<?php echo $id;?>" >
            <img class="img-responsive" src="../../../public/images/thumb.jpg" alt="">
            <h4> <?php echo $name;?> </h4>
        </a>

    </div>



<?php
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
                    </div>
                </div>
       </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../../../public/js/ucscvideobay.js"></script>
<script src="../../../public/js/userhome.js"></script>
<!--<script type="text/javascript" src="../../../public/slick/slick.min.js"></script>


<!--<script src="../../../../../UCSCpresent/new/js/scripts.js"></script>-->
</body>
</html>
