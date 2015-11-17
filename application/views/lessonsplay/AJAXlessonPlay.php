<?php
require_once '../../configs/core/init.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $db = DB::getInstance();


    $data = $db->getLessonbyid($id);
    if ($row = $data->fetch(PDO::FETCH_ASSOC)){
        $name = $row['name'];
        $lecture = $row['lecture'];
        $no_of_slid = $row['no_of_slides'];
        $temp = '../../../data/uploaded_lessons/'.$id.'/videos/1.mp4';
        $src_path = '../../../data/uploaded_lessons/'.$id.'/slides/';
        echo "hello";
        echo $id;
        if ($slid_data = $db->getAllBySortOrder($id)){
        }else{
            echo 'slid data not found';
            Die();
        }
    };
}
else{
    echo 'lesson id is not set';
    Die();
}

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

</head>

<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
                <!-- side bar -->
                <?php
                    include '../../views/includes/sidebar.php'
                ?>
            </div>

            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                <?php
                    include '../../views/includes/navbaruser_new.php'
                ?>
                <div class="full ">
                    <div class="col-sm-12 text">
                        <h3>lesson play</h3>
                        <div class="inner-bg" id="lesson_play">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video id="myVideo" class="embed-responsive-item"  width = "300px" height ="400px" autoplay controls>
                                                <source src="<?php echo "$temp"?>">
                                                <!--<source src="../../../data/uploaded_lessons/44/videos/1.mp4">-->
                                            </video>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <!--
                                <img id="xx" class="img-responsive" src="<?php echo$src_path.'1.jpg';?>" alt="Wrong link" width="800px" height="400px" >
                                -->
                                        <img id="xx" class="img-responsive" src="<?php echo $src_path.'1.jpg';?>" alt="Wrong link" min-width="100%" height="auto" >
                                    </div>

                                    <div id = "left" class="col-sm-2 area">
                                        Watch Next
                                    </div>
                                    <div id = "left" class="col-sm-2 area">
                                        Most viewed
                                    </div>
                                    <div id = "left" class="col-sm-2 area">
                                        Favourite
                                    </div>


                                </div>
                                <div class="row slidNavigator">
                                    <div class="col-sm-10">

                                    </div>
                                    <div class="col-sm-10">
                                        <div class="detail-panal">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="lesson-topic">
                                                        <?php echo $name; ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <button type="submit" class="btn like"><i class="fa fa-thumbs-up"></i> Like | 34 </button>
                                                </div>
                                                <div class="col-sm-1">
                                                    <button type="submit" class="btn like"><i class="fa fa-thumbs-down"></i></i> 2 </button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="lesson-topic">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <?php echo $lecture; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row slidNavigator">
                                    <!--p id="p1">Hello World!</p-->
                                    <div class="col-sm-10">
                                        <div class="detail-panal" style="border:1px solid black;width:100%;height:200px;overflow-y:hidden;overflow-x:scroll;">

                                            <nav id="menu" style="width:100000%;">
                                                <ul>
                                                    <?php
                                                    $index = 1;
                                                    while ($index <= $no_of_slid){
                                                        $row = $slid_data->fetch(PDO::FETCH_ASSOC);
                                                        $start_time = $row['start_time'];
                                                        $end_time = $row['end_time']; ?>


                                                        <li style="float: left;padding-right: 10px"> <article data-start="<?php echo $start_time; ?>" data-end="<?php echo $end_time; ?>"> <a href="<?php echo $index ?>"><img  src=" <?php echo $src_path.$index.'.jpg' ?>  " height="140"  onclick="setCurTime(<?php echo $start_time ?>)"></a></article></li>
                                                        <?php
                                                        $index += 1;
                                                    }
                                                    ?>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  <!--container end-->



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
</html>
